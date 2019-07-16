<header id="topnav">
    <nav class="navbar-custom">
        <div class="container-fluid">
            <ul class="list-unstyled topbar-right-menu float-right mb-0">
                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button"
                       aria-haspopup="false" aria-expanded="false">
                        <span class="mr-1">
{{--                            {{Auth::user()->name}}--}}
                            <i class="mdi mdi-chevron-down"> </i>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown">
                        <!-- item-->
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" style="cursor: pointer"
                                    class="dropdown-item notify-item">
                                <span>Logout</span>
                                <i class="dripicons-power"></i>
                            </button>
                        </form>
                    </div>
                </li>
            </ul>
            <ul class="list-inline menu-left mb-0">
                <li class="float-left">
                    <a href="index.html" class="logo">
                        <span class="logo-lg">
                            <img src="{{asset('assets/images/website/logo-long-.png')}}"
                                alt="" height="50">
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </nav><!-- end topbar-main -->
    <div class="topbar-menu">
        <div class="container-fluid">
            <div id="navigation"><!-- Navigation Menu-->
                <ul class="navigation-menu">
                    <li class="has-submenu">
                        <a href="/" target="_blank">
                            <i class="mdi mdi-web"></i>
                            Website
                        </a>
                    </li>
                    <li class="has-submenu">
                        <a href="/admin">
                            <i class="mdi mdi-view-dashboard"></i>
                            General Configurations
                        </a>
                    </li>
                    <li class="has-submenu">
                        <a href="{{route('sliders.index')}}">
                            <i class="mdi mdi-folder-multiple-image"></i>
                            Slider
                        </a>
                    </li>
                    <li class="has-submenu">
                        <a href="{{route('services.index')}}">
                            <i class=" mdi mdi-room-service"></i>
                            Services
                        </a>
                    </li>
                    <li class="has-submenu">
                        <a href="{{route('clients.index')}}">
                            <i class="mdi mdi-account-outline"></i>
                            Clients
                        </a>
                    </li>
                    <li class="has-submenu">
                        <a href="{{route('gallery.index')}}">
                            <i class="mdi mdi-google-photos"></i>
                            Gallery
                        </a>
                    </li>
                    <li class="has-submenu">
                        <a href="{{route('mails.index')}}">
                            <i class="mdi mdi-email-outline"></i>
                            Emails
                        </a>
                    </li>
                </ul><!-- End navigation menu -->
                <div class="clearfix"></div>
            </div><!-- end #navigation -->
        </div><!-- end container -->
    </div><!-- end navbar-custom -->
</header>