(function($){
    $.fn.input = function(){
        var defaults = {};
        
        var methods = {
            outputAdd : function(){
                return this.each(function(){
                    var settings = $.extend( true, {
                        outputAttr : {
                            for : $(this).attr('name')
                        }
                    }, $(this).data('input-settings') );
                    settings.output = $(this)
                        .after('<output/>').next()
                        .attr(settings.outputAttr)
                        .html($(this).val());
                    $(this).bind('change.input.output', function(e){
                        var settings = $(this).data('input-settings');
                        settings.output.html($(this).val());
                    });
                    $(this).addClass('output');
                    return $(this).data('input-settings', settings)
                });
            },
            range : function( options ){
                return this.each(function(){
                    $(this).input('setting', options)
                            .input('outputAdd')
                            .attr({
                                type : 'range'
                            });
                });
            },
            setting : function( options ){
                return this.each(function(){
                    if (typeof $(this).data('input-settings') === 'undefined')
                        var settings = $.extend( true, {}, defaults, options );
                    else
                        var settings = $.extend( true, {}, $(this).data('input-settings'), options );
                    $(this).data('input-settings', settings);
                });
            }
        }
        
        if (arguments[0] in methods)
        {
            args = Array.prototype.slice.call(arguments, 1);
            return methods[arguments[0]].apply(this, args);
        }
        else
        {
            console.log(arguments[0]+' does not exist');
            return this;
        }
    }
})(jQuery);

(function($){
    $(document).ready(function(){
        //input scripts
        $('input[type=number]').input('range');
    });
})(jQuery);