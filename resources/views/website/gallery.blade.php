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
    @includeIf('website.articles.banner',['title'=>"Gallery",'name'=>'Gallery','image'=>'sss.s'])
    <div class="container-fluid photos">
        <div class="col-12 photos-header text-center">
            <h3>Portfolio</h3>
            <h2>Our Best Events Gallery</h2>
        </div>
        <div class="col-12 text-center">
            <button class="btn btn-success filter-btn active" data-filter="false">All</button>
            <button class="btn btn-success filter-btn" data-filter=".photos">Photos</button>
            <button class="btn btn-success filter-btn" data-filter=".design"> Design</button>
            <button class="btn btn-success filter-btn" data-filter=".video"> Video</button>
        </div>
        <div id="gallery-content">

            <a href="assets/images/gallery-1.JPG" class="photos">
                <img src="assets/images/gallery-1.JPG" title="Image Title">
            </a>
            <a href="assets/images/slider2.jpg" class="design">
                <img src="assets/images/slider2.jpg" title="Image Title">
            </a>
            <a href="assets/images/gallery-2.JPG" title="Image Title" class="design">
                <img src="assets/images/gallery-2.JPG">
            </a>
            <a href="assets/images/gallery-1.JPG" title="Image Title" class="photos">
                <img src="assets/images/gallery-1.JPG">
            </a>
            <a href="assets/images/gallery-1.JPG" title="Image Title" class="video">
                <img src="assets/images/gallery-1.JPG">
            </a>
            <a href="assets/images/gallery-1.JPG" class="photos">
                <img src="assets/images/gallery-1.JPG" title="Image Title">
            </a>
            <a href="assets/images/slider2.jpg" class="design">
                <img src="assets/images/slider2.jpg" title="Image Title">
            </a>
            <a href="assets/images/gallery-2.JPG" title="Image Title" class="design">
                <img src="assets/images/gallery-2.JPG">
            </a>
            <a href="assets/images/gallery-1.JPG" title="Image Title" class="photos">
                <img src="assets/images/gallery-1.JPG">
            </a>
            <a href="assets/images/gallery-1.JPG" title="Image Title" class="video">
                <img src="assets/images/gallery-1.JPG">
            </a>
            <a href="assets/images/gallery-1.JPG" class="photos">
                <img src="assets/images/gallery-1.JPG" title="Image Title">
            </a>
            <a href="assets/images/slider2.jpg" class="design">
                <img src="assets/images/slider2.jpg" title="Image Title">
            </a>
            <a href="assets/images/gallery-2.JPG" title="Image Title" class="design">
                <img src="assets/images/gallery-2.JPG">
            </a>
            <a href="assets/images/gallery-1.JPG" title="Image Title" class="photos">
                <img src="assets/images/gallery-1.JPG">
            </a>
            <a href="assets/images/gallery-1.JPG" title="Image Title" class="video">
                <img src="assets/images/gallery-1.JPG">
            </a>
            <a href="assets/images/gallery-1.JPG" class="photos">
                <img src="assets/images/gallery-1.JPG" title="Image Title">
            </a>
            <a href="assets/images/slider2.jpg" class="design">
                <img src="assets/images/slider2.jpg" title="Image Title">
            </a>
            <a href="assets/images/gallery-2.JPG" title="Image Title" class="design">
                <img src="assets/images/gallery-2.JPG">
            </a>
            <a href="assets/images/gallery-1.JPG" title="Image Title" class="photos">
                <img src="assets/images/gallery-1.JPG">
            </a>
            <a href="assets/images/gallery-1.JPG" title="Image Title" class="video">
                <img src="assets/images/gallery-1.JPG">
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