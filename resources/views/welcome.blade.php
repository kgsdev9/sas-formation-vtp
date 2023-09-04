@extends('layout.layout')
@section('title', 'Bienvenue sur VTP FORMATION')
@section('content')
<main>
    <section class="py-lg-16 py-5">
      <!-- container -->
      <div class="container">
        <!-- row -->
        <div class="row align-items-center">
          <!-- col -->
          <div class="col-lg-6 mb-6 mb-lg-0">
            <div class="">
              <!-- heading -->
              <h5 class="text-dark mb-4"><i
                  class="fe fe-check icon-xxs icon-shape bg-light-success text-success rounded-circle me-2"></i>
                  la plateforme educative dediée à la formation pratique</h5>
              <!-- heading -->
              <h1 class="display-3 fw-bold mb-3">Développez vos compétences et faites progresser votre carrière</h1>
              <!-- para -->
              <p class="pe-lg-10 mb-5">VTP FORMATION est une  plateforme mise en place par le groupe VTP MARKET  dans le but dE  disppenser des cours aux débutants en informatique et aux  autres activités professionelles.
            </p>
              <!-- btn -->
              <a href="{{route('become.teacher')}}" class="btn btn-primary">Devenir Formateur</a>
              <a href="#" class="popup-youtube fs-4 text-inherit ms-3"><img
                  src="{{asset('imagesdata/play-btn.svg')}}" alt="play" class="me-2">Qui sommes nous</a>


            </div>
          </div>
          <!-- col -->
          <div class="col-lg-6 d-flex justify-content-center">
            <!-- images -->
            <div class="position-relative">
              <img src="{{asset('imagesdata/bg-thumb.svg')}}" alt="img" class=" ">
              <img src="../../assets/images/background/acedamy-img/girl-image.png" alt="girl"
                class=" w-100 w-md-auto position-absolute end-0 bottom-0">
              <img src="{{asset('imagesdata/frame-1.svg')}}" alt="frame"
                class=" position-absolute top-0 ms-lg-n10 ms-n19">
              <img src="{{asset('imagesdata/frame-2.svg')}}" alt="frame"
                class=" position-absolute bottom-0 start-0 ms-lg-n14 ms-n6 mb-n7">
              <img src="{{asset('imagesdata/target.svg')}}" alt="target"
                class=" position-absolute bottom-0 mb-10 ms-n10 ms-lg-n1 ">
              <img src="{{asset('imagesdata/sound.svg')}}" alt="sound"
                class=" position-absolute top-0  start-0 mt-18 ms-lg-n19 ms-n8">
              <img src="{{asset('imagesdata/trophy.svg')}}" alt="trophy"
                class=" position-absolute top-0  start-0 ms-lg-n14 ms-n5">

            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- container -->
    <section class="pb-14">
      <div class="container">
        <!-- row -->
        <div class="row">
          <div class="col-md-6 col-lg-3 border-top-md border-bottom border-end-md ">
            <!-- text -->
            <div class="py-7 text-center">
              <div class="mb-3">
                <i class="fe fe-award fs-2 text-info"> </i>
              </div>
              <div class="lh-1">
                <h2 class="mb-1">316,000+</h2>
                <span>Instructeur qualifié</span>
              </div>
            </div>

          </div>
          <div class="col-md-6 col-lg-3 border-top-md border-bottom border-end-lg ">
            <!-- icon -->
            <div class="py-7 text-center">
              <div class="mb-3">
                <i class="fe fe-users fs-2 text-warning"> </i>
              </div>
              <!-- text -->
              <div class="lh-1">
                <h2 class="mb-1">1.8 k+</h2>
                <span>
                    Inscriptions aux cours</span>
              </div>
            </div>

          </div>
          <div class="col-md-6 col-lg-3 border-top-lg border-bottom border-end-md ">
            <!-- icon -->
            <div class="py-7 text-center">
              <div class="mb-3">
                <i class="fe fe-tv fs-2 text-primary"> </i>
              </div>
              <!-- text -->
              <div class="lh-1">
                <h2 class="mb-1">41,000+</h2>
                <span>Cours en 42 langues</span>
              </div>
            </div>

          </div>
          <div class="col-md-6 col-lg-3 border-top-lg border-bottom ">
            <!-- icon -->
            <div class="py-7 text-center">
              <div class="mb-3">
                <i class="fe fe-film fs-2 text-success"> </i>
              </div>
              <!-- text -->
              <div class="lh-1">
                <h2 class="mb-1">179,000+</h2>
                <span>Vidéos en ligne</span>
              </div>
            </div>

          </div>

        </div>
      </div>
      </div>
    </section>




    <section class="py-lg-14 bg-light pt-8 pb-10">
        <!-- container -->

        <div class="container">
          <div class="row">
            <!-- col -->

            <div class="offset-xl-1 col-xl-10 col-md-12 col-12">

              <div class="row text-center">
                <div class="col-md-12 px-lg-10 mb-8 mt-6">
                  <!-- text -->

                  <span class="text-uppercase text-primary fw-semibold ls-md">PARCOURIR LA CATÉGORIE
                  </span>
                  <!-- heading -->

                  <h2 class="h1 fw-bold mt-3">Découvrez des emplois dans des rôles populaires
                  </h2>
                  <!-- text -->

                  <p class="mb-0 fs-4">Sélectionnez un rôle et nous vous montrerons les emplois pertinents pour celui-ci!</p>

                </div>
              </div>
              <div class="row gy-4">

                @foreach ($category as $value)



                <div class="col-lg-3 col-md-4 col-12">
                  <!-- card -->

                  <div class="card  border-top  border-4  card-hover-with-icon">
                    <!-- card body -->

                    <div class="card-body">
                      <div class="icon-shape icon-lg rounded-circle bg-light text-muted mb-3  card-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                          <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
                        </svg></div>
                      <div class="d-flex align-items-center justify-content-between">
                        <div>
                          <!-- heading -->

                          <h4 class="mb-0">{{$value->name}}</h4>
                          <!-- text -->

                          <p class="mb-0 text-muted">{{count($value->courses)}}</p>
                        </div>
                        <!-- icon -->

                        <a href="#" class="text-inherit">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"></path>
                          </svg>
                        </a>
                      </div>
                    </div>

                  </div>

                </div>
                @endforeach


                <!-- button -->

                <div class="col-12 mt-8 text-center">
                  <a href="#" class="btn btn-outline-primary">Afficher toutes les catégories
                </a>
                </div>

              </div>
            </div>
          </div>

        </div>
      </section>
    <br>

    <div class="container">
        <div class="row">
          <div class="offset-xl-1 col-xl-10 col-md-12 col-12">
            <div class="row text-center">
              <!-- col -->
              <div class="col-md-12 px-lg-10 mb-8 mt-6">
                <span class="text-uppercase text-primary fw-semibold ls-md">Procedure </span>
                <!-- heading -->
                <h2 class="h1 fw-bold mt-3">Comment ca marche ?
                </h2>
              </div>
            </div>
            <div class="row gy-6">
              <!-- col -->

              <div class="col-md-4 col-12">
                <div class=" text-center">
                  <!-- icon -->

                  <div class="icon-shape icon-lg border border-primary border-2 fs-3 rounded-circle mb-4 process-line text-primary smooth-shadow-md">
                    1
                  </div>
                  <!-- heading -->

                  <h3>Créer un compte </h3>
                  <!-- text -->

                  <p class="mb-0 px-4">Créer un compte acheter une formation ou formez-vous dans les technlogies de vos choix!</p>

                </div>
              </div>
              <!-- col -->

              <div class="col-md-4 col-12">
                <div class=" text-center">
                  <!-- icon -->

                  <div class="icon-shape icon-lg border border-primary border-2 fs-3 rounded-circle mb-4 process-line text-primary smooth-shadow-md">
                    2</div>
                  <!-- heading -->

                  <h3>Démerrar votre apprentissage </h3>
                  <!-- text -->

                  <p class="mb-0 px-2">Démerrar votre apprentissage , aprenez de nouvelles competences techniques pour booster votre carriere et votre confiance .</p>

                </div>
              </div>
              <!-- col -->

              <div class="col-md-4 col-12">
                <div class=" text-center">
                  <!-- icon -->

                  <div class="icon-shape icon-lg border border-primary border-2 fs-3 rounded-circle mb-4 text-primary smooth-shadow-md">
                    3</div>
                  <!-- heading -->

                  <h3>Code Promo </h3>
                  <!-- text -->

                  <p class="mb-0 px-3">Béneficiez des codes promo  de reductions sur vos differentes factures  et formez-vous à petit prix.</p>

                </div>
              </div>
              <!-- button -->

              <div class="col-12 mt-8 text-center">
                <a href="{{route('auth.register')}}" class="btn btn-primary">S'inscrire Maintenant </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <br>

    <section class="pb-lg-14 pb-8">
      <!-- row -->
      <div class="container">
        <div class="row">
          <!-- col -->
          <div class="col-12">
            <div class="mb-6">
              <h2 class="mb-1 h1">Cours les plus populaires</h2>
              <p>Ce sont les cours les plus populaires parmi les apprenants des cours VTP FORMATION  dans le monde en 2023</p>
            </div>
          </div>

        </div>
        <div class="row">
          <div class="col-md-12">

            <!-- Tab content -->
            <div class="tab-content" id="pills-tabContent">
              <!-- tab content -->
              <div class="tab-pane fade show active" id="pills-development" role="tabpanel"
                aria-labelledby="pills-development-tab">

                <!-- row -->

                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                    @foreach ($allCourse as  $value)
                  <div class="col">
                    <!-- Card -->
                    <div class="card card-hover">
                      <a href="../course-single.html" class="card-img-top"><img
                          src="{{asset('courss/images/'.$value->image)}}" alt="course"
                          class="rounded-top-md card-img-top"></a>
                      <!-- Card Body -->
                      <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                          <span class="badge bg-info-soft">{{$value->level->name}}</span>
                          <a href="#" class="text-muted fs-5"><i class="fe fe-heart align-middle"></i></a>
                        </div>
                        <h4 class="mb-2 text-truncate-line-2 "><a href="../course-single.html" class="text-inherit">
                           {{Str::limit($value->title, 55)}}</a></h4>

                        <small>Publié par : {{$value->formateur->fullname}}</small>
                        <div class="lh-1 mt-3">

                            {{ $value->
                                category->
                                name }}

                        </div>
                      </div>
                      <!-- Card Footer -->
                      <div class="card-footer">
                        <div class="row align-items-center g-0">
                          <div class="col">
                            <h5 class="mb-0">{{$value->prix}}€ - {{$value->prix * 650}} FCFA </h5>
                          </div>

                          <div class="col-auto">
                            <a href="{{route('commande.formation', $value->id)}}" class="text-inherit">
                              <i class="fe fe-shopping-cart text-primary align-middle me-2"></i>Acheter
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach

                </div>
              </div>
              <!-- tab content -->




            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- section -->



    <section class="my-lg-14 mb-8">
      <!-- container -->
      <div class="container bg-primary rounded-3">
        <!-- row -->
        <div class="row align-items-center">
          <!-- col -->
          <div class="col-lg-6 col-12 d-none d-lg-block">
            <div class="d-flex justify-content-center ">
              <!-- img -->
              <div class="position-relative">
                <img src="../../assets/images/png/cta-instructor-1.png" alt="image" class="img-fluid mt-n13">
                <div class="ms-n12 position-absolute bottom-0 start-0 mb-6">
                  <img src="{{asset('imagesdata/dollor.svg')}}" alt="dollor">
                </div>
                <!-- img -->
                <div class="me-n4 position-absolute top-0 end-0">
                  <img src="{{asset('imagesdata/graph.svg')}}" alt="graph">
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-5 col-12">
            <div class="text-white p-5 p-lg-0">
              <!-- text -->
              <h2 class="h1 text-white">Devenez instructeur aujourd'hui</h2>
              <p class="mb-0">un support de cours <br>
                 une fiche de présence ou une capture d'écran de présence sur l'outil de visio. <br>

                 mettre en place un petit laboratoire de test pour les apprenant..</p>
              <a href="{{route('become.teacher')}}" class="btn btn-white mt-4">Commencez à enseigner aujourd'hui</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- section -->
    <section class=" bg-gray-200 pt-lg-14 pb-lg-16 pt-5 pb-13">
      <div class="container">
        <!-- row -->
        <div class="row mb-lg-10 mb-5">
          <div class="offset-lg-1 col-lg-10 col-12">
            <div class="row align-items-center">
              <!-- col -->
              <div class="col-lg-6 col-md-8">
                <!-- rating -->
                <div class="">
                  <div class="mb-3"><span class="text-dark fw-semibold">4.5/5.0</span> <span>
                      <i class="mdi mdi-star text-warning me-n1"></i>
                      <i class="mdi mdi-star text-warning me-n1"></i>
                      <i class="mdi mdi-star text-warning me-n1"></i>
                      <i class="mdi mdi-star text-warning me-n1"></i>
                      <i class="mdi mdi-star text-warning"></i>
                    </span>
                    <span class="text-warning">5</span><span class="ms-2">(Based on 3265 ratings)</span>
                  </div>
                  <!-- heading -->
                  <h2 class="h1">Ce que disent nos clients</h2>
                  <p class="mb-0"> Écoutez les  <span class="text-dark">enseignants</span>, <span
                      class="text-dark">formatrices</span>, et  <span class="text-dark">dirigeantes</span> in the learning
                      espace
                      sur la façon dont Geeks leur permet de fournir
                      des expériences d'apprentissage en ligne de qualité.</p>

                </div>
              </div>
              <div class="col-lg-6 col-md-4 text-md-end mt-4 mt-md-0">
                <!-- btn -->
                <a href="#" class="btn btn-primary">Voir les avis</a>
              </div>
            </div>

          </div>

        </div>

        <!-- row -->
        <div class="row">
          <!-- col -->
          <div class="col-md-12">
            <div class="position-relative">
              <!-- controls -->

              <!-- slider -->
              <div class="sliderTestimonial">
                <!-- item -->
                <div class="item">
                  <div class="card">
                    <div class="card-body text-center p-6">
                      <!-- img -->
                      <img src="../../assets/images/avatar/avatar-1.jpg" alt="avatar"
                        class="avatar avatar-lg rounded-circle">
                      <p class="mb-0 mt-3">“Je suis très satisfait par cette formation de sécurité informatique. En espérant approfondir un peu plus sur la sécurité au fur et à mesure des cours. En tout cas, merci pour vos cours qui sont très bien organisés. Je suis très satisfait de ma formation en techniques de maintenance informatique.”</p>
                      <!-- rating -->
                      <div class="lh-1 mb-3 mt-4">
                        <span>
                          <i class="mdi mdi-star text-warning me-n1"></i>
                          <i class="mdi mdi-star text-warning me-n1"></i>
                          <i class="mdi mdi-star text-warning me-n1"></i>
                          <i class="mdi mdi-star text-warning me-n1"></i>
                          <i class="mdi mdi-star text-warning"></i>
                        </span>
                        <span class="text-warning">5</span>
                        <!-- text -->
                      </div>
                      <h3 class="mb-0 h4">Francois Martin </h3>
                      <span>Ingénieur Securité informatique</span>
                    </div>
                  </div>
                </div>
                <!-- item -->
                <div class="item">
                  <div class="card">
                    <div class="card-body text-center p-6">
                      <!-- img -->
                      <img src="../../assets/images/avatar/avatar-2.jpg" alt="avatar"
                        class="avatar avatar-lg rounded-circle">
                      <p class="mb-0 mt-3">“Très bonne formation- Des supports très bien faits - De bons professeurs et un bon suivi. Je souhaiterais revenir pour une formation Photoshop. Je la recommanderai sans aucun problème! ”</p>
                      <!-- rating -->
                      <div class="lh-1 mb-3 mt-4">
                        <span>
                          <i class="mdi mdi-star text-warning me-n1"></i>
                          <i class="mdi mdi-star text-warning me-n1"></i>
                          <i class="mdi mdi-star text-warning me-n1"></i>
                          <i class="mdi mdi-star text-warning me-n1"></i>
                          <i class="mdi mdi-star text-warning"></i>
                        </span>
                        <span class="text-warning">3.5</span>

                      </div>
                      <!-- text -->
                      <h3 class="mb-0 h4">Sophie V</h3>
                      <span>Infographe</span>
                    </div>
                  </div>
                </div>
                <!-- item -->
                <div class="item">
                  <div class="card">
                    <div class="card-body text-center p-6">
                      <!-- img -->
                      <img src="../../assets/images/avatar/avatar-3.jpg" alt="avatar"
                        class="avatar avatar-lg rounded-circle">
                      <p class="mb-0 mt-3">“Je viens de survoler tout ce que vous nous faites passer depuis quelques jours et je me rends compte, du travail et du mal incroyables que vous faites et que vous vous donnez !.. soyez en mille fois remercié Cédric ! J’ admire votre professionalisme..votre sérieux..votre gentillesse et,je le dis,c’est une chance,en tout cas pour moi,que de vous connaître!.. Soyez assuré de toute ma gratitude!….”</p>
                      <!-- rating -->
                      <div class="lh-1 mb-3 mt-4">
                        <span>
                          <i class="mdi mdi-star text-warning me-n1"></i>
                          <i class="mdi mdi-star text-warning me-n1"></i>
                          <i class="mdi mdi-star text-warning me-n1"></i>
                          <i class="mdi mdi-star text-warning me-n1"></i>
                          <i class="mdi mdi-star text-warning"></i>
                        </span>
                        <span class="text-warning">4.0</span>

                      </div>
                      <!-- text -->
                      <h3 class="mb-0 h4">Leigh F. Keller</h3>
                      <span>Marketeur Web </span>
                    </div>
                  </div>
                </div>
                <!-- item -->
                <div class="item">
                  <div class="card">
                    <div class="card-body text-center p-6">
                      <!-- img -->
                      <img src="../../assets/images/avatar/avatar-4.jpg" alt="avatar"
                        class="avatar avatar-lg rounded-circle">
                      <p class="mb-0 mt-3">“Formateur très pédagogue, explications très claires. Beaucoup de travaux pratiques. Ce stage m' a apporté une bonne pratique des réseaux une bonne connaissance. La formation est bonne et je la recommanderai volontiers à d'autres personnes. J'ai trouvé qu'on a beaucoup appris sans faire beaucoup d'efforts....”</p>
                      <!-- rating -->
                      <div class="lh-1 mb-3 mt-4">
                        <span>
                          <i class="mdi mdi-star text-warning me-n1"></i>
                          <i class="mdi mdi-star text-warning me-n1"></i>
                          <i class="mdi mdi-star text-warning me-n1"></i>
                          <i class="mdi mdi-star text-warning me-n1"></i>
                          <i class="mdi mdi-star text-warning"></i>
                        </span>
                        <span class="text-warning">5.0</span>

                      </div>
                      <!-- text -->
                      <h3 class="mb-0 h4">Gladys Colbert</h3>
                      <span>Ingenieur Systeme</span>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="card">
                    <div class="card-body text-center p-6">
                      <!-- img -->
                      <img src="../../assets/images/avatar/avatar-5.jpg" alt="avatar"
                        class="avatar avatar-lg rounded-circle">
                      <p class="mb-0 mt-3">“"je suis maintenant capable de développer un site Internet à la fin de ma formation. Très bon formateur, adapté à mon niveau. Faible effectif. Je recommanderai cette formation avec ce formateur”</p>
                      <div class="lh-1 mb-3 mt-4">
                        <!-- rating -->
                        <span>
                          <i class="mdi mdi-star text-warning me-n1"></i>
                          <i class="mdi mdi-star text-warning me-n1"></i>
                          <i class="mdi mdi-star text-warning me-n1"></i>
                          <i class="mdi mdi-star text-warning me-n1"></i>
                          <i class="mdi mdi-star text-warning"></i>
                        </span>
                        <span class="text-warning">3.5</span>

                      </div>
                      <!-- text -->
                      <h3 class="mb-0 h4">Lisa D. Roloff</h3>
                      <span>Web Developer at Codescandy</span>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="card">
                    <div class="card-body text-center p-6">
                      <!-- img -->
                      <img src="../../assets/images/avatar/avatar-6.jpg" alt="avatar"
                        class="avatar avatar-lg rounded-circle">
                      <p class="mb-0 mt-3">“l'utilisation des bases access et leur création répond aux besoins très spécifiques de l'entreprise. Ce qui m'a le plus satisfait c'est la présentation et l'application pratique en effectif restreint. Formation très satifaisante".”</p>
                      <!-- rating -->
                      <div class="lh-1 mb-3 mt-4">
                        <span>
                          <i class="mdi mdi-star text-warning me-n1"></i>
                          <i class="mdi mdi-star text-warning me-n1"></i>
                          <i class="mdi mdi-star text-warning me-n1"></i>
                          <i class="mdi mdi-star text-warning me-n1"></i>
                          <i class="mdi mdi-star text-warning"></i>
                        </span>
                        <span class="text-warning">4.5</span>

                      </div>
                      <!-- text -->
                      <h3 class="mb-0 h4">Leigh F. Keller</h3>
                      <span>Administrateur de base de données </span>
                    </div>
                  </div>
                </div>
              </div>
              <ul class="controls-testimonial controls " id="sliderTestimonialControls">
                <li class="prev">
                  <i class="fe fe-chevron-left"></i>
                </li>
                <li class="next ms-2">
                  <i class="fe fe-chevron-right"></i>
                </li>
              </ul>
            </div>
          </div>
        </div>

      </div>


    </section>

  </main>
@endsection
