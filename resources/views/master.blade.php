<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>@yield('title')</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.ico') }}" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
</head>

<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
        <!-- Navigation-->
        <nav id="mainNav" class="navbar navbar-expand-lg navbar-light bg-white fixed-top bg-transparent">
            <div class="container px-5">
                <a class="navbar-brand align-middle" href="{{ url('/home') }}"><img style="max-height: 25px;" src="{{ asset('assets/img/logo.png') }}" alt="Logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav gap-2 ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link underline-anim underline-anim__blue fw-bold text-uppercase" href="{{ url('/home')}}" style="color: var(--bs-blue)">Home</a></li>
                        <li class="nav-item"><a class="nav-link underline-anim underline-anim__yellow fw-bold text-uppercase" href="{{ url('/about')}}" style="color: var(--bs-yellow)">About</a></li>
                        <li class="nav-item"><a class="nav-link underline-anim underline-anim__green fw-bold text-uppercase" href="{{ url('/contact')}}" style="color: var(--bs-green)">Contact</a></li>
                        <li class="nav-item"><a class="nav-link underline-anim underline-anim__red fw-bold text-uppercase" href="{{ url('/faq')}}" style="color: var(--bs-red)">FAQ</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
        <!-- Footer-->
        <footer class="bg-dark py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto">
                        <div class="small m-0 text-white">Copyright &copy; KeyCraft 2023</div>
                    </div>
                    <div class="col-auto">
                        <a class="link-light small" href="#!">Privacy</a>
                        <span class="text-white mx-1">&middot;</span>
                        <a class="link-light small" href="#!">Terms</a>
                        <span class="text-white mx-1">&middot;</span>
                        <a class="link-light small" href="#!">Contact</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
</body>

</html>