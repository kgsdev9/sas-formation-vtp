@extends('layout.layout')

@section('content')


		<div class="py-3">
			<div class="container">
				<nav>
					<ol class="breadcrumb m-0">
						<li class="breadcrumb-item">
							<a href="{{ URL('/') }}"><i class="bi bi-house"></i> Accueil</a>
						</li>
						<li class="breadcrumb-item" aria-current="page">Formation</li>
					</ol>
				</nav>
			</div>
		</div>
		<hr class="m-0">
		<div class="container py-5">
			<div class="row">
				<div class="col-lg-3 d-none d-lg-block">
					<aside class="sidebar-fixed">
						<nav class="navbar sidebar-courses navbar-expand-md navbar-light shadow-sm mb-4 mb-lg-0 sidenav navbar navbar-expand-lg navbar-light">
							<a class="d-xl-none d-lg-none d-md-none text-inherit fw-bold fs-5 float-start py-1" href="dashboard.html">Menu</a>
							<button data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" class="p-0 focus-none border-0 navbar-toggler collapsed">
								<span class="navbar-toggler d-md-none icon-shape icon-sm rounded bg-primary p-0 text-white float-end"><span class="fe fe-menu"></span></span>
							</button>
							<div class="navbar-collapse collapse" id="navbarNav">
								<div class="side-nav me-auto flex-column navbar-nav">



									<p class="navbar-header nav-item mb-2 p-0 text-dark mt-4">
										Niveau
									</p>

                                    @foreach ($level as $value)


									<div class="form-check my-1">
										<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
										<label class="form-check-label ps-1" for="flexRadioDefault1">{{$value->name}}</label>
									</div>
                                    @endforeach




									<p class="navbar-header nav-item mb-2 p-0 text-dark  mt-4">
										CATEGORIES
									</p>
                                    @foreach ($categories as $value)
                                    <div class="form-check my-1">
										<input class="form-check-input" type="checkbox" value id="Illustration">
										<label class="form-check-label ps-1" for="Illustration">{{$value->name}}</label>
									</div>
                                    @endforeach






								</div>
							</div>
						</nav>
					</aside>
				</div>
				<div class="col-lg-9 col-sm-12">
					<div class="d-flex align-items-center gap-2 mb-3">
						<h3 class="pb-0 fw-bold text-dark m-0">Toutes nos formations </h3>
						{{-- <a href="#" class="text-decoration-none text-danger ms-auto">See More <i class="bi bi-arrow-right-circle"></i></a> --}}
					</div>
					<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3 mb-5">

            @foreach ($allCourses as $value)


            <div class="col">
							<div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden video-card-item position-relative">
								<img src="{{ asset('courss/images/'.$value->image) }}" class="img-fluid" alt="#" loading="lazy" style="height:150px">
								<div class="card-body">
									<h6 class="card-title pb-3 text-black mb-0">
										<span class="bg-warning badge text-black me-2"> {{ $value->category->name }}</span>
                    {{ $value->title }}
									</h6>
									<p class="card-text mb-0">
										Publié par {{ $value->formateur->fullname }}
									</p>
									<div class="card-text text-muted small">
										Learn to create campaigns on Google and Facebook to boostyour brand or business
									</div>
									<div class="text-muted gap-2 pt-2 small d-flex">
										<span><i class="bi bi-person"></i> 23643</span>
										<span><i class="bi bi-hand-thumbs-up"></i> 80% (2.2k)</span>
									</div>
								</div>
								<div class="card-footer border-0 bg-white border-top p-3">
									<div class="d-flex align-items-center justify-content-between mb-3">
										<span class="badge bg-danger text-white">{{ $value->level->name }}</span>
										<div class="card-price text-danger">
											Reduction de .
											<del class="text-black">
                       300
											</del>
										</div>
									</div>
									<div class="d-grid">
										<button class="btn btn-primary"><i class="bi bi-cart-fill"></i> {{ $value->prix}} €</button>
									</div>
									<a href="{{ route('detail.course', $value->slug) }}" class="stretched-link"></a>
								</div>
							</div>
						</div>

					  @endforeach



					</div>
					{{-- <div class="d-flex align-items-center gap-2 mb-3">
						<h3 class="pb-0 fw-bold text-dark m-0">Course Bundle</h3>
						<span class="badge bg-primary">NEW</span>
						<a href="#" class="text-decoration-none text-danger ms-auto">See More <i class="bi bi-arrow-right-circle"></i></a>
					</div> --}}
					{{-- <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3 mb-5">
						<div class="col">
							<div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden video-card-item position-relative">
								<img src="img/globel/b1.jpg" class="img-fluid">
								<div class="card-body">
									<h6 class="card-title fw-bold text-dark">
										Bring Your Creations to Life
									</h6>
									<p class="card-text text-muted small">
										Experience the feeling of watching your creations come to life through animation. Choose any 3 courses from this selection and add some movement to your work. Thi
									</p>
								</div>
								<div class="card-footer border-0 bg-white border-top p-3">
									<div class="d-flex align-items-center justify-content-between mb-3">
										<span class="badge bg-info text-white">HOT</span>
										<div class="card-price text-danger">
											78% Disc.
											<span class="text-black">$1,800</span>
										</div>
									</div>
									<div class="d-grid">
										<button class="btn btn-primary">Create your own bundle <i class="bi bi-arrow-right"></i></button>
									</div>
								</div>
							</div>
						</div>
						<div class="col">
							<div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden video-card-item position-relative">
								<img src="img/globel/b2.jpg" class="img-fluid">
								<div class="card-body">
									<h6 class="card-title fw-bold text-dark">
										Bring Your Creations to Life
									</h6>
									<p class="card-text text-muted small">
										Celebrate the 11th anniversary of THE social network by choosing two courses from this special selection. Become a pro
									</p>
								</div>
								<div class="card-footer border-0 bg-white border-top p-3">
									<div class="d-flex align-items-center justify-content-between mb-3">
										<span class="badge bg-warning text-white">NEW</span>
										<div class="card-price text-danger">
											15% Disc.
											<span class="text-black">$790</span>
										</div>
									</div>
									<div class="d-grid">
										<button class="btn btn-primary">Create your own bundle <i class="bi bi-arrow-right"></i></button>
									</div>
								</div>
							</div>
						</div>
						<div class="col">
							<div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden video-card-item position-relative">
								<img src="img/globel/b3.jpg" class="img-fluid">
								<div class="card-body">
									<h6 class="card-title fw-bold text-dark">
										The Best Illustration Courses
									</h6>
									<p class="card-text text-muted small">
										Bring your illustrations to life with paint, pencils, ink, digital media, and much more. Choose 3 courses from this special selection
									</p>
								</div>
								<div class="card-footer border-0 bg-white border-top p-3">
									<div class="d-flex align-items-center justify-content-between mb-3">
										<span class="badge bg-danger text-white">Advertising</span>
										<div class="card-price text-danger">
											25% Disc.
											<span class="text-black">$890</span>
										</div>
									</div>
									<div class="d-grid">
										<button class="btn btn-primary">Create your own bundle <i class="bi bi-arrow-right"></i></button>
									</div>
								</div>
							</div>
						</div>
					</div> --}}
					{{-- <div class="text-center pt-2 pb-2">
						<button type="button" class="btn btn-danger">See more Edutree course <i class="bi bi-arrow-right"></i></button>
					</div> --}}
				</div>
			</div>
		</div>





@endsection
