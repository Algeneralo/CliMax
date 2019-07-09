<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>404 Error</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
          crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap" rel="stylesheet">
    <style>
        html, body {
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        h1 {
            color: #3ebca8;
            font-size: 29vw;
            font-family: 'Montserrat', sans-serif;
            font-weight: bold;
            width: 100%;
            margin-bottom: 0;
        }

        img {
            margin-bottom: 7%;
            margin-right: 2%;
            margin-left: 2.5%;
        }

        .btn-primary {
            color: #fff;
            background-color: #3ebca8;
            border-color: #3ebca8;
            margin-top: -350px;
            position: absolute;
            bottom: calc(20%);
            left: calc(48%);
        }

        @media (max-width: 767.98px) {
            img {
                width: 20%;
            }
            .btn-primary{
                left: calc(42%);
            }
        }

        @media (max-width: 575.98px) {
            .btn-primary {
                bottom: calc(32%);
                left: calc(37%);
            }

        }

    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-12 text-center">
            <div class="flex-center position-ref full-height">
                <h1 class="text-center">4<img class="img-fluid" src="{{asset('assets/images/website/403.png')}}">3</h1>
                <a class="btn btn-primary" href="{{url('/admin')}}">Go Back</a>
            </div>
        </div>
    </div>
</div>

</body>
<script src="https://code.jquery.com/jquery-3.4.0.min.js"
        integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg="
        crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</html>