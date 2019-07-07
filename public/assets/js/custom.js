var sections = $('section')
    , nav = $('nav')
    , nav_height = nav.outerHeight();

//navigation bar animation on scoll and activate nav link
$(document).on("scroll", function () {
    var cur_pos = $(this).scrollTop();

    sections.each(function () {
        var top = $(this).offset().top - nav_height,
            bottom = top + $(this).outerHeight();

        if (cur_pos >= top && cur_pos <= bottom) {
            nav.find('a').removeClass('active');
            sections.removeClass('active');

            $(this).addClass('active');
            nav.find('a[href="#' + $(this).attr('id') + '"]').addClass('active');
        }
    });

    if ($(document).scrollTop() > 2) {
        $("nav").addClass("shrink fixed-top");

    } else {
        $("nav").removeClass("shrink fixed-top");
    }
});
//navigation bar, add class when load page if it's not on top
$(window).on("load", function () {
    if ($(document).scrollTop() > 2)
        $("nav").addClass("shrink fixed-top");
});

//add overlay for video on home page
var videoPlayButton,
    videoWrapper = document.getElementsByClassName('video-wrapper')[0],
    video = document.getElementsByTagName('video')[0],
    videoMethods = {
        renderVideoPlayButton: function () {
            if (videoWrapper.contains(video)) {
                this.formatVideoPlayButton()
                video.classList.add('has-media-controls-hidden')
                videoPlayButton = document.getElementsByClassName('video-overlay-play-button')[0]
                videoPlayButton.addEventListener('click', this.hideVideoPlayButton)
            }
        },

        formatVideoPlayButton: function () {
            videoWrapper.insertAdjacentHTML('beforeend', '\
                <svg class="video-overlay-play-button" viewBox="0 0 200 200" alt="Play video">\
                    <circle cx="100" cy="100" r="75" fill="none" stroke-width="15" stroke="#fff"/>\
                    <polygon points="70, 55 70, 145 145, 100" fill="#fff"/>\
                </svg>\
            ')
        },

        hideVideoPlayButton: function () {
            video.play()
            videoPlayButton.classList.add('is-hidden')
            video.classList.remove('has-media-controls-hidden')
            video.setAttribute('controls', 'controls')
        }
    }

videoMethods.renderVideoPlayButton()

$("a.nav-link").click(function (e) {
    //if it's not link,scroll down to section
    var navHeight = 0, scrollHieght = 0;
    if ($(this).attr("href").includes("#"))
        e.preventDefault();
    var href = $(this).attr("href");
    if ($(window).width() < 960) {
        //colse navar tabs if it's opend
        $('.navbar-toggler').click();
        navHeight = Math.abs($(".navbar-collapse").height() - $("nav").height());
        scrollHieght = $(href).offset().top - navHeight;
        //remove navbar-collapse height
        if (!$('nav').hasClass("shrink"))
            scrollHieght -= $("nav").height();
    } else {
        navHeight = $("nav").height();
        scrollHieght = $(href).offset().top - navHeight;
    }

    $("html, body").animate({scrollTop: scrollHieght}, 500, 'swing', function () {
    });
});
