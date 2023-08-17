
@extends('layout.layout')
@section('content')


	<!-- Page content -->
	<main>
	<section class="container d-flex flex-column">
		<div class="row align-items-center justify-content-center g-0 min-vh-100">
			<div class="col-lg-5 col-md-8 py-4 py-xl-0">
				<!-- Card -->
				<div class="card shadow">
					<!-- Card body -->
					<div class="card-body p-6">
						<div class="mb-4">

							<h1 class="mb-1 fw-bold">S'inscrire </h1>
							<span>Vous avez déjà un compte?
								<a href="{{route('auth.login')}}" class="ms-1">S'identifier</a></span>
						</div>
						<!-- Form -->
						<form method="POST" action="{{ route('register') }}">
							@csrf
								<!-- Username -->
							<div class="mb-3">
								<label for="username" class="form-label">Nom d'utilisateur  @error('name')
										<small class="text-danger">{{ $message }}</small>
								@enderror</label>
								<input type="text" id="username" class="form-control" name="name"  value="{{ old('name') }}" placeholder="Kgs Dev" required >
							</div>
								<!-- Email -->
							<div class="mb-3">
								<label for="email" class="form-label">Email   @error('email')
									<small class="text-danger">{{ $message }}</small>
							@enderror</label>
								<input type="email" id="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="kgsdev8@gmail.com"
									required>
							</div>
								<!-- Password -->
							<div class="mb-3">
								<label for="password" class="form-label">Mot de passe   @error('password')
									<small class="text-danger">{{ $message }}</small>
							@enderror</label>
								<input type="password" id="password" class="form-control" name="password" placeholder="**************"
									required>
							</div>

                            <div class="mb-3">
								<label for="password" class="form-label">Confirmer le mot de passe </label>
								<input type="password" id="password" class="form-control" name="password_confirmation" placeholder="**************"
									required>
							</div>
								<!-- Checkbox -->
							<div class="mb-3">
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="agreeCheck">
									<label class="form-check-label" for="agreeCheck"><span>J'accepte les <a href="#">
                                        conditions d'utilisation</a>et
											<a href="terms-condition-page.html">la politique de confidentialité.</a></span></label>
								</div>
							</div>
							<div>
									<!-- Button -->
									<div class="d-grid">
								<button type="submit" class="btn btn-primary">
									Créer un compte gratuitement
								</button>
								</div>
							</div>
							{{-- <hr class="my-4">
							<div class="mt-4 text-center">
								<!--Facebook-->
								<a href="#" class="btn-social btn-social-outline btn-facebook">
									<i class="mdi mdi-facebook fs-4"></i>
								</a>
								<!--Twitter-->
								<a href="#" class="btn-social btn-social-outline btn-twitter">
									<i class="mdi mdi-twitter fs-4"></i>
								</a>
								<!--LinkedIn-->
								<a href="#" class="btn-social btn-social-outline btn-linkedin">
									<i class="mdi mdi-linkedin"></i>
								</a>
								<!--GitHub-->
								<a href="#" class="btn-social btn-social-outline btn-github">
									<i class="mdi mdi-github"></i>
								</a>
							</div> --}}
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>

@endsection
