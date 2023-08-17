@extends('layout.layout')

@section('content')






<section class="bg-white py-5 feature-list">
  <div class="container py-4">
    <div class="d-flex align-items-end gap-2 mb-4">
      <div>
        <h3 class="pb-0 fw-bold text-dark mb-1">La communauté des créatifs</h3>
        <p class="text-muted m-0">
          La plus grande communauté en ligne de créatifs.
        </p>
      </div>
    </div>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 row-cols-xl-5 g-4">
              
              @foreach ($allFormateurs as $value)
              <div class="col">
        <div class="card h-100 shadow-sm rounded-3 overflow-hidden video-card-item border position-relative">
          <img src="{{ asset('formateurs/images/'.$value->avatar) }}" class="card-img-top" alt="...">
          <div class="card-body p-3">
            <h5 class="card-title mb-1 text-dark">
              {{ $value->fullname }}
            </h5>
            <p class="card-text text-muted small">
              {{ $value->poste }}
            </p>
          </div>
          <div class="card-footer bg-white border-0 d-flex align-items-center justify-content-between p-3 border-top">
            <p class="text-muted small mb-0">
              {{ count($value->courses) }} Formations 
            </p>
            <button type="button" class="btn btn-secondary btn-sm px-2 py-0">+ Consulter</button>
          </div>
          <a href="{{route('boutique.formateur', ['slug' => $value->slug, 'id' => $value->id])}}" class="stretched-link"></a>
        </div>
      </div>
              @endforeach
              
  

    

    </div>
  </div>
</div>
</section>


@endsection
