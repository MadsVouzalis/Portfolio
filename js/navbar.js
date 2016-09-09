$(function() {

	//highlight the current nav
	$("#index a:contains('Home')").parent().addClass('active');
	$("#services a:contains('Services')").parent().addClass('active');
	$("#portfolio a:contains('Portfolio')").parent().addClass('active');
   	$("#about a:contains('About Me')").parent().addClass('active');
   	$("#contact a:contains('Contact')").parent().addClass('active');
	
	/*
	if($("#photographer_pack a:contains('Photographer\'s Package')").parent().hasClass('active')){
	$(".dropdown a:contains('Our Programs')").parent().addClass('active');
	}
	
	if($("#joomla a:contains('Joomla Training')").parent().hasClass('active')){
	$(".dropdown a:contains('Our Programs')").parent().addClass('active');
	}

	//make menus drop automatically
	$('ul.nav li.dropdown').hover(function() {
		$('.dropdown-menu', this).fadeIn();
	}, function() {
		$('.dropdown-menu', this).fadeOut('fast');
	});//hover
	*/
}); //jQuery is loaded
	