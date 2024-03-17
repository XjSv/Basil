var $_BoxyConditionalTimeout  = false;

(function( $ ) {

    $(document).ready(function() {

        var $_BoxyConditionals = $('.boxy-conditional-hidden');

        // Conditional Fields (Recipes and Settings Pages)
        if ($_BoxyConditionals.length){
            var conditionalFields = [];
            $_BoxyConditionals.each(function(){
                var thisBlock = $(this),
                    thisBlockType,
                    thisID = $(this).data('condition'),
                    thisVal = $(this).data('value'),
                    thisField = $('#'+thisID);

                if (thisVal){
                    thisVal = thisVal.split(' ');
                } else {
                    thisVal = false;
                }

                if ( thisBlock.is('td') || thisBlock.is('th') ) {
                    thisBlockType = 'table-cell';
                } else if ( thisBlock.is('tr') ) {
                    thisBlockType = 'table-row';
                } else if ( thisBlock.is('li') || thisBlock.is('span') ) {
                    thisBlockType = 'inline-block';
                } else {
                    thisBlockType = 'block';
                }

                if (thisField.is(":checkbox") && thisField.is(":checked") || thisField.is(":radio") && thisField.is(":checked")) {
                    thisBlock.css({'display':thisBlockType});
                } else if (thisField.is(":checkbox") && !thisField.is(":checked") || thisField.is(":radio") && !thisField.is(":checked")) {
                    thisBlock.hide();
                } else if (!thisField.is(":checkbox") && !thisVal && thisField.val() || !thisField.is(":checkbox") && thisVal && $.inArray(thisField.val(),thisVal) > -1){
                    thisBlock.css({'display':thisBlockType});
                } else if (!thisField.is(":radio") && !thisVal && thisField.val() || !thisField.is(":radio") && thisVal && $.inArray(thisField.val(),thisVal) > -1){
                    thisBlock.css({'display':thisBlockType});
                } else {
                    thisBlock.hide();
                }

                if ($.inArray(thisID,conditionalFields) == -1){
                    conditionalFields.push(thisID);
                }

                var conditionalsLength = conditionalFields.length;
                for (var i = 0; i < conditionalsLength; i++) {
                    boxy_init_conditional_field(thisID);
                }

            });
        }

    });
})( jQuery );

// Cooked Conditional Fields Function
function boxy_init_conditional_field(thisID){

    var thisField = jQuery('#'+thisID);

    if (thisField.is(':radio')){
        jQuery('body').find('input:radio').on('change',function(){
            if (!thisField.is(':checked')){
                jQuery('body').find("[data-condition='" + thisID + "']").each(function(){
                    jQuery(this).hide();
                });
            }
        });
    }

    thisField.on('change',function(){

        window.clearTimeout($_BoxyConditionalTimeout);
        $_BoxyConditionalTimeout = window.setTimeout(function(){

            jQuery('body').find("[data-condition='" + thisID + "']").each(function(){
                var thisBlock = jQuery(this),
                    thisBlockType;

                if ( thisBlock.is('td') || thisBlock.is('th') ) {
                    thisBlockType = 'table-cell';
                } else if ( thisBlock.is('tr') ) {
                    thisBlockType = 'table-row';
                } else if ( thisBlock.is('li') || thisBlock.is('span') ) {
                    thisBlockType = 'inline-block';
                } else {
                    thisBlockType = 'block';
                }

                var thisVal = thisBlock.data('value');

                if (thisVal){
                    thisVal = thisVal.split(' ');
                } else {
                    thisVal = false;
                }

                if (thisField.is(":checkbox") && thisField.is(":checked") || thisField.is(":radio") && thisField.is(":checked")) {
                    thisBlock.css({'display':thisBlockType});
                } else if (thisField.is(":checkbox") && !thisField.is(":checked")) {
                    thisBlock.hide();
                } else if (!thisField.is(":checkbox") && !thisVal && thisField.val() || !thisField.is(":checkbox") && thisVal && jQuery.inArray(thisField.val(),thisVal) > -1){
                    thisBlock.css({'display':thisBlockType});
                } else if (!thisField.is(":radio") && !thisVal && thisField.val() || !thisField.is(":radio") && thisVal && jQuery.inArray(thisField.val(),thisVal) > -1){
                    thisBlock.css({'display':thisBlockType});
                } else {
                    thisBlock.hide();
                }
            });

        },25);

    });

}