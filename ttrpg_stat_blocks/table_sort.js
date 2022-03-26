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
	let fractionMatch;
	let diceMatches;
	let nextDiceMatch;
	nextDiceMatch=(diceMatches=numA.matchAll(/(\d+)d(\d+)/g)).next();
	if(numA==='—')
		numA=0;
	else if(numA==='L')
		numA=0.1;
	else if(numA.startsWith('0x'))
		numA=parseInt(numA);
	else if(!nextDiceMatch.done) {
		numA=0;
		do {
			numA+=parseInt(nextDiceMatch.value[1])*(1+parseInt(nextDiceMatch.value[2]))/2;
		}
		while(!(nextDiceMatch=diceMatches.next()).done);
	}
	else if(fractionMatch=numA.match(/^[+-]? ?(\d+) ?\/ ?(\d+)/))
		numA=parseInt(fractionMatch[1])/parseInt(fractionMatch[2]);
	else
		numA=parseInt(numA);
	nextDiceMatch=(diceMatches=numB.matchAll(/(\d+)d(\d+)/g)).next();
	if(numB==='—')
		numB=0;
	else if(numB==='L')
		numB=0.1;
	else if(numB.startsWith('0x'))
		numB=parseInt(numB);
	else if(!nextDiceMatch.done) {
		numB=0;
		do {
			numB+=parseInt(nextDiceMatch.value[1])*(1+parseInt(nextDiceMatch.value[2]))/2;
		}
		while(!(nextDiceMatch=diceMatches.next()).done);
	}
	else if(fractionMatch=numB.match(/^[+-]? ?(\d+) ?\/ ?(\d+)/))
		numB=parseInt(fractionMatch[1])/parseInt(fractionMatch[2]);
	else
		numB=parseInt(numB);
	if(isNaN(numA) || isNaN(numB))
		return A.localeCompare(B);
	return Math.sign(numA-numB);
}
function setupTableSort() {
	if(cancelDefaultTableSort)
		return;

	let findTable=$("table:not(.vertical):not(.no-sort)");
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
	for(let j=0; j<findTable.length; j++) {
		for(let i=0; i<findTable[j].children[0].children[0].childElementCount; i++) {
			columnIndices[findTable[j].children[0].children[0].children[i].innerText]=i;
		}
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

	const tables=$("table:not(.vertical):not(.no-sort)");
	for(let i=0; i<tables.length; i++) {
		let headers=$($(tables[i]).children().children()[0]).children();
		headers.on("click", function(e) {
			let sortIndex=columnIndices[this.textContent];
			sortColumn=sortIndex;
			let tarOrder=tableStorage.slice();
			if(sortStatus.sort==sortIndex && sortStatus.asc==0) {
				sortStatus={};
				sort=false;
				const tables=$("table:not(.vertical):not(.no-sort)");
				for(let i=0; i<tables.length; i++)
					$($(tables[i]).children().children()[0].children[sortIndex]).removeClass("sort-asc").removeClass("sort-dec");
			}
			else {
				const tables=$("table:not(.vertical):not(.no-sort)");
				if(sortStatus.sort!==undefined) {
					for(let i=0; i<tables.length; i++)
						$($(tables[i]).children().children()[0].children[sortStatus.sort]).removeClass("sort-asc").removeClass("sort-dec")
				}
				sortStatus={sort:sortIndex,asc:(!sort || sortIndex!=sortStatus.sort || !sortStatus.asc)?1:0};
				for(let i=0; i<tables.length; i++)
					$($(tables[i]).children().children()[0].children[sortStatus.sort]).removeClass("sort-asc").removeClass("sort-dec").addClass(sortStatus.asc ? "sort-asc" : "sort-dec");
				let rows=$($("table:not(.vertical):not(.no-sort)").children()[0].children).get();
				tarOrder.sort(sortStatus.asc ? sortFuncAsc : sortFuncDec);
			}

			for (let i = 0; i < tarOrder.length; i++) {
				tarOrder[i].parentNode.appendChild(tarOrder[i]);
			}
			sort=true;
		});
		headers.addClass("clickable");
	}
}

setupFuncs.push(setupTableSort);