@extends('layout.layout')
@section('content')

<main>
	<section class="py-lg-13 py-8" style="background-color:#2f1192;">
		<div class="container">
			<!-- Page header -->
			<div class="row align-items-center">
				<div class="offset-xl-2 col-xl-8 col-lg-12 col-md-12 col-12">
					<div class="text-center mb-6 px-md-8">
						<h1 class="text-white ">
							{{$course->title}}
						</h1>


                        <p class="text-white p-2 text-center">  {{$course->description}}</p>

					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Content -->
	<section class="mt-n8 pb-8">
		<div class="container">
			<div class="row align-items-center justify-content-center g-0 min-vh-100">


				<div class="col-lg-5 col-md-12 py-8 py-xl-0">
					<!-- Card -->
					<div class="card border-0 mb-6 mb-lg-0 shadow sm" >
						<!-- Card body -->
						<div class="p-5 text-center">
							<img src="{{asset('courss/images/'.$course->image)}}" alt="icon" class="mb-5" style="width:300px;">
							<div class="mb-5">
								<h2 class="fw-bold">Niveau : {{$course->level->name}} </h2>

							</div>
							<div class="d-flex justify-content-center mb-4">
								<span class="h3 mb-0 fw-bold">  {{$course->prix}} €</span>


							</div>
							<div class="d-grid">
							<a href="{{$course->url}}" class="btn btn-outline-primary" target="_blank">Démo de la formartion </a>
                            <br>
                            <a href="{{route('commande.formation', $course->id)}}" class="btn btn-outline-primary">Acheter la formation </a>
							</div>
						</div>


					</div>
				</div>
			</div>
		</div>
	</section>


</main>


@endsection
