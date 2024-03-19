;(function ( $, window, document, undefined ) {

    var page_setting_top_value = false;

    if ( $('#basil-recipe-finder').length ){

        $('#basil-recipe-finder').selectize({
            plugins: ['drag_drop'],
            valueField: 'id',
            labelField: 'title',
            searchField: 'title',
            maxItems: 10,
            options: [],
            create: false,
            render: {
                option: function(item, escape) {
                    return '<div>' +
                        '<span class="title">' +
                            '<span class="name">' + escape( item.title ) + '</span>' +
                        '</span>' +
                    '</div>';
                }
            },
            onChange: function (value){

                if ( value == null ){
                    if ( page_setting_top_value ){
                        $( '#basil_page_settings_page_thumbnail_layout' ).val( page_setting_top_value );
                    }
                } else {
                    var current_value = $( '#basil_page_settings_page_thumbnail_layout' ).find(":selected").val();
                    if ( current_value != 'recipe_slider' ){
                        page_setting_top_value = current_value;
                    }
                    $( '#basil_page_settings_page_thumbnail_layout' ).val('recipe_slider');
                }

            },
            load: function (query, callback) {
                this.refreshItems();
                if (!query.length) return callback();
                $.ajax({
                    url: brf_vars.rest_url,
                    type: 'GET',
                    dataType: 'json',
                    data: {
                        search: query,
                        per_page: 10
                    },
                    error: function() {
                        callback();
                    },
                    success: function(res) {
                        var item = {}, items = [];
                        for (var key in res) {
                            if (!res.hasOwnProperty(key)) continue;
                            var obj = res[key];
                            for (var prop in obj) {
                                if(!obj.hasOwnProperty(prop)) continue;
                                if ( prop == 'id' ){
                                    var id = obj[prop];
                                } else if ( prop == 'title' ){
                                    var title = obj[prop].rendered;
                                }
                            }
                            item = { id: id, title: title };
                            items.push( item );
                        }
                        callback(items);
                    }
                });
            }
        });

    }

})(jQuery, window, document);
