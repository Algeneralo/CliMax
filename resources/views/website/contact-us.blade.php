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
    @includeIf('website.articles.banner',['title'=>"Contact Us",'name'=>'Contact Us','image'=>'contact-us-banner.jpg'])
    <div class="container-fluid pr-0 pl-0">
        <section id="contact-us" class="contact-us">
            <div class="container">
                <div class="row text-center">
                    <h1>We are here to help you</h1>
                </div>
                <div class="row">
                    <div class="col-lg-6 order-md-first order-last">
                        <div class="row">
                            <div class=" col-12">
                                <i class="fal fa-mobile"></i>
                                <label class="pl-4">+966 50 437 6733</label>
                            </div>
                            <div class=" col-12">
                                <i class="fal fa-phone fa-flip-horizontal"></i>
                                <label class="pl-4">+966103891462</label>
                            </div>
                            <div class=" col-12">
                                <i class="fal fa-envelope"></i>
                                <label class="pl-4">info@climaxevent-sa.com</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mapouter col-12">
                                <div class="gmap_canvas">
                                    <iframe id="gmap_canvas"
                                            src="https://maps.google.com/maps?q=75QX%2B58%20Al%20Khobar%20Saudi%20Arabia&t=&z=17&ie=UTF8&iwloc=&output=embed"
                                            frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                                    </iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-4 mb-md-0">
                        <form>
                            <div class="form-group">
                                <label for="form-name">Name</label>
                                <input required type="email" class="form-control" id="form-name" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <label for="form-email">Email Address</label>
                                <input required type="email" class="form-control" id="form-email"
                                       placeholder="Email Address">
                            </div>
                            <div class="form-group">
                                <label for="form-email">Message</label>
                                <textarea required class="form-control" id="form-message"
                                          placeholder="Your Message Here"></textarea>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn">Contact US</button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
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