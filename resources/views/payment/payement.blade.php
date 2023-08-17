@extends('layout.layout')


@section('content')

<section class="py-6">
    <div class="container">
      <div class="row">
        <div class="col-xl-8 col-lg-8 col-md-12 col-12">
          <!-- Card -->
          <div class="card  mb-4">

            <!-- Card body -->
            <div class="card-body">


              <div class="card mb-3 border shadow-none border-top-0">
                <div class="border-top border-4 rounded-3 border-dark-warning">
                <!-- Card body -->
                <div class="p-5">
                  <div class="mb-5">
                    <h3 class="fw-bold">Proceder au paiement
                    </h3>
                    <p class="mb-0">
                        <div class="card mb-4">
                            <!-- Card body -->

                            <div class="card-body">
                                <!-- List group -->
                                <ul class="list-group list-group-flush">
                                    <!-- List group item -->
                                    <form action="{{route('create.orders')}}"   method="POST">
                                    @csrf

                                    <li class="list-group-item px-0 pb-3 pt-0">
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex">
                                                <input type="radio" name="CARD">
                                                <img src="{{asset('imagesdata/visa-master-card.png')}}" alt="card" style="height:100;width:100px;">

                                            </div>

                                        </div>
                                    </li>
                                    <br>
                                    <input type="hidden" name="title" value="{{$course->title}}">
                                    <input type="hidden" name="prix" value="{{$course->prix}}" readonly>
                                    <input type="hidden" name="course_id" value="{{$course->id}}" readonly>

                                    <button  class="btn btn-primary" type="submit">Initialiser le paiement  </button>
                                </form>
                                </ul>
                                <!-- button-->
                            </div>
                        </div>



                    </p>


                  </div>


                </div>
              </div>
              </div>

            </div>
          </div>

        </div>
        <div class="col-lg-4 col-md-12 col-12">

          <!-- Card -->
          <div class="card  border-0 mb-3">
            <!-- Card body -->
            <div class="p-5 text-center">
              <span class="badge bg-warning"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Forfait sélectionné</font></font></span>
              <div class="mb-5 mt-3">
                <h1 class="fw-bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$course->title}}</font></font></h1>
                <p class="mb-0 "> {{$course->description}}
               </p>
              </div>
              <img src="{{asset('courss/images/'.$course->image)}}" alt="" style="width:300px;">
              <div class="d-flex justify-content-center">

                <div class="mb-3">
                    <span class="text-dark fw-bold h2">{{$course->prix}} €</span>
                </div>
            </div>
            <div class="p-4">
              <a href="{{$course->url_video}}" target="_blank" class="btn btn-outline-primary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Demo de la formation </font></font></a>
            </div>
          </div>
          <!-- Card -->

        </div>
      </div>
    </div>
  </section>


@endsection
