<?php require '../pageStart.php'; ?>
<script>
	cancelDefaultTableSort=true;
	function setupSort() {
		var headers=$($("table").children().children()[0]).children();
		headers.on("click", function(e) {
			var sortIndex=columnIndices[this.textContent];
			if(sortStatus.sort==sortIndex && sortStatus.asc==0) {
				sortStatus={};
				sort=false;
			}
			else {
				sortStatus={sort:sortIndex,asc:(!sort || sortIndex!=sortStatus.sort || !sortStatus.asc)?1:0};
			}
			$.get("deity_table.php",sortStatus,function(data){
				$("table")[0].outerHTML=data;
				setupSort();
				$($("table").children().children()[0].children[sortStatus.sort]).addClass(sortStatus.asc ? "sort-asc" : "sort-dec");
				sort=true;
			});
		});
		headers.addClass("clickable");
	}

	sort=false;
	sortStatus={};
	columnIndices={"Name":0,"Pantheon":1,"Alignment":2,"Areas of Concern":3,"Domains":4,"Favored Weapon":5};

	setupFuncs.push(setupSort);
</script>
<?php
	require 'deity_table.php';

	require '../pageEnd.php';
?>