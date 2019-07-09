@extends('website.layout')
@section('body')

    <section id="slider">
        <div id="image-slider" data-interval="6000" class="carousel slide carousel-fade" data-ride="carousel"
             data-pause="false">
            <ol class="carousel-indicators">
                <li data-target="#image-slider" data-slide-to="0" class="active"></li>
                <li data-target="#image-slider" data-slide-to="1"></li>
                <li data-target="#image-slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="assets/images/website/slider4.jpg" alt="First slide">
                    <div class="carousel-caption">
                        <h4 class="bounceInDown">Let’s have a party! </h4>
                        <p class="fadeInLeft" style="color: white">We plan the best events</p>
                        <a class="btn bounceInRight">Online Request</a>
                    </div>

                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="assets/images/website/slider2.jpg" alt="Second slide">
                    <div class="carousel-caption">
                        <h4 class="bounceInDown">Let’s have a party! </h4>
                        <p class="fadeInLeft" style="color: #2A348C">We plan the best events</p>
                        <a class="btn bounceInRight">Online Request</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="assets/images/website/slider3.jpg" alt="Second slide">
                    <div class="carousel-caption">
                        <h4 class="bounceInDown">Let’s have a party! </h4>
                        <p class="fadeInLeft" style="color: white">We plan the best events</p>
                        <a class="btn bounceInRight">Online Request</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--<div class="main-scroll">-->
    <section id="services" class="services">
        <div class="container">
            <div class="row">
                <h4 class="col-12 text-center">Hello there!</h4>
                <p class="col-12 text-center">
                    We’ll make your next celebration very special!
                </p>
                <div class="row services-body text-center d-flex justify-content-center">
                    <div class="services-item card col-lg-3 col-sm-6">
                        <img class="card-img-top" src="assets/images/website/service-2.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title text-center h-100 justify-content-center align-items-center d-flex">
                                <a href="#">Graphic design</a>
                            </h5>
                        </div>
                    </div>
                    <div class="services-item card col-lg-3 col-sm-6">
                        <img class="card-img-top" src="assets/images/website/service-3.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title text-center h-100 justify-content-center align-items-center d-flex">
                                <a href="#">Event management</a>
                            </h5>
                        </div>
                    </div>
                    <div class="services-item card col-lg-3 col-sm-6">
                        <img class="card-img-top" src="assets/images/website/service-4.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title text-center h-100 justify-content-center align-items-center d-flex">
                                <a href="#">Interior design</a>
                            </h5>
                        </div>
                    </div>
                    <div class="services-item card col-lg-3 col-sm-6">
                        <img class="card-img-top" src="assets/images/website/service-1.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title text-center h-100 justify-content-center align-items-center d-flex">
                                <a href="#">Setup</a>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center">
                    <a id="services-button" href="/services" class="btn">
                        More Services
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section id="offers" class="offers">
        <div class="container">
            <div class="row">
                <div class="offer-items col-sm-7 col-md-6 pull-left">
                    <div class="offer-item col-6 col-sm-3">
                        <a>
                            {{--<i class="fal fa-pencil-paintbrush"></i>--}}
                            <img src="{{asset('assets/images/website/Creative.svg')}}">
                        </a>
                        <p class="text-center">Creative identities</p>
                    </div>
                    <div class="offer-item col-6 col-sm-3">
                        <a>
                            <img src="{{asset('assets/images/website/Printing_solutions.svg')}}">
                        </a>
                        <p class="text-center">Printing solutions</p>
                    </div>
                    <div class="offer-item col-6 col-sm-3">
                        <a>
                            <img src="{{asset('assets/images/website/Creating_plans.svg')}}" style="width: 68%;">
                        </a>
                        <p class="text-center">Creating plans</p>
                    </div>
                    <div class="offer-item col-6 col-sm-3">
                        <a>
                            <img src="{{asset('assets/images/website/Branding.svg')}}" style="width: 68%;">
                        </a>
                        <p class="text-center">Branding</p>
                    </div>
                    <div class="offer-item col-6 col-sm-3">
                        <a>
                            <img src="{{asset('assets/images/website/Agenda.svg')}}">
                        </a>
                        <p class="text-center">Agenda</p>
                    </div>
                    <div class="offer-item col-6 col-sm-3">
                        <a>
                            <img src="{{asset('assets/images/website/Reports.svg')}}">
                        </a>
                        <p class="text-center">Reports</p>
                    </div>
                </div>
                <div class="offset-md-1 offers-title col-md-5 col-sm-4 order-first order-sm-last">
                    <h1>What we offer</h1>
                    <p>Each event and client is unique, and we believe our services should be as well. We know what
                        hiring a
                        planner is all about!</p>
                    <!--<a class="btn" href="#">More Services</a>-->
                </div>
            </div>
        </div>
    </section>
    <section id="clients" class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-4 d-flex align-items-center">
                    <h3>Our Clients</h3>
                </div>
                <div class="offset-md-1 col-md-6">
                    <div class="clients-items owl-carousel">
                        <div class="client-item">
                            <img class="img-fluid" src="assets/images/upload/8rQgkvxt_400x400.jpg">
                        </div>
                        <div class="client-item">
                            <img class="img-fluid" src="assets/images/upload/329308478efa8.png">
                        </div>
                        <div class="client-item">
                            <img class="img-fluid" src="assets/images/upload/w8X0koju_400x400.jpg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="work-sample">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 p-lg-5">
                    <h1>Our working sample</h1>
                    <p>You have an event to plan and we have the solution. As the premier event planning company in our
                        country, we
                        know that it’s not “one size fits all.”</p>
                </div>
                <div class="col-md-6 p-0 pr-lg-3">
                    <div class="video-wrapper">

                        <video class="" controls>
                            <source src="assets/video/Ahsaa%20event.mp4" type="video/mp4"/>
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="gallery" class="gallery">
        <div class="container-fluid pt-3 pb-3">
            <div class="row">
                <img class="img-fluid col-md-6 pl-md-0 pr-md-0" src="assets/images/website/gallery-3.jpeg">
                <img class="img-fluid col-md-3 col-6 pr-md-0 pl-md-3" src="assets/images/website/gallery-1.JPG">
                <img class="img-fluid col-md-3 col-6 pr-md-0 pr-md-1" src="assets/images/website/gallery-4.JPG"
                     style="object-fit: cover;">
                <!--second row-->
                <img class="img-fluid col-md-3 col-6 pr-md-0 pl-md-0 pt-md-3" src="assets/images/website/gallery-2.JPG">
                <img class="img-fluid col-md-3 col-6 pr-md-0 pl-md-2 pt-md-3" src="assets/images/website/gallery-5.JPG"
                     style="object-fit: cover;">
                <div class="view-more col-md-6 pr-md-0 pl-md-3 pt-md-3">
                    <img class="img-fluid w-100" src="assets/images/website/service-1.jpg">
                    <div class="overlay">
                        <h3>See Our Best Events Gallery!</h3>
                        <a href="/gallery" class="btn">Visit Gallery</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
@endsection
@section('script')
    <script src="{{asset('assets/js/video-overlay.js')}}"></script>
    <script>
        //set active class to nav link on scroll
        var sections = $('section')
            , nav = $('nav')
            , nav_height = nav.outerHeight();
        $(document).on("scroll", function () {
            var cur_pos = $(this).scrollTop();

            sections.each(function () {
                var top = $(this).offset().top - nav_height,
                    bottom = top + $(this).outerHeight();

                if (cur_pos >= top && cur_pos <= bottom) {
                    nav.find('a').removeClass('active');
                    sections.removeClass('active');

                    $(this).addClass('active');
                    nav.find('a[href="#' + $(this).attr('id') + '"]').addClass('active');
                    if (nav.find('a[href="#' + $(this).attr('id') + '"]').addClass('active').length == 0)
                        nav.find('a[href="#slider"]').addClass('active');
                }
            });
        })
        $(document).ready(function () {
            $('#image-slider').carousel({});
            $(".owl-carousel").owlCarousel({
                rtl: "en",
                margin: 15,
                responsiveClass: true,
                autoplay: true,
                autoplayTimeout: 4000,
                responsive: {
                    0: {
                        items: 1,
                        loop: true,
                    },
                    576: {
                        items: 3,
                    }
                }
            });
        });
    </script>
@endsection