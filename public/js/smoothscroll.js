$('.smoothscroll').click(function(e) {
    e.preventDefault();
    $('html, body').animate({
        scrollTop: $( $.attr(this, 'href') ).offset().top
    }, {
        duration: 1500,
        easing: 'easeInOutCubic'
    });
});