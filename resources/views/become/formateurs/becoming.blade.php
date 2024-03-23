@extends('layout.layout')
@section('title', 'Devenir Formateur')
@section('content')
<main>
    <section class="py-6 py-lg-12">
      <div class="container">
        <div class="row">
          <div class="offset-lg-1 col-lg-7 col-12">
            <div class="mb-10">
              <h1 class="mb-3 display-4 fw-bold">Dévenir Formateur </h1>
              <p class="mb-0 lead pe-lg-10 ">
                Cultivez le potentiel des autres en partageant votre savoir : devenez formateur.
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="offset-lg-1 col-lg-10 col-12">
            <div class="row">
              <div class=" col-md-8 col-12">
                <div>
                  <div class="row">
                    <div>
                      <div>
                          <div>
                            <div class="card card-bordered shadow-none mb-3  ">
                              <div class="card-body p-6">
                                <div class="mb-4">
                                  <h2 class="mb-0">FORMULAIRE D'ENREGISTREMENT </h2>
                                  <span>parlez-nous de vous .</span>
                                </div>
                                <form action="{{route('post.new.formateur')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                <div class="row gx-3">
                                  <div class="mb-4 col-12 col-md-12">
                                    <label class="form-label" for="lname">Nom et Prénom  @error('fullname')
                                            <small class="text-danger">{{$message}}</small>
                                    @enderror <span class="text-danger">*</span></label>
                                    <input type="text" id="lname" class="form-control" placeholder="Saisissez votre nom et prenom" name="fullname" value="{{old('fullname')}}">
                                  </div>
                                  <div class="mb-4 col-12 col-md-12">
                                    <label class="form-label" for="lname">Poste @error('poste')
                                        <small class="text-danger">{{$message}}</small>
                                @enderror  <span class="text-danger">*</span></label>
                                    <input type="text" id="lname" class="form-control" placeholder="Intitulé de poste" name="poste" value="{{old('poste')}}">
                                  </div>
                                  <div class="mb-4 col-12 col-md-12">
                                    <label class="form-label" for="email">Télephone  @error('telephone')
                                        <small class="text-danger">{{$message}}</small>
                                @enderror <span class="text-danger" >*</span></label>
                                    <input type="text " id="email" class="form-control" placeholder="+22507698365866" name="telephone" value="{{old('telephone')}}">
                                    <span class="fs-6">Permettra de vous contactez en urgence   </span>
                                  </div>
                                  <div class="mb-4 col-12 col-md-12">
                                    <label class="form-label" for="phone"> Numero WhatsApp      @error('whattsapp')
                                        <small class="text-danger">{{$message}}</small>
                                @enderror <span class="text-danger">*</span></label>
                                    <div class="input-group mb-1">
                                      <input type="text" class="form-control" name="whattsapp"  placeholder="Contact" aria-label="Mobile Number" aria-describedby="phone" value="{{old('whattsapp')}}">
                                    </div>
                                    <span class="fs-6">Permetra de vous contactez rapidement</span>
                                  </div>
                                  <div class="mb-4 col-12 col-md-12">
                                    <div class="fs-5 text-dark mb-2">Genre   @error('genre')
                                        <small class="text-danger">{{$message}}</small>
                                @enderror </div>
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="radio" name="genre" id="male" value="Home">
                                      <label class="form-check-label" for="male">Home</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="radio" name="genre" id="female" value="Femme">
                                      <label class="form-check-label" for="female">Femme</label>
                                    </div>
                                  </div>
                                  <div class="mb-4 col-12 col-md-12">
                                    <label class="form-label" for="resume">Votre Photo de profile    @error('avatar')
                                        <small class="text-danger">{{$message}}</small>
                                @enderror</label>
                                    <div class="input-group mb-1">
                                      <input type="file" name="avatar" class="form-control" id="resume">
                                      <label class="input-group-text" for="resume">Télecharger</label>
                                    </div>
                                    <span class="fs-6">PNG, JPEG,  JPGE </span>
                                  </div>
                                  <div class="mb-4 col-12 col-md-12">
                                    <label class="form-label" for="lname">Perfomance   @error('perfomance')
                                        <small class="text-danger">{{$message}}</small>
                                @enderror  <span class="text-danger">*</span></label>
                                    <input type="text" id="lname" class="form-control" placeholder="JQUERY FLUTTER REACT DJANGO LARAVEL" name="perfomance" value="{{old('perfomance')}}">
                                  </div>

                                  <div class="mb-4 col-12 col-md-12">
                                    <label class="form-label" for="lname">Décrivez-vous briévement   @error('description')
                                        <small class="text-danger">{{$message}}</small>
                                @enderror  <span class="text-danger">*</span></label>
                                <textarea name="description" class="form-control" id="" cols="30" rows="5"> {{old('description')}}</textarea>
                                  </div>
                                  <div class="mb-4 col-12 col-md-12">
                                    <div class="form-check">
                                      <input class="form-check-input" type="checkbox" value="Oui" id="formId">
                                      <label class="form-check-label fs-6" for="formId">
                                       Acceptez-vous les conditions d'utilisation de VTP FORMATION
                                      </label>
                                    </div>
                                  </div>
                                  <div class="col-12">
                                    <button class="btn btn-primary"  type="submit">
                                     Soumettre ma candidature
                                    </button>
                                  </div>
                                </div>
                            </form>
                              </div>
                            </div>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-12">
                <div class="card bg-light shadow-none">
                  <div class="card-body p-5">
                    <div class="mb-4">
                      <img src="../../assets/images/job/job-graphics.svg" alt="">
                    </div>
                    <h3 class="mb-3">Nous sommes heureux de  faire bénéficier une nouvelle compétence à nos apprenants </h3>
                    <ul class="list-unstyled text-dark mb-0">
                      <li class="d-flex align-items-start mb-3"><i class="mdi mdi-check-circle me-2 text-success"></i>
                        Monétisez votre savoir-faire en devenant formateur. .</li>
                      <li class="d-flex align-items-start mb-3"><i class="mdi mdi-check-circle me-2 text-success"></i>
                        Devenez le maître de votre succès financier en partageant votre expertise.</li>
                      <li class="d-flex align-items-start"><i class="mdi mdi-check-circle me-2 text-success"></i>
                        Transformez votre passion en profit en devenant formateur..</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection
