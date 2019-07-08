@extends('website.layout')
@section('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.swipebox/1.4.4/css/swipebox.css"/>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/justifiedGallery/3.7.0/css/justifiedGallery.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.12/css/lightgallery.min.css">
    <style>
        nav {
            position: relative !important;
        }

        .bg-white {
            background-color: #fff !important;
        }

        .navbar-dark .navbar-nav .nav-link {
            color: #9d9c9b !important;
        }

    </style>
    <link href="https://unpkg.com/nanogallery2@2.4.2/dist/css/nanogallery2.min.css" rel="stylesheet" type="text/css">
    <link href="http://vjs.zencdn.net/4.12/video-js.css" rel="stylesheet">
    <script src="http://vjs.zencdn.net/4.12/video.js"></script>
@endsection
@section('body')
    @includeIf('website.articles.banner',['title'=>"Our Best Events Gallery",'name'=>'Gallery','image'=>'gallery-banner.jpg'])
    <div class="container-fluid photos">
        <div class="col-12 photos-header text-center">
            <h3 class="mb-4">Portfolio</h3>
            <h2>Our Best Events Gallery</h2>
        </div>
        <div class="col-12 text-center mt-5 mb-4">
            <button class="btn bg-transparent filter-btn active" data-filter="false"><span>All</span></button>
            <button class="btn bg-transparent filter-btn" data-filter=".photos"><span>Photos</span></button>
            <button class="btn bg-transparent filter-btn" data-filter=".design"><span>Design</span></button>
            <button class="btn bg-transparent filter-btn" data-filter=".video"><span>Video</span></button>
        </div>
        <div id="gallery-content">

            <a href="assets/images/upload/Ahsaa event.mp4" class="video swipebox-video">
                <div style="display:none;" id="video1">
                    <video class="lg-video-object lg-html5 video-js vjs-default-skin" controls preload="none">
                        <source src="assets/images/upload/Ahsaa event.mp4" type="video/mp4">
                        Your browser does not support HTML5 video.
                    </video>
                </div>
                <li data-poster="{{asset('assets/images/website/video-overlay.jpg')}}"
                    data-sub-html="video caption1"
                    data-html="#video1">
                    <img class="w-100" src="{{asset('assets/images/website/video-overlay.jpg')}}"/>
                    <div class="overlay w-100 h-100 d-flex justify-content-center align-items-center">
                        <i class="fal fa-play-circle"></i>
                    </div>
                </li>
            </a>

            <a href="assets/images/upload/DSC_7396.JPG" data-src="assets/images/upload/DSC_7396.JPG" rel="photos"
               class="photos">
                <img src="assets/images/upload/DSC_7396.JPG" title="Image Title">
                <div class="overlay w-100 h-100 d-flex justify-content-center align-items-center">
                    <i class="far fa-search"></i>
                </div>
            </a>
            <a href="assets/images/upload/DSC_7417.JPG" rel="photos" class="photos">
                <img src="assets/images/upload/DSC_7417.JPG" title="Image Title">
                <div class="overlay w-100 h-100 d-flex justify-content-center align-items-center">
                    <i class="far fa-search"></i>
                </div>
            </a>
            <a href="assets/images/upload/DSC_7429.JPG" rel="photos" class="photos">
                <img src="assets/images/upload/DSC_7429.JPG" title="Image Title">
                <div class="overlay w-100 h-100 d-flex justify-content-center align-items-center">
                    <i class="far fa-search"></i>
                </div>
            </a>
            <a href="assets/images/upload/DSC_7435.JPG" rel="photos" class="photos">
                <img src="assets/images/upload/DSC_7435.JPG" title="Image Title">
                <div class="overlay w-100 h-100 d-flex justify-content-center align-items-center">
                    <i class="far fa-search"></i>
                </div>
            </a>
            <a href="assets/images/upload/DSC_7471.JPG" rel="photos" class="photos">
                <img src="assets/images/upload/DSC_7471.JPG" title="Image Title">
                <div class="overlay w-100 h-100 d-flex justify-content-center align-items-center">
                    <i class="far fa-search"></i>
                </div>
            </a>
            <a href="assets/images/website/gallery-1.JPG" rel="photos" class="photos">
                <img src="assets/images/website/gallery-1.JPG" title="Image Title">
                <div class="overlay w-100 h-100 d-flex justify-content-center align-items-center">
                    <i class="far fa-search"></i>
                </div>
            </a>
            <a href="assets/images/website/gallery-1.JPG" rel="photos" class="photos">
                <img src="assets/images/website/gallery-1.JPG" title="Image Title">
                <div class="overlay w-100 h-100 d-flex justify-content-center align-items-center">
                    <i class="far fa-search"></i>
                </div>
            </a>
            <a href="assets/images/upload/1234.jpg" rel="design" class="design">
                <img src="assets/images/upload/1234.jpg" title="Image Title">
                <div class="overlay w-100 h-100 d-flex justify-content-center align-items-center">
                    <i class="far fa-search"></i>
                </div>
            </a>
            <a href="assets/images/upload/3215.jpg" rel="design" class="design">
                <img src="assets/images/upload/3215.jpg" title="Image Title">
                <div class="overlay w-100 h-100 d-flex justify-content-center align-items-center">
                    <i class="far fa-search"></i>
                </div>
            </a>
            <a href="assets/images/upload/4325.jpg" rel="design" class="design">
                <img src="assets/images/upload/4325.jpg" title="Image Title">
                <div class="overlay w-100 h-100 d-flex justify-content-center align-items-center">
                    <i class="far fa-search"></i>
                </div>
            </a>
            <a href="assets/images/upload/5463.jpg" rel="design" class="design">
                <img src="assets/images/upload/5463.jpg" title="Image Title">
                <div class="overlay w-100 h-100 d-flex justify-content-center align-items-center">
                    <i class="far fa-search"></i>
                </div>
            </a>
            <a href="assets/images/upload/54321.jpg" rel="design" class="design">
                <img src="assets/images/upload/54321.jpg" title="Image Title">
                <div class="overlay w-100 h-100 d-flex justify-content-center align-items-center">
                    <i class="far fa-search"></i>
                </div>
            </a>
            <a href="assets/images/upload/Cap23.jpg" rel="design" class="design">
                <img src="assets/images/upload/Cap23.jpg" title="Image Title">
                <div class="overlay w-100 h-100 d-flex justify-content-center align-items-center">
                    <i class="far fa-search"></i>
                </div>
            </a>
            <a href="assets/images/upload/Capture12.jpg" rel="design" class="design">
                <img src="assets/images/upload/Capture12.jpg" title="Image Title">
                <div class="overlay w-100 h-100 d-flex justify-content-center align-items-center">
                    <i class="far fa-search"></i>
                </div>
            </a>

        </div>

    </div>
@endsection
@section('script')
    <script src="{{asset("assets/js/jquery.swipebox.js")}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/justifiedGallery/3.7.0/js/jquery.justifiedGallery.min.js"></script>
    <!-- endbower -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.12/js/lightgallery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.12/js/lightgallery-all.min.js"></script>
    <script src="{{asset('assets/js/gallery-filter.js')}}"></script>

@endsection