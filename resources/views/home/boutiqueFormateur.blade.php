@extends('layout.layout')
@section('content')
<style>

  div#social-links ul li {
      display: inline-block;
  }
  div#social-links ul li a {
      margin: 1px;
      font-size: 30px;
      color: #222;

  }
</style>
    
<main>
    <section class="pt-5">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-xl-12 col-lg-12 col-md-12 col-12">
            <!-- Bg -->
            <div class=" pt-16 rounded-top-md " style="
                     background: url(../assets/images/background/profile-bg.jpg) no-repeat;
                      background-size: cover;">
            </div>
            <div class="card rounded-0 rounded-bottom  px-4  pt-2 pb-4 ">
            <div class="d-flex align-items-end justify-content-between  ">
              <div class="d-flex align-items-center">
                <div class="me-2 position-relative d-flex justify-content-end align-items-end mt-n5">
                  <img src="{{asset('formateurs/images/'.$image)}}" class="avatar-xl rounded-circle border border-4 border-white" alt="avatar">
                </div>
                <div class="lh-1">
                  <h2 class="mb-0">{{$name}}

                  </h2>
                  <p class=" mb-0 d-block">@ {{$name}}</p>
                </div>
              </div>
              <div>
                <a href="#" class="btn btn-primary btn-sm d-none d-md-block">

                  Partager Ma boutique </a>
              </div>
              <span> {!! $shareComponent !!}</span>
            </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Content -->
    <section class="pb-5 py-md-5">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <!-- Side Navbar -->
            <ul class="nav nav-lb-tab mb-6" id="tab" role="tablist">
              <li class="nav-item ms-0" role="presentation">
                <a class="nav-link active" id="bookmarked-tab" data-bs-toggle="pill" href="#bookmarked" role="tab" aria-controls="bookmarked" aria-selected="true">Bienvenue Sur ma boutique</a>

              </li>
            </ul>
            <!-- Tab content -->
            <div class="tab-content" id="tabContent">
              <div class="tab-pane fade active show" id="bookmarked" role="tabpanel" aria-labelledby="bookmarked-tab">
                <div class="row">
                    @foreach ($query as $value)


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
                              Learn to create campaigns on Google and Facebook to boostyour brand or business
                            </div>
                            <div class="text-muted gap-2 pt-2 small d-flex">
                              <span><i class="bi bi-person"></i> 23643</span>
                              <span><i class="bi bi-hand-thumbs-up"></i> 80% (2.2k)</span>
                            </div>
                          </div>
                          <div class="card-footer border-0 bg-white border-top p-3">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                              <span class="badge bg-danger text-white">{{ $value->level->name }}</span>
                              <div class="card-price text-danger">
                                Reduction de .
                                <del class="text-black">
                                 300
                                </del>
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

              <!-- Path -->

            </div>
          </div>
        </div>
      </div>
    </section>
  </main>


@endsection
