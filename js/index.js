$(function() {
	var $menu = $('.menu'),
		$mainButton = $('.main-button');

	$menu.on('click', '.main-button', function(ev) {
		var button = $(this),
			menu = $(ev.delegateTarget);

		menu.toggleClass('active');
		menu.toggleClass('not-active');
	});
});
