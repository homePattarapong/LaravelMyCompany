<nav class="navbar sticky-top navbar-expand-md navbar-light bg-success">
    <div class="container">
        <a class="navbar-brand" href="#"><i class="fad fa-utensils-alt"></i> Food Delivery</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse"
            data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('about')}}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('service')}}">Service</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('contact')}}">Contact</a>
                </li>
                
            </ul>
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                <li class="nav-item my-2 my-lg-0">
                    <a class="nav-link" href="{{url('login')}}">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>