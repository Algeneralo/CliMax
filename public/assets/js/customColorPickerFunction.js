$(function () {
    var h1 = $("#imagePreview").find('h1');
    var h3 = $("#imagePreview").find('h3');
    if ($("#imagePreview").css("background-image") != "none") {
        h1.show()
        h3.show()
    }
    // h3.text($('input[name="first_text"]').val())
    // h1.text($('input[name="second_text"]').val())
    $colorPicker = $('.color-picker input').colorpicker();


    $('.color-picker input').on('change', function () {
        $(this).parent().find('span').css("background-color", $(this).val());
        if ($(this).attr('name') === "first_text_color")
            h3.css('color', $(this).val());
        else
            h1.css('color', $(this).val());
    });
    //change text and it's color on image avatar
    $("#first_text").on("input", function () {
        if ($(this).val().length > 0) {
            h3.text($(this).val());
            h3.css('color', $('input[name="first_text_color"]').val());
            h3.show();
        } else {
            h3.hide()
        }
    })
    $("#second_text").on("input", function () {
        if ($(this).val().length > 0) {
            h1.text($(this).val())
            h1.css('color', $('input[name="second_text_color"]').val());
            h1.show();
        } else {
            h1.hide()
        }
    })
});