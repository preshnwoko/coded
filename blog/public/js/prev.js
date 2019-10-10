(function () {

    smoothScroll.init();

    / reveal animation on viewport /
    var $revealClass = $('.reveal');
    $revealClass.css({
        'animation-name': 'none',
        'visibility': 'hidden'
    });

    $revealClass.waypoint(function (direction) {
        var animationName = $(this).attr('data-anim'),
            animDelay = $(this).attr('data-delay'),
            animDuration = $(this).attr('data-duration');

        $(this).css({
            'animation-name': animationName,
            'animation-duration': animDuration,
            '-webkit-animation-delay': animDelay,
            '-moz-animation-delay': animDelay,
            'animation-delay': animDelay,
            'visibility': 'visible'
        });
    }, {
            offset: '75%'
        });
})()
