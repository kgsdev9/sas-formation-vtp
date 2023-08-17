<div class="col-lg-3 col-md-4 col-12">
    <!-- User profile -->
    <nav class="navbar navbar-expand-md navbar-light shadow-sm mb-4 mb-lg-0 sidenav">
        <!-- Menu -->
        <a class="d-xl-none d-lg-none d-md-none text-inherit fw-bold" href="#">Menu</a>
        <!-- Button -->
        <button class="navbar-toggler d-md-none icon-shape icon-sm rounded bg-primary text-light"
            type="button" data-bs-toggle="collapse" data-bs-target="#sidenav"
            aria-controls="sidenav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fe fe-menu"></span>
        </button>
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav">
            <div class="navbar-nav flex-column">
                <span class="navbar-header">Menu </span>
                <ul class="list-unstyled ms-n2 mb-4">
                    <!-- Nav item -->
                    <li class="nav-item active">
                        <a class="nav-link" href="{{URL('/profiles')}}"><i
                                class="fe fe-home nav-icon"></i>Accueil </a>
                    </li>

                    @can(['is_formateur', 'formateur_create_compte'])
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('courses.index')}}"><i
                                class="fe fe-book nav-icon"></i>Gestion Formations </a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="{{route('episode.index')}}"><i
                                class="fe fe-dollar-sign nav-icon"></i>Gestion Eipisodes </a>
                    </li> --}}

                    @endcan
                    <!-- Nav item -->

                    <!-- Nav item -->
                    @can('is_user')
                    <li class="nav-item">
                        <a class="nav-link" href="instructor-reviews.html"><i
                                class="fe fe-star nav-icon"></i>Mes Commandes  </a>
                    </li>
                    @endcan

                    {{-- <!-- Nav item -->
                    <li class="nav-item">
                        <a class="nav-link" href="instructor-earning.html"><i
                                class="fe fe-pie-chart nav-icon"></i>Mes Etudiants</a>
                    </li> --}}
                    {{-- <!-- Nav item -->
                    <li class="nav-item">
                        <a class="nav-link" href="instructor-order.html"><i
                                class="fe fe-shopping-bag nav-icon"></i>Mes Notifications </a>
                    </li> --}}
                    <!-- Nav item -->
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="instructor-students.html"><i
                                class="fe fe-users nav-icon"></i>Social Profile </a>
                    </li>
                    <!-- Nav item --> --}}

                    <!-- Nav item -->
                    {{-- <li class="nav-item ">
                        <a class="nav-link" href="instructor-quiz.html"><i
                                class="fe fe-help-circle nav-icon"></i>Offre D'emploi</a>
                    </li> --}}
                    <!-- Nav item -->
                    {{-- <li class="nav-item ">
                        <a class="nav-link" href="instructor-quiz-result.html"><i class="fe fe-help-circle nav-icon"></i>Sponsoring</a>
                      </li> --}}
                </ul>
                <!-- Navbar header -->
                <span class="navbar-header">Compte</span>
                <ul class="list-unstyled ms-n2 mb-0">
                    <!-- Nav item -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('profile.formateurs')}}"><i
                                class="fe fe-settings nav-icon"></i>Modifier Mon Profile</a>
                    </li>
                    <!-- Nav item -->
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="security.html"><i
                                class="fe fe-user nav-icon"></i>Coupons</a>
                    </li> --}}
                    <!-- Nav item -->




                    <!-- Nav item -->
                    <li class="nav-item">
                      <form action="{{route('logout')}}" method="POST">
                        @csrf
                        <button class="btn btn-white" type="submit">Se Deconnecter </button>
                    </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
