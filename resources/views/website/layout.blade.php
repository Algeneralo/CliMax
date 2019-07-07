<!doctype html>
<html lang="en">
@includeIf('website.articles.head')

<body>
<div id="overlay">
    <img src="{{asset('assets/images/website/loader.svg')}}" alt="Loading" /><br/>
    Loading...
</div>
@includeIf('website.articles.header')
@yield('body')
@includeIf('website.articles.footer')
</body>
@includeIf('website.articles.footer_scripts')
<script>
    jQuery(window).ready(function(){
        jQuery('#overlay').fadeOut();
    });
</script>
@yield('script')
</html>