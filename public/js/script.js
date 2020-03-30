$(window).scroll(function () {
    var wScroll = $(this).scrollTop();

    $('.info-panel img').css({
        'transform': 'translate(0px, ' + wScroll / 6 + '%)'
    });

    $('.info-panel').css({
        'transform': 'translate(0px, ' + wScroll / 4 + '%)'
    });

    if (wScroll > 75) {
        $('.trans').addClass('show')
    }

    if (wScroll > 500) {
        $('.certificates .img-thumbnail').each(function (i) {
            setTimeout(function () {
                $('.certificates .img-thumbnail').eq(i).addClass('show')
            }, 300 * (i + 1));
        });
    }
});
