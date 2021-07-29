setupFuncs=[];

function setup() {
	$("li.has-dropdown>p.label").click({},function(e){
		$(e.currentTarget.parentElement).toggleClass("open");
	});

	$("#menu-open").click({},function() {
		$("#sidebar").addClass("open");
		$("#center").addClass("hide");
	});
	$("#menu-close").click({},function() {
		$("#sidebar").removeClass("open");
		$("#center").removeClass("hide");
	});

	if(isMobile) {
		$("body").addClass("mobile");
	}

	for(var func of setupFuncs) {
		func();
	}
}