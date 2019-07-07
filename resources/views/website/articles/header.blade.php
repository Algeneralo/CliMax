<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-white">
        <a class="navbar-brand" href="#">
            <img src="assets/images/logo-long-.png" class="w-100">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="{{Request::is("/") ? '#slider' : '/'}}">Home <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="ss">Who we are</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{Request::is("/") ? '#services' : '/services'}}">Our lines</a>
                </li>
                @if(Request::is('/'))
                    <li class="nav-item">
                        <a class="nav-link" href="#offers">What we offer</a>
                    </li>
                @endif
                <li class="nav-item">
                    <a class="nav-link" href="{{Request::is("/") ? '#clients' : '/clients'}} ">Clients</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{Request::is("/") ? '#gallery' : '/gallery'}}">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{Request::is("/") ? '#contact-us' : '/contact-us'}}">Contact
                        us</a>
                </li>
                <!--<li class="nav-item dropdown">-->
                <!--<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"-->
                <!--data-toggle="dropdown"-->
                <!--aria-haspopup="true" aria-expanded="false">-->
                <!--Our lines-->
                <!--</a>-->
                <!--<div class="dropdown-menu" aria-labelledby="navbarDropdown">-->
                <!--<a class="dropdown-item" href="#">Action</a>-->
                <!--<a class="dropdown-item" href="#">Another action</a>-->
                <!--<div class="dropdown-divider"></div>-->
                <!--<a class="dropdown-item" href="#">Something else here</a>-->
                <!--</div>-->
                <!--</li>-->
            </ul>
        </div>
    </nav>
</header>