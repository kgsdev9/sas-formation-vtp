@extends('layout.layout')
@section('title', $course->title)
@section('content')
<main>
	<section class="py-lg-13 py-8" style="background-color:#cfcfcf;">
		<div class="container">
			<!-- Page header -->
			<div class="row align-items-center">
				<div class="offset-xl-2 col-xl-8 col-lg-12 col-md-12 col-12">
					<div class="text-center mb-6 px-md-8">
						<h1 class="text-white ">
							{{$course->title}}
						</h1>
                        <p class="text-white p-2 text-center">{!!$course->description!!}</p>
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
					<div class="card border-0 mb-6 mb-lg-0 shadow sm" >
						<div class="p-5 text-center">
							<img src="{{asset('courss/images/'.$course->image)}}" alt="icon" class="mb-5" style="width:300px;">
							<div class="mb-5">
								<h2 class="fw-bold">Niveau : {{$course->level->name}} </h2>
							</div>
							<div class="d-flex justify-content-center mb-2">
								<span class="h3 mb-0 fw-bold">  {{$course->prix}} €</span>
							</div>
                            <br>
                            <span class="h3 mb-0 fw-bold">  {{$course->prix * 650}} FCFA </span>
                            <br><br>
                            <div class="d-grid">
                                <form action="{{route('process.checkout')}}" method="POST">

                                    @csrf
                                    <input type="hidden" name="price" value="{{$course->prix}}">
                                    <input type="hidden" name="couse_id" value="{{$course->id}}">
                                    <input type="hidden" name="title" value="{{$course->title}}">
                                      @error('payment_method')
                                     <span class="text-danger">{{$message}}</span>
                                      @enderror

                                    <div>

                                        <label for="">Payer via card</label>
                                        <input type="radio" name="payment_method" value="CARD">
                                    </div>
                                    <div>
                                        <label for="">Payer via Paypal</label>
                                        <input type="radio" name="payment_method" value="PAYPAL">
                                    </div>
                                    <button type="submit" class="btn btn-outline-primary">Proceder au paiement </button>
                                </form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


</main>


@endsection
