/**
 * Created by José Angel Lujan Villaseñor on 23/05/2017.
 */
$(window).scroll(function() {
    var $nav = $('.navbar .collapse-container');
    var $navHeight = $('.navbar').height();
    var scrollTop = $(this).scrollTop();
    var topDistance = $nav.offset().top;
    if(topDistance < scrollTop) {
        $nav.addClass('scrolling');
    }
    if(scrollTop < $navHeight) {
        $nav.removeClass('scrolling');
    }
});

$(document).ready(function () {
    $('.nav-tab-menu a').click(function () {
        var tab = $(this).closest('.img-container');
        if ( !tab.hasClass('active') ) {
            tab.addClass('active');
        }
        $('.nav-tab-menu a').each(function () {
            var currentTab = $(this).closest('.img-container');
            if( !currentTab.is(tab) ) {
                currentTab.removeClass('active');
            }
        });
    });
});

/* PARALLAX PLUGIN */
$(document).ready(function () {
    $('.parallax-element').each(function () {
        var parallaxEl = $(this);

        parallaxEl.css('background-image', 'url("' + parallaxEl.data('parallax') + '")');
        parallaxEl.css('background-repeat', 'no-repeat');
        parallaxEl.css('background-position', 'center center');
    });
});
