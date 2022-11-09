(function( $ ){

    $(document).ready( function() {
        $('.choice-ss .faq_list .item-faq .question').click( function(e) {
            e.preventDefault();

            $(this).next().slideToggle();
            $(this).parents('.item-faq').toggleClass('active');
        });

        $('.site-header .__toggle-menu').click( function() {
            $(this).toggleClass('active');
            $(this).next().toggleClass('active');
        });

    });

})( jQuery );