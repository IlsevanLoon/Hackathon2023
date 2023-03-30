$(document).ready(function(){
	var filters = $('.filters');
	var filtersHeight = filters.outerHeight();

	$(window).scroll(function(){
		console.log('test');
		if ($(this).scrollTop() > filtersHeight) {
			filters.addClass('sticky');
			main.css('margin-top', filtersHeight + 'px');
		} else {
			filters.removeClass('sticky');
			main.css('margin-top', '0');
		}
	});
});
