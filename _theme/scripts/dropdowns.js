;(function ( $, window, document, undefined ) {

	if ( $('#basil-nav').length ){

		$('body').on('click','#basil-nav ul ul li.menu-item-has-children',function(e){

			if ( $( e.target ).hasClass('menu-item-has-children') ) {

				e.preventDefault();
				e.stopPropagation();

				var thisNavItem = $( e.target );

				if ( thisNavItem.hasClass('basil-children-showing') ){
					thisNavItem.removeClass('basil-children-showing');
					thisNavItem.find('> ul').hide();
				} else {
					thisNavItem.addClass('basil-children-showing');
					thisNavItem.find('> ul').show();
				}

			}

		});

		$('body').on('mouseleave','#basil-nav > div > ul > li',function(){
			var childrenParents = $(this).find('li.basil-children-showing');
			childrenParents.removeClass('basil-children-showing');
			childrenParents.find('> ul').hide();
		});

	}

})(jQuery, window, document);
