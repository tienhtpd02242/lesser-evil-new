(function ($) {

    $(document).ready(function () {
        $('.choice-ss .faq_list .item-faq .question').click(function (e) {
            e.preventDefault();

            $(this).next().slideToggle();
            $('.choice-ss .faq_list .item-faq').not($(this).parents('.item-faq')).removeClass('active');
            $('.choice-ss .faq_list .item-faq .answer').not($(this).next()).slideUp();
            $(this).parents('.item-faq').toggleClass('active');
        });

        $('.site-header .__toggle-menu').click(function () {
            $(this).toggleClass('active');
            $(this).next().toggleClass('active');
        });

    });

})(jQuery);