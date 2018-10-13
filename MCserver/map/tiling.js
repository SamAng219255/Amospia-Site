pos=[0,0];
loadedImages=[];
lastTar=[5,5];
curTim=-1;
document.addEventListener("keydown", move);
$.getJSON("tileIds.json",function (data) {tileIds=data})
function setup() {
	canvas=$("#mcmap")[0];
	ctx=canvas.getContext("2d");
	oCanvas=$("#overlay")[0];
	oCtx=oCanvas.getContext("2d");
	draw();
}
function draw() {
	for(var i=-4; i<=4; i++) {
		for(var j=-2; j<=2; j++) {
			var x=(pos[0]+i);
			var y=(pos[1]+j);
			ctx.drawImage(document.getElementById("default-img"),(i+4)*128,(j+2)*128);
		}
	}
	for(var i=-4; i<=4; i++) {
		for(var j=-2; j<=2; j++) {
			var x=(pos[0]+i);
			var y=(pos[1]+j);
			if(loadedImages.indexOf(x+","+y)==-1) {
				$("#tileStorage").append("<img id=\"x"+x+"y"+y+"\" src=\"img/tile.0."+x+"."+y+".png\" x=\""+x+"\" y=\""+y+"\" xpos=\""+i+"\" ypos=\""+j+"\" onerror=\"if (this.src != 'img/default.png') this.src = 'img/default.png';\">");
				document.getElementById("x"+x+"y"+y).onload=function () {
					ctx.drawImage(this,(parseInt(this.attributes.xpos.value)+4)*128,(parseInt(this.attributes.ypos.value)+2)*128);
				}
				loadedImages.push(x+","+y);
			}
			else {
				ctx.drawImage(document.getElementById("x"+x+"y"+y),(i+4)*128,(j+2)*128);
			}
		}
	}
}
function move(e) {
	if(e.keyCode>36 && e.keyCode<41) {
		oCtx.clearRect(0,0,1152,640);
		lastTar=[5,5];
		$("#infoTxt")[0].innerHTML="";
		clearInterval(curTim);
		curTim=setInterval(draw,1000);
	}
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
function highlight(e) {
	var offset=$('#mapcontainer').offset();
	var x = parseInt(((e.pageX - offset.left) + $(window).scrollLeft())/128);
	var y = parseInt(((e.pageY - offset.top) + $(window).scrollTop())/128);
	var xCor=x-4+pos[0];
	var yCor=y-2+pos[1];
	oCtx.clearRect(0,0,1152,640);
	if(!(lastTar[0]==x && lastTar[1]==y)) {
		lastTar=[x,y];
		oCtx.strokeStyle="#000000";
		oCtx.lineWidth=8;
		oCtx.strokeRect(x*128, y*128, 128, 128);
		oCtx.strokeStyle="#FFFFFF";
		oCtx.lineWidth=4;
		oCtx.strokeRect(x*128, y*128, 128, 128);
		$("#infoTxt")[0].innerHTML="Highlighted tile ("+xCor+", "+yCor+"), centered on ("+(xCor*128)+", "+(yCor*128)+"), coordinates ("+(xCor*128-64)+", "+(yCor*128-64)+") to ("+(xCor*128+63)+", "+(yCor*128+63)+").<br>Map ID: "+mapIds(xCor,yCor);
	}
	else {
		$("#infoTxt")[0].innerHTML="";
		lastTar=[5,5];
	}
}
function mapIds(x,y) {
	return tileIds[x+"_"+y];
}




