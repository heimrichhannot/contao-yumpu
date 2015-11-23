(function($){
    var Yumpu = {
        onReady : function(){
            this.responsiveYumpu();
        },
        onResize : function(){
            this.responsiveYumpu();
        },
        responsiveYumpu : function(){
            var $embed = $('.yumpu-embed'),
                $parent = $embed.parent();

            if($parent.length < 0) return false;

            $embed.css({
                'width' : $parent.innerWidth(),
                'height' : $parent.innerWidth() * .5625
            });
        }
    }

    $(document).ready(function(){Yumpu.onReady();});
    $(window).resize(function(){Yumpu.onResize();});


})(jQuery);