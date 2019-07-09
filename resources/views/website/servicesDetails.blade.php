@extends('website.layout')
@section('body')
    @includeIf('website.articles.banner',['title'=>"What We Offer",'name'=>'Our Lines','image'=>'services-banner.jpg'])
    <section class="details">
        <div class="container">
            <div class="row">
                <div class="col-md-3 sidebar">
                    <h4>Services</h4>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#"> Setup</a>
                        </li>
                        <li>
                            <a href="#"> Graphic Design</a>
                        </li>
                        <li>
                            <a href="#"> interior Design</a>
                        </li>
                        <li>
                            <a href="#"> Event Management</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-9">
                    <figure>
                        <div class="image">
                            <img src="{{asset('assets/images/website/service-1.jpg')}}">
                        </div>
                        <figcaption>
                            <h4>Photography and video production </h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci dolores eveniet harum
                                impedit laborum laudantium, nam nihil provident quidem repellat! Aliquid asperiores
                                atque blanditiis distinctio neque, odio perferendis quis voluptates?</p>
                        </figcaption>
                    </figure>
                </div>

            </div>
        </div>
    </section>
@endsection




