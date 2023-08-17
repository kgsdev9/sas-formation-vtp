@extends('layout.layout')

@section('content')

<main>
    <section class="py-7 bg-light">
        <div class="container">
          <div class="row ">
            <div class="col-lg-8 col-md-10 col-12">
              <!-- text -->
              <div>
                <div class="mb-4">
                  <h1 class=" fw-bold mb-4">Annuaire des catégories
                  </h1>
                </div>
                <div class="bg-white rounded-md-pill me-lg-10 shadow rounded-3">
                  <!-- card body -->
                  <div class="p-md-2 p-4">
                    <!-- form -->
                    <form class="row g-1">
                      <div class="col-12 col-md-5">

                        <!-- input -->
                        <div class="input-group mb-2 mb-md-0 border-md-0 border rounded-pill">
                          <!-- input group -->
                          <span class="input-group-text bg-transparent border-0 pe-0 ps-md-3 ps-md-0" id="searchJob"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-search text-muted" viewBox="0 0 16 16">
                              <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
                            </svg></span>
                          <!-- search -->
                          <input type="search" class="form-control  rounded-pill border-0 ps-3 form-focus-none" placeholder="Catégorie" aria-label="Job Title" aria-describedby="searchJob">
                        </div>

                      </div>
                      <div class="col-12 col-md-4">


                      </div>
                      <div class="col-12 col-md-3  text-end d-grid">
                        <!-- button -->
                        <button type="submit" class="btn btn-primary rounded-pill">Rechercher</button>
                      </div>
                    </form>
                  </div>

                </div>

              </div>
            </div>

          </div>
        </div>
      </section>



    <br><br>
    <section class="container">
      <div class="row">
        @foreach ($category as $value )
        <div class="col-xl-4 col-lg-6 col-md-6 col-12">
            <!-- Card -->
            <div class="card mb-4 card-hover">
              <div class="d-flex justify-content-between align-items-center p-4">
                <div class="d-flex">
                  <a href="{{route('course.category', $value->id)}}">
                     <!-- Img -->

                  <div class="ms-3">
                    <h4 class="mb-1">
                      <a href="{{route('course.category', $value->id)}}" class="text-inherit">
                        {{$value->name}}
                      </a>
                    </h4>
                    <p class="mb-0 fs-6">
                      <span class="me-2"><span class="text-dark fw-medium">{{count($value->courses)}}</span>
                        Fomation Disponible</span>

                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        @endforeach

          {{ $category->links()}}



      </div>
    </section>
    </main>


@endsection
