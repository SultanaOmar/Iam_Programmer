if (!Modernizr.svg) {
    jQuery('img[src*="svg"]').attr('src', function() {
        return jQuery(this).attr('src').replace('.svg', '.png');
    });
}

jQuery(document).ready(function($) {

	
    (function() {

        var $tabsNav = $('.simple-tabs-nav'),
                $tabsNavLis = $tabsNav.children('li'),
                $tabContent = $('.simple-tabs-content');

        $tabsNav.each(function() {
            var $this = $(this);

            $this.next().children('.simple-tabs-content').stop(true, true).hide()
                    .first().show();

            $this.children('li').first().addClass('current').stop(true, true).show();
        });

        $tabsNavLis.on('click', function(e) {
            var $this = $(this);

            $this.siblings().removeClass('current').end()
                    .addClass('current');
            $this.parent().next().children('.simple-tabs-content').stop(true, true).hide()
                    .siblings($this.find('a').attr('href')).fadeIn();

            e.preventDefault();
        });

    })();
    
    (function() {

        var $container = $('.acc-container'),
                $trigger = $('.acc-trigger');

        $container.hide();
        $trigger.first().addClass('active').next().show();

        var fullWidth = $container.outerWidth(true);
        $trigger.css('width', fullWidth);
        $container.css('width', fullWidth);

        $trigger.on('click', function(e) {
            if ($(this).next().is(':hidden')) {
                $trigger.removeClass('active').next().slideUp(300);
                $(this).toggleClass('active').next().slideDown(300);
            }
            e.preventDefault();
        });

       
        $(window).on('resize', function() {
            fullWidth = $container.outerWidth(true)
            $trigger.css('width', $trigger.parent().width());
            $container.css('width', $container.parent().width());
        });

    })();

});
$(document).ready(function() {


    $("#ajax-contact-form").submit(function() {
        var str = $(this).serialize();
        $.ajax({
            type: "post",
            url: "contact-form/contact.php",
            data: str,
            success: function(msg) {
             
                if (msg == 'OK') {
                    result = '<div class="note-success">Your message has been sent. Thank you!</div>';
                    
                } else {
                    result = msg;
                }
                $('#note').html(result);
            }
        });
        return false;
    });

	$("a[rel^='prettyPhoto']").prettyPhoto();

});
