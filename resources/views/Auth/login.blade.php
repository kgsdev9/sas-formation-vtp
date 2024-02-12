@extends('layout.layout')
@section('title', 'Espace de connexion')
@section('content')
<section class="my-4">
	<div class="container py-5">
		<div class="row justify-content-center align-items-center">
			<div class="col-lg-5">
				<div class="h5 text-muted text-uppercase">
					Connectez-vous  sur SAS FORMATION
					<span class="text-primary">SAS formation</span>
				</div>
				<div class="fw-bold display-5 py-2 text-black mb-2">
					Inscrivez-vous avec les meilleurs professionnels
				</div>
				<p class="lead text-dark-50 mb-0">
					Apprenez des professionnels experts et
					<br>
					Rejoignezla plus grande communauté en ligne pour les créatifs.
				</p>
			</div>
			<div class="col-lg-5">
				<div class="text-center rounded-3 bg-white shadow-sm p-5">

					<form action="{{ route('post.login') }}" method="POST" class="d-grid gap-3 mb-2">
						@csrf
						<div class="social-btn border rounded-3">
							<a href="{{ url('/login/google') }}" class="text-dark w-100">
								<div class="d-flex align-items-center py-3 px-3 border-bottom">
									<img src="{{ asset(('google-icon.png')) }}" class="img-fluid" alt="Edutree">
									<p class="mb-0 mx-auto">
										Se Connecter avec  Google
									</p>
								</div>
							</a>

						</div>

											@if ($errors->any())
												<div class="alert alert-danger">
													<ul>
														@foreach ($errors->all() as $error)
															<li>{{ $error }}</li>
														@endforeach
													</ul>
												</div>
											@endif

						<div class="d-flex align-items-center justify-content-between divide my-2">
							<hr class="w-100">
							<span class="text-muted small px-2">ou</span>
							<hr class="w-100">
						</div>

						<input type="email" name="email" class="form-control" placeholder="Entrer votre Email" value="{{ old(('email')) }}">
						<input type="password" name="password" class="form-control" placeholder="Entrer votre mot de passe">



						<button type="submit" class="btn btn-primary">Se Connecter</button>
					</form>
					<p class="text-muted mt-3 mb-0">
						Vous n'avez pas de compte ?
						<a href="{{ route('auth.register') }}" class="text-mdinfo">Inscrivez-vous </a>
					</p>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection
