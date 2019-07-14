@extends('website.layout')
@section('body')

    <section id="slider">
        <div id="image-slider" data-interval="6000" class="carousel slide carousel-fade" data-ride="carousel"
             data-pause="false">
            <ol class="carousel-indicators">
                @foreach($slider as $item)
                    <li data-target="#image-slider" data-slide-to="{{$loop->index}}"
                        class="@if($loop->first) active @endif"></li>
                @endforeach
            </ol>
            <div class="carousel-inner">
                @foreach($slider as $item)
                    <div class="carousel-item @if($loop->first) active @endif">
                        <img class="d-block w-100" src="assets/images/upload/{{$item->image}}" alt="First slide">
                        <div class="carousel-caption">
                            <h4 class="bounceInDown"
                                style="color: {{$item->first_text_color}}"> {{$item->first_text}}</h4>
                            <p class="fadeInLeft"
                               style="color: {{$item->second_text_color}}"> {{$item->second_text}}</p>
                            <a class="btn bounceInRight">Online Request</a>
                        </div>

                    </div>
                @endforeach
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
                    @foreach($services as $service)
                        <div class="services-item card col-lg-3 col-sm-6">
                            <img class="card-img-top" src="assets/images/upload/{{$service->image}}"
                                 alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title text-center h-100 justify-content-center align-items-center d-flex">
                                    <a>{{$service->name}}</a>
                                </h5>
                            </div>
                        </div>
                    @endforeach
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
                        @foreach($clients as $client)
                            <div class="client-item">
                                <img class="img-fluid" src="assets/images/upload/{{$client->image}}">
                            </div>
                        @endforeach
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
                            <label class="pl-4">{{$config->phone??''}}</label>
                        </div>
                        <div class=" col-12">
                            <i class="fal fa-phone fa-flip-horizontal"></i>
                            <label class="pl-4">{{$config->telephone??''}}</label>
                        </div>
                        <div class=" col-12">
                            <i class="fal fa-envelope"></i>
                            <label class="pl-4">{{$config->email??''}}</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mapouter col-12">
                            <div class="gmap_canvas">
                                <iframe id="gmap_canvas"
                                        src="https://maps.google.com/maps?q=+{{$config->latitude??''}},{{$config->longitude??''}}+&hl=es;z=14&data=!3m1!4b1!4m5!3m4!1s0x3e49e8135c08b9ff:0xf8f56572cb60625e!8m2!3d26.2879117!4d50.1983293&amp;output=embed"
                                        frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                                </iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4 mb-md-0">
                    <form action="/contact-us" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="form-name">Name</label>
                            <input required type="text" name="name" class="form-control" id="form-name"
                                   placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label for="form-email">Email Address</label>
                            <input required type="email" name="email" class="form-control" id="form-email"
                                   placeholder="Email Address">
                        </div>
                        <div class="form-group">
                            <label for="form-email">Message</label>
                            <textarea required class="form-control" name="message" id="form-message"
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
                        loop: true,
                    }
                }
            });
        });
    </script>
@endsection