<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('assets/fe/css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    @yield('styles')
</head>

<body>
    <nav class="navbar navbar-expand-lg" style="background: linear-gradient(0deg, rgb(218, 230, 215) 10%, rgb(204, 235, 219) 50%, rgb(92, 235, 199) 100%);">
        <div class="container">
            <a class="navbar-brand" href="{{ route('index') }} ">
                <img src="{{ asset('assets/fe/img/Logo.png') }}" alt="Bootstrap" height="40" style="">
                
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('index') }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('pendaftaraan') }}">Pendaftaraan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('cek') }}">Pengecekan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Kontak</a>
                    </li>
                </ul>
                @guest
                    <a href="{{ route('login') }}" class="btn btn-success" type="submit">Masuk</a>
                @else
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                        class="btn btn-success" type="submit">Log Out</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                @endguest
            </div>
        </div>
    </nav>

    @yield('content')

    <footer class="bg-white text-center text-lg-start text-white" id="contact">
        <!-- Grid container -->
        <div class="container p-4">
            <!--Grid row-->
            <div class="row my-4">
                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">

                    <div class="rounded-circle bg-white shadow-1-strong d-flex align-items-center justify-content-center mb-4 mx-auto"
                        style="width: 130px; height: 130px;">
                        <img src="{{ asset('assets/fe/img/Logoo.png') }}" height="100" alt=""
                            loading="lazy" />
                    </div>

                    <div class="text-success">
                        <p class="text-justify">Ruko CekBansos, Jl. Gg Mesjid No 3, Koja, RBS Kota Jakarta Utara DKI
                            Jakarta. Nomor telepon: 081284799537</p>

                    </div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0 text-success">
                    <h5 class="text-uppercase mb-4">Cek Bansos</h5>

                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <a href="#!" class="text-success"><i class="fas paw pe-3"></i>FAQ</a>
                        </li>
                        <li class="mb-2">
                            <a href="#!" class="text-success"><i class="fas paw pe-3"></i>Terms</a>
                        </li>
                        <li class="mb-2">
                            <a href="#!" class="text-success"><i class="fas paw pe-3"></i>Privacy</a>
                        </li>
                        <li class="mb-2">
                            <a href="#!" class="text-success"><i class="fas paw pe-3"></i>Cookies</a>
                        </li>
                        <li class="mb-2">
                            <a href="#!" class="text-success"><i class="fas paw pe-3"></i>Tentang Kami</a>
                        </li>
                        <li class="mb-2">
                            <a href="#!" class="text-success"><i class="fas paw pe-3"></i>Syarat dan
                                Ketentuan</a>
                        </li>
                        <li class="mb-2">
                            <a href="#!" class="text-success"><i class="fas paw pe-3"></i>Kebijakan Privasi</a>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase mb-4 text-success">Ikuti Kami</h5>

                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <a href="#!" class="text-success"><i class="fa fa-facebook pe-3"></i>Facebook</a>
                        </li>
                        <li class="mb-2">
                            <a href="#!" class="text-success"><i class="fa fa-instagram pe-3"></i>Instagram</a>
                        </li>
                        <li class="mb-2">
                            <a href="#!" class="text-success"><i class="fa fa-twitter pe-3"></i>Twitter</a>
                        </li>
                        <li class="mb-2">
                            <a href="#!" class="text-success"><i class="fa fa-youtube pe-3"></i>Youtube</a>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0 text-success">
                    <h5 class="text-uppercase mb-4">Kontak Kami</h5>

                    <ul class="list-unstyled">
                        <li>
                            <p><i class="fas map-marker-alt pe-2"></i>Ruko CekBansos, Jl. Gg Mesjid No3</p>
                        </li>
                        <li>
                            <p><i class="fas phone pe-2"></i>+62 812 8479 9537</p>
                        </li>
                        <li>
                            <p><i class="fas envelope pe-2 mb-0"></i>cekbansos@gmail.com</p>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center text-light p-4"
            style="background: linear-gradient(278.19deg, #48B279 4.25%, #4899B2 93.64%);">
            © 2022 Copyright Made With ♥
            <a class="text-reset" href="/">Cek Bansos</a>
        </div>
        <!-- Copyright -->
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
        integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @yield('scripts')

</body>

</html>
