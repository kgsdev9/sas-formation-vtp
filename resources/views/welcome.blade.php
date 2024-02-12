@extends('layout.layout')
@section('title', 'Bienvenue sur VTP FORMATION')
@section('content')
<main>
    <section class="py-lg-16 py-5 mt-8">
      <div class="container">
        <div class="row justify-content-center">
          <div class="mb-6 mb-lg-0 text-center">
            <div class="">
              <h1 class="display-3 fw-bold mb-3">Développez vos compétences et faites <br> progresser votre carrière</h1>
              <p class="pe-lg-10 mb-5">Nous dispensons des formations à des professionelles et des organismes gouvernementaux .
            </p>
              <a href="{{route('home.categorie')}}" class="btn btn-outline-secondary">Nos Catégories</a>
              <a href="{{route('formation.annuaire')}}" class="btn btn-outline-warning">
                 Nos Formations</a>
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
