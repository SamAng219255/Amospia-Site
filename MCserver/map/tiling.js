pos=[0,0];
cornerPos=[-576,-320]
lastTar=[Infinity,Infinity];
markers=[];
markersVisible=[];
pointsVis=true;
selectedPoint=0;
pinsFound=false;
gotoPinPending="";
jumpMenuActive=false;
instMenuActive=true;
menuActive=true;
lastButtonPress=(new Date()).getTime();
tiles={};
tileDest={};
document.addEventListener("keydown", move);
$.getJSON("tileIds.json",function (data) {tileIds=data});
window.onresize = function(event) {
	canvasResize();
	moving();
};
window.onwheel=function(event) {event.preventDefault(); return false;};
window.ontouchmove=function(event) {event.preventDefault(); return false;};
lastMoved=(new Date()).getTime();
function moving() {
	lastMoved=(new Date()).getTime();
	setTimeout(function(){if((new Date()).getTime()-lastMoved>=500){canvasResize(); draw();}},501)
}
function setup() {
	setInterval(draw,1000)
	var dataStr=window.location.hash.split("#");
	var data={};
	if(dataStr.length>1) {
		var dataArr=dataStr[1].split("&");
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
	width=$(window).width();
	height=$(window).height();
	if(height/width>5/9) {
		tileSize=width/9;
		startingTileSize=width/9;
	}
	else {
		tileSize=height/5;
		startingTileSize=height/5;
	}
	if(data["zoom"]!==undefined) {
		tileSize*=parseFloat(data["zoom"]);
	}
	canvasSetup();
	$.getJSON("getMarkers.php",function (data) {markers=data; pinsFound=true; if(gotoPinPending!="") {gotoPin(gotoPinPending)} else {drawPoints();}});
	draw();
}
function canvasSetup() {
	canvasResize();
	canvas.addEventListener('mousewheel', function(event) {zoom(event); return false;}, false);
	mapCnv=document.createElement('canvas');
	mapCnv.width=width;
	mapCnv.height=height;
	mapCtx=mapCnv.getContext('2d');
	mapCtx.imageSmoothingEnabled=false;
	boxCnv=document.createElement('canvas');
	boxCnv.width=width;
	boxCnv.height=height;
	boxCtx=boxCnv.getContext('2d');
	boxCtx.imageSmoothingEnabled=false;
	pinCnv=document.createElement('canvas');
	pinCnv.width=width;
	pinCnv.height=height;
	pinCtx=pinCnv.getContext('2d');
	pinCtx.imageSmoothingEnabled=false;
}
function canvasResize() {
	canvas=document.getElementById("mcmap");
	if(typeof mapCnv != "undefined") {
		width=mapCnv.width=boxCnv.width=pinCnv.width=canvas.width=$(window).width();
		height=mapCnv.height=boxCnv.height=pinCnv.height=canvas.height=$(window).height();
		mapCtx.imageSmoothingEnabled=false;
		boxCtx.imageSmoothingEnabled=false;
		pinCtx.imageSmoothingEnabled=false;
	}
	else {
		width=canvas.width=$(window).width();
		height=canvas.height=$(window).height();
	}
	ctx=canvas.getContext('2d');
	ctx.imageSmoothingEnabled=false;
	cornerPos=[pos[0]-width/(2*tileSize)+0.5,pos[1]-height/(2*tileSize)+0.5];
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
	drawPoints();
}
function jumpPinFunc(e) {
	if(jumpMenuActive && e.path[1].id=="jumpPinForm" && e.keyCode==13) {
		gotoPin($("#jumpPin").val());
		setTimeout(function(){jumpMenuActive=false; menuActive=false;},1);
		$("#jumpMenu").removeClass("shown");
	}
}
function jumpCoordFunc(e) {
	if(jumpMenuActive && e.path[1].id=="jumpCoordForm" && e.keyCode==13) {
		gotoPoint(parseInt(parseInt($("#jumpCoordX").val())/128),parseInt(parseInt($("#jumpCoordZ").val())/128));
		setTimeout(function(){jumpMenuActive=false; menuActive=false;},1);
		$("#jumpMenu").removeClass("shown");
	}
}
function draw() {
	mapCtx.clearRect(0,0,width,height);
	tileDelta=[pos[0]-cornerPos[0],pos[1]-cornerPos[1]];
	for(var i=-Math.ceil(tileDelta[0]); i<=Math.ceil(tileDelta[0]); i++) {
		for(var j=-Math.ceil(tileDelta[1]); j<=Math.ceil(tileDelta[1]); j++) {
			var x=(parseInt(pos[0])+i);
			var y=(parseInt(pos[1])+j);
			if(tiles["x"+x+"y"+y]==undefined) {
				tileDest["x"+x+"y"+y]=[i,j];
				tiles["x"+x+"y"+y]=document.createElement('img');
				tiles["x"+x+"y"+y].src="img/tile.0."+x+"."+y+".png";
				tiles["x"+x+"y"+y].onerror=function() {
					if (this.src != 'img/default.png') {
						this.src = 'img/default.png'
					};
				}
				tiles["x"+x+"y"+y].onload=function () {
					var foo=this.src.split(".");
					var bar=tileDest["x"+foo[foo.length-3]+"y"+foo[foo.length-2]];
					delete tileDest["x"+foo[foo.length-3]+"y"+foo[foo.length-2]];
					mapCtx.drawImage(this,(parseInt(bar[0])+tileDelta[0])*tileSize,(parseInt(bar[1])+tileDelta[1])*tileSize,tileSize,tileSize);
					drawMain();
				}
			}
			else {
				mapCtx.drawImage(tiles["x"+x+"y"+y],(i+tileDelta[0])*tileSize,(j+tileDelta[1])*tileSize,tileSize,tileSize);
			}
		}
	}
	drawPoints();
}
function drawMain() {
	ctx.clearRect(0,0,width,height);
	ctx.drawImage(mapCnv,0,0);
	ctx.drawImage(boxCnv,0,0);
	ctx.drawImage(pinCnv,0,0);
}
function move(e) {
	var allowNormalExecution=true;
	var time=(new Date()).getTime();
	if(time-lastButtonPress>10) {
		if(!menuActive) {
			if(e.keyCode>36 && e.keyCode<41) {
				boxCtx.clearRect(0,0,width,height);
				resetStuff();
			}
			if(e.keyCode==37) {
				pos[0]-=Math.max(parseInt(startingTileSize/tileSize),1);
			}
			else if(e.keyCode==38) {
				pos[1]-=Math.max(parseInt(startingTileSize/tileSize),1);
			}
			else if(e.keyCode==39) {
				pos[0]+=Math.max(parseInt(startingTileSize/tileSize),1);
			}
			else if(e.keyCode==40) {
				pos[1]+=Math.max(parseInt(startingTileSize/tileSize),1);
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
				menuActive=true;
			}
			else if(e.keyCode==9) {
				$("#instr").removeClass("hide");
				instMenuActive=true;
				menuActive=true;
				allowNormalExecution=false;
			}
			if(e.keyCode>36 && e.keyCode<41) {
				cornerPos=[pos[0]-width/(2*tileSize)+0.5,pos[1]-height/(2*tileSize)+0.5];
				window.location.hash="x="+pos[0]+"&z="+pos[1]+"&zoom="+tileSize/startingTileSize;
				draw();
			}
			drawPoints();
		}
		else if(jumpMenuActive && e.keyCode==27) {
			$("#jumpMenu").removeClass("shown");
			jumpMenuActive=false;
			menuActive=false;
		}
		else if(instMenuActive && (e.keyCode==27 || e.keyCode==9)) {
			$("#instr").addClass("hide");
			instMenuActive=false;
			menuActive=false;
			if(e.keyCode==9) {allowNormalExecution=false;}
		}
	}
	lastButtonPress=time;
	return allowNormalExecution;
}
function closeJumpMenu() {
	$("#jumpMenu").removeClass("shown");
	jumpMenuActive=false;
	menuActive=false;
}
function highlight(e) {
	var rawX=e.pageX+$(window).scrollLeft();
	var rawY=e.pageY+$(window).scrollTop();
	var xf = Math.floor((rawX-width/2)/tileSize+0.5)-cornerPos[0]+pos[0];
	var yf = Math.floor((rawY-height/2)/tileSize+0.5)-cornerPos[1]+pos[1];
	var x = Math.floor(xf);
	var y = Math.floor(yf);
	var xCor=Math.floor(xf+cornerPos[0]);
	var yCor=Math.floor(yf+cornerPos[1]);
	var xXct=rawX+(cornerPos[0]*tileSize);
	var yXct=rawY+(cornerPos[1]*tileSize);
	boxCtx.clearRect(0,0,width,height);
	var clickedMark=false;
	var whichMark=-1;
	var markDist=Infinity;
	if(pointsVis) {
		for(var i=0; i<markers.length; i++) {
			if(markersVisible.indexOf(markers[i].id)!=-1) {
				var dist=Math.sqrt(Math.pow(xXct-markers[i].x/128*tileSize,2)+Math.pow(yXct-markers[i].z/128*tileSize,2));
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
			$("#infoTxt").addClass("shown");
		}
		else {
			selectedPoint=0;
			resetStuff();
		}
		drawPoints();
	}
	else if(!(lastTar[0]==xCor && lastTar[1]==yCor)) {
		resetStuff();
		lastTar=[xCor,yCor];
		boxCtx.strokeStyle="#000000";
		boxCtx.lineWidth=8;
		boxCtx.strokeRect(xf*tileSize, yf*tileSize, tileSize, tileSize);
		boxCtx.strokeStyle="#FFFFFF";
		boxCtx.lineWidth=4;
		boxCtx.strokeRect(xf*tileSize, yf*tileSize, tileSize, tileSize);
		$("#infoTxt")[0].innerHTML="Highlighted tile ("+xCor+", "+yCor+"), centered on ("+(xCor*128)+", "+(yCor*128)+"), coordinates ("+((xCor*128)-64)+", "+((yCor*128)-64)+") to ("+((xCor*128)+63)+", "+((yCor*128)+63)+").<br>Map ID: "+mapIds(xCor,yCor);
		$("#infoTxt").addClass("shown");
		drawMain();
	}
	else {
		resetStuff();
	}
}
function redrawHighlight() {
	if(lastTar[0]<Infinity) {
		boxCtx.clearRect(0,0,width,height);
		var xf = lastTar[0]-cornerPos[0];
		var yf = lastTar[1]-cornerPos[1];
		var x = Math.floor(xf);
		var y = Math.floor(yf);
		var xCor=lastTar[0];;
		var yCor=lastTar[1];;
		boxCtx.strokeStyle="#000000";
		boxCtx.lineWidth=8;
		boxCtx.strokeRect(xf*tileSize, yf*tileSize, tileSize, tileSize);
		boxCtx.strokeStyle="#FFFFFF";
		boxCtx.lineWidth=4;
		boxCtx.strokeRect(xf*tileSize, yf*tileSize, tileSize, tileSize);
		$("#infoTxt")[0].innerHTML="Highlighted tile ("+xCor+", "+yCor+"), centered on ("+(xCor*128)+", "+(yCor*128)+"), coordinates ("+((xCor*128)-64)+", "+((yCor*128)-64)+") to ("+((xCor*128)+63)+", "+((yCor*128)+63)+").<br>Map ID: "+mapIds(xCor,yCor);
		$("#infoTxt").addClass("shown");
		drawMain();
	}
}
function zoom(e) {
	if(Math.abs(e.deltaY)>Math.abs(e.deltaX)) {
		tileSize*=Math.pow(2,-e.deltaY/100);
		window.location.hash="x="+pos[0]+"&z="+pos[1]+"&zoom="+tileSize/startingTileSize;
		cornerPos=[pos[0]-width/(2*tileSize)+0.5,pos[1]-height/(2*tileSize)+0.5];
		draw();
		redrawHighlight();
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
	var delta=[(pos[0]-cornerPos[0])*128,(pos[1]-cornerPos[1])*128];
	for(var i=0; i<markers.length; i++) {
		if(markers[i].x>=cornerPos[0]-1 && markers[i].x<=cornerPos[0]+width/tileSize*128+1 && markers[i].z>=cornerPos[1]-1 && markers[i].z<=cornerPos[1]+height/tileSize*128+1) {
			markersVisible.push(markers[i].id);
		}
	}
}
function drawPoints() {
	checkMarkerVisibility();
	pinCtx.clearRect(0,0,width,height);
	if(pointsVis) {
		var posRel=[cornerPos[0]*tileSize,cornerPos[1]*tileSize];
		for(var i=0; i<markers.length; i++) {
			if(markersVisible.indexOf(markers[i].id)!=-1) {
				var posAdj=[markers[i].x/128*tileSize-posRel[0],markers[i].z/128*tileSize-posRel[1]];
				var sizeMod=1;
				if(markers[i].id==selectedPoint) {
					sizeMod=Math.sqrt(2);
				}
				drawCircle(pinCtx,posAdj[0]+(2*sizeMod),posAdj[1]+(2*sizeMod),10*sizeMod,"#000000");
				drawCircle(pinCtx,posAdj[0],posAdj[1],10*sizeMod,"#ff0000");
				drawCircle(pinCtx,posAdj[0]-(3*sizeMod),posAdj[1]-(3*sizeMod),4*sizeMod,"#ff8080");
			}
		}
	}
	drawMain();
}
function resetStuff() {
	$("#infoTxt")[0].innerHTML="";
	$("#infoTxt").removeClass("shown");
	selectedPoint=0;
	drawPoints();
	lastTar=[Infinity,Infinity];
}



