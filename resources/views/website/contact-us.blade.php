@extends('website.layout')
@section('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.swipebox/1.4.4/css/swipebox.css"/>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/justifiedGallery/3.7.0/css/justifiedGallery.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.12/css/lightgallery.min.css">
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
                            <?php
                            $url = "https://www.google.com/maps/place/26°17'16.6\"N+50°11'53.9\"E/@26.287937,50.1961233,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x0!8m2!3d26.287937!4d50.198312?hl=en-US";
                            preg_match('/@(\-?[0-9]+\.[0-9]+),(\-?[0-9]+\.[0-9]+)/', $url, $match);
                            ?>
                            <div class="mapouter col-12">
                                <div class="gmap_canvas">
                                    <iframe id="gmap_canvas"
                                            src="https://maps.google.com/maps?q=+{{$match[1]}},{{$match[2]}}+&hl=es;z=14&amp;output=embed"
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