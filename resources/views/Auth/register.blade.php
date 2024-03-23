@extends('layout.layout')
@section('title', 'S\'inscrire')
@section('content')
<section class="my-4">
	<div class="container py-5">
		<div class="row justify-content-center align-items-center">
			<div class="col-lg-5">
				<div class="h5 text-muted text-uppercase">
					S'inscrire sur VTP-FORMATION

				</div>
				<div class="fw-bold display-5 py-2 text-black mb-2">
					Inscrivez-vous afin de bénéficier de l'expérience de nos experts dans le métier que vous recherchez.
				</div>
				<p class="lead text-dark-50 mb-0">
                    Posez vos questions à des personnes susceptibles de vous répondre sans détour avec leurs expériences.

				</p>
			</div>
			<div class="col-lg-5">
				<div class="text-center rounded-3 bg-white shadow-sm p-5">
					<form action="{{ route('register') }}" method="POST" class="d-grid gap-3 mb-2">
						@csrf
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
						<div class="social-btn border rounded-3">
							<a href="{{url('/login/google')}}" class="text-dark w-100">
								<div class="d-flex align-items-center py-3 px-3 border-bottom">
									<img src="{{ asset(('google-icon.png')) }}" class="img-fluid" alt="Edutree">
									<p class="mb-0 mx-auto">
										Se Connecter avec  Google
									</p>
								</div>
							</a>

						</div>
						<div class="d-flex align-items-center justify-content-between divide my-2">
							<hr class="w-100">
							<span class="text-muted small px-2">ou</span>
							<hr class="w-100">
						</div>
						<div class="d-grid d-md-flex gap-3">
							<input type="text" class="form-control" name="name" placeholder="Nom D'utilisateur">

						</div>
						<input type="text" name="fullname" class="form-control" placeholder="Nom Complet" value="{{old('fullname')}}">
                        <input type="text" name="phone" class="form-control" placeholder="Telephone" value="{{old('phone')}}">

                        <input type="email" name="email" class="form-control" placeholder="Entrer votre Email">
                        <textarea name="adresse" class="form-control" id="" cols="30" rows="2" placeholder="Entrer votre adresse"> {{old('adresse')?? 'Paris Rue des princes'}}</textarea>
						<input type="password" name="password" class="form-control" placeholder="Entrer votre mot de passe">
						<input type="password" name="password_confirmation" class="form-control" placeholder="Confirmer votre mot de passe">
						<div class="form-check text-start">
							<input type="checkbox" class="form-check-input" id="exampleCheck1">
							<label class="form-check-label small text-muted" for="exampleCheck1">Acceptez-vous  <a href="#" class="text-mdinfo">les termes  &amp;Conditions </a></label>
						</div>
						<button type="submit" class="btn btn-primary">S'inscrire</button>
					</form>
					<p class="text-muted mt-3 mb-0">
						Vous avez déjà un compte?
						<a href="{{route('auth.login')}}" class="text-mdinfo">Se Connecter </a>
					</p>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection
