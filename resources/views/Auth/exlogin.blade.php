<main>
	<section class="container d-flex flex-column">
		<div class="row align-items-center justify-content-center g-0 min-vh-100">
			<div class="col-lg-5 col-md-8 py-8 py-xl-0">
				<!-- Card -->
				<div class="card shadow">
					<!-- Card body -->
					<div class="card-body p-6">
						<div class="mb-4">

							<h1 class="mb-4 fw-bold">Se  Connecter </h1>
							<span>Vous n'avez  pas  un compte ?
								<a href="{{route('auth.register')}}" class="ms-1">Inscrivez-vous </a></span>
						</div>
						<!-- Form -->
						<form method="POST"  action="{{route('post.login')}}">
                            @csrf
								<!-- Email -->
							<div class="mb-3">
								<label for="email" class="form-label">Email</label>
								<input type="email" id="email" name="email" class="form-control" name="email" placeholder="Email address here"
									required value="{{old('email')}}">
							</div>
								<!-- Password -->
							<div class="mb-3">
								<label for="password" class="form-label">Password</label>
								<input type="password" id="password" class="form-control" name="password" placeholder="**************"
									required>
							</div>
								<!-- Checkbox -->

							<div>
									<!-- Button -->
									<div class="d-grid">
								<button type="submit" class="btn btn-primary">
									Se Connecter
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