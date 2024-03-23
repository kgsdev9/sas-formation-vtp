
<!DOCTYPE html>
<html lang="en">

<head>    <!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="Codescandy">

<script>
    // Render blocking JS:
    if (localStorage.theme) document.documentElement.setAttribute("data-theme", localStorage.theme);
    </script>

<!-- Favicon icon-->
<link rel="shortcut icon" type="image/x-icon" href="../../assets/images/favicon/favicon.ico">


<!-- Libs CSS -->
<link href="{{asset('assets/fonts/feather/feather.css')}}" rel="stylesheet">
<link href="{{asset('assets/libs/bootstrap-icons/font/bootstrap-icons.css')}}" rel="stylesheet" />
<link href="{{asset('assets/libs/@mdi/font/css/materialdesignicons.min.css')}}" rel="stylesheet" />
<link href="{{asset('assets/libs/simplebar/dist/simplebar.min.css')}}" rel="stylesheet">




<!-- Theme CSS -->
<link rel="stylesheet" href="{{asset('assets/css/theme.min.css')}}">

    <title>Tableau d'administration VTP formation </title>
</head>

<body>
    <!-- Wrapper -->
    <div id="db-wrapper">
 <!-- navbar vertical -->
  <!-- Sidebar -->
 <nav class="navbar-vertical navbar">
     <div class="vh-100" data-simplebar>
         <!-- Brand logo -->
         <a class="navbar-brand" href="#">
             <img src="../../assets/images/brand/logo/logo-inverse.svg" alt="" >
         </a>
         <!-- Navbar nav -->
         <ul class="navbar-nav flex-column" id="sideNavbar">
             <li class="nav-item">
                 <a class="nav-link  " href="#"
                     data-bs-toggle="collapse" data-bs-target="#navDashboard" aria-expanded="false"
                     aria-controls="navDashboard">
                     <i class="nav-icon fe fe-home me-2"></i> Tableau de bord
                 </a>

             </li>
             <li class="nav-item">
                 <a class="nav-link  collapsed " href="#"
                     data-bs-toggle="collapse" data-bs-target="#navCourses" aria-expanded="false"
                     aria-controls="navCourses">
                     <i class="nav-icon fe fe-book me-2"></i> Annuaire des cours
                 </a>
                 <div id="navCourses" class="collapse "
                     data-bs-parent="#sideNavbar">
                     <ul class="nav flex-column">
                         <li class="nav-item">
                             <a class="nav-link "
                                 href="{{route('all.admin.course')}}">
                                 Liste des cours
                             </a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link "
                                 href="{{route('category.index')}}">
                                 Liste des catégories
                             </a>
                         </li>

                     </ul>
                 </div>
             </li>
             <!-- Nav item -->
             <li class="nav-item">
                 <a class="nav-link   collapsed " href="#">
                     <i class="nav-icon fe fe-user me-2"></i>Annuaire  Utilisateurs
                 </a>

             </li>

             <!-- Nav item -->
             <li class="nav-item ">
                 <a class="nav-link   collapsed  " href="{{route('admin.teacher.disable')}}"
                     >
                     <i class="nav-icon fe fe-book-open me-2"></i>Annuaire formateurs
                 </a>
             </li>

             <li class="nav-item ">
                <a class="nav-link collapsed" href="{{route('admin.orders.liste')}}">
                    <i class="nav-icon fe fe-book-open me-2"></i>Annuaire des commmandes
                </a>

            </li>



         </ul>

     </div>
 </nav>

        <!-- Page Content -->
        <main id="page-content">
            <div class="header">
    <!-- navbar -->
    <nav class="navbar-default navbar navbar-expand-lg">
        <a id="nav-toggle" href="#">
            <i class="fe fe-menu"></i>
        </a>

        <!--Navbar nav -->
        <div class="ms-auto d-flex">
            <a href="#" class="form-check form-switch theme-switch btn btn-light btn-icon rounded-circle ">
				<input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
				<label class="form-check-label" for="flexSwitchCheckDefault"></label>

					   </a>
        <ul class="navbar-nav navbar-right-wrap ms-2 d-flex nav-top-wrap">

            <!-- List -->
            <li class="dropdown ms-2">
                <a class="rounded-circle" href="#" role="button" id="dropdownUser" data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="avatar avatar-md avatar-indicators avatar-online">
                        <img alt="avatar" src="../../assets/images/avatar/avatar-1.jpg" class="rounded-circle" >
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownUser">
                    <div class="dropdown-item">
                        <div class="d-flex">
                            <div class="avatar avatar-md avatar-indicators avatar-online">
                                <img alt="avatar" src="../../assets/images/avatar/avatar-1.jpg" class="rounded-circle" >
                            </div>
                            <div class="ms-3 lh-1">
                                <h5 class="mb-1">{{Auth::user()->name}}</h5>
                                <p class="mb-0 text-muted">{{Auth::user()->email}}</p>
                            </div>
                        </div>
                    </div>
                    <ul class="list-unstyled">
                        <li>
                            <a class="dropdown-item" href="#">
                                <i class="fe fe-power me-2"></i> Deconnexion
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
        </div>
    </nav>
</div>
            <!-- Page Header -->
            <!-- Container fluid -->
             @yield('master')
        </main>
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
</body>
</html>
