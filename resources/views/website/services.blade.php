@extends('website.layout')
@section('body')
    @includeIf('website.articles.banner',['title'=>"What We Offer",'name'=>'Our Lines','image'=>'services-banner.jpg'])
    <div class="container">
        <section id="services" class="services">
            <div class="container">
                <div class="row">
                    <h4 class="col-12 text-center">Hello there!</h4>
                    <p class="col-12 text-center">
                        We’ll make your next celebration very special!
                    </p>
                    <div class="row services-body text-center d-flex justify-content-center">

                        @foreach($services as $service)
                            <div class="services-item card col-lg-4 col-sm-6">
                                <img class="card-img-top" src="assets/images/upload/{{$service->image}}"
                                     alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title text-center ">
                                        <a>{{$service->name}}</a>
                                    </h5>
                                    <p class="card-text">
                                        {!! $service->details!!}
                                    </p>

                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection




