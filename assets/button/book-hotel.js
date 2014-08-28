(function() {
    tinymce.create('tinymce.plugins.SlimTrader', {
        init : function(ed, url) {
            ed.addButton('slim_trader_bookhotel', {
                title : 'Slim Trader Book Hotel Button',
                cmd : 'bookhotel',
                image : url + '/st.jpg'
                //text : 'Slim Trader'
            });

            ed.addCommand('bookhotel', function() {
                var shortcode='';
                shortcode = '[slim-trader-book-hotel-button]';
                ed.execCommand('mceInsertContent', 0, shortcode);
            });
        },
       
    });
    // Register plugin
    tinymce.PluginManager.add( 'slim_trader', tinymce.plugins.SlimTrader );
})();
