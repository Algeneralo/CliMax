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

        #gallery-content img, #gallery-content a {
            -webkit-transition: all 0.5s ease;
            -moz-transition: all 0.5s ease;
            -o-transition: all 0.5s ease;
            transition: all 0.5s ease;
        }
    </style>
@endsection
@section('body')
    @includeIf('website.articles.banner',['title'=>"Gallery",'name'=>'Gallery','image'=>'gallery-banner.jpg'])
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

            <a href="assets/images/upload/Ahsaa event.mp4" class="video">
                <img src="assets/images/upload/Ahsaa event.mp4" title="Image Title">
            </a>
            <a href="assets/images/upload/DSC_7396.JPG" class="photos">
                <img src="assets/images/upload/DSC_7396.JPG" title="Image Title">
            </a>
            <a href="assets/images/upload/DSC_7417.JPG" class="photos">
                <img src="assets/images/upload/DSC_7417.JPG" title="Image Title">
            </a>
            <a href="assets/images/upload/DSC_7429.JPG" class="photos">
                <img src="assets/images/upload/DSC_7429.JPG" title="Image Title">
            </a>
            <a href="assets/images/upload/DSC_7435.JPG" class="photos">
                <img src="assets/images/upload/DSC_7435.JPG" title="Image Title">
            </a>
            <a href="assets/images/upload/DSC_7471.JPG" class="photos">
                <img src="assets/images/upload/DSC_7471.JPG" title="Image Title">
            </a>
            <a href="assets/images/website/gallery-1.JPG" class="photos">
                <img src="assets/images/website/gallery-1.JPG" title="Image Title">
            </a>
            <a href="assets/images/website/gallery-1.JPG" class="photos">
                <img src="assets/images/website/gallery-1.JPG" title="Image Title">
            </a>
            <a href="assets/images/upload/1234.jpg" class="design">
                <img src="assets/images/upload/1234.jpg" title="Image Title">
            </a>
            <a href="assets/images/upload/3215.jpg" class="design">
                <img src="assets/images/upload/3215.jpg" title="Image Title">
            </a>
            <a href="assets/images/upload/4325.jpg" class="design">
                <img src="assets/images/upload/4325.jpg" title="Image Title">
            </a>
            <a href="assets/images/upload/5463.jpg" class="design">
                <img src="assets/images/upload/5463.jpg" title="Image Title">
            </a>
            <a href="assets/images/upload/54321.jpg" class="design">
                <img src="assets/images/upload/54321.jpg" title="Image Title">
            </a>
            <a href="assets/images/upload/Cap23.jpg" class="design">
                <img src="assets/images/upload/Cap23.jpg" title="Image Title">
            </a>
            <a href="assets/images/upload/Capture12.jpg" class="design">
                <img src="assets/images/upload/Capture12.jpg" title="Image Title">
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