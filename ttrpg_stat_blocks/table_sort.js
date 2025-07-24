tableStorage=[];

sortStatus={};
sort=false;
sortColumn=0;

bonusFunc=function(x){return x*x*2000;};
function parseNumber(x) {
	const numA=x.replaceAll(',','').replaceAll('\xa0',' ');
	const useDice=numA.match(/^\s*(\d+)d(\d+)/);
	const diceMatches=numA.matchAll(/(\d+)d(\d+)/g);
	let nextDiceMatch=diceMatches.next();
	const fractionMatch=numA.match(/^[+-]? ?(\d+) ?\/ ?(\d+)/);
	const bonusMatch=numA.match(/((?:\+|-)\d) bonus/);
	const spFractionMatch=numA.match(/^[+-]? ?(\d+) ?\/ ?(\d+) sp/);
	const cpFractionMatch=numA.match(/^[+-]? ?(\d+) ?\/ ?(\d+) cp/);
	const spMatch=numA.match(/^((?:\+|-)?\d(?:\.\d+)?) sp/);
	const cpMatch=numA.match(/^((?:\+|-)?\d(?:\.\d+)?) cp/);
	if(numA==='—')
		return 0;
	else if(numA==='L')
		return 0.1;
	else if(numA.startsWith('0x'))
		return parseInt(numA);
	else if(useDice) {
		let total=0;
		do {
			total+=parseInt(nextDiceMatch.value[1])*(1+parseInt(nextDiceMatch.value[2]))/2;
		}
		while(!(nextDiceMatch=diceMatches.next()).done);
		return total;
	}
	else if(spFractionMatch) {
		return parseInt(spFractionMatch[1])/parseInt(spFractionMatch[2])/10;
	}
	else if(cpFractionMatch) {
		return parseInt(cpFractionMatch[1])/parseInt(cpFractionMatch[2])/100;
	}
	else if(fractionMatch)
		return parseInt(fractionMatch[1])/parseInt(fractionMatch[2]);
	else if(bonusMatch) {
		return bonusFunc(parseInt(bonusMatch[1]));
	}
	else if(spMatch) {
		return parseFloat(spMatch[1])/10;
	}
	else if(cpMatch) {
		return parseFloat(cpMatch[1])/100;
	}
	else
		return parseFloat(numA);
}
function comp(a,b) {
	const A=a.toString();
	const B=b.toString();
	let numA=parseNumber(A);
	let numB=parseNumber(B);
	if(isNaN(numA) || isNaN(numB)) {
		if(!isNaN(numA) && B.trim()==="")
			return Math.sign(numA);
		else if(!isNaN(numB) && A.trim()==="")
			return -Math.sign(numB);
		let trimmedA=A.trim().toLowerCase();
		let trimmedB=B.trim().toLowerCase();
		if(trimmedA.startsWith('the '))
			trimmedA=trimmedA.slice(4);
		if(trimmedB.startsWith('the '))
			trimmedB=trimmedB.slice(4);
		return trimmedA.localeCompare(trimmedB);
	}
	return Math.sign(numA-numB);
}
function getRowCell(row, cell) {
	if(row.cellIndices==undefined) {
		row.cellIndices=[];
		for (var i = 0; i < row.children.length; i++) {
			for (var j = 0; j < row.children[i].colSpan; j++) {
				row.cellIndices.push(i);
			}
		}
	}
	return row.children[row.cellIndices[cell]];
}
function setupTableSort() {
	if(cancelDefaultTableSort)
		return;

	let findTable=$("table:not(.vertical):not(.no-sort)");
	if(findTable.length<1)
		return;
	theTable=findTable[0];
	if(initialSort) {
		let tarOrder=findTable.children("tbody").children().get();
		tarOrder.sort(initialSortFunc);
		for (let i = 0; i < tarOrder.length; i++) {
			tarOrder[i].parentNode.appendChild(tarOrder[i]);
		}
	}
	tableStorage=findTable.children("tbody").children().get();
	columnIndices={};
	for(let j=0; j<findTable.length; j++) {
		for(let i=0; i<findTable[j].children[0].children[0].childElementCount; i++) {
			columnIndices[findTable[j].children[0].children[0].children[i].innerText]=i;
		}
	}

	let sortFuncAsc = function(a, b) {
		return comp(getRowCell(a,sortColumn).innerText.toLowerCase(),getRowCell(b,sortColumn).innerText.toLowerCase());
	}
	let sortFuncDec = function(a, b) {
		return -comp(getRowCell(a,sortColumn).innerText.toLowerCase(),getRowCell(b,sortColumn).innerText.toLowerCase());
	}
	let sortFuncAscContextual = function(a, b) {
		return sortFuncAsc(a,b)*(1<<($("table:not(.vertical):not(.no-sort)").children("thead").children()[0].childElementCount))+initialSortFunc(a,b);
	}
	let sortFuncDecContextual = function(a, b) {
		return sortFuncDec(a,b)*(1<<($("table:not(.vertical):not(.no-sort)").children("thead").children()[0].childElementCount))+initialSortFunc(a,b);
	}

	const tables=$("table:not(.vertical):not(.no-sort)");
	for(let i=0; i<tables.length; i++) {
		let headers=$(tables[i]).children("thead").children().children();
		headers.on("click", function(e) {
			let sortIndex=columnIndices[this.textContent];
			sortColumn=sortIndex;
			let tarOrder=tableStorage.slice();
			if(sortStatus.sort==sortIndex && sortStatus.asc==0) {
				sortStatus={};
				sort=false;
				const tables=$("table:not(.vertical):not(.no-sort)");
				for(let i=0; i<tables.length; i++)
					$($(tables[i]).children("thead").children()[0].children[sortIndex]).removeClass("sort-asc").removeClass("sort-dec");
			}
			else {
				const tables=$("table:not(.vertical):not(.no-sort)");
				if(sortStatus.sort!==undefined) {
					for(let i=0; i<tables.length; i++)
						$($(tables[i]).children("thead").children()[0].children[sortStatus.sort]).removeClass("sort-asc").removeClass("sort-dec")
				}
				sortStatus={sort:sortIndex,asc:(!sort || sortIndex!=sortStatus.sort || !sortStatus.asc)?1:0};
				for(let i=0; i<tables.length; i++)
					$($(tables[i]).children("thead").children()[0].children[sortStatus.sort]).removeClass("sort-asc").removeClass("sort-dec").addClass(sortStatus.asc ? "sort-asc" : "sort-dec");
				let rows=$($("table:not(.vertical):not(.no-sort)").children()[0].children).get();
				tarOrder.sort(sortStatus.asc ? sortFuncAscContextual : sortFuncDecContextual);
			}

			for (let i = 0; i < tarOrder.length; i++) {
				tarOrder[i].parentNode.appendChild(tarOrder[i]);
			}
			sort=true;
		});
		headers.addClass("clickable");
	}
}

if(document.readyState == "loading") {
	document.body.addEventListener("load", setupTableSort);
}
else {
	foo = $("table:not(.vertical):not(.no-sort)");
	setupTableSort();
}
