$(document).ready(function () {
    $('.filter-btn').on('click', function () {
        $(".filter-btn").each(function () {
            $(this).removeClass("active");
        });
        $(this).addClass("active");
        $("#gallery-content").justifiedGallery({filter: $(this).data('filter')});
    });
    $("#gallery-content").justifiedGallery({
        rowHeight: 300,
        margins: 3,
        randomize: true,
        // lastRow:"center",
    }).on('jg.complete', function () {
        // $('#gallery-content .photos').lightGallery({
        //     selector: ".photos",
        //     hash: true,
        //     galleryId: 1
        // });
        // $('#gallery-content .design').lightGallery({
        //     selector: ".design",
        //     hash: true,
        //     galleryId: 2
        // });
        // $('#gallery-content .video').lightGallery({
        //     selector: ".video",
        //     hash: true,
        //     galleryId: 3
        // });
    });
})