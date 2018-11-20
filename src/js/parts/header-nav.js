const $ = window.jQuery;

let mobileMenu = $('#mobile-menu');

$('#mobile-menu-display').on('click', function() {
    mobileMenu.css({'opacity': '1.0', 'z-index': '10000000'});
    
    // lock scroll position, but retain settings for later
    var scrollPosition = [
        self.pageXOffset || document.documentElement.scrollLeft || document.body.scrollLeft,
        self.pageYOffset || document.documentElement.scrollTop  || document.body.scrollTop
    ];
    var html = jQuery('html'); // it would make more sense to apply this to body, but IE7 won't have that
    html.data('scroll-position', scrollPosition);
    html.data('previous-overflow', html.css('overflow'));
    html.css('overflow', 'hidden');
    window.scrollTo(scrollPosition[0], scrollPosition[1]);
});

$('#click-to-close').on('click', function() {
    mobileMenu.css({'opacity': '0', 'z-index': '-1000'});

    // un-lock scroll position
    var html = jQuery('html');
    var scrollPosition = html.data('scroll-position');
    html.css('overflow', html.data('previous-overflow'));
    window.scrollTo(scrollPosition[0], scrollPosition[1])
});

$('#header-nav-search-icon').on('click', function() {
    $('.header-search-field-wrapper').fadeToggle();
});
