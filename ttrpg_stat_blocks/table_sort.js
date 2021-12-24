cancelDefaultTableSort=false;
tableStorage=[];
initialSort=false;
initialSortFunc=function(a,b){return 0};

sortStatus={};
sort=false;
sortColumn=0;

function comp(a,b) {
	const A=a.toString();
	const B=b.toString();
	let numA=A.replaceAll(',','');
	let numB=B.replaceAll(',','');
	let match;
	if(match=numA.match(/^[+-]? ?(\d+) ?\/ ?(\d+)/))
		numA=parseInt(match[1])/parseInt(match[2]);
	else
		numA=parseInt(numA);
	if(match=numB.match(/^[+-]? ?(\d+) ?\/ ?(\d+)/))
		numB=parseInt(match[1])/parseInt(match[2]);
	else
		numB=parseInt(numB);
	if(isNaN(numA) || isNaN(numB))
		return A.localeCompare(B);
	return Math.sign(numA-numB);
}
function setupTableSort() {
	if(cancelDefaultTableSort)
		return;

	let findTable=$("table");
	if(findTable.length<1)
		return;
	theTable=findTable[0];
	if(initialSort) {
		let tarOrder=findTable.children().children().get();
		tarOrder.sort(initialSortFunc);
		for (let i = 0; i < tarOrder.length; i++) {
			tarOrder[i].parentNode.appendChild(tarOrder[i]);
		}
	}
	tableStorage=findTable.children().children().get();
	columnIndices={};
	for(let i=0; i<theTable.children[0].children[0].childElementCount; i++) {
		columnIndices[theTable.children[0].children[0].children[i].innerText]=i;
	}

	let sortFuncAsc = function(a, b) {
		if(a.children[sortColumn].tagName=='TH')
			return -1;
		else if(b.children[sortColumn].tagName=='TH')
			return 1;
		return comp(a.children[sortColumn].innerText.toLowerCase(),b.children[sortColumn].innerText.toLowerCase());
	}
	let sortFuncDec = function(a, b) {
		if(a.children[sortColumn].tagName=='TH')
			return -1;
		else if(b.children[sortColumn].tagName=='TH')
			return 1;
		return -comp(a.children[sortColumn].innerText.toLowerCase(),b.children[sortColumn].innerText.toLowerCase());
	}

	let headers=$($("table").children().children()[0]).children();
	headers.on("click", function(e) {
		let sortIndex=columnIndices[this.textContent];
		sortColumn=sortIndex;
		let tarOrder=tableStorage.slice();
		if(sortStatus.sort==sortIndex && sortStatus.asc==0) {
			sortStatus={};
			sort=false;
			$($("table").children().children()[0].children[sortIndex]).removeClass("sort-asc").removeClass("sort-dec");
		}
		else {
			if(sortStatus.sort!==undefined)
				$($("table").children().children()[0].children[sortStatus.sort]).removeClass("sort-asc").removeClass("sort-dec")
			sortStatus={sort:sortIndex,asc:(!sort || sortIndex!=sortStatus.sort || !sortStatus.asc)?1:0};
			$($("table").children().children()[0].children[sortStatus.sort]).removeClass("sort-asc").removeClass("sort-dec").addClass(sortStatus.asc ? "sort-asc" : "sort-dec");
			let rows=$($("table").children()[0].children).get();
			tarOrder.sort(sortStatus.asc ? sortFuncAsc : sortFuncDec);
		}

		for (let i = 0; i < tarOrder.length; i++) {
			tarOrder[i].parentNode.appendChild(tarOrder[i]);
		}
		sort=true;
	});
	headers.addClass("clickable");
}

setupFuncs.push(setupTableSort);