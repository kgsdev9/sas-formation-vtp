@extends('layout.layout')
@section('title', 'Formation par catégorie')
@section('content')

<main>
    <section class="py-7">
      <div class="container">
        <!-- Content -->
        <div class="row">
          <div class="col-lg-12 col-md-12 col-12">
            <div class="mb-5">
              <h2 class="mb-1">Formations Dispponible</h2>

            </div>
          </div>
        </div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3 mb-5">
        @foreach ($course as  $value)
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
                     
                        {{ Str::limit($value->url_video, 100) }}
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
    </section>


    </main>




@endsection
