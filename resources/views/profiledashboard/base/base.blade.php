@extends('layout.layout')

@section('content')


<main>
    <section class="pt-5 pb-5">
        <div class="container">
            @can('is_formateur')


            <!-- User info -->
            <div class="row align-items-center">
                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                    <!-- Bg -->
                    <div class="pt-16 rounded-top" style="
                            background: url(../assets/images/background/profile-bg.jpg) no-repeat;
                            background-size: cover;
                        "></div>
                    <div class="card px-4 pt-2 pb-4 shadow-sm rounded-top-0 rounded-bottom-0 rounded-bottom-md-2 ">
                        <div class="d-flex align-items-end justify-content-between  ">
                            <div class="d-flex align-items-center">
                                <div
                                    class="me-2 position-relative d-flex justify-content-end align-items-end mt-n5">
                                    <img src="../assets/images/avatar/avatar-1.jpg"
                                        class="avatar-xl rounded-circle border border-4 border-white position-relative"
                                        alt="avatar">
                                    <a href="#" class="position-absolute top-0 end-0" data-bs-toggle="tooltip"
                                        data-placement="top" title="Verified">
                                        <img src="../assets/images/svg/checked-mark.svg" alt="checked" height="30"
                                            width="30">
                                    </a>
                                </div>
                                <div class="lh-1">
                                    <h2 class="mb-0">{{Auth::user()->name}}</h2>
                                    <p class="mb-0 d-block">@ {{Auth::user()->name}}</p>
                                </div>
                            </div>
                            <div>
                                <a href="{{route('courses.create')}}" class="btn btn-primary d-none d-md-block">
                                    Créer une formation </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endcan
            <!-- Content -->

            <div class="row mt-0 mt-md-4">
                @include('profiledashboard.nav-bar')
                <div class="col-lg-9 col-md-8 col-12">

                    @include('profiledashboard.statistique')
                    @can('is_formateur')
                    <div class="card mb-4">
                        <!-- Card header -->
                        <div class="card-header">
                            <h3 class="h4 mb-0">Liste des cours  ajoutés</h3>
                        </div>
                        <!-- Table -->
                        <div class="table-responsive">
                            <table class="table mb-0 table-hover table-centered text-nowrap">
                                <!-- Table Head -->
                                <thead class="table-light">
                                    <tr>

                                        <th scope="col">Title</th>
                                        <th scope="col">Prix</th>
                                        <th scope="col">Demo</th>
                                        <th scope="col">Niveau</th>
                                        <th scope="col">Niveau</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <!-- Table Body -->
                                <tbody>
                                    @foreach ($allCourseForTeacher as $value )
                                    <tr>
                                        <td>
                                            <a href="#">
                                                <div class="d-flex align-items-center">
                                                    <img src="{{asset('courss/images/'.$value->image)}}" alt="course"
                                                        class="rounded img-4by3-lg">
                                                    <h5 class="ms-3 text-primary-hover mb-0">
                                                      {{ $value->title}}
                                                    </h5>
                                                </div>
                                            </a>
                                        </td>
                                        <td>{{ $value->prix}} € </td>
                                        <td> <a href="{{$value->url_video}}" target="_blank">Demo</a> </td>
                                        <td>{{ $value->prix}} € </td>
                                        <td>{{ $value->level->name}} </td>
                                        <td>
                                            <span class="dropdown dropstart">
                                                <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#"
                                                    role="button" id="courseDropdown1" data-bs-toggle="dropdown"
                                                    data-bs-offset="-20,20" aria-expanded="false">
                                                    <i class="fe fe-more-vertical"></i>
                                                </a>
                                                <span class="dropdown-menu" aria-labelledby="courseDropdown1">
                                                    <span class="dropdown-header">Setting </span>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fe fe-edit dropdown-item-icon"></i>Edit</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fe fe-trash dropdown-item-icon"></i>Remove</a>
                                                </span>
                                            </span>
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                    @endcan
                </div>
            </div>
        </div>
    </section>
</main>









@endsection
