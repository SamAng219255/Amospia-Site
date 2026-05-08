import Serializable from "./Serializable.js";
import ArgConditions from "./ArgConditions.js";
import FeatureQuery from "./FeatureQuery.js";
import HexpUIDataLinkage from "./HexpUIDataLinkage.js";

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

		if(!ArgConditions.matches(this.#operation, NumberProvider.OPERATIONS)) throw new Error(`Invalid number provider: ${JSON.stringify(operation)}`);
		this.#operationFunc = NumberProvider.OPERATIONS[this.#operation.type].func(this.#operation);
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
		return NumberProvider.OPERATIONS[operation.type].func(operation)(state);
	}

	static getUI(id, value = {type: "constant", value: 0}) {
		const objValue = value instanceof NumberProvider ? value.serialize() : value;
		return new HexpUIDataLinkage.HasTypeSelector(id, document.createElement("div"), NumberProvider.OPERATIONS, objValue);
	}

	static #OPERATIONS;
	static get OPERATIONS() {
		if(!this.#OPERATIONS)
			this.#OPERATIONS = {
				"constant": {
					func: ({value}) => async (state) => value,
					args: new ArgConditions({id: "value", can_accept: ["number"]}),
					label: "Constant",
					desc: "Returns the value.",
				},
				"sum": {
					func: ({values}) => async (state) => (await resolveProviders(state, values)).reduce((sum, summand) => sum + summand, 0),
					args: new ArgConditions({id: "values", multi: true}),
					label: "Add",
					desc: "Returns the total sum of all of the values.",
				},
				"sub": {
					func: ({minuend, subtrahend}) => async (state) => (([minuend, subtrahend]) => minuend - subtrahend)(await resolveProviders(state, minuend, subtrahend)),
					args: new ArgConditions("minuend", "subtrahend"),
					label: "Subtract",
					desc: "Returns the minuend minus the subtrahend.",
				},
				"mul": {
					func: ({values}) => async (state) => (await resolveProviders(state, values)).reduce((product, factor) => product * factor, 1),
					args: new ArgConditions({id: "values", multi: true}),
					label: "Multiply",
					desc: "Returns the total product of all of the values.",
				},
				"div": {
					func: ({dividend, divisor}) => async (state) => (([dividend, divisor]) => dividend / divisor)(await resolveProviders(state, dividend, divisor)),
					args: new ArgConditions("dividend", "divisor"),
					label: "Divide",
					desc: "Returns the dividend divided by the divisor.",
				},
				"sqr": {
					func: ({base}) => async (state) => (x => x * x)(await NumberProvider.execute(base, state)),
					args: new ArgConditions("base"),
					label: "Square",
					desc: "Returns the square of the base. Aka, the base times itself.",
				},
				"cub": {
					func: ({base}) => async (state) => (x => x * x * x)(await NumberProvider.execute(base, state)),
					args: new ArgConditions("base"),
					label: "Cube",
					desc: "Returns the cube of the base. Aka, the base to the 3rd power.",
				},
				"pow": {
					func: ({base = 2, exponent}) => async (state) => (([base, exponent]) => Math.pow(base, exponent))(await resolveProviders(state, base, exponent)),
					args: new ArgConditions({id: "base", def: () => 2}, "exponent"),
					label: "Power",
					desc: "Returns the base to the power of the exponent.",
				},
				"clamp": {
					func: ({value, min = 0, max = 1}) => async (state) => (([value, min, max]) => value < min ? min : value > max ? max : value)(await resolveProviders(state, value, min, max)),
					args: new ArgConditions("value", {id: "min", def: () => 0}, {id: "max", def: () => 1}),
					label: "Clamp",
					desc: "Returns the value if it is between the minimum and maximum. Otherwise returns the minimum or maximum value depending on whether the value is too low or too high.",
				},
				"smooth_step": {
					func: ({coordinate, min = 0, max = 1, slope = 3}) => async (state) => (([t, min, max, slope]) => min + (max - min) / (1 + Math.exp(-4 * slope * (t - 0.5))))(await resolveProviders(state, coordinate, min, max, slope)),
					args: new ArgConditions("coordinate", {id: "min", def: () => 0}, {id: "max", def: () => 1}, {id: "slope", def: () => 3}),
					label: "Smooth Step",
					desc: "Returns a number between the minimum and maximum that changes quickly near 0.5 and slowly as you move away. The slope determines exactly how quickly it changes and how far away it slows. Using a slope of '3' or higher makes nearly equal to the minimum or maximum at a coordinate of 0 or 1 respectively.",
				},

				"rand": {
					func: ({min = 0, max = 1}) => async (state) => (([min, max]) => min + (Math.random() * (max - min)))(await resolveProviders(state, min, max)),
					args: new ArgConditions({id: "min", def: () => 0}, {id: "max", def: () => 1}),
					label: "Random",
					desc: "Returns a random number between the minimum and maximum.",
				},
				"randInt": {
					func: ({min = 0, max}) => async (state) => (([min, max]) => min + Math.floor(Math.random() * (1 + max - min)))(await resolveProviders(state, min, max)),
					args: new ArgConditions({id: "min", def: () => 0}, "max"),
					label: "Random Integer",
					desc: "Returns a random integer between the minimum and maximum.",
				},
				"die": {
					func: ({min = 1, sides, count = 1}) => async (state) => (([min, sides, count]) => {
						let total = 0;
						for(let i = 0; i < count; i++) 
							total += min + Math.floor(Math.random() * (1 + sides - min));
						return total;
					})(await resolveProviders(state, min, sides, count)),
					args: new ArgConditions({id: "min", def: () => 1}, "sides", {id: "count", def: () => 1}),
					label: "Dice",
					desc: "Returns a random number like rolling a number of dice.",
				},
				"triangle": {
					func: ({component1, component2 = null}) => async (state) => (([a, b]) => (Math.random() * a) + (Math.random() * (b ?? a)))(await resolveProviders(state, component1, component2)),
					args: new ArgConditions("component1", {id: "component2", optional: true}),
					label: "Triangle Random",
					desc: "Returns the sum of two random numbers that range from 0 to the first or second component. If the second component is left blank or matches the first one, this creates a triangular distribution where it is more likely to get the average than the extremes.",
				},
				"triangleInt": {
					func: ({component1, component2 = null}) => async (state) => (([a, b]) => Math.floor(Math.random() * a + 1) + Math.floor(Math.random() * (b ?? a) + 1))(await resolveProviders(state, component1, component2)),
					args: new ArgConditions("component1", {id: "component2", optional: true}),
					label: "Integer Triangle Random",
					desc: "Returns the sum of two random integers that range from 1 to the first or second component. If the second component is left blank or matches the first one, this creates a triangular distribution where it is more likely to get the average than the extremes.",
				},
				"weighted": {
					func: ({options}) => async (state) => {
						const weights = await resolveProviders(state, options.map(option => option.weight));
						const totalWeight = weights.reduce((sum, summand) => sum + summand, 0);

						const randIndex = Math.floor(Math.random() * totalWeight);

						let growingCeiling = 0;
						for(let i = 0; i < options.length; i++) {
							growingCeiling += weights[i];
							if(randIndex < growingCeiling)
								return NumberProvider.execute(options[i].value, state);
						}

						return NumberProvider.execute(options[options.length - 1].value, state);
					},
					args: new ArgConditions({id: "options", multi: true, can_accept:{weight:["number", "provider"], value:["number", "provider"]}, def: key => key == "weight" ? 1 : null}),
					label: "Weighted Random",
					desc: "Picks one of the options to return at random. Options with a higher weight are more likely to be picked.",
				},

				"if": {
					func: ({query = FeatureQuery.TRUE, valueIfTrue = 1, valueIfFalse = 0}) => async (state) => (await NumberProvider.execute(query, state)) ? NumberProvider.execute(valueIfTrue, state) : NumberProvider.execute(valueIfFalse, state),
					args: new ArgConditions({id:"query", can_accept:["query"], def: () => FeatureQuery.TRUE}, {id: "valueIfTrue", def: () => 1}, {id: "valueIfFalse", def: () => 0}),
					label: "If",
					desc: "If the query is true, returns \"Value If True\". Otherwise, returns \"Value If False\".",
				},
				"lerp": {
					func: ({coordinate, start, end}) => async (state) => (([t, arg1, arg2]) => t < 0 ? arg1 : t > 1 ? arg2 : (1 - t) * arg1 + t * arg2)(await resolveProviders(state, coordinate, start, end)),
					args: new ArgConditions("coordinate", "start", "end"),
					label: "Linear Interpolation",
					desc: "Returns a value between the start and end values, inclusive, depending on the coordinate. The result goes from the start value to the end value as the coordinate goes from 0 to 1.",
				},
				"spline": {
					func: ({coordinate, nodes}) => async (state) => (async (t, nodes) => (([node1, node2]) => (unitT => (node1.value + node1.slope * (t - node1.location)) * (1 - unitT) + (node2.value + node2.slope * (t - node2.location)) * unitT)((t - node1.location) / (node2.location - node1.location)))(await resolveProviders(resolveSplineNode(state,nodes.findLast(({location}) => location < t)), resolveSplineNode(NumberProvider.execute(t),nodes.find(({location}) => location > t)))))(NumberProvider.execute(coordinate), nodes.toSorted((a, b) => a.location - b.location)),
					args: new ArgConditions("coordinate", {id: "nodes", multi: true, can_accept:{value: ["number", "provider"], slope: ["number", "provider"], location: ["number"]}}),
					label: "Spline",
					desc: "Returns a value from a smooth line (using a cubic hermite spline) that passes through the provided nodes at the given slopes.",
				},
			};
		return this.#OPERATIONS;
	}

	static get ONE() {return new NumberProvider(1)}
	static get ZERO() {return new NumberProvider(0)}
}

async function resolveSplineNode(state, node) {
	const [value, derivative] = await resolveProviders(state, node.value, node.derivative);
	return {location: node.location, value, derivative};
}

async function resolveProviders(state, ...providers) {
	return (await Promise.all([...providers].map(provider => Array.isArray(provider) ? resolveProviders(state, ...provider) : NumberProvider.execute(provider, state))));
}