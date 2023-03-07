<html>

<head>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <link rel="stylesheet" href="{{ URL::asset('css/navbar.css') }}" />
</head>

<body>
    <div id="mainNavigation">
        <nav role="navigation">
            <div class="py-3 text-center border-bottom">
                <img src="/static_files/images/logos/logo_3_white_2.png" alt="" class="invert">
            </div>
        </nav>
        <div class="navbar-expand-md">
            <div class="navbar-dark text-center my-2">
                <button class="navbar-toggler w-75" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span> <span class="align-middle">Menu</span>
                </button>
            </div>
            <div class="text-center mt-3 collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav mx-auto ">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('news', array('title' => 'judul')) }}">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about-us') }}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact-us.index') }}">Contact Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Product
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="{{ route('product') }}">Product 1</a></li>
                            <li><a class="dropdown-item" href="{{ route('product2') }}">Product 2</a></li>
                            <li><a class="dropdown-item" href="{{ route('product3') }}">Product 3</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Program
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="{{ route('program') }}">Program 1</a></li>
                            <li><a class="dropdown-item" href="{{ route('program2') }}">Program 2</a></li>
                            <li><a class="dropdown-item" href="{{ route('program3') }}">Program 3</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div style="height: 50px"></div>
    <div class="container">
        <div class="card border-0 shadow my-5 opacity-50" style="width: 30rem; margin: 0 auto;">
            <div class="card-body p-5">
                <!-- <h1 class="fw-light">Fixed Full Page Background Image</h1>
                <p class="lead">In this snippet, the background image is fixed to the body element. Content on the page will
                    scroll, but the image will remain in a fixed position!</p>
                <p class="lead">Scroll down...</p>

                <p class="lead mb-0">You've reached the end!</p> -->
                <main class="py-4">
                    @yield('content')
                </main>
            </div>
        </div>
    </div>

</body>

</html>