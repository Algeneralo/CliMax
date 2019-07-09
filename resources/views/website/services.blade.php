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

                        <div class="services-item card col-lg-4 col-sm-6">
                            <img class="card-img-top" src="assets/images/website/service-1.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title text-center ">
                                    <a>Setup</a>
                                </h5>
                                <p class="card-text">
                                    Stages, booths, tents, electrical works & equipment, safety equipment, portable
                                    (bathroom – workstations), sound systems and light systems
                                </p>

                            </div>
                        </div>

                        <div class="services-item card col-lg-4 col-sm-6">
                            <img class="card-img-top" src="assets/images/website/service-2.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title text-center ">
                                    <a>Graphic design</a>
                                </h5>
                                <p class="card-text">
                                    Creative identities
                                    <br>
                                    Branding
                                    <br>
                                    Printing solutions
                                </p>

                            </div>
                        </div>
                        <div class="services-item card col-lg-4 col-sm-6">
                            <img class="card-img-top" src="assets/images/website/service-3.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title text-center ">
                                    <a>Event management</a>
                                </h5>
                                <p class="card-text">
                                    Creating plans
                                    <br>
                                    Execution with whole details
                                    <br>
                                    Agenda (event programs)
                                    <br>
                                    Reports
                                </p>

                            </div>
                        </div>
                        <div class="services-item card col-lg-4 col-sm-6">
                            <img class="card-img-top" src="assets/images/website/service-4.jpg" alt="Card image cap">
                            <div class="card-body d-flex justify-content-center align-items-center">
                                <h5 class="card-title text-center ">
                                    <a>Interior design</a>
                                </h5>
                                <p class="card-text"></p>

                            </div>
                        </div>
                        <div class="services-item card col-lg-4 col-sm-6">
                            <img class="card-img-top" src="assets/images/website/service-5.jpg" alt="Card image cap">
                            <div class="card-body d-flex justify-content-center align-items-center">
                                <h5 class="card-title text-center ">
                                    <a>Photography and video production </a>
                                </h5>
                                <p class="card-text"></p>

                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection




