import Serializable from "./Serializable.js";
import FeatureQuery from "./FeatureQuery.js";

export default class NumberProvider extends Serializable {
	#operation;
	#operationFunc;

	constructor(operation) {
		super();

		if(typeof operation == "number")
			this.#operation = {
				type: "constant",
				value: operation
			};
		else if(operation instanceof NumberProvider)
			this.#operation = operation.serialize();
		else
			this.#operation = operation;

		this.#operationFunc = NumberProvider.OPERATIONS[this.#operation.type](this.#operation);
	}

	async execute(state) {
		return this.#operationFunc(state);
	}

	serialize() {
		return this.#operation;
	}

	static deserialize(obj) {
		return new NumberProvider(obj);
	}

	static async execute(operation, state) {
		if(typeof operation == "number")
			return operation;
		if(operation == null)
			return operation;
		return NumberProvider.OPERATIONS[operation.type](operation)(state);
	}

	static OPERATIONS = {
		"constant": ({value}) => async (state) => value,
		"sum": ({values}) => async (state) => (await resolveProviders(state, values)).reduce((sum, summand) => sum + summand, 0),
		"sub": ({value1, value2}) => async (state) => (([minuend, subtrahend]) => minuend - subtrahend)(await resolveProviders(state, value1, value2)),
		"mul": ({values}) => async (state) => (await resolveProviders(state, values)).reduce((product, factor) => product * factor, 1),
		"div": ({dividend, divisor}) => async (state) => (([dividend, divisor]) => dividend / divisor)(await resolveProviders(state, dividend, divisor)),
		"sqr": ({base}) => async (state) => (x => x * x)(await NumberProvider.execute(base, state)),
		"cub": ({base}) => async (state) => (x => x * x * x)(await NumberProvider.execute(base, state)),
		"pow": ({base = 2, exponent}) => async (state) => (([base, exponent]) => Math.pow(base, exponent))(await resolveProviders(state, base, exponent)),
		"clamp": ({value, min = 0, max = 1}) => async (state) => (([value, min, max]) => value < min ? min : value > max ? max : value)(await resolveProviders(state, value, min, max)),
		"smooth_step": ({t, min = 0, max = 1, slope = 3}) => async (state) => (([t, min, max, slope]) => min + (max - min) / (1 + Math.exp(-4 * slope * (t - 0.5))))(await resolveProviders(state, t, min, max, slope)),

		"rand": ({min = 0, max = 1}) => async (state) => (([min, max]) => min + (Math.random() * (max - min)))(await resolveProviders(state, min, max)),
		"randInt": ({min = 0, max}) => async (state) => (([min, max]) => min + Math.floor(Math.random() * (1 + max - min)))(await resolveProviders(state, min, max)),
		"die": ({min = 1, sides, count = 1}) => async (state) => (([min, sides, count]) => {
			let total = 0;
			for(let i = 0; i < count; i++) 
				total += min + Math.floor(Math.random() * (1 + sides - min));
			return total;
		})(await resolveProviders(state, min, sides, count)),
		"triangle": ({a, b = null}) => async (state) => (([a, b]) => (Math.random() * a) + (Math.random() * (b ?? a)))(await resolveProviders(state, a, b)),
		"triangleInt": ({a, b = null}) => async (state) => (([a, b]) => Math.floor(Math.random() * a + 1) + Math.floor(Math.random() * (b ?? a) + 1))(await resolveProviders(state, a, b)),
		"weighted": ({options, def = 0}) => async (state) => {
			const weights = await resolveProviders(state, options.map(option => option.weight));
			const totalWeight = weights.reduce((sum, summand) => sum + summand);

			const randIndex = Math.floor(Math.random() * totalWeight);

			let growingCeiling = 0;
			for(let i = 0; i < options.length; i++) {
				growingCeiling += weights[i];
				if(randIndex < growingCeiling)
					return NumberProvider.execute(options[i].value, state);
			}

			return NumberProvider.execute(def, state);
		},

		"if": ({query = FeatureQuery.TRUE, valueIfTrue = 1, valueIfFalse = 0}) => async (state) => (await query.execute(state)) ? NumberProvider.execute(valueIfTrue, state) : NumberProvider.execute(valueIfFalse, state),
		"lerp": ({t, arg1, arg2}) => async (state) => (([t, arg1, arg2]) => t < 0 ? arg1 : t > 1 ? arg2 : (1 - t) * arg1 + t * arg2)(await resolveProviders(state, t, arg1, arg2)),
	}

	static get ONE() {return new NumberProvider(1)}
	static get ZERO() {return new NumberProvider(0)}
}

async function resolveProviders(state, ...providers) {
	return (await Promise.all([...providers].map(provider => Array.isArray(provider) ? resolveProviders(state, ...provider) : NumberProvider.execute(provider, state))));
}