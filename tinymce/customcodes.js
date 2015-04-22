(function() {
    
    var buttons = ["md1", "md2", "md3", "md4", "md5", "md6", "md7", "md8", "md9", "md10", "md11", "md12", "row"];
        
    tinymce.create('tinymce.plugins.mybuttons', {
    
        init : function(ed, url) {
            
            buttons.forEach(function(button){
               ed.addButton(button, {
                    title : button,
                    image : url+'/'+button+'.png',
                
                    onclick : function() {
                         ed.selection.setContent('['+button+']' + ed.selection.getContent() + '[/'+button+']');
                    }
                });
            });
        },
        createControl : function(n, cm) {
            return null;
        },
    });
    tinymce.PluginManager.add('mybuttons', tinymce.plugins.mybuttons);
})();