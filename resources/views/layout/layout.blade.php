
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
                        <a class="nav-link" href="/comment-ca-marche">Comment ça marche ?</a>
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


        <div class="container">
            <div class="row justify-content-center text-center align-items-center">
                <div class="col-12 col-md-12 col-xxl-6 px-0">
                    <div class="mb-4">

                        <p class="lead">VTP Formation est bien plus qu'une simple plateforme d'apprentissage. Nous sommes votre partenaire dans votre parcours de développement professionnel et personnel.</p>
                    </div>

                </div>
            </div>
            <!-- Desc -->
            <hr class="mt-6 mb-3">
            <div class="row align-items-center">
                <!-- Desc -->
                <div class="col-lg-3 col-md-6 col-12">
                    <span>
                        ©
                        <span id="copyright4">
                            <script>
                                document.getElementById("copyright4").appendChild(document.createTextNode(new Date().getFullYear()));
                            </script>
                        </span>
                    Tous droits réservés à VTP
                    </span>
                </div>

                <!-- Links -->
                <div class="col-12 col-md-6 col-lg-7 d-lg-flex justify-content-center">
                    <nav class="nav nav-footer">
                        <a class="nav-link ps-0" href="#">Politique de confidentialité </a>
                        <a class="nav-link px-2 px-md-0" href="#">Qui sommes nous ?</a>
                        <a class="nav-link" href="#">FAQ</a>
                    </nav>
                </div>
                <div class="col-lg-2 col-md-12 col-12 d-lg-flex justify-content-end">
                    <div>

                        <a href="#" class="me-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path>
                            </svg>
                        </a>
                        <!--Twitter-->
                        <a href="#" class="me-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                                <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path>
                            </svg>
                        </a>

                        <!--GitHub-->
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                                <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Links -->
        </div>

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
