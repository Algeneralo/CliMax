@extends('website.layout')
@section('body')
    @includeIf('website.articles.banner',['title'=>"Our Best Events Gallery",'name'=>'Gallery','image'=>'gallery-banner.jpg'])
    <div class="container-fluid photos">
        <div class="col-12 photos-header text-center">
            <h3 class="mb-4">Portfolio</h3>
            <h2>Our Best Events Gallery</h2>
        </div>
        <div class="col-12 text-center mt-5 mb-4">
            <button class="btn bg-transparent filter-btn active" data-filter="false"><span>All</span></button>
            <button class="btn bg-transparent filter-btn" data-filter=".photos"><span>Photos</span></button>
            <button class="btn bg-transparent filter-btn" data-filter=".design"><span>Design</span></button>
            <button class="btn bg-transparent filter-btn" data-filter=".video"><span>Video</span></button>
        </div>
        <div id="gallery-content">
            @foreach($gallery as $item)
                @if($item->type=="video")
                    <a href="assets/images/upload/Ahsaa event.mp4" class="video swipebox-video">
                        <div style="display:none;" id="video{{$loop->index}}">
                            <video class="lg-video-object lg-html5 video-js vjs-default-skin" controls preload="none">
                                <source src="assets/images/upload/{{$item->file}}" type="video/mp4">
                                Your browser does not support HTML5 video.
                            </video>
                        </div>
                        <li data-poster="{{asset('assets/images/upload/'.$item->file)}}"
                            {{--data-sub-html="video caption1"--}}
                            data-html="#video{{$loop->index}}">
                            <img class="w-100"
                                 src="{{asset('assets/images/upload/'.$item->videoThumbnail->thumbnail)}}"/>
                            <div class="overlay w-100 h-100 d-flex justify-content-center align-items-center">
                                <i class="fal fa-play-circle"></i>
                            </div>
                        </li>
                    </a>
                @else
                    <a href="assets/images/upload/{{$item->file}}" data-src="assets/images/upload/{{$item->file}}"
                       rel="photos"
                       class="{{$item->type}}">
                        <img src="assets/images/upload/{{$item->file}}">
                        <div class="overlay w-100 h-100 d-flex justify-content-center align-items-center">
                            <i class="far fa-search"></i>
                        </div>
                    </a>
                @endif
            @endforeach

        </div>

    </div>
@endsection