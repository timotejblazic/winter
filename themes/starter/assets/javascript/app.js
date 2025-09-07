jQuery(document).ready(function ($) {
    hamburgerMenu();

    function hamburgerMenu()
    {
        const hamburgerBtn = $('#hamburger-button');
        const hamburgerMenu = $('.header__right');

        hamburgerBtn.click(function () {
            hamburgerBtn.toggleClass('active');
            hamburgerMenu.toggleClass('active');
        });
    }
});