<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-white">
        <a class="navbar-brand" href="/">
            <img src="{{asset('assets/images/website/logo-long-.png')}}" class="w-100">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link {{Request::is("/")?"active":''}}" href="{{Request::is("/") ? '#slider' : '/'}}">Home
                        <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{Request::is("about")?"active":''}}" href="/about">Who we are</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{Request::is("services/*")||Request::is("services")?"active":''}}"
                       href="{{Request::is("/") ? '#services' : '/services'}}">Our lines</a>
                </li>
                @if(Request::is('/'))
                    <li class="nav-item">
                        <a class="nav-link" href="#offers">What we offer</a>
                    </li>
                @endif
                <li class="nav-item">
                    <a class="nav-link" id="client_href"
                       href="{{Request::is("/")|| Request::is("about")? '#clients' : url('/#clients')}} ">Clients</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{Request::is("gallery") ? "active" :''}}"
                       href="{{Request::is("/") ? '#gallery' : '/gallery'}}">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{Request::is("contact-us")?"active":''}}"
                       href="{{Request::is("/") ? '#contact-us' : '/contact-us'}}">Contact
                        us</a>
                </li>
            </ul>
        </div>
    </nav>
</header>