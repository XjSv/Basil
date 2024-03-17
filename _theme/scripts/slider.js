;(function ( $, window, document, undefined ) {

	if ( $('#basil-slider').length ){

		$('#basil-slider').each(function(){

			var hasRecipeBGSlider = false;

			if ( !$(this).find('.basil-slider-bgs').hasClass('basil-featured-image') ){
				hasRecipeBGSlider = true;
			}

			var responsiveSettings = [{
				breakpoint: 1260,
				settings: {
					arrows: true,
					centerMode: false,
					slidesToShow: 2,
					slidesToScroll: 2
				}
			},
			{
				breakpoint: 960,
				settings: {
					arrows: true,
					centerMode: true,
					slidesToShow: 1
				}
			}];

			if ( hasRecipeBGSlider ){
				$(this).find('.basil-slider-bgs').slick({
					slidesToShow:1,
	  				slidesToScroll:1,
	  				arrows: false,
	  				fade: true,
	  				asNavFor: '.basil-slider-slides'
				});
				var sliderSettings = {
					centerMode: false,
					infinite: false,
					arrows: true,
					variableWidth:true,
					asNavFor: '.basil-slider-bgs',
					appendArrows: $('.basil-slider-arrows'),
					prevArrow: '<i class="fas fa-chevron-left"></i>',
					nextArrow: '<i class="fas fa-chevron-right"></i>',
	  				slidesToScroll: 1,
					slidesToShow: 3,
					responsive: responsiveSettings
				};
			} else {
				var sliderSettings = {
					centerMode: false,
					infinite: false,
					arrows: true,
					variableWidth:true,
					appendArrows: $('.basil-slider-arrows'),
					prevArrow: '<i class="fas fa-chevron-left"></i>',
					nextArrow: '<i class="fas fa-chevron-right"></i>',
	  				slidesToScroll: 1,
					slidesToShow: 3,
					responsive: responsiveSettings
				};
			}



			$(this).find('.basil-slider-slides').slick( sliderSettings );
		});

	}

})(jQuery, window, document);
