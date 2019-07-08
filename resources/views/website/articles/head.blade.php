<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="assets/images/website/logo-icon.png">
    <title>Climax</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--------------Fonts------------------->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,600,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,500,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
    <link href="{{asset("assets/fontawesom/css/all.css")}}" rel="stylesheet">
    <link href="{{asset('assets/css/fontello-embedded.css')}}" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">
    <link href="{{'assets/css/animation.css'}}" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet">

    <link href="{{asset("assets/css/style.css")}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.swipebox/1.4.4/css/swipebox.css"/>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/justifiedGallery/3.7.0/css/justifiedGallery.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.12/css/lightgallery.min.css">
    <link href="https://unpkg.com/nanogallery2@2.4.2/dist/css/nanogallery2.min.css" rel="stylesheet" type="text/css">
    <link href="http://vjs.zencdn.net/4.12/video-js.css" rel="stylesheet">
    <script src="http://vjs.zencdn.net/4.12/video.js"></script>
    @yield('style')
    <style>

    </style>
    @includeWhen(!Request::is("/"),'website.articles.customNavbarStyle')
</head>