// //mouse wheel
// if (!$(document).scrollTop() == 0)
//     var current_section = 0;
// else {
//     Q
// }
// var sectionCounts = 6;
// $(window).mousewheel(function (event, delta) {
//     if (delta > 0) {
//         current_section = current_section - 1; //up
//         console.log(current_section);
//         // $('body, html').stop().animate({
//         //     scrollTop: $('section[id="section' + current_section + '"]').offset().top
//         // }, 'slow');
//     } else if (delta < 0) {
//         current_section = current_section + 1; //down
//         console.log(current_section);
//         // if (current_section < sectionCounts)
//         //     $('body, html').stop().animate({
//         //         scrollTop: $('section[id="section' + current_section + '"]').offset().top
//         //     }, 'slow');
//         // else return false;
//     }
//     return false;
// });
//
// $('body, html').scroll(function () {
//     return false;
// }); // allow no scrolling