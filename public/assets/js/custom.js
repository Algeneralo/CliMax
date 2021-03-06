//navigation bar animation on scroll
$(document).on("scroll", function () {
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

$("#client_href").on("click", function (e) {
    e.preventDefault();
    if (window.location.pathname !== "/about" && window.location.pathname !== "/") {
        e.preventDefault();
        console.log("true")
        window.location.replace($(this).attr("href"));
    }
})

//navbar scroll down animation
$("a.nav-link").click(function (e) {
    //if it's not link,scroll down to section
    var navHeight = 0, scrollHieght = 0;
    if ($(this).attr("href").includes("#"))
        e.preventDefault();
    var href = $(this).attr("href");
    if ($(window).width() < 960 || window.location.pathname === "/about") {
        //colse navar tabs if it's opend
        if (!window.location.pathname === "/about")
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

    $("html, body").animate({scrollTop: scrollHieght}, 1500, 'swing', function () {
    });
});
