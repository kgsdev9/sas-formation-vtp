
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="VTP market" />
    <meta name="author" content="KGS INFORMATIQUE" />
    <link rel="shortcut icon" type="image/x-icon" href="#" />
    <link href="{{asset('assets/fonts/feather/feather.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/libs/bootstrap-icons/font/bootstrap-icons.min.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('assets/libs/simplebar/dist/simplebar.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/theme.min.css')}}">
    <link rel="canonical" href="vtp-market.com" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;600;700">
    <title>@yield('title')</title>

  </head>
<body class="bg-white" style="font-family: 'Inter', sans-serif;">


    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid px-0">
            <div class="d-flex">
                <a class="navbar-brand text-dark" href="/">
                  <strong >VTP FORMATION </strong>
                </a>

            </div>
            <div class="order-lg-3">
                <div class="d-flex align-items-center">

                    @guest
                    <a href="{{route('auth.login')}}" class="btn btn-outline-secondary ms-2 d-none d-lg-block">Connexion</a>
                    <a href="{{route('auth.register')}}" class="btn btn-outline-secondary ms-2 d-none d-lg-block">Inscription</a>
                        @else
                        <a href="/profiles" class="btn btn-outline-secondary ms-2 d-none d-lg-block">Profile</a>

                    @endguest

                    <!-- Button -->
                    <button class="navbar-toggler collapsed ms-2 ms-lg-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar top-bar mt-0"></span>
                        <span class="icon-bar middle-bar"></span>
                        <span class="icon-bar bottom-bar"></span>
                    </button>
                </div>
            </div>

            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="navbar-default">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item ">
                        <a class="nav-link" href="{{route('home')}}">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('formation.annuaire')}}"> Annuaire Formation</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="https://vtp-market.com/" target="blank">VTP MARKET</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

  <!-- section -->
  @yield('content')
      <footer class="py-lg-10 py-5">

<script src="{{asset('assets/libs/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/libs/simplebar/dist/simplebar.min.js')}}"></script>
<script src="{{asset('assets/js/theme.min.js')}}"></script>
  <script src="{{asset('assets/libs/tiny-slider/dist/min/tiny-slider.js')}}"></script>
  <script src="{{asset('assets/js/vendors/tnsSlider.js')}}"></script>

  <script src="{{asset('assets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets/libs/simplebar/dist/simplebar.min.js')}}"></script>
  <script src="{{asset('assets/js/theme.min.js')}}"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</footer>
</body>
</html>
