pos=[0,0];
loadedImages=[]
document.addEventListener("keydown", move)
function setup() {
	canvas=$("#mcmap")[0];
	ctx=canvas.getContext("2d");
	draw();
}
function draw() {
	for(var i=-2; i<=2; i++) {
		for(var j=-2; j<=2; j++) {
			var x=(pos[0]+i);
			var y=(pos[1]+j);
			if(loadedImages.indexOf(x+","+y)==-1) {
				$("#tileStorage").append("<img id=\"x"+x+"y"+y+"\" src=\"img/tile.0."+x+"."+y+".png\" x=\""+x+"\" y=\""+y+"\" xpos=\""+i+"\" ypos=\""+j+"\">");
				document.getElementById("x"+x+"y"+y).onload=function () {
					ctx.drawImage(this,(parseInt(this.attributes.xpos.value)+2)*128,(parseInt(this.attributes.ypos.value)+2)*128);
				}
				loadedImages.push(x+","+y);
			}
			else {
				ctx.drawImage(document.getElementById("x"+x+"y"+y),(i+2)*128,(j+2)*128);
			}
		}
	}
}
function move(e) {
	if(e.keyCode==37) {
		pos[0]--;
		draw();
	}
	else if(e.keyCode==38) {
		pos[1]--;
		draw();
	}
	else if(e.keyCode==39) {
		pos[0]++;
		draw();
	}
	else if(e.keyCode==40) {
		pos[1]++;
		draw();
	}
}