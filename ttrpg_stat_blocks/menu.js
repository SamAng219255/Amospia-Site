function setup() {
	$("li.has-dropdown>p.label").click({},function(e){
		const target=$(e.currentTarget.parentElement);
		target.toggleClass("open");
		target.find("li.has-dropdown").removeClass("open");
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

	if(window.matchMedia("(max-width: 500px)").matches) {
		setTimeout(function(){$("body").addClass("mobile-secondary");},0);
	}

	// Light/Dark Mode
	$("#light").change({},setDarkMode);
	lightActions=[];
	darkActions=[];
	const actions=$(".action-img");
	for(let i=0; i<actions.length; i++) {
		const data=actions[i].src.split('/')[5].match(/([a-z]+)actions?(_I)?\.png/i);
		if(data[2]==undefined)
			darkActions.push(actions[i]);
		else
			lightActions.push(actions[i]);
	}

	$(".status-empty").attr("title","This page currently has no content.")
	$(".status-wip").attr("title","Work In Progress")

	if(window.matchMedia("(max-aspect-ratio: 1/1), (max-width: 800px)").matches) 
		setTimeout(function(){$("body").addClass("small-secondary")},100);
	else
		setTimeout(function(){$("body").removeClass("small-secondary")},100);

	window.addEventListener("resize",function(){
		if(window.matchMedia("(max-aspect-ratio: 1/1), (max-width: 800px)").matches)
			setTimeout(function(){$("body").addClass("small-secondary")},100);
		else
			setTimeout(function(){$("body").removeClass("small-secondary")},100);
		if(window.matchMedia("(max-width: 500px)").matches)
			setTimeout(function(){$("body").addClass("mobile-secondary")},100);
		else
			setTimeout(function(){$("body").removeClass("mobile-secondary")},100);
	});
}

function setDarkMode() {
	const lightMode=$("#light")[0].checked;
	const options={
		light: (lightMode?'true':'false')
	};
	if(typeof devMode != 'undefined' && devMode) {
		options.devMode='true';
	}
	$.post(rootDir+"lightMode.php",options,function (data) {console.log(data)});
	if(lightMode){
		$("body").addClass("light");
		for(let i=0; i<lightActions.length; i++) {
			lightActions[i].src=lightActions[i].src.replace(/([a-z]+action)(_I)?(\.png)/i,'$1$3');
		}
		for(let i=0; i<darkActions.length; i++) {
			lightActions[i].src=lightActions[i].src.replace(/([a-z]+action)(_I)?(\.png)/i,'$1_I$3');
		}
	}
	else{
		$("body").removeClass("light");
		for(let i=0; i<lightActions.length; i++) {
			lightActions[i].src=lightActions[i].src.replace(/([a-z]+action)(_I)?(\.png)/i,'$1_I$3');
		}
		for(let i=0; i<darkActions.length; i++) {
			lightActions[i].src=lightActions[i].src.replace(/([a-z]+action)(_I)?(\.png)/i,'$1$3');
		}
	}
}

setup();
setDarkMode();