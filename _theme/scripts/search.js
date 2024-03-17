;(function ( $, window, document, undefined ) {

	if ( $('#basil-nav li.basil-search').length ){

		$(window).on('load', function(){
			$('#basil-nav .search-form').hide();
		});

		$('body').on('click', '#basil-nav li.basil-search a', function(e){

			e.preventDefault();
			$('#basil-nav').addClass('basil-nav-hidden');
			$('#basil-nav .search-form').show();

			setTimeout(function(){
				$('#basil-nav > div > ul').hide();
				$('#basil-nav').addClass('basil-search-active');
				$('#basil-nav').find('.search-field').focus();
				$('#basil-nav').find('.search-field').select();
			},200);

		});

		$('body').on('click', '#basil-nav a.basil-cancel-search', function(e){

			e.preventDefault();
			$('#basil-nav > div > ul').show();
			$('#basil-nav').find('.search-field').blur();

			setTimeout(function(){
				$('#basil-nav').removeClass('basil-nav-hidden');
				$('#basil-nav').addClass('basil-search-hidden');
			},1);

			setTimeout(function(){
				$('#basil-nav .search-form').hide();
				$('#basil-nav').removeClass('basil-search-hidden');
				$('#basil-nav').removeClass('basil-search-active');
			},200);

		});

		$('body').on('blur', '#basil-nav .search-field', function(e){

			$('#basil-nav > div > ul').show();

			setTimeout(function(){
				$('#basil-nav').removeClass('basil-nav-hidden');
				$('#basil-nav').addClass('basil-search-hidden');
			},1);

			setTimeout(function(){
				$('#basil-nav .search-form').hide();
				$('#basil-nav').removeClass('basil-search-hidden');
				$('#basil-nav').removeClass('basil-search-active');
			},200);

		});

	}

})(jQuery, window, document);
