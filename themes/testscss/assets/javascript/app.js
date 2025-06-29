jQuery(document).ready(function($){
    hamburgerMenu();
    variantSelector();

    let event = new Event('customEv');
    console.log(Snowboard.trigger(event));

    // console.log(Snowboard.request(null, 'onMyCustom'));

    function hamburgerMenu() {
        const hamburgerBtn = $('#hamburger-button');
        const hamburgerMenu = $('.header__right');

        hamburgerBtn.click(function () {
            hamburgerBtn.toggleClass('active');
            hamburgerMenu.toggleClass('active');
        });
    }

    function variantSelector() {
        const variants = $('#variant-items > div > input');
        const prices = $('#variant-prices > div');

        variants.change(function () {
            let parent = $(this).parent();

            prices.removeClass('active');
            prices.eq(parent.index()).addClass('active');
        });
    }

    function openBasketSummary() {

    }
});