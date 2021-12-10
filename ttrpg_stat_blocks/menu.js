setupFuncs=[];

function setup() {
	$("li.has-dropdown>p.label").click({},function(e){
		$(e.currentTarget.parentElement).toggleClass("open");
	});
	$(".toc-title").click({},function(e){
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
		setTimeout(function(){$("body").addClass("mobile-secondary");},0)
	}

	for(var func of setupFuncs) {
		func();
	}

	// Light/Dark Mode
	$("#light").click({},setDarkMode);
}

function setDarkMode() {
	const lightMode=$("#light")[0].checked;
	const options={
		light: (lightMode?'true':'false')
	};
	if(typeof devMode != 'undefined' && devMode){
		options.devMode='true';
	}
	$.post(rootDir+"lightMode.php",options,function (data) {console.log(data)});
	if(lightMode){
		$("body").addClass("light");
	}
	else{
		$("body").removeClass("light");
	}
}
setupFuncs.push(setDarkMode);