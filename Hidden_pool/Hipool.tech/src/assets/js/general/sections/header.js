initSectionHeader();

function initSectionHeader() {
	$body.on('click', '.toggle-menu', function() {
		$('.section.header .navigation').toggleClass('is-opened');
		$('.wrapper-opacity').toggleClass('show');
		$('.full-project').toggleClass('wrapper-blur');
		$('#fullpage').toggleClass('wrapper-blur');
		$('.open').toggleClass('open-close');
	});
};

