const $ = window.jQuery;

let mobileMenu = $('#mobile-menu');

$('#mobile-menu-display').on('click', function() {
    mobileMenu.css({'opacity': '1.0', 'z-index': '10000000'});
});

$('#click-to-close').on('click', function() {
    mobileMenu.css({'opacity': '0', 'z-index': '-1000'});
});

$('#header-nav-search-icon').on('click', function() {
    $('.header-search-field-wrapper').fadeToggle();
});
