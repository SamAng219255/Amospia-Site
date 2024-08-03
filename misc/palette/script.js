class Color {
	#state=3;
	#rgb=[0,0,0];
	#hsv=[0,0,0];
	#truehue=0;

	get rgb() {
		if(!(this.#state&1))
			this.prepRGB();
		return [this.#rgb[0],this.#rgb[1],this.#rgb[2]];
	}
	set rgb(colorArr) {
		this.#state=1;
		switch(colorArr.length) {
			case 1:
				this.#rgb=[colorArr[0],0,0];
				break;
			case 2:
				this.#rgb=[colorArr[0],colorArr[1],0];
				break;
			default:
				this.#rgb=[colorArr[0],colorArr[1],colorArr[2]];
				break;
		}
	}
	get hsv() {
		if(!(this.#state&2)) {
			this.prepHSV();
		}
		return [this.#hsv[0],this.#hsv[1],this.#hsv[2]];
	}
	set hsv(colorArr) {
		this.#state=2;
		switch(colorArr.length) {
			case 1:
				this.#hsv=[colorArr[0],1,1];
				break;
			case 2:
				this.#hsv=[colorArr[0],colorArr[1],1];
				break;
			default:
				this.#hsv=[colorArr[0],colorArr[1],colorArr[2]];
				break;
		}
	}
	get r() {
		if(!(this.#state&1))
			this.prepRGB();
		return this.#rgb[0]
	}
	set r(r) {
		this.#state=1;
		this.#rgb[0]=r;
	}
	get g() {
		if(!(this.#state&1))
			this.prepRGB();
		return this.#rgb[1]
	}
	set g(g) {
		this.#state=1;
		this.#rgb[1]=g;
	}
	get b() {
		if(!(this.#state&1))
			this.prepRGB();
		return this.#rgb[2]
	}
	set b(b) {
		this.#state=1;
		this.#rgb[2]=b;
	}
	get h() {
		if(!(this.#state&2))
			this.prepHSV();
		return this.#hsv[0]
	}
	set h(h) {
		this.#state=2;
		this.#hsv[0]=h;
	}
	get s() {
		if(!(this.#state&2))
			this.prepHSV();
		return this.#hsv[1]
	}
	set s(s) {
		this.#state=2;
		this.#hsv[1]=s;
	}
	get v() {
		if(!(this.#state&2))
			this.prepHSV();
		return this.#hsv[2]
	}
	set v(v) {
		this.#state=2;
		this.#hsv[2]=v;
	}

	prepRGB() {
		let where=this.#hsv[0]*colorArr.length;
		let ind=Math.floor(where);
		let prog=where-ind;
		let maxColor=0;
		for(let i=0; i<3; i++) {
			this.#rgb[i]=(colorArr[ind%colorArr.length][i]*prog)+(colorArr[(ind+1)%colorArr.length][i]*(1-prog));
			this.#rgb[i]=this.#rgb[i]/255;
			maxColor=Math.max(maxColor,this.#rgb[i]);
		}
		for(let i=0; i<3; i++) {
			this.#rgb[i]=1-((1-this.#rgb[i])*this.#hsv[1]);
			this.#rgb[i]*=this.#hsv[2]/maxColor;
			this.#rgb[i]=Math.round(this.#rgb[i]*255)%256;
		}
		this.#state|=1;
	}
	prepHSV() {
		if(this.#rgb[0]==this.#rgb[1] && this.#rgb[1]==this.#rgb[2]) {
			this.#hsv=[0,0,this.#rgb[0]/255];
			this.#state|=2;
			return;
		}
		let wRGB=[this.#rgb[0],this.#rgb[1],this.#rgb[2]];
		for(let i=0; i<3; i++) {
			wRGB[i]/=255;
		}
		this.#hsv[2]=Math.max(wRGB[0],wRGB[1],wRGB[2]);
		for(let i=0; i<3; i++) {
			wRGB[i]/=this.#hsv[2];
		}
		this.#hsv[1]=1-Math.min(wRGB[0],wRGB[1],wRGB[2]);
		for(let i=0; i<3; i++) {
			wRGB[i]=1-(1-wRGB[i])/this.#hsv[1];
		}
		this.#truehue=Color.GetTrueHue(this.#rgb);
		let colorInd=-1;
		for(let i=0; i<colorHueArr.length; i++) {
			if(colorHueArr[i]>this.#truehue) {
				colorInd=i;
				break;
			}
		}
		let lowerPoint=colorInd==0?0:colorHueArr[colorInd-1];
		let upperPoint=colorHueArr[colorInd];
		this.#hsv[0]=(colorInd+(this.#truehue-lowerPoint)/(upperPoint-lowerPoint))/colorHueArr.length;
	}
	get trueHue() {
		if(!(this.#state&2))
			this.prepHSV();
		return this.#truehue;
	}

	static RGB(color) {
		let newColor=new Color();
		newColor.rgb=color;
		return newColor;
	}
	static HSV(color) {
		let newColor=new Color();
		newColor.hsv=color;
		return newColor;
	}
	static GetTrueHue(color) {
		if(color instanceof Color)
			return color.trueHue;
		let wRGB=[color[0]/255,color[1]/255,color[2]/255];
		let maxInd=wRGB[0]<wRGB[1]?1:0;
		maxInd=wRGB[maxInd]<wRGB[2]?2:maxInd;
		let minInd=wRGB[0]>wRGB[1]?1:0;
		minInd=wRGB[minInd]>wRGB[2]?2:minInd;
		let trueHue=0;
		switch(maxInd) {
			case 0:
				if(minInd==1)
					trueHue=6-wRGB[2];
				else
					trueHue=wRGB[1];
				break;
			case 1:
				if(minInd==2)
					trueHue=2-wRGB[0];
				else
					trueHue=2+wRGB[2];
				break;
			case 2:
				if(minInd==0)
					trueHue=4-wRGB[1];
				else
					trueHue=4+wRGB[0];
				break;
			default:
				trueHue=0;
		}
		trueHue/=6;
		return trueHue;
	}
}

colorArr=[];
colorHueArr=[];
bars=[];

function genColor(hue,sat,val) {
	let where=hue*colorArr.length;
	let ind=Math.floor(where);
	let prog=where-ind;
	let color=[0,0,0];
	let maxColor=0;
	for(let i=0; i<3; i++) {
		color[i]=(colorArr[ind%colorArr.length][i]*prog)+(colorArr[(ind+1)%colorArr.length][i]*(1-prog));
		color[i]=color[i]/256;
		maxColor=Math.max(maxColor,color[i]);
	}
	let strColor="";
	for(let i=0; i<3; i++) {
		color[i]=1-((1-color[i])*sat);
		color[i]*=val/maxColor;
		color[i]=Math.floor(color[i]*256)%256;
		let thisStrColor=color[i].toString(16);
		if(thisStrColor.length<2) {
			thisStrColor="0"+thisStrColor;
		}
		strColor+=thisStrColor;
	}
	return strColor;
}
function genRandColor() {
	let hue=Math.random();
	let val=Math.sqrt(Math.random());
	let sat=Math.sqrt(Math.random());
	let colorOut=genColor(hue,sat,val);
	return {str:colorOut,hue:hue,val:val,sat:sat};
}

function setup() {
	let colorStr=['FF5C00', 'FF8000', 'FF9400', 'FFA800', 'FFC900', 'FFE100', 'FFFF00', 'E9FF00', 'D3FF00', 'A7FF00', '00FF00', '00FF80', '00FFC0', '00FFFF', '00B4FF', '0078FF', '0000FF', '5300FF', '8000FF', 'A000FF', 'C000FF', 'FF00FF', 'FF00D0', 'FF00A0', 'FF0080', 'FF0063', 'FF0000'];
	for(let i=0; i<colorStr.length; i++) {
		let colour=[colorStr[i][0]+colorStr[i][1],colorStr[i][2]+colorStr[i][3],colorStr[i][4]+colorStr[i][5]];
		for(let j=0; j<3; j++) {
			colour[j]=parseInt(colour[j],16);
		}
		colorArr.push(colour);
		colorHueArr.push(Color.GetTrueHue(colour));
	}
	for(let i=0; i<4; i++) {
		let bar={ref:document.getElementById("bar-"+i)};
		let colorsRegex=(/(\d{1,3}), (\d{1,3}), (\d{1,3})/g).exec(bar.ref.style.backgroundColor);
		bar.color={rgb:[parseInt(colorsRegex[1]),parseInt(colorsRegex[2]),parseInt(colorsRegex[3])]};
		bars.push(bar);
	}
}