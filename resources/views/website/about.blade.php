@extends('website.layout')
@section('body')
    @includeIf('website.articles.banner',['title'=>"We’ll make your next celebration very special!",'name'=>'Who We Are','image'=>'about-banner.jpg'])
    <section class="about">
        <div class="container">
            <div class="row">
                <div class="mx-auto mb-5">
                    <h3>Climax</h3>
                </div>
            </div>
            <div class="row">
                <div class="text-center">
                    <p>
                        {{$config->message??"Climax Event is a leader in total brand activation, it brings brands to life. We organize and
                        setup
                        high-quality events to reach clients’ optimum satisfaction through our permanent endeavors to
                        excellence and improvement of our services constantlyss."}}
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="about-offer">
        <div class="container">
            <div class="row">
                <div class="col- col-md-6">
                    <h1 class="mb-5">What we offer</h1>
                    <p class="pr-md-5">
                        Each event and client is unique and we believe our services should be as well. We know that it
                        should be “Can I hire a planner?” not “Can I afford one?”.
                    </p>
                    <a class="btn mt-3">More Services</a>
                </div>
            </div>
        </div>
        <div class="about-offer-img d-none d-md-block">
            <img src="{{asset('assets/images/website/about-offer.jpg')}}">
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
    <section id="contact-us" class="contact-us">
        <div class="container">
            <div class="row text-center">
                <h1>We are here to help you</h1>
            </div>
            <div class="row d-flex justify-content-center text-center">
                <div class="col-md-3">
                    <i class="fal fa-mobile"></i>
                    <label class="pl-4">+966 50 437 6733</label>
                </div>
                <div class="col-md-3">
                    <i class="fal fa-phone fa-flip-horizontal"></i>
                    <label class="pl-4">+966103891462</label>
                </div>
                <div class="col-md-3">
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
    </section>
@endsection
@section('script')
    <script>
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
                },

            }
        });
    </script>
@endsection