pos=[0,0];
loadedImages=[];
lastTar=[5,5];
curTim=-1;
markers=[];
markersVisible=[];
pointsVis=true;
selectedPoint=0;
pinsFound=false;
gotoPinPending="";
jumpMenuActive=false;
document.addEventListener("keydown", move);
$.getJSON("tileIds.json",function (data) {tileIds=data});
function setup() {
	var dataStr=window.location.hash.split("#");
	if(dataStr.length>1) {
		var dataArr=dataStr[1].split("&");
		var data={};
		for(var i=0; i<dataArr.length; i++) {
			data[dataArr[i].split("=")[0]]=dataArr[i].split("=")[1];
		}
		if(data["x"]!==undefined && data["z"]!==undefined) {
			pos[0]=parseInt(data["x"]);
			pos[1]=parseInt(data["z"]);
		}
		else if(data["pin"]!==undefined) {
			gotoPin(data["pin"]);
		}
	}
	canvas=$("#mcmap")[0];
	ctx=canvas.getContext("2d");
	oCanvas=$("#overlay")[0];
	oCtx=oCanvas.getContext("2d");
	pCanvas=$("#points")[0];
	pCtx=pCanvas.getContext("2d");
	$.getJSON("getMarkers.php",function (data) {markers=data; pinsFound=true; if(gotoPinPending!="") {gotoPin(gotoPinPending)} else {checkMarkerVisibility(); drawPoints();}});
	draw();
}
function gotoPin(pinName) {
	if(pinsFound) {
		for(var i=0; i<markers.length; i++) {
			if(markers[i].name==pinName) {
				pos[0]=parseInt(parseInt(markers[i].x)/128+0.5);
				pos[1]=parseInt(parseInt(markers[i].z)/128+0.5);
			}
		}
		window.location.hash=pinName;
		checkMarkerVisibility();
		drawPoints();
		draw();
	}
	else {
		gotoPinPending=pinName;
	}
}
function gotoPoint(x,z) {
	pos[0]=x;
	pos[1]=z;
	window.location.hash="x="+pos[0]+"&z="+pos[1];
	draw();
	checkMarkerVisibility();
	drawPoints();
}
function jumpPinFunc(e) {
	if(jumpMenuActive && e.path[1].id=="jumpPinForm" && e.keyCode==13) {
		gotoPin($("#jumpPin").val());
		setTimeout(function(){jumpMenuActive=false},1);
		$("#jumpMenu").removeClass("shown");
	}
}
function jumpCoordFunc(e) {
	if(jumpMenuActive && e.path[1].id=="jumpCoordForm" && e.keyCode==13) {
		gotoPoint(parseInt(parseInt($("#jumpCoordX").val())/128),parseInt(parseInt($("#jumpCoordZ").val())/128));
		setTimeout(function(){jumpMenuActive=false},1);
		$("#jumpMenu").removeClass("shown");
	}
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
	if(!jumpMenuActive) {
		if(e.keyCode>36 && e.keyCode<41) {
			oCtx.clearRect(0,0,1152,640);
			resetStuff();
			clearInterval(curTim);
			curTim=setInterval(draw,250);
		}
		if(e.keyCode==37) {
			pos[0]--;
		}
		else if(e.keyCode==38) {
			pos[1]--;
		}
		else if(e.keyCode==39) {
			pos[0]++;
		}
		else if(e.keyCode==40) {
			pos[1]++;
		}
		else if(e.keyCode==13) {
			if(pointsVis && selectedPoint!=0) {
				resetStuff();
			}
			pointsVis=!pointsVis;
		}
		else if(e.keyCode==16) {
			$("#jumpMenu").addClass("shown");
			jumpMenuActive=true;
		}
		if(e.keyCode>36 && e.keyCode<41) {
			window.location.hash="x="+pos[0]+"&z="+pos[1];
			draw();
			checkMarkerVisibility();
		}
		drawPoints();
	}
	else if(e.keyCode==27) {
		$("#jumpMenu").removeClass("shown");
		jumpMenuActive=false;
	}
}
function highlight(e) {
	var offset=$('#mapcontainer').offset();
	var rawX=(e.pageX - offset.left) + $(window).scrollLeft() - 4;
	var rawY=(e.pageY - offset.top) + $(window).scrollTop() - 4;
	var x = parseInt(rawX/128);
	var y = parseInt(rawY/128);
	var xCor=x-4+pos[0];
	var yCor=y-2+pos[1];
	var xXct=rawX-576+(pos[0]*128);
	var yXct=rawY-320+(pos[1]*128);
	oCtx.clearRect(0,0,1152,640);
	var clickedMark=false;
	var whichMark=-1;
	var markDist=1000000;
	if(pointsVis) {
		for(var i=0; i<markers.length; i++) {
			if(markersVisible.indexOf(markers[i].id)!=-1) {
				var dist=Math.sqrt(Math.pow(xXct-markers[i].x,2)+Math.pow(yXct-markers[i].z,2));
				if(dist<markDist && ((dist<15 && selectedPoint==markers[i].id) || dist<10)) {
					clickedMark=true;
					whichMark=i;
					markDist=dist;
				}
			}
		}
	}
	if(clickedMark) {
		if(selectedPoint!=markers[whichMark].id) {
			selectedPoint=markers[whichMark].id;
			$("#infoTxt")[0].innerHTML="<b>"+markers[whichMark].name.toUpperCase()+"</b>: "+markers[whichMark].desc;
		}
		else {
			selectedPoint=0;
			resetStuff();
		}
		drawPoints();
	}
	else if(!(lastTar[0]==x && lastTar[1]==y)) {
		resetStuff();
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
		resetStuff();
	}
}
function mapIds(x,y) {
	return tileIds[x+"_"+y];
}
function drawCircle(CTX,xPos,yPos,radius,color) {
	CTX.beginPath()
	CTX.fillStyle=color;
	CTX.arc(xPos, yPos, radius, 0, 2*Math.PI, true);
	CTX.fill();
}
function checkMarkerVisibility() {
	markersVisible=[];
	var posRel=[pos[0]*128,pos[1]*128];
	for(var i=0; i<markers.length; i++) {
		if(markers[i].x>=posRel[0]-576 && markers[i].x<posRel[0]+576 && markers[i].z>=posRel[1]-320 && markers[i].z<posRel[1]+320) {
			markersVisible.push(markers[i].id);
		}
	}
}
function drawPoints() {
	pCtx.clearRect(0,0,1152,640);
	if(pointsVis) {
		var posRel=[pos[0]*128,pos[1]*128];
		for(var i=0; i<markers.length; i++) {
			if(markersVisible.indexOf(markers[i].id)!=-1) {
				var posAdj=[markers[i].x-(posRel[0]-576),markers[i].z-(posRel[1]-320)];
				var sizeMod=1;
				if(markers[i].id==selectedPoint) {
					sizeMod=Math.sqrt(2);
				}
				drawCircle(pCtx,posAdj[0]+(2*sizeMod),posAdj[1]+(2*sizeMod),10*sizeMod,"#000000");
				drawCircle(pCtx,posAdj[0],posAdj[1],10*sizeMod,"#ff0000");
				drawCircle(pCtx,posAdj[0]-(3*sizeMod),posAdj[1]-(3*sizeMod),4*sizeMod,"#ff8080");
			}
		}
	}
}
function resetStuff() {
	$("#infoTxt")[0].innerHTML="Use the <b>Arrow Keys</b> to move the map or press <b>Shift</b> to jump to a location and press <b>Enter</b> to toggle pins.<br>Click on a pin to show information on that location.";
	selectedPoint=0;
	drawPoints();
	lastTar=[5,5];
}



