$(document).ready(function () {
    $('.filter-btn').on('click', function () {
        $(".filter-btn").each(function () {
            $(this).removeClass("active");
        });
        $(this).addClass("active");
        $("#gallery-content").justifiedGallery({filter: $(this).data('filter')});
    });
    $("#gallery-content").justifiedGallery({
        rowHeight: 200,
        margins: 3,
        randomize: true,
        // lastRow:"center",
    }).on('jg.complete', function () {
        $('#gallery-content').lightGallery();
        $('#gallery-content a:has(video)').lightGallery({
            videojs: true,
            selector: "#1"
        });
    });
});