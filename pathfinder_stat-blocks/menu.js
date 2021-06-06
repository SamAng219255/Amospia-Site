setupFuncs=[];

function setup() {
	$("li.has-dropdown>p.label").click({},function(e){
		$(e.currentTarget.parentElement).toggleClass("open");
	});

	for(var func of setupFuncs) {
		func();
	}
}