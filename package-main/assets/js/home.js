(function( $ ){

    $(document).ready( function() {
        $('.choice-ss .faq_list .item-faq .question').click( function(e) {
            e.preventDefault();

            $(this).next().slideToggle();
            $(this).parents('.item-faq').toggleClass('active');
        });
    });

})( jQuery );