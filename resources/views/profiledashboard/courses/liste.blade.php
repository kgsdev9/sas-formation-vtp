@extends('layout.layout')

@section('content')

<main>
    <section class="pt-5 pb-5">
        <div class="container">


            <div class="row mt-0 mt-md-4">
                @include('profiledashboard.nav-bar')
                <div class="col-lg-9 col-md-8 col-12">



                    <div class="card mb-4">
                        <div class="card border-0">
                            <!-- Card header -->
                            <div class="card-header">
                                <h4 class="mb-0">
                                   Mes Formations  <span class="text-muted fs-6"> ({{count($CourseTeacher)}})</span>
                                </h4>
                            </div>
                            <!-- Card body -->
                            <div class="card-body">
                                <!-- List group -->
                                <ul class="list-group list-group-flush">
                                    @foreach ($CourseTeacher as $value )
                                    <!-- List group item -->
                                    <li class="list-group-item px-0 py-3">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <a href="#">
                                                <div class="d-lg-flex align-items-center">
                                                    <div>
                                                        <img src="{{asset('courss/images/'.$value->image)}}" alt="course" class="rounded img-4by3-lg">
                                                    </div>
                                                    <div class="ms-lg-3 mt-2 mt-lg-0">
                                                        <h4 class="text-primary-hover">
                                                          {{$value->title}}
                                                        </h4>
                                                        <ul class="list-inline fs-6 mb-0 text-inherit">
                                                            <li class="list-inline-item">
                                                                <i class="mdi mdi-clock-time-four-outline text-muted me-1"></i>1h 20m
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <svg class="mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE"></rect>
                                                                    <rect x="7" y="5" width="2" height="9" rx="1" fill="#754FFE"></rect>
                                                                    <rect x="11" y="2" width="2" height="12" rx="1" fill="#754FFE"></rect>
                                                                </svg>
                                                                Advance
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <i class="mdi mdi-star me-n1 text-warning"></i>
                                                                <i class="mdi mdi-star me-n1 text-warning"></i>
                                                                <i class="mdi mdi-star me-n1 text-warning"></i>
                                                                <i class="mdi mdi-star me-n1 text-warning"></i>
                                                                <i class="mdi mdi-star text-light"></i>
                                                                <span class="text-warning">4</span>
                                                                <span class="text-muted">(1,000)</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </a>
                                            <div>
                                                <!-- Dropdown -->
                                                <span class="dropdown dropstart">
                                                    <a class="text-muted text-decoration-none" href="#" role="button" id="courseDropdown1" data-bs-toggle="dropdown" data-bs-offset="-20,20" aria-expanded="true">
                                                        <i class="fe fe-more-vertical"></i>
                                                    </a>
                                                    <span class="dropdown-menu" aria-labelledby="courseDropdown1">
                                                        <span class="dropdown-header">Action</span>
                                                        <a class="dropdown-item" href="{{route('courses.edit', $value->id)}}"><i class="fe fe-edit dropdown-item-icon"></i></i>Editer </a>

                                                        <form action="{{route('courses.destroy',$value->id)}}" method="POST">
                                                            @method('DELETE')
                                                            @csrf

                                                            <button class="btn btn-dark">Supprimer</button>
                                                        </form>

                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- List group item -->
                                    @endforeach



                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>


@endsection
