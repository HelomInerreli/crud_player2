<nav class="navbar navbar-expand-lg text-white bg-dark fixed-top">
    <a class="navbar-brand text-white " href="#">Helom Valentim</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse text-white" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('/') ? 'active text-white' : 'text-secondary' }}"
                    href="{{ url('/') }}">
                    Home
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('gallery') ? 'active text-white' : 'text-secondary' }}"
                    href="{{ url('/gallery') }}">
                    Gallery
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('blog') ? 'active text-white' : 'text-secondary' }}"
                    href="{{ url('/blog') }}">
                    Blog
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('contact') ? 'active text-white' : 'text-secondary' }}"
                    href="{{ url('/contact') }}">
                    Contact Us
                </a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-primary my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>
