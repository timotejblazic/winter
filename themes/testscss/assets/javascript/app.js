jQuery(document).ready(function ($) {
    hamburgerMenu();
    variantSelector();
    basketSummary();



    function hamburgerMenu()
    {
        const hamburgerBtn = $('#hamburger-button');
        const hamburgerMenu = $('.header__right');

        hamburgerBtn.click(function () {
            hamburgerBtn.toggleClass('active');
            hamburgerMenu.toggleClass('active');
        });
    }

    function variantSelector()
    {
        const variants = $('#variant-items > div > input');
        const prices = $('#variant-prices > div');

        variants.change(function () {
            let parent = $(this).parent();

            prices.removeClass('active');
            prices.eq(parent.index()).addClass('active');
        });
    }

    function basketSummary()
    {
        $('#add-to-cart-form').on('ajaxDone', function () {
            $('#offscreen-basket-summary').addClass('active');
        });

        $('#basket-summary-open-button').on('click', function () {
            $('#offscreen-basket-summary').addClass('active');
        });

        $('#offscreen-basket-summary-close, #basket-summary-close').on('click', function () {
            $('#offscreen-basket-summary').removeClass('active');
        });
    }
});