@extends('layout.layout')

@section('content')
<main>
    <section class="py-4 py-lg-6" style="background-color:#2f1192">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-12">
            <div>
              <h1 class="text-white mb-1 display-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Annuaire Des Formations </font></font></h1>
              <p class="mb-0 text-white lead"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Parcourer Nos Formations </font></font></p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Content -->
    <section class="py-7">
      <div class="container">




        <!-- Content -->
        <div class="row">
          <div class="col-lg-12 col-md-12 col-12">
            <div class="mb-5">
              <h2 class="mb-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Toutes nos formations </font></font></h2>
              <p class="mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Les instructeurs SAS FORMATION  se spécialisent dans l'enseignement de toute la portée du developpement Web comme Mobile , du niveau débutant au niveau avancé. </font><font style="vertical-align: inherit;">Que vous soyez intéressé par le développement back-end ou la création d'applications et de sites Web, Udemy a un cours JavaScript pour vous.</font></font></p>
            </div>
          </div>
        </div>
        <div class="row">
            @foreach ($allCourses as $value )
          <div class="col-lg-3 col-md-6 col-12">
            <div class="card  mb-4 card-hover">
              <a href="{{route('detail.course', $value->slug)}}" class="card-img-top">
                <img src="{{asset('courss/images/'.$value->image)}}" alt="cours" class="card-img-top rounded-top-md"></a>
              <!-- Card body -->
              <div class="card-body">
                <h3 class="h4 mb-2 text-truncate-line-2 "><a href="{{route('detail.course', $value->slug)}}" class="text-inherit"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                    {{$value->title}}</font></font></a></h3>
                    <ul class="mb-3  list-inline">
                        <li class="list-inline-item"><i class="mdi mdi-clock-time-four-outline text-muted me-1"></i>
                           {{$value->created_at->diffForHumans()}}
                        </li>

                        @if($value->level->name == "Debutant")
                        <li class="list-inline-item"><svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE">
                            </rect>
                            <rect x="7" y="5" width="2" height="9" rx="1" fill="#DBD8E9">
                            </rect>
                            <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9">
                            </rect>
                          </svg> debutant </li>

                          @elseif($value->level->name == "Avancee")
                          <li class="list-inline-item"><svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE">
                              </rect>
                              <rect x="7" y="5" width="2" height="9" rx="1" fill="#754FFE">
                              </rect>
                              <rect x="11" y="2" width="2" height="12" rx="1" fill="#754FFE">
                              </rect>
                            </svg>Avancé</li>

                            @elseif($value->level->name == "Intermédiaire")
                            <li class="list-inline-item"><svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE">
                              </rect>
                              <rect x="7" y="5" width="2" height="9" rx="1" fill="#754FFE">
                              </rect>
                              <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9">
                              </rect>
                            </svg>Intermediate</li>
                          @endif
                      </ul>
                <div class="lh-1">

                  <span class="text-dark"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> {{$value->prix}} €</font></font></span>

                </div>
              </div>
              <!-- Card footer -->
              <div class="card-footer">
                <div class="row align-items-center g-0">
                  <div class="col-auto">
                    <img src="{{asset('formateurs/images/'.$value->formateur->avatar)}}" class="rounded-circle avatar-xs" alt="avatar">
                  </div>
                  <div class="col ms-2">
                    <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$value->formateur->fullname}}</font></font></span>
                  </div>
                  <div class="col-auto">
                    <a href="{{route('commande.formation', ['slug'=>$value->slug, 'id' => $value->id])}}" class="text-inherit">
                      <i class="fe fe-shopping-cart text-primary align-middle me-2"></i>Acheter
                    </a>
                  </div>
                </div>
              </div>
            </div>
        </div>
        @endforeach

      </div>
    </section>
  </main>

@endsection
