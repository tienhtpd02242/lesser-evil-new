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

        $(document).on('click', 'a[href^="#"]', function (e) {
            // target element id
            var id = $(this).attr('href');

            // target element
            var $id = $(id);
            if ($id.length === 0) {
                return;
            }

            // prevent standard hash navigation (avoid blinking in IE)
            e.preventDefault();

            // top position relative to the document
            var pos = $id.offset().top;

            // animated top scrolling
            $('body, html').animate({ scrollTop: pos - 20 }, 2000);
            return false;

        });

    });

})(jQuery);