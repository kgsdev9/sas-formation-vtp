@extends('layout.layout')

@section('content')
        
		<div class="banner-search bg-primary py-5">
			<div class="container">
				<div class="row flex-lg-row-reverse align-items-center">
					<div class="col-12 col-lg-6 text-end">
						<img src="img/hero-img.png" class="img-fluid" alt="#" loading="lazy">
					</div>
					<div class="col-lg-6">
						<h1 class="fw-bold text-white display-4 mb-3">Bienvenue Sur  <br>VTP FORMATION .</h1>
						<p class="lead text-white-50 mb-0">
							Apprendre De Nouvelles Technologies 
							<br>
							 etBoostez votre Carriere .
						</p>
						<form action="courses.html" class="pt-2 mb-5">
							<div class="d-flex mt-4 bg-white rounded-3 align-items-center services-search-form overflow-hidden">
								<div class="form-floating services-search-form-service">
									<input type="text" class="form-control border-0" id="sservice" placeholder="Enter Service...">
									<label for="sservice">Quelle Technologie  <span class="text-body">voulez</span> vous apprendre ?</label>
								</div>
								<button class="btn btn-success border-0 d-flex align-items-center rounded-3 text-uppercase m-1" type="submit"><i class="icofont-search-1"></i></button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<section class="bg-light py-5">
			<div class="container py-4">
				<div class="d-flex align-items-end gap-2 mb-4">
					<div>
						<h3 class="pb-0 fw-bold text-dark mb-1">Faites un choix judicieux et Commencez Votre Apprentissage</h3>
						<p class="text-muted m-0">
							Aprenez avec nos formateurs de classe Mondiale.
						</p>
					</div>
					<a href="#" class="text-decoration-none text-primary ms-auto">Consulter plus  <i class="bi bi-arrow-right-circle"></i></a>
				</div>
				<div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
					@foreach ($allCourse as  $value)
					<div class="col">
						<div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden video-card-item position-relative">
							<img src="{{ asset('courss/images/'.$value->image) }}" class="img-fluid" alt="#" loading="lazy" style="height:150px">
							<div class="card-body">
								<h6 class="card-title pb-3 text-black mb-0">
									<span class="bg-warning badge text-black me-2">
										 {{ $value->
										category->
										name }}
									</span>
									{{ Str::limit($value->
									title, 64) }}
								</h6>
								<p class="card-text mb-0">
									 Publié par {{ $value->
									formateur->
									fullname }}
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
									<span class="badge bg-danger text-white">
										{{ $value->
										level->
										name }}
									</span>
									<div class="card-price text-danger">
										 Reduction de . 
										<del class="text-black">
											 300€
										</del>
									</div>
								</div>
								<div class="d-grid">
									<button class="btn btn-primary"><i class="bi bi-cart-fill"></i>{{ $value->prix }} €</button>
								</div>
							</div>
							<a href="{{ route('detail.course', $value->slug) }}" class="stretched-link"></a>
						</div>
					</div>
					@endforeach
				</div>
			</div>
			<div class="text-center mt-3 pb-4">
				<a href="#" class="btn btn-danger">Consulter Plus de formation  &nbsp;<i class="bi bi-arrow-right"></i></a>
			</div>
		</div>
	</section>
	<div class="feature-list d-none d-sm-block py-5 bg-white">
		<div class="container">
			<div class="row align-items-center py-4">
				<div class="col-lg-5 col-12">
					<div>
						<h1 class="fw-bold text-black display-4 mb-4">What to expect from a Edutree course</h1>
						<a href="about.html" class="text-decoration-none fw-bold fs-5">Short video link&nbsp;<i class="bi bi-chevron-right"></i></a>
					</div>
				</div>
				<div class="col-lg-7 col-12">
					<div class="row row-cols-1 row-cols-md-2">
						<div class="col p-3">
							<div class="gap-3 d-flex">
								<div>
									<i class="bi bi-people text-primary h2"></i>
								</div>
								<div>
									<h4 class="fw-bold text-dark">Learn at your own pace</h4>
									<p>
										Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis ipsa alias distinctio blanditiis,eveniet impedit? Culpa.
									</p>
								</div>
							</div>
						</div>
						<div class="col p-3">
							<div class="gap-3 d-flex">
								<div>
									<i class="bi bi-person-check text-primary h2"></i>
								</div>
								<div>
									<h4 class="fw-bold text-dark">Share knowledge and ideas</h4>
									<p>
										Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis ipsa alias distinctio blanditiis,eveniet impedit? Culpa.
									</p>
								</div>
							</div>
						</div>
						<div class="col p-3">
							<div class="gap-3 d-flex">
								<div>
									<i class="bi bi-person-badge text-primary h2"></i>
								</div>
								<div>
									<h4 class="fw-bold text-dark">Meet expert instructors</h4>
									<p>
										Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis ipsa alias distinctio blanditiis,eveniet impedit? Culpa.
									</p>
								</div>
							</div>
						</div>
						<div class="col p-3">
							<div class="gap-3 d-flex">
								<div>
									<i class="bi bi-laptop text-primary h2"></i>
								</div>
								<div>
									<h4 class="fw-bold text-dark">Get front row seats</h4>
									<p>
										Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis ipsa alias distinctio blanditiis,eveniet impedit? Culpa.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<main class="bg-light py-5">
		<div class="container py-4">
			<div class="d-flex align-items-center gap-2 mb-4">
				<div>
					<h3 class="pb-0 fw-bold text-dark mb-1">Nos Catégories </h3>
				</div>
				<a href="#" class="text-decoration-none text-primary ms-auto">Consulter  <i class="bi bi-arrow-right-circle"></i></a>
			</div>
			<div class="row gy-3 row-cols-xl-4 row-cols-lg-4 row-cols-md-3 row-cols-2">
				@foreach ($category as $value)
				<div class="col">
					<div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden video-card-item position-relative cat-itemm">
						<img src="{{asset('categories/images/1683390457_blogpost-4.jpg')}}" class="img-fluid">
						<div class="card-body p-3">
							<h6 class="card-title m-0">
								{{$value->
								name}}
							</h6>
						</div>
						<a href="#" class="stretched-link"></a>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</main>
	<section class="bg-white py-5 feature-list">
		<div class="container py-4">
			<div class="d-flex align-items-end gap-2 mb-4">
				<div>
					<h3 class="pb-0 fw-bold text-dark mb-1">The Community for Creative People</h3>
					<p class="text-muted m-0">
						The largest online community of creatives.
					</p>
				</div>
				<a href="courses.html" class="text-decoration-none text-primary ms-auto">See More <i class="bi bi-arrow-right-circle"></i></a>
			</div>
			<div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 row-cols-xl-5 g-4">
				<div class="col">
					<div class="card h-100 shadow-sm rounded-3 overflow-hidden video-card-item border position-relative">
						<img src="img/communities/communities1.jpg" class="card-img-top" alt="...">
						<div class="card-body p-3">
							<h5 class="card-title mb-1 text-dark">
								Veronica Cerna
							</h5>
							<p class="card-text text-muted small">
								Lima District, Peru
							</p>
						</div>
						<div class="card-footer bg-white border-0 d-flex align-items-center justify-content-between p-3 border-top">
							<p class="text-muted small mb-0">
								3512 followers
							</p>
							<button type="button" class="btn btn-secondary btn-sm px-2 py-0">+ Follow</button>
						</div>
						<a href="courses.html" class="stretched-link"></a>
					</div>
				</div>
				<div class="col">
					<div class="card h-100 shadow-sm rounded-3 overflow-hidden video-card-item border position-relative">
						<img src="img/communities/communities2.jpg" class="card-img-top" alt="...">
						<div class="card-body p-3">
							<h5 class="card-title mb-1 text-dark">
								Caro Bello
							</h5>
							<p class="card-text text-muted small">
								Denver, Argentina
							</p>
						</div>
						<div class="card-footer bg-white border-0 d-flex align-items-center justify-content-between p-3 border-top">
							<p class="text-muted small mb-0">
								35241 followers
							</p>
							<button type="button" class="btn btn-secondary btn-sm px-2 py-0">+ Follow</button>
						</div>
						<a href="courses.html" class="stretched-link"></a>
					</div>
				</div>
				<div class="col">
					<div class="card h-100 shadow-sm rounded-3 overflow-hidden video-card-item border position-relative">
						<img src="img/communities/communities3.jpg" class="card-img-top" alt="...">
						<div class="card-body p-3">
							<h5 class="card-title mb-1 text-dark">
								Ernex
							</h5>
							<p class="card-text text-muted small">
								Denpasar, Indonesia
							</p>
						</div>
						<div class="card-footer bg-white border-0 d-flex align-items-center justify-content-between p-3 border-top">
							<p class="text-muted small mb-0">
								75 followers
							</p>
							<button type="button" class="btn btn-secondary btn-sm px-2 py-0">+ Follow</button>
						</div>
						<a href="courses.html" class="stretched-link"></a>
					</div>
				</div>
				<div class="col">
					<div class="card h-100 shadow-sm rounded-3 overflow-hidden video-card-item border position-relative">
						<img src="img/communities/communities4.jpg" class="card-img-top" alt="...">
						<div class="card-body p-3">
							<h5 class="card-title mb-1 text-dark">
								Victoe Village
							</h5>
							<p class="card-text text-muted small">
								Mexico City, Mexico
							</p>
						</div>
						<div class="card-footer bg-white border-0 d-flex align-items-center justify-content-between p-3 border-top">
							<p class="text-muted small mb-0">
								10455 followers
							</p>
							<button type="button" class="btn btn-secondary btn-sm px-2 py-0">+ Follow</button>
						</div>
						<a href="courses.html" class="stretched-link"></a>
					</div>
				</div>
				<div class="col">
					<div class="card h-100 shadow-sm rounded-3 overflow-hidden video-card-item border position-relative">
						<img src="img/communities/communities5.jpg" class="card-img-top" alt="...">
						<div class="card-body p-3">
							<h5 class="card-title mb-1 text-dark">
								Hola Bosque
							</h5>
							<p class="card-text text-muted small">
								Buenos Aires, Argentina
							</p>
						</div>
						<div class="card-footer bg-white border-0 d-flex align-items-center justify-content-between p-3 border-top">
							<p class="text-muted small mb-0">
								2241 followers
							</p>
							<button type="button" class="btn btn-secondary btn-sm px-2 py-0">+ Follow</button>
						</div>
						<a href="courses.html" class="stretched-link"></a>
					</div>
				</div>
				<div class="col">
					<div class="card h-100 shadow-sm rounded-3 overflow-hidden video-card-item border position-relative">
						<img src="img/communities/communities6.jpg" class="card-img-top" alt="...">
						<div class="card-body p-3">
							<h5 class="card-title mb-1 text-dark">
								Luaiso Lopez
							</h5>
							<p class="card-text text-muted small">
								Barcelona, Spain
							</p>
						</div>
						<div class="card-footer bg-white border-0 d-flex align-items-center justify-content-between p-3 border-top">
							<p class="text-muted small mb-0">
								35802 followers
							</p>
							<button type="button" class="btn btn-secondary btn-sm px-2 py-0">+ Follow</button>
						</div>
						<a href="courses.html" class="stretched-link"></a>
					</div>
				</div>
				<div class="col">
					<div class="card h-100 shadow-sm rounded-3 overflow-hidden video-card-item border position-relative">
						<img src="img/communities/communities7.jpg" class="card-img-top" alt="...">
						<div class="card-body p-3">
							<h5 class="card-title mb-1 text-dark">
								Ameskeria
							</h5>
							<p class="card-text text-muted small">
								Barcelona, Spain
							</p>
						</div>
						<div class="card-footer bg-white border-0 d-flex align-items-center justify-content-between p-3 border-top">
							<p class="text-muted small mb-0">
								35241 followers
							</p>
							<button type="button" class="btn btn-secondary btn-sm px-2 py-0">+ Follow</button>
						</div>
						<a href="courses.html" class="stretched-link"></a>
					</div>
				</div>
				<div class="col">
					<div class="card h-100 shadow-sm rounded-3 overflow-hidden video-card-item border position-relative">
						<img src="img/communities/communities8.jpg" class="card-img-top" alt="...">
						<div class="card-body p-3">
							<h5 class="card-title mb-1 text-dark">
								Elias Mule
							</h5>
							<p class="card-text text-muted small">
								Adolfo López Mateos, Mexico
							</p>
						</div>
						<div class="card-footer bg-white border-0 d-flex align-items-center justify-content-between p-3 border-top">
							<p class="text-muted small mb-0">
								1175 followers
							</p>
							<button type="button" class="btn btn-secondary btn-sm px-2 py-0">+ Follow</button>
						</div>
						<a href="courses.html" class="stretched-link"></a>
					</div>
				</div>
				<div class="col">
					<div class="card h-100 shadow-sm rounded-3 overflow-hidden video-card-item border position-relative">
						<img src="img/communities/communities9.jpg" class="card-img-top" alt="...">
						<div class="card-body p-3">
							<h5 class="card-title mb-1 text-dark">
								Agustin Arroyo
							</h5>
							<p class="card-text text-muted small">
								Madrid, Spain
							</p>
						</div>
						<div class="card-footer bg-white border-0 d-flex align-items-center justify-content-between p-3 border-top">
							<p class="text-muted small mb-0">
								8742 followers
							</p>
							<button type="button" class="btn btn-secondary btn-sm px-2 py-0">+ Follow</button>
						</div>
						<a href="courses.html" class="stretched-link"></a>
					</div>
				</div>
				<div class="col">
					<div class="card h-100 shadow-sm rounded-3 overflow-hidden video-card-item border position-relative">
						<img src="img/communities/communities10.jpg" class="card-img-top" alt="...">
						<div class="card-body p-3">
							<h5 class="card-title mb-1 text-dark">
								Rafa Zabala
							</h5>
							<p class="card-text text-muted small">
								Singapur, Singapore
							</p>
						</div>
						<div class="card-footer bg-white border-0 d-flex align-items-center justify-content-between p-3 border-top">
							<p class="text-muted small mb-0">
								3848 followers
							</p>
							<button type="button" class="btn btn-secondary btn-sm px-2 py-0">+ Follow</button>
						</div>
						<a href="courses.html" class="stretched-link"></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="bg-white border-top border-bottom cities-footer">
	<div>
		<div class="container">
			<a class="w-100 text-body text-decoration-none py-3 d-block" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
				<div class="d-flex flex-wrap justify-content-between align-items-center py-1">
					<h6 class="m-0 h5 text-dark fw-bold">
						POPULAR CATEGORIES
					</h6>
					<small>
						SEE ALL CATEGORIES 
						<i class="icofont-rounded-down border p-1 ms-2 rounded-3"></i>
					</small>
				</div>
			</a>
		</div>
	</div>
	<div class="collapse border-top" id="collapseExample">
		<div class="container py-4">
			<div class="row">
				<div class="col-6 col-lg-3 col-md-3">
					<a class="py-1 text-decoration-none d-block w-100 link-dark" href="courses.html">llustration courses</a>
				</div>
				<div class="col-6 col-lg-3 col-md-3">
					<a class="py-1 text-decoration-none d-block w-100 link-dark" href="courses.html">Craft courses</a>
				</div>
				<div class="col-6 col-lg-3 col-md-3">
					<a class="py-1 text-decoration-none d-block w-100 link-dark" href="courses.html">Marketing & Business courses</a>
				</div>
				<div class="col-6 col-lg-3 col-md-3">
					<a class="py-1 text-decoration-none d-block w-100 link-dark" href="courses.html">Photography & Video courses</a>
				</div>
				<div class="col-6 col-lg-3 col-md-3">
					<a class="py-1 text-decoration-none d-block w-100 link-dark" href="courses.html">Design courses</a>
				</div>
				<div class="col-6 col-lg-3 col-md-3">
					<a class="py-1 text-decoration-none d-block w-100 link-dark" href="courses.html">3D & Animation courses</a>
				</div>
				<div class="col-6 col-lg-3 col-md-3">
					<a class="py-1 text-decoration-none d-block w-100 link-dark" href="courses.html">Architecture & Spaces courses</a>
				</div>
				<div class="col-6 col-lg-3 col-md-3">
					<a class="py-1 text-decoration-none d-block w-100 link-dark" href="courses.html">Web & App Design courses</a>
				</div>
				<div class="col-6 col-lg-3 col-md-3">
					<a class="py-1 text-decoration-none d-block w-100 link-dark" href="courses.html">llustration courses</a>
				</div>
				<div class="col-6 col-lg-3 col-md-3">
					<a class="py-1 text-decoration-none d-block w-100 link-dark" href="courses.html">Craft courses</a>
				</div>
				<div class="col-6 col-lg-3 col-md-3">
					<a class="py-1 text-decoration-none d-block w-100 link-dark" href="courses.html">Marketing & Business courses</a>
				</div>
				<div class="col-6 col-lg-3 col-md-3">
					<a class="py-1 text-decoration-none d-block w-100 link-dark" href="courses.html">Photography & Video courses</a>
				</div>
				<div class="col-6 col-lg-3 col-md-3">
					<a class="py-1 text-decoration-none d-block w-100 link-dark" href="courses.html">Design courses</a>
				</div>
				<div class="col-6 col-lg-3 col-md-3">
					<a class="py-1 text-decoration-none d-block w-100 link-dark" href="courses.html">3D & Animation courses</a>
				</div>
				<div class="col-6 col-lg-3 col-md-3">
					<a class="py-1 text-decoration-none d-block w-100 link-dark" href="courses.html">Architecture & Spaces courses</a>
				</div>
				<div class="col-6 col-lg-3 col-md-3">
					<a class="py-1 text-decoration-none d-block w-100 link-dark" href="courses.html">Web & App Design courses</a>
				</div>
				<div class="col-6 col-lg-3 col-md-3">
					<a class="py-1 text-decoration-none d-block w-100 link-dark" href="courses.html">Writing courses</a>
				</div>
				<div class="col-6 col-lg-3 col-md-3">
					<a class="py-1 text-decoration-none d-block w-100 link-dark" href="courses.html">Calligraphy & Typography courses</a>
				</div>
				<div class="col-6 col-lg-3 col-md-3">
					<a class="py-1 text-decoration-none d-block w-100 link-dark" href="courses.html">Fashion courses</a>
				</div>
				<div class="col-6 col-lg-3 col-md-3">
					<a class="py-1 text-decoration-none d-block w-100 link-dark" href="courses.html">Music & Audio courses</a>
				</div>
				<div class="col-6 col-lg-3 col-md-3">
					<a class="py-1 text-decoration-none d-block w-100 link-dark" href="courses.html">Writing courses</a>
				</div>
				<div class="col-6 col-lg-3 col-md-3">
					<a class="py-1 text-decoration-none d-block w-100 link-dark" href="courses.html">Calligraphy & Typography courses</a>
				</div>
				<div class="col-6 col-lg-3 col-md-3">
					<a class="py-1 text-decoration-none d-block w-100 link-dark" href="courses.html">Fashion courses</a>
				</div>
				<div class="col-6 col-lg-3 col-md-3">
					<a class="py-1 text-decoration-none d-block w-100 link-dark" href="courses.html">Music & Audio courses</a>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection