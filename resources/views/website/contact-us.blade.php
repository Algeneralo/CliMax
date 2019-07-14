@extends('website.layout')
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
                                            src="https://maps.google.com/maps?q=+{{$config->latitude??''}},{{$config->longitude??''}}+&hl=es;z=14&amp;output=embed"
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
    </div>
@endsection