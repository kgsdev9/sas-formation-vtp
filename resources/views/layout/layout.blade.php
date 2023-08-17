
<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="{{asset('assets/libs/magnific-popup/dist/magnific-popup.css')}}">
  <!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="Codescandy">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600&family=JetBrains+Mono:ital,wght@0,100;1,100;1,200&display=swap" rel="stylesheet">

<script>
    // Render blocking JS:
    if (localStorage.theme) document.documentElement.setAttribute("data-theme", localStorage.theme);
    </script>

<!-- Favicon icon-->
<link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/favicon/favicon.ico')}}">


<!-- Libs CSS -->
<link href="{{asset('assets/fonts/feather/feather.css')}}" rel="stylesheet">
<link href="{{asset('assets/libs/bootstrap-icons/font/bootstrap-icons.css')}}" rel="stylesheet" />



<link rel="stylesheet" href="{{asset('assets/libs/@mdi/font/css/materialdesignicons.min.css')}}">


<link rel="stylesheet" href="{{asset('assets/libs/simplebar/dist/simplebar.min.css')}}">



<!-- Theme CSS -->
<link rel="stylesheet" href="{{asset('assets/css/theme.min.css')}}">
  <link href="{{asset('assets/libs/tiny-slider/dist/tiny-slider.css')}}" rel="stylesheet">

  <title>@yield('title')</title>
</head>

<body class="bg-white" style="font-family: 'Inter', sans-serif;">


<nav class="navbar navbar-expand-lg">
    <div class="container px-0">
      <a class="navbar-brand" href="{{route('home')}}"><img src="{{asset('formation-vtp.png')}}" alt="" style="height:60px;"></a>
          <div class="d-flex align-items-center order-lg-3 ms-lg-3">
            <div class="d-flex align-items-center">
              <a href="#" class="form-check form-switch theme-switch btn btn-light btn-icon rounded-circle me-2">
                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                <label class="form-check-label" for="flexSwitchCheckDefault"></label>

                 </a>
                 @guest
                 <a href="{{route('auth.register')}}" class="btn btn-outline-primary me-2 ">S'inscrire </a>
                 <a href="{{route('auth.login')}}" class="btn btn-primary d-none d-md-block">Se Connecter
                     @else
                     <a href="{{url('profiles')}}" class="btn btn-outline-primary me-2 ">Tableau de bord </a>
                        <form action="{{route('logout')}}" method="POST">
                            @csrf
                           <button class="btn btn-dark d-none d-md-block" onclick="return confimr('voulez-vous vous deconnecter .')">Deconnexion</button>
                        </form>
                 @endguest

              </a>
              </div>


              <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false" aria-label="Toggle navigation">
              <span class="icon-bar top-bar mt-0"></span>
              <span class="icon-bar middle-bar"></span>
              <span class="icon-bar bottom-bar"></span>
            </button>
          </div>
      <!-- Button -->

      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="navbar-default">
        <ul class="navbar-nav ms-auto">
            <form class="mt-0 mt-lg-0 ms-lg-2 d-flex align-items-center">
                <span class="position-absolute ps-3 search-icon">
                  <i class="fe fe-search"></i>
                </span>
                <input type="search" class="form-control ps-6" placeholder="Rechercher un formation">
              </form>
          <li class="nav-item">
            <a class="nav-link" href="{{route('home')}}">Accueil</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="{{route('formation.annuaire')}}">
                Annuaire Formation
            </a>

          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="{{route('home.categorie')}}" >
            Annuaire Catégories
            </a>

          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('formateur.annuaire')}}">Annuaire Formateurs</a>
          </li>


        </ul>


      </div>
    </div>
  </nav>

  <!-- section -->
  @yield('content')
  <!-- Footer -->
      <!-- footer -->
      <footer class="py-lg-10 py-5">
        <div class="container">
            <div class="row  justify-content-center text-center  ">
                <div class="col-12 col-md-12 col-xl-8 px-0 ">
                    <nav class="nav nav-footer justify-content-center">
                        <a class="nav-link" href="#">Nos Formations </a>
                        <a class="nav-link" href="#">Nos Catégories</a>
                        <a class="nav-link" href="#">Nos Formateurs </a>
                        <a class="nav-link" href="#">Termes &amp; Conditions</a>
                        <a class="nav-link" href="#">Contact</a>
                    </nav>
                </div>
                <!-- Desc -->
                <div class="col-lg-8 col-md-12 col-12">
                    <div class="my-6">
                        <!--Facebook-->
                        <a href="#" class="text-muted me-4">
                            <i class="mdi mdi-facebook fs-3"></i>
                        </a>
                        <!--Twitter-->
                        <a href="#" class="text-muted me-4">
                            <i class="mdi mdi-twitter  fs-3"></i>
                        </a>
                        <!--LinkedIn-->
                        <a href="#" class="text-muted me-4">
                            <i class="mdi mdi-linkedin fs-3"></i>
                        </a>
                        <!--GitHub-->
                        <a href="#" class="text-muted me-4">
                            <i class="mdi mdi-github fs-3"></i>
                        </a>
                        <!--GitHub-->
                        <a href="#" class="text-muted">
                            <i class="mdi mdi-twitch fs-3"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-12">
                    <span>© <span id="copyright3">
                        <script>document.getElementById('copyright3').appendChild(document.createTextNode(new Date().getFullYear()))</script>2023
                    </span> VTP FORMATION est une  plateforme mise en place par le groupe VTP dans le but de former disppenser des cours aux débutants en informatique et aussi professionels des metiers.</span>
                </div>

                <!-- Links -->

            </div>
        </div>


  <!-- Scripts -->
  <!-- Libs JS -->
<script src="{{asset('assets/libs/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/libs/simplebar/dist/simplebar.min.js')}}"></script>


<!-- Theme JS -->
<script src="{{asset('assets/js/theme.min.js')}}"></script>

  <script src="{{asset('assets/libs/tiny-slider/dist/min/tiny-slider.js')}}"></script>
  <script src="{{asset('assets/js/vendors/tnsSlider.js')}}"></script>





</footer>
  <!-- Scripts -->
  <!-- Libs JS -->
<script src="{{asset('assets/libs/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/libs/simplebar/dist/simplebar.min.js')}}"></script>


<!-- Theme JS -->
<script src="{{asset('assets/js/theme.min.js')}}"></script>

  <script src="{{asset('assets/libs/tiny-slider/dist/min/tiny-slider.js')}}"></script>
  <script src="{{asset('assets/js/vendors/tnsSlider.js')}}"></script>
  <script src="{{asset('assets/libs/magnific-popup/dist/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('assets/js/vendors/popup.js')}}"></script>
  @include('flashy::message')
</body>

</html>
