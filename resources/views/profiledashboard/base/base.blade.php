@extends('layout.layout')
@section('content')
<main>
    <section class="pt-5 pb-5">
        <div class="container">
            @can('is_formateur')
            <div class="row align-items-center">
                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                    <div class="card px-4 pt-2 pb-4 shadow-sm rounded-top-0 rounded-bottom-0 rounded-bottom-md-2 ">
                        <div class="d-flex align-items-end justify-content-between  ">
                            <div class="d-flex align-items-center">
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
            <div class="row mt-0 mt-md-4">
                @include('profiledashboard.nav-bar')
                <div class="col-lg-9 col-md-8 col-12">
                    @include('profiledashboard.statistique')
                    @can('is_formateur')
                    <div class="card mb-4">
                        <div class="card-header">
                            <h3 class="h4 mb-0">Liste des cours  ajoutés</h3>
                        </div>
                        <div class="table-responsive">
                            <table class="table mb-0 table-hover table-centered text-nowrap">
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
                                            <a href="{{route('courses.edit', $value->id)}}" class="btn btn-outline-secondary btn-sm">Edition</a>
                                            <a href="{{route('courses.destroy',$value->id)}}" class="btn btn-success btn-sm">Supprimer</a>
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
