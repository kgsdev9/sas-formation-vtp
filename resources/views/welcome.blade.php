@extends('layout.layout')
@section('title', 'Bienvenue sur VTP FORMATION')
@section('content')
<main>

    <section class="py-lg-8 py-6">
        <div class="container my-lg-8">
            <div class="row d-flex align-items-center">
                <div class="col-xxl-5 col-xl-6 col-lg-6 col-12">

                    <h1 class="display-2 fw-bold mb-3">
                        Explorez de nouvelles
                        <u class="text-warning"><span class="text-primary"> connaissances  </span></u>
                    </h1>

                    <p class="lead mb-4">Préparez-vous à maîtriser de nouvelles compétences et à ouvrir de nouvelles portes dans votre carrière  .</p>
                    <ul class="list-unstyled mb-5">
                        <li class="mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="var(--gk-success)" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                            </svg>
                            <span class="ms-2">Rejoignez notre communauté d'apprenants passionnés et découvrez des cours captivants conçus pour vous aider à exceller. </span>
                        </li>
                        <li class="mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="var(--gk-success)" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                            </svg>
                            <span class="ms-2">Rencontrez nos formateurs hautement qualifiés, des experts chevronnés dans les dernières technologies</span>
                        </li>
                        <li class="mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="var(--gk-success)" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                            </svg>
                            <span class="ms-2">Explorez nos formations linguistiques de qualité supérieure et ouvrez les portes vers de nouvelles cultures, opportunités professionnelles et connexions interculturelles</span>
                        </li>
                        <li class="mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="var(--gk-success)" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                            </svg>
                            <span class="ms-2">Profitez d'un accompagnement administratif sur mesure adapté aux spécificités de chaque pays, grâce à notre équipe d'experts dédiés. Que vous ayez des besoins administratifs locaux ou internationaux, nos spécialistes sont là pour vous fournir un soutien efficace et personnalisé</span>
                        </li>
                    </ul>
                    <a href="{{route('become.teacher')}}" class="btn btn-dark btn-lg">Dévenir formateur </a>
                </div>
                <div class="col-xxl-5 offset-xxl-1 col-xl-6 col-lg-6 col-12 d-lg-flex justify-content-end">
                    <div class="mt-8 mt-lg-0 position-relative">
                        <div class="position-absolute top-0 start-0 translate-middle d-none d-md-block">
                            <img src="../../assets/images/svg/graphics-2.svg" alt="graphics-2">
                        </div>
                        <img src="../../assets/images/education/skils.jpg" alt="online course" class="img-fluid rounded-4 w-100 z-1 position-relative">
                        <div class="position-absolute top-100 start-100 translate-middle d-none d-md-block">
                            <img src="../../assets/images/svg/graphics-1.svg" alt="graphics-1">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="py-lg-8 py-6">
        <div class="container my-lg-8">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-12">
                    <div class="mb-6 mb-lg-8">
                        <h2 class="h1 fw-bold">
                            Explorer
                            <u class="text-warning"><span class="text-primary"> nos catégories </span></u>
                        </h2>
                        <p class="mb-0 lead">Parcourez nos catégories pour trouver des programmes qui répondent à vos besoins spécifiques et à vos intérêts.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($category  as $vcategory)
                <div class="col-xl-3 col-md-6 col-12">
                    <div class="card mb-4 card-hover border">

                        <div class="card-body">
                            <h4 class="mb-3">
                                <a href="#!" class="text-inherit">{{$vcategory->name}}</a>
                            </h4>
                            <div class="d-flex align-items-center mb-5 lh-1">
                                <div>
                                    <span class="text-inherit fw-semibold">Cours disponibles 4.9</span>
                                </div>
                            </div>
                            <a href="#!">
                                Consulter
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"></path>
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach

                <div class="col-xl-12 col-md-12 col-12">
                    <div class="mt-4">
                        <a href="#!" class="btn btn-light-primary text-primary">Consulter plus</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="pb-lg-8 pb-6">
        <div class="container mb-lg-8">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-md-12 col-12">
                    <div class="text-center mb-lg-8 mb-6">
                        <h2 class="h1 fw-bold">
                            Développer de solides compétences
                            <u class="text-warning"><span class="text-primary">fondamentales</span></u>
                        </h2>
                        <p class="lead mb-0">Bénéficiez d'un certificat de compétences reconnu en suivant notre formation spécialisée. Notre programme offre bien plus qu'un simple apprentissage.</p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-xl-5 col-lg-6 col-md-12 col-12">
                    <div class="mb-6 mb-lg-0">
                        <div class="mb-2">
                            <img src="../../assets/images/education/certificate.jpg" alt="certificate" class="img-fluid w-100">
                        </div>
                        <div class="d-flex">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="var(--gk-primary)" class="bi bi-patch-check-fill" viewBox="0 0 16 16">
                                    <path d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01-.622-.636zm.287 5.984-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708z"></path>
                                </svg>
                            </span>
                            <span class="ms-2">certificat d'achèvement délivré à chaque achèvement de cours</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 offset-xl-1 col-lg-6 col-md-12 col-12">
                    <div class="row row-cols-2">
                        <div class="col">
                            <div class="mb-4 mb-xl-6">
                                <div class="mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="var(--gk-primary)" class="bi bi-trophy" viewBox="0 0 16 16">
                                        <path d="M2.5.5A.5.5 0 0 1 3 0h10a.5.5 0 0 1 .5.5c0 .538-.012 1.05-.034 1.536a3 3 0 1 1-1.133 5.89c-.79 1.865-1.878 2.777-2.833 3.011v2.173l1.425.356c.194.048.377.135.537.255L13.3 15.1a.5.5 0 0 1-.3.9H3a.5.5 0 0 1-.3-.9l1.838-1.379c.16-.12.343-.207.537-.255L6.5 13.11v-2.173c-.955-.234-2.043-1.146-2.833-3.012a3 3 0 1 1-1.132-5.89A33.076 33.076 0 0 1 2.5.5zm.099 2.54a2 2 0 0 0 .72 3.935c-.333-1.05-.588-2.346-.72-3.935zm10.083 3.935a2 2 0 0 0 .72-3.935c-.133 1.59-.388 2.885-.72 3.935zM3.504 1c.007.517.026 1.006.056 1.469.13 2.028.457 3.546.87 4.667C5.294 9.48 6.484 10 7 10a.5.5 0 0 1 .5.5v2.61a1 1 0 0 1-.757.97l-1.426.356a.5.5 0 0 0-.179.085L4.5 15h7l-.638-.479a.501.501 0 0 0-.18-.085l-1.425-.356a1 1 0 0 1-.757-.97V10.5A.5.5 0 0 1 9 10c.516 0 1.706-.52 2.57-2.864.413-1.12.74-2.64.87-4.667.03-.463.049-.952.056-1.469H3.504z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4>Apprenez des experts du secteur</h4>
                                    <p>Apprenez auprès des meilleurs en suivant nos formations dispensées par des experts reconnus dans leur domaine.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-lg-6 mb-4">
                                <div class="mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="var(--gk-primary)" class="bi bi-star" viewBox="0 0 16 16">
                                        <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4>Apprenez facilement avec nos experts </h4>
                                    <p>Bénéficiez des compétences clés nécessaires pour réussir dans votre domaine avec nos programmes de formation spécialisés..</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-4 mb-md-0">
                                <div class="mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="var(--gk-primary)" class="bi bi-shield-lock" viewBox="0 0 16 16">
                                        <path d="M5.338 1.59a61.44 61.44 0 0 0-2.837.856.481.481 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.725 10.725 0 0 0 2.287 2.233c.346.244.652.42.893.533.12.057.218.095.293.118a.55.55 0 0 0 .101.025.615.615 0 0 0 .1-.025c.076-.023.174-.061.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453 7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625 11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 62.456 62.456 0 0 1 5.072.56z"></path>
                                        <path d="M9.5 6.5a1.5 1.5 0 0 1-1 1.415l.385 1.99a.5.5 0 0 1-.491.595h-.788a.5.5 0 0 1-.49-.595l.384-1.99a1.5 1.5 0 1 1 2-1.415z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4>Démarches  administratives  facilitez </h4>
                                    <p>Simplifiez vos démarches administratives avec l'assistance de nos experts dédiés</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <div class="mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="var(--gk-primary)" class="bi bi-nut" viewBox="0 0 16 16">
                                        <path d="m11.42 2 3.428 6-3.428 6H4.58L1.152 8 4.58 2h6.84zM4.58 1a1 1 0 0 0-.868.504l-3.428 6a1 1 0 0 0 0 .992l3.428 6A1 1 0 0 0 4.58 15h6.84a1 1 0 0 0 .868-.504l3.429-6a1 1 0 0 0 0-.992l-3.429-6A1 1 0 0 0 11.42 1H4.58z"></path>
                                        <path d="M6.848 5.933a2.5 2.5 0 1 0 2.5 4.33 2.5 2.5 0 0 0-2.5-4.33zm-1.78 3.915a3.5 3.5 0 1 1 6.061-3.5 3.5 3.5 0 0 1-6.062 3.5z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4>Apprentissage linguistique</h4>
                                    <p>"Plongez-vous dans l'apprentissage linguistique avec nos programmes interactifs et enrichissants.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="pb-lg-14 pb-8 text-center">
      <!-- row -->
      <div class="container">
        <div class="row">
          <!-- col -->
          <div class="col-12">
            <div class="mb-6">
              <h2 class="mb-1 h1">Cours les plus populaires</h2>
              <p>Choissisez parmi nos meilleures formations

                </p>
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
                        <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden video-card-item position-relative">
                            <img src="{{ asset('courss/images/'.$value->image) }}" class="img-fluid" alt="#" loading="lazy" style="height:150px">
                            <div class="card-body">
                                <h6 class="card-title pb-3 text-black mb-0">
                                    <span class="bg-warning badge text-black me-2"> {{ $value->category->name }}</span>
                                    {{ $value->title }}
                                </h6>
                                <p class="card-text mb-0">
                                    Publié par {{ $value->formateur->fullname }}
                                </p>
                                <div class="card-text text-muted small">
                                    {{ Str::limit($value->description, 100) }}
                                </div>

                            </div>
                            <div class="card-footer border-0 bg-white border-top p-3">
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <span class="badge bg-danger text-white">{{ $value->level->name }}</span>
                                    <div class="card-price text-danger">
                                        Soit
                                        <span class="text-black">
                                            {{ $value->prix * 650}} FCFA
                                        </span>
                                    </div>
                                </div>
                                <div class="d-grid">
                                    <button class="btn btn-primary"><i class="bi bi-cart-fill"></i> {{ $value->prix}} €</button>
                                </div>
                                <a href="{{ route('detail.course', $value->slug) }}" class="stretched-link"></a>
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
  </main>
@endsection
