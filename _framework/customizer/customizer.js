;(function ( $, window, document, undefined ) {

	$(window).on('load',function(){

		var conditionalsObj = bx_customizer_vars.conditionals;
		var iconsObj = bx_customizer_vars.icons;

		bx_update_icons( iconsObj )
		bx_check_conditionals( conditionalsObj );

		$('body').on('change','#customize-theme-controls input',function(){
			bx_check_conditionals( conditionalsObj );
		});

		$('body').on('change','#customize-theme-controls select',function(){
			bx_check_conditionals( conditionalsObj );
		});

	});

})(jQuery, window, document);

function bx_update_icons( iconsObj ){

	for (var id in iconsObj) {
		if (iconsObj.hasOwnProperty(id)) {

	   		var section = id;
	   		var icon = iconsObj[id];

	   		if ( section && icon ){

	   			jQuery( '#accordion-section-' + section ).find( '> h3' ).prepend( '<i class="fas fa-fw fa-' + icon + '"></i>' );
	   			jQuery( '#accordion-section-' + section ).find( '.customize-section-title h3 span' ).after( '<i class="fas fa-fw fa-' + icon + '"></i>' );

	   		}

	   }
	}

}

function bx_check_conditionals( conditionalsObj ){

	for (var id in conditionalsObj) {
		if (conditionalsObj.hasOwnProperty(id)) {

	   		var element_id = id;
	   		jQuery( '#customize-control-' + element_id ).hide();

	   		var obj = conditionalsObj[id];
	   		var obj_total_conditions = Object.keys(obj).length;
	   		var total_matched = 0;

	   		for (var prop in obj) {
	        	if (obj.hasOwnProperty(prop)) {

		        	if ( jQuery('[data-customize-setting-link="' + prop + '"]').attr('type') == 'checkbox' || jQuery('[data-customize-setting-link="' + prop + '"]').attr('type') == 'radio' ){
			        	var thisInput = jQuery('[data-customize-setting-link="' + prop + '"]:checked');
						if ( thisInput.attr('type') == "checkbox" || thisInput.attr('type') == "radio" ){
			        		var thisInputVal = thisInput.val();
		        		}
		        	} else if ( jQuery('[data-customize-setting-link="' + prop + '"]').is('select') ){
			        	var thisInput = jQuery('[data-customize-setting-link="' + prop + '"]');
			        	var thisInputVal = thisInput.val();
		        	}

		        	if ( thisInputVal == obj[prop] ){
			        	total_matched++;
		        	}
	         	}
	     	}

	     	if ( total_matched >= obj_total_conditions){
		     	jQuery( '#customize-control-' + element_id ).show();
	     	}

	   }
	}

}