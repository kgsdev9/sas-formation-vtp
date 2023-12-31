
@extends('layout.layout')
@section('title', 'Devenir formateur')

@section('content')

<main>
    <section class="py-6 py-lg-12">
      <div class="container">
        <div class="row">
          <div class="offset-lg-1 col-lg-7 col-12">

            <!-- Content -->
            <div class="mb-10">
              <!-- heading -->
              <h1 class="mb-3 display-4 fw-bold">Dévenir  &amp; Formateur </h1>
              <!-- lead -->
              <p class="mb-0 lead pe-lg-10 ">
                Renseingez vos informations pour publier vos formations et commencez à gagner de l'argent  Sur SAS FORMATION
              </p>
            </div>
          </div>
        </div>
        <!-- row -->
        <div class="row">
          <div class="offset-lg-1 col-lg-10 col-12">
            <div class="row">
              <div class=" col-md-8 col-12">

                <div id="stepperForm" class="bs-stepper">
                  <!-- row -->
                  <div class="row">
                    <div>

                      <!-- Stepper content -->

                      <div class="bs-stepper-content mt-5">

                          <!-- Content one -->
                          <div id="test-l-1" role="tabpanel" class="bs-stepper-pane fade active dstepper-block" aria-labelledby="courseFormtrigger1">
                            <!-- Card -->
                            <div class="card card-bordered shadow-none mb-3  ">

                              <!-- Card body -->
                              <div class="card-body p-6">
                                <div class="mb-4">
                                  <h2 class="mb-0">FORMULAIRE D'ENREGISTREMENT </h2>
                                  <span>parlez-nous de vous .</span>
                                </div>
                                <!-- row -->

                                <form action="{{route('post.new.formateur')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                <div class="row gx-3">

                                  <div class="mb-4 col-12 col-md-12">
                                    <!-- label -->
                                    <label class="form-label" for="lname">Nom et Prénom  @error('fullname')
                                            <small class="text-danger">{{$message}}</small>
                                    @enderror <span class="text-danger">*</span></label>
                                    <!-- input -->
                                    <input type="text" id="lname" class="form-control" placeholder="KGSDEV TECHNLOGIE" name="fullname" value="{{old('fullname')}}">
                                  </div>

                                  <div class="mb-4 col-12 col-md-12">
                                    <!-- label -->
                                    <label class="form-label" for="lname">Poste @error('poste')
                                        <small class="text-danger">{{$message}}</small>
                                @enderror  <span class="text-danger">*</span></label>
                                    <!-- input -->
                                    <input type="text" id="lname" class="form-control" placeholder="DEVELOPPEUR WEB" name="poste" value="{{old('poste')}}">
                                  </div>
                                  <div class="mb-4 col-12 col-md-12">
                                    <!-- label -->
                                    <label class="form-label" for="email">Télephone  @error('telephone')
                                        <small class="text-danger">{{$message}}</small>
                                @enderror <span class="text-danger" >*</span></label>
                                    <!-- input -->
                                    <input type="text " id="email" class="form-control" placeholder="0768365866" name="telephone" value="{{old('telephone')}}">
                                    <!-- label -->
                                    <span class="fs-6">Permettra de vous contactez en urgence   </span>
                                  </div>
                                  <div class="mb-4 col-12 col-md-12">
                                    <!-- label -->
                                    <label class="form-label" for="phone">Whattsap Contact     @error('whattsapp')
                                        <small class="text-danger">{{$message}}</small>
                                @enderror <span class="text-danger">*</span></label>
                                    <!-- input group -->
                                    <div class="input-group mb-1">

                                      <!-- input -->
                                      <input type="text" class="form-control" name="whattsapp"  placeholder="Contact" aria-label="Mobile Number" aria-describedby="phone" value="{{old('whattsapp')}}">
                                    </div>
                                    <!-- text -->
                                    <span class="fs-6">Permetra de vous contactez rapidement</span>
                                  </div>

                                  <div class="mb-4 col-12 col-md-12">
                                    <!-- text -->

                                    <div class="fs-5 text-dark mb-2">Genre   @error('genre')
                                        <small class="text-danger">{{$message}}</small>
                                @enderror </div>
                                    <!-- radio -->
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="radio" name="genre" id="male" value="Home">
                                      <label class="form-check-label" for="male">Home</label>
                                    </div>
                                    <!-- radio -->
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="radio" name="genre" id="female" value="Femme">
                                      <label class="form-check-label" for="female">Femme</label>
                                    </div>
                                  </div>

                                  <div class="mb-4 col-12 col-md-12">
                                    <!-- radio -->
                                    <label class="form-label" for="resume">Votre Photo de profile    @error('avatar')
                                        <small class="text-danger">{{$message}}</small>
                                @enderror</label>
                                    <div class="input-group mb-1">
                                      <input type="file" name="avatar" class="form-control" id="resume">
                                      <label class="input-group-text" for="resume">Télecharger</label>
                                    </div>
                                    <!-- text -->
                                    <span class="fs-6">PNG, JPEG,  JPGE </span>
                                  </div>

                                  <div class="mb-4 col-12 col-md-12">
                                    <!-- label -->
                                    <label class="form-label" for="lname">Perfomance   @error('perfomance')
                                        <small class="text-danger">{{$message}}</small>
                                @enderror  <span class="text-danger">*</span></label>
                                    <!-- input -->
                                    <input type="text" id="lname" class="form-control" placeholder="JQUERY FLUTTER REACT DJANGO LARAVEL" name="perfomance" value="{{old('perfomance')}}">
                                  </div>

                                  <div class="mb-4 col-12 col-md-12">
                                    <!-- label -->
                                    <label class="form-label" for="lname">Décrivez-vous briévement   @error('description')
                                        <small class="text-danger">{{$message}}</small>
                                @enderror  <span class="text-danger">*</span></label>
                                    <!-- input -->
                                <textarea name="description" class="form-control" id="" cols="30" rows="5"> {{old('description')}}</textarea>
                                  </div>



                                  <div class="mb-4 col-12 col-md-12">
                                    <!-- chechbox -->
                                    <div class="form-check">
                                      <input class="form-check-input" type="checkbox" value="Oui" id="formId">
                                      <label class="form-check-label fs-6" for="formId">
                                       Acceptez-vous les conditions d'utilisation de  SAS FORMATION
                                      </label>
                                    </div>
                                  </div>

                                  <div class="col-12">
                                    <!-- Button -->
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
                <!-- card -->
                <div class="card bg-light shadow-none">
                  <!-- card  body -->
                  <div class="card-body p-5">
                    <div class="mb-4">
                      <img src="../../assets/images/job/job-graphics.svg" alt="">

                    </div>
                    <h3 class="mb-3">Nos Aprénants seront ravis de recevoir une nouvelle Competétence </h3>
                    <ul class="list-unstyled text-dark mb-0">
                      <li class="d-flex align-items-start mb-3"><i class="mdi mdi-check-circle me-2 text-success"></i>
                      Avec Nous vos revénus vous sont reversés automatiquement .</li>
                      <li class="d-flex align-items-start mb-3"><i class="mdi mdi-check-circle me-2 text-success"></i>
                        Vous pouvez avoir des missions en freelance.</li>
                      <li class="d-flex align-items-start"><i class="mdi mdi-check-circle me-2 text-success"></i>
                        Débuter une carriere sur Sas formation se fait en deux clic.</li>
                    </ul>

                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- col -->

        </div>
      </div>
    </section>
  </main>


@endsection
