var $animation_elements = jQuery('.anima');
function check_if_in_view() {
	var window_height = $window.height();
	var window_top_position = $window.scrollTop();
	var correction = 150;
	if ($window.width() <= 690)
		correction = 50;
	var window_bottom_position = (window_top_position + window_height - correction);

	jQuery.each($animation_elements, function() {
	var $element = jQuery(this);
		var element_height = $element.outerHeight();
		var element_top_position = $element.offset().top;
		var element_bottom_position = (element_top_position + element_height);

		if (element_top_position <= window_bottom_position) {
				if(jQuery($element).hasClass('anima-gap'))
					setTimeout(function(){ $element.addClass('anima-inview'); }, 1000);
				else
					$element.addClass('anima-inview');
			}
			else {
				if(jQuery($element).hasClass('anima-infinite'))
					$element.removeClass('anima-inview');
			}
	});
	if (window_top_position > 100) {
		jQuery('header').addClass('anima-inview');
	} else {
		jQuery('header').removeClass('anima-inview');
	}
}

$window.on('scroll resize', check_if_in_view);
$window.trigger('scroll');