$(function() {
	var $document = $(document),
		$body = $('body'),
		$menu = $('.menu'),
		$mainButton = $('.main-button'),
		event = 'ontouchstart' in document.documentElement ? 'touchstart' : 'click';

	$menu.on(event, '.main-button', function(ev) {
		var button = $(this),
			menu = $(ev.delegateTarget);

		menu.toggleClass('active');
		menu.toggleClass('not-active');
	});
});
