actual=[];
compressed=[];
clusters=[];
approx=[];
resizeWaitA=-1;
resizeWaitB=-1;
mouseDown=false;
isClear=true;

scale={point:8,line:5};
debug=false;

function getWidth() {
	return Math.max(
		document.body.scrollWidth,
		document.documentElement.scrollWidth,
		document.body.offsetWidth,
		document.documentElement.offsetWidth,
		document.documentElement.clientWidth
	);
}
function getHeight() {
	return Math.max(
		document.body.scrollHeight,
		document.documentElement.scrollHeight,
		document.body.offsetHeight,
		document.documentElement.offsetHeight,
		document.documentElement.clientHeight
	);
}

function drawCircle(CTX,xPos,yPos,radius,color) {
	CTX.beginPath()
	CTX.lineWidth=0;
	CTX.fillStyle=color;
	CTX.arc(xPos, yPos, radius, 0, 2*Math.PI, true);
	CTX.fill();
}

function setup() {
	setupCanvas();
	canvas.onmousedown=onMouseDown;
	canvas.onmouseup=onMouseUp;
	canvas.onmousemove=onMove;
	window.onkeyup=onKey;
	window.onresize=onResize;
}
function setupCanvas() {
	canvas=$("#canvas")[0];
	width=canvas.width=getWidth();
	height=canvas.height=getHeight();
	ctx=canvas.getContext("2d");
	ctx.imageSmoothingEnabled=false;
}
function cullDuplicates() {
	var cullDist=1;
	for(var i=1; i<actual.length; i++) {
		if(Math.abs(actual[i].x-actual[i-1].x)<cullDist && Math.abs(actual[i].y-actual[i-1].y)<cullDist) {
			actual.splice(i,1);
			i--;
		}
	}
}
function norm(vec) {
	return Math.sqrt(vec.x*vec.x+vec.y*vec.y)
}
function dist(vec1,vec2) {
	return norm({x:vec2.x-vec1.x,y:vec2.y-vec1.y})
}
function calculateApprox() {
	compressed=[];
	clusters=[];
	var clusterInd=0;
	var inCluster=true;
	clusters.push([{x:actual[0].x,y:actual[0].y,i:0,dot:-1}]);
	for(var i=1; i<actual.length-1; i++) {
		var vectorA={};
		var delta=1;
		do {
			vectorA={x:actual[i].x-actual[i-delta].x,y:actual[i].y-actual[i-delta].y};
			delta++;
		}
		while(norm(vectorA)<20 && i-delta>=0)
		var vectorB={};
		delta=1;
		do {
			vectorB={x:actual[i+delta].x-actual[i].x,y:actual[i+delta].y-actual[i].y};
			delta++;
		}
		while(norm(vectorB)<20 && i+delta<actual.length)
		var dot=(vectorA.x*vectorB.x+vectorA.y*vectorB.y)/(norm(vectorA)*norm(vectorB));
		compressed.push(dot);
		if(dot<=Math.cos(Math.PI/6)) {
			if(inCluster) {
				clusters[clusterInd].push({x:actual[i].x,y:actual[i].y,i:i,dot:dot});
			}
			else {
				inCluster=true;
				clusterInd++;
				clusters.push([{x:actual[i].x,y:actual[i].y,i:i,dot:dot}]);
			}
		}
		else {
			inCluster=false;
		}
	}
	if(inCluster)
		clusters[clusterInd].push({x:actual[actual.length-1].x,y:actual[actual.length-1].y,i:actual.length-1,dot:-1});
	else
		clusters.push([{x:actual[actual.length-1].x,y:actual[actual.length-1].y,i:actual.length-1,dot:-1}]);
	for(var i=0; i<clusters.length; i++) {
		if(i==0)
			approx.push(clusters[0][0]);
		else if(i==clusters.length-1)
			approx.push(clusters[i][clusters[i].length-1]);
		else {
			var cluster=clusters[i];
			var minNode={x:0,y:0,i:-1,dot:1};
			for(node of cluster) {
				if(node.dot<minNode.dot)
					minNode=node;
			}
			if(minNode.i>-1)
				approx.push(minNode);
			else
				approx.push(cluster[parseInt(cluster.length/2)]);
		}
	}
}

function drawPaths() {
	ctx.clearRect(0,0,width,height);
	if(actual.length>0) {
		ctx.beginPath();
		ctx.lineWidth=scale.line;
		ctx.strokeStyle="#3000FF"
		ctx.moveTo(actual[0].x,actual[0].y);
		for(var i=1; i<actual.length; i++) {
			ctx.lineTo(actual[i].x,actual[i].y);
		}
		ctx.stroke();
		if(debug) {
			for(var i=0; i<actual.length; i++) {
				drawCircle(ctx,actual[i].x,actual[i].y,scale.point,"#0000FF");
			}
		}
	}
	if(approx.length>0) {
		ctx.beginPath();
		ctx.lineWidth=scale.line;
		ctx.strokeStyle="#FFA000"
		ctx.moveTo(approx[0].x,approx[0].y);
		for(var i=1; i<approx.length; i++) {
			ctx.lineTo(approx[i].x,approx[i].y);
		}
		ctx.stroke();
		if(debug) {
			for(var i=0; i<approx.length; i++) {
				drawCircle(ctx,approx[i].x,approx[i].y,scale.point,"#FF0000");
			}
		}
	}
}
function clearPaths() {
	actual=[];
	approx=[];
	isClear=true;
}
function startPaths() {
	if(!isClear)
		endPaths();
}
function endPaths() {
	clearPaths();
}

function onKey(e) {
	if(e.keyCode==13) {
		clearPaths();
		drawPaths();
	}
}
function onMove(e) {
	if(mouseDown) {
		actual.push({x:e.pageX,y:e.pageY});
		drawPaths();
	}
}
function onMouseDown(e) {
	if(e.button==0) {
		mouseDown=true;
		startPaths();
		isClear=false;
		actual.push({x:e.pageX,y:e.pageY});
		drawPaths();
	}
}
function onMouseUp(e) {
	if(e.button==0) {
		mouseDown=false;
		actual.push({x:e.pageX,y:e.pageY});
		cullDuplicates();
		calculateApprox();
		drawPaths();
	}
}
function onResize(e) {
	resize()
	clearTimeout(resizeWaitB);
	resizeWaitB=setTimeout(drawPaths,100);
}
function resize() {
	var tmp=document.createElement("canvas");
	tmp.width=width;
	tmp.height=height;
	var tmpCtx=tmp.getContext("2d");
	tmpCtx.imageSmoothingEnabled=false;
	tmpCtx.drawImage(canvas,0,0);
	deltaX=(tmp.width-(width=canvas.width=$(window).width()))/2;
	deltaY=(tmp.height-(height=canvas.height=$(window).height()))/2;
	ctx=canvas.getContext("2d");
	ctx.clearRect(0,0,width,height);
	ctx.drawImage(tmp,-deltaX,-deltaY);
	for(node of actual) {
		node.x-=deltaX;
		node.y-=deltaY;
	}
	for(node of approx) {
		node.x-=deltaX;
		node.y-=deltaY;
	}
}