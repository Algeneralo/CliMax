<script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-dotimeout/1.0/jquery.ba-dotimeout.js"></script>
<script src="https://kit.fontawesome.com/c2de738ac4.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script src="{{asset('assets/libs/sweetalert2/sweetalert2.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.sweet-alert.init.js')}}"></script>

<!--<script src="assets/js/jquery.mousewheel.min.js"></script>-->
<script src="{{asset("assets/js/jquery.swipebox.js")}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/justifiedGallery/3.7.0/js/jquery.justifiedGallery.min.js"></script>
<!-- endbower -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.12/js/lightgallery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.12/js/lightgallery-all.min.js"></script>
<script src="{{asset('assets/js/gallery-filter.js')}}"></script>

<script src="{{asset('assets/js/custom.js')}}"></script>
@if(session()->has('success'))
    <script>
        $(document).ready(function () {
            swal({
                title: "{{session('success')}}",
                icon: "success",
            });
        })
    </script>
@endif
@if($errors->any())
    <script>
        $(document).ready(function () {
            Swal.fire({
                title: "Error",
                html: @foreach ($errors->all() as $error)
                    "<li>{{ $error }} </li>"
                @endforeach,
                icon: "error",
            });
        })
    </script>
@endif
