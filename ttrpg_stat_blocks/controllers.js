function setup_controllers() {
	$(".show-stance").click(function() {
		let btn = $(this);
		btn.toggleClass("active");
		if(btn.hasClass("active"))
			btn.prop('value', 'Hide');
		else
			btn.prop('value', 'Show');
	})
}
setupFuncs.push(setup_controllers);