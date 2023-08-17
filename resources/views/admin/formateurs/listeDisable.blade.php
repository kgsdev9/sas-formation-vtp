@extends('admin.master.master')

@section('master')

{{-- <div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Annuaire des formateurs</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Liste Candidate</a></li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row job-list-row">

                @foreach ($allTeacherNotVerfied as $value )


                <div class="col-xxl-3 col-md-6">
                    <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                         <div class="avatar-lg rounded">
                        <img src="{{Storage::url($value->avatar)}}" alt="" class="member-img img-fluid d-block rounded">
                    </div>
                  </div>
                    <div class="flex-grow-1 ms-3">
                             <a href="{{route('formateur.view', $value->id)}}">
                                    <h5 class="fs-16 mb-1">{{$value->fullname}}</h5>
                                  </a> <p class="text-muted mb-2">Télephone {{$value->telephone}}</p>
                        <div class="d-flex flex-wrap gap-2 align-items-center">
                                <div class="badge text-bg-success">
                                    <i class="mdi mdi-star me-1"></i>4.2
                                </div> <div class="text-muted">2.2k Ratings</div>
                     </div>
                             <div class="d-flex gap-4 mt-2 text-muted">                   <div>                            <i class="ri-map-pin-2-line text-primary me-1 align-bottom"></i>
                                 Cullera, Spain</div>                    <div>                      <i class="ri-time-line text-primary me-1 align-bottom"></i>
                                    <span class="badge badge-soft-danger">Part Time
                                        </span>
                                     </div>
                                       </div>
                                       <td>

                                        <input type="checkbox" data-id="{{$value->id}}" name="status" class="js-switch" {{ $value->status== 1 ? 'checked' : '' }}>
                                        </td>


                                     </div>
                                    </div>
                                      </div>
                                    </div>

                </div>
                @endforeach

            </div>
    </div>



</div> --}}

<section class="container-fluid p-4">
    <div class="row">
        <!-- Page Header -->
        <div class="col-lg-12 col-md-12 col-12">
            <div class="border-bottom pb-3 mb-3 d-flex justify-content-between align-items-center">
                <div class="mb-2 mb-lg-0">
                    <h1 class="mb-1 h2 fw-bold">
                        Instructor
                        <span class="fs-5 text-muted">(12,105)</span>
                    </h1>
                    <!-- Breadcrumb  -->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="../dashboard/admin-dashboard.html">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">User</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Instructor
                            </li>
                        </ol>
                    </nav>
                </div>
                <div class="nav btn-group" role="tablist">
                    <button class="btn btn-outline-secondary  active" data-bs-toggle="tab" data-bs-target="#tabPaneGrid" role="tab" aria-controls="tabPaneGrid" aria-selected="true">
        <span class="fe fe-grid"></span>
      </button>
                    <button class="btn btn-outline-secondary " data-bs-toggle="tab" data-bs-target="#tabPaneList" role="tab" aria-controls="tabPaneList" aria-selected="false" tabindex="-1">
        <span class="fe fe-list"></span>
      </button>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
            <!-- Tab -->
            <div class="tab-content">
                <!-- Tab pane -->
                <div class="tab-pane fade show active" id="tabPaneGrid" role="tabpanel" aria-labelledby="tabPaneGrid">
                    <div class="mb-4">
                        <input type="search" class="form-control" placeholder="Search Instructor">
                    </div>
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                            <!-- Card -->
                            <div class="card mb-4">
                                <!-- Card body -->
                                <div class="card-body">
                                    <div class="text-center">
                                        <img src="../../assets/images/avatar/avatar-11.jpg" class="rounded-circle avatar-xl mb-3" alt="">
                                        <h4 class="mb-0">Wade Warren</h4>
                                        <p class="mb-0">Web Developer, Designer</p>
                                    </div>
                                    <div class="d-flex justify-content-between border-bottom py-2 mt-4">
                                        <span>Students</span>
                                        <span class="text-dark">50,274</span>
                                    </div>
                                    <div class="d-flex justify-content-between border-bottom py-2">
                                        <span>Instructor Rating</span>
                                        <span class="text-warning">
                  4.5 <i class="mdi mdi-star"></i>
                </span>
                                    </div>
                                    <div class="d-flex justify-content-between pt-2">
                                        <span>Courses</span>
                                        <span class="text-dark"> 12 </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                            <!-- Card -->
                            <div class="card mb-4">
                                <!-- Card body -->
                                <div class="card-body">
                                    <div class="text-center">
                                        <img src="../../assets/images/avatar/avatar-13.jpg" class="rounded-circle avatar-xl mb-3" alt="">
                                        <h4 class="mb-0">Dianna Smiley</h4>
                                        <p class="mb-0">Engineering Architect</p>
                                    </div>
                                    <div class="d-flex justify-content-between border-bottom py-2 mt-4">
                                        <span>Students</span>
                                        <span class="text-dark">1,004</span>
                                    </div>
                                    <div class="d-flex justify-content-between border-bottom py-2">
                                        <span>Instructor Rating</span>
                                        <span class="text-warning">
                  4.5 <i class="mdi mdi-star"></i>
                </span>
                                    </div>
                                    <div class="d-flex justify-content-between pt-2">
                                        <span>Courses</span>
                                        <span class="text-dark"> 42 </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                            <!-- Card -->
                            <div class="card mb-4">
                                <!-- Card body -->
                                <div class="card-body">
                                    <div class="text-center">
                                        <img src="../../assets/images/avatar/avatar-14.jpg" class="rounded-circle avatar-xl mb-3" alt="">
                                        <h4 class="mb-0">Esther Howard</h4>
                                        <p class="mb-0">Developer and Instructor</p>
                                    </div>
                                    <div class="d-flex justify-content-between border-bottom py-2 mt-4">
                                        <span>Students</span>
                                        <span class="text-dark">26,060</span>
                                    </div>
                                    <div class="d-flex justify-content-between border-bottom py-2">
                                        <span>Instructor Rating</span>
                                        <span class="text-warning">
                  4.5 <i class="mdi mdi-star"></i>
                </span>
                                    </div>
                                    <div class="d-flex justify-content-between pt-2">
                                        <span>Courses</span>
                                        <span class="text-dark"> 3 </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                            <!-- Card -->
                            <div class="card mb-4">
                                <!-- Card body -->
                                <div class="card-body">
                                    <div class="text-center">
                                        <img src="../../assets/images/avatar/avatar-15.jpg" class="rounded-circle avatar-xl mb-3" alt="">
                                        <h4 class="mb-0">Guy Hawkins</h4>
                                        <p class="mb-0">Professional Web Developer</p>
                                    </div>
                                    <div class="d-flex justify-content-between border-bottom py-2 mt-4">
                                        <span>Students</span>
                                        <span class="text-dark">2,345</span>
                                    </div>
                                    <div class="d-flex justify-content-between border-bottom py-2">
                                        <span>Instructor Rating</span>
                                        <span class="text-warning">
                  4.5 <i class="mdi mdi-star"></i>
                </span>
                                    </div>
                                    <div class="d-flex justify-content-between pt-2">
                                        <span>Courses</span>
                                        <span class="text-dark"> 2 </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                            <!-- Card -->
                            <div class="card mb-4">
                                <!-- Card body -->
                                <div class="card-body">
                                    <div class="text-center">
                                        <img src="../../assets/images/avatar/avatar-16.jpg" class="rounded-circle avatar-xl mb-3" alt="">
                                        <h4 class="mb-0">Jacob Jones</h4>
                                        <p class="mb-0">Engineering Architect</p>
                                    </div>
                                    <div class="d-flex justify-content-between border-bottom py-2 mt-4">
                                        <span>Students</span>
                                        <span class="text-dark">14,994</span>
                                    </div>
                                    <div class="d-flex justify-content-between border-bottom py-2">
                                        <span>Instructor Rating</span>
                                        <span class="text-warning">
                  4.5 <i class="mdi mdi-star"></i>
                </span>
                                    </div>
                                    <div class="d-flex justify-content-between pt-2">
                                        <span>Courses</span>
                                        <span class="text-dark">7 </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                            <!-- Card -->
                            <div class="card mb-4">
                                <!-- Card body -->
                                <div class="card-body">
                                    <div class="text-center">
                                        <img src="../../assets/images/avatar/avatar-17.jpg" class="rounded-circle avatar-xl mb-3" alt="">
                                        <h4 class="mb-0">Kristin Watson</h4>
                                        <p class="mb-0">Web Developer And Teacher</p>
                                    </div>
                                    <div class="d-flex justify-content-between border-bottom py-2 mt-4">
                                        <span>Students</span>
                                        <span class="text-dark">1,223</span>
                                    </div>
                                    <div class="d-flex justify-content-between border-bottom py-2">
                                        <span>Instructor Rating</span>
                                        <span class="text-warning">
                  4.5 <i class="mdi mdi-star"></i>
                </span>
                                    </div>
                                    <div class="d-flex justify-content-between pt-2">
                                        <span>Courses</span>
                                        <span class="text-dark"> 3 </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                            <!-- Card -->
                            <div class="card mb-4">
                                <!-- Card body -->
                                <div class="card-body">
                                    <div class="text-center">
                                        <img src="../../assets/images/avatar/avatar-18.jpg" class="rounded-circle avatar-xl mb-3" alt="">
                                        <h4 class="mb-0">Rivao Luke</h4>
                                        <p class="mb-0">
                                            Software Developer, Instructor
                                        </p>
                                    </div>
                                    <div class="d-flex justify-content-between border-bottom py-2 mt-4">
                                        <span>Students</span>
                                        <span class="text-dark">6,845</span>
                                    </div>
                                    <div class="d-flex justify-content-between border-bottom py-2">
                                        <span>Instructor Rating</span>
                                        <span class="text-warning">
                  4.5 <i class="mdi mdi-star"></i>
                </span>
                                    </div>
                                    <div class="d-flex justify-content-between pt-2">
                                        <span>Courses</span>
                                        <span class="text-dark"> 5 </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                            <!-- Card -->
                            <div class="card mb-4">
                                <!-- Card body -->
                                <div class="card-body">
                                    <div class="text-center">
                                        <img src="../../assets/images/avatar/avatar-19.jpg" class="rounded-circle avatar-xl mb-3" alt="">
                                        <h4 class="mb-0">Nia Sikhone</h4>
                                        <p class="mb-0">Full Stack Web Developer</p>
                                    </div>
                                    <div class="d-flex justify-content-between border-bottom py-2 mt-4">
                                        <span>Students</span>
                                        <span class="text-dark">8,234</span>
                                    </div>
                                    <div class="d-flex justify-content-between border-bottom py-2">
                                        <span>Instructor Rating</span>
                                        <span class="text-warning">
                  4.5 <i class="mdi mdi-star"></i>
                </span>
                                    </div>
                                    <div class="d-flex justify-content-between pt-2">
                                        <span>Courses</span>
                                        <span class="text-dark"> 12 </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="pt-4">
                                <!-- Pagination -->
                                <nav>
                                    <ul class="pagination justify-content-center mb-0">
                                        <li class="page-item disabled">
                                            <a class="page-link mx-1 rounded" href="#"><i class="mdi mdi-chevron-left"></i></a>
                                        </li>
                                        <li class="page-item active">
                                            <a class="page-link mx-1 rounded" href="#">1</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link mx-1 rounded" href="#">2</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link mx-1 rounded" href="#">3</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link mx-1 rounded" href="#"><i class="mdi mdi-chevron-right"></i></a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- tab pane -->
                <div class="tab-pane fade" id="tabPaneList" role="tabpanel" aria-labelledby="tabPaneList">
                    <!-- card -->
                    <div class="card">
                        <!-- card header -->
                        <div class="card-header">
                            <input type="search" class="form-control" placeholder="Search Instructor">
                        </div>
                        <!-- table -->
                        <div class="table-responsive">
                            <table class="table mb-0 text-nowrap table-hover table-centered">
                                <thead class="table-light">
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Topic</th>
                                        <th scope="col">
                                            Courses
                                        </th>
                                        <th scope="col">
                                            Joined
                                        </th>
                                        <th scope="col">
                                            Students
                                        </th>
                                        <th scope="col">
                                            Rating
                                        </th>

                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="../../assets/images/avatar/avatar-12.jpg" alt="" class="rounded-circle avatar-md me-2">
                                                <h5 class="mb-0">Guy Hawkins</h5>
                                            </div>
                                        </td>
                                        <td>
                                            Engineering Architect
                                        </td>
                                        <td>
                                            6 Courses
                                        </td>
                                        <td>
                                            7 July, 2020
                                        </td>
                                        <td>
                                            50,274
                                        </td>
                                        <td>
                                            4.5 <span class="mdi mdi-star"></span>
                                        </td>

                                        <td>
                                           <div class="hstack gap-4">
                                            <a href="#" class="text-muted" data-bs-toggle="tooltip" data-placement="top" aria-label="Message" data-bs-original-title="Message"><i class="fe fe-mail"></i></a>
                                            <a href="#" class="text-muted" data-bs-toggle="tooltip" data-placement="top" aria-label="Delete" data-bs-original-title="Delete"><i class="fe fe-trash"></i></a>
                                            <span class="dropdown dropstart">
                    <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#" role="button" data-bs-toggle="dropdown" data-bs-offset="-20,20" aria-expanded="false">
                      <i class="fe fe-more-vertical"></i></a>
                    <span class="dropdown-menu"><span class="dropdown-header">Settings</span>
                                            <a class="dropdown-item" href="#"><i class="fe fe-edit dropdown-item-icon"></i>Edit</a>
                                            <a class="dropdown-item" href="#"><i class="fe fe-trash dropdown-item-icon"></i>Remove</a>
                                            </span>
                                            </span>
                                           </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="../../assets/images/avatar/avatar-13.jpg" alt="" class="rounded-circle avatar-md me-2">
                                                <h5 class="mb-0">Dianna Smiley</h5>
                                            </div>
                                        </td>
                                        <td>
                                            Front End Developer
                                        </td>
                                        <td>3 Courses</td>
                                        <td>6 July, 2020</td>
                                        <td>26,060</td>
                                        <td>
                                            4.5 <span class="mdi mdi-star"></span>
                                        </td>

                                        <td>
                                            <div class="hstack gap-4">
                                                <a href="#" class="text-muted" data-bs-toggle="tooltip" data-placement="top" aria-label="Message" data-bs-original-title="Message"><i class="fe fe-mail"></i></a>
                                                <a href="#" class="text-muted" data-bs-toggle="tooltip" data-placement="top" aria-label="Delete" data-bs-original-title="Delete"><i class="fe fe-trash"></i></a>
                                                <span class="dropdown dropstart">
                        <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#" role="button" data-bs-toggle="dropdown" data-bs-offset="-20,20" aria-expanded="false">
                          <i class="fe fe-more-vertical"></i></a>
                        <span class="dropdown-menu"><span class="dropdown-header">Settings</span>
                                                <a class="dropdown-item" href="#"><i class="fe fe-edit dropdown-item-icon"></i>Edit</a>
                                                <a class="dropdown-item" href="#"><i class="fe fe-trash dropdown-item-icon"></i>Remove</a>
                                                </span>
                                                </span>
                                               </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="../../assets/images/avatar/avatar-17.jpg" alt="" class="rounded-circle avatar-md me-2">
                                                <h5 class="mb-0">Nia Sikhone</h5>
                                            </div>
                                        </td>
                                        <td>
                                            Web Developer, Designer, and Teacher
                                        </td>
                                        <td>12 Courses</td>
                                        <td>12 June, 2020</td>
                                        <td>8,234</td>
                                        <td>
                                            4.5 <span class="mdi mdi-star"></span>
                                        </td>

                                        <td>
                                            <div class="hstack gap-4">
                                                <a href="#" class="text-muted" data-bs-toggle="tooltip" data-placement="top" aria-label="Message" data-bs-original-title="Message"><i class="fe fe-mail"></i></a>
                                                <a href="#" class="text-muted" data-bs-toggle="tooltip" data-placement="top" aria-label="Delete" data-bs-original-title="Delete"><i class="fe fe-trash"></i></a>
                                                <span class="dropdown dropstart">
                        <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#" role="button" data-bs-toggle="dropdown" data-bs-offset="-20,20" aria-expanded="false">
                          <i class="fe fe-more-vertical"></i></a>
                        <span class="dropdown-menu"><span class="dropdown-header">Settings</span>
                                                <a class="dropdown-item" href="#"><i class="fe fe-edit dropdown-item-icon"></i>Edit</a>
                                                <a class="dropdown-item" href="#"><i class="fe fe-trash dropdown-item-icon"></i>Remove</a>
                                                </span>
                                                </span>
                                               </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="../../assets/images/avatar/avatar-14.jpg" alt="" class="rounded-circle avatar-md me-2">
                                                <h5 class="mb-0">Jacob Jones</h5>
                                            </div>
                                        </td>
                                        <td>Bootstrap Expert</td>
                                        <td>7 Courses</td>
                                        <td>2 July, 2020</td>
                                        <td>14,944</td>
                                        <td>
                                            4.5 <span class="mdi mdi-star"></span>
                                        </td>

                                        <td>
                                            <div class="hstack gap-4">
                                                <a href="#" class="text-muted" data-bs-toggle="tooltip" data-placement="top" aria-label="Message" data-bs-original-title="Message"><i class="fe fe-mail"></i></a>
                                                <a href="#" class="text-muted" data-bs-toggle="tooltip" data-placement="top" aria-label="Delete" data-bs-original-title="Delete"><i class="fe fe-trash"></i></a>
                                                <span class="dropdown dropstart">
                        <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#" role="button" data-bs-toggle="dropdown" data-bs-offset="-20,20" aria-expanded="false">
                          <i class="fe fe-more-vertical"></i></a>
                        <span class="dropdown-menu"><span class="dropdown-header">Settings</span>
                                                <a class="dropdown-item" href="#"><i class="fe fe-edit dropdown-item-icon"></i>Edit</a>
                                                <a class="dropdown-item" href="#"><i class="fe fe-trash dropdown-item-icon"></i>Remove</a>
                                                </span>
                                                </span>
                                               </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="../../assets/images/avatar/avatar-15.jpg" alt="" class="rounded-circle avatar-md me-2">
                                                <h5 class="mb-0">Kristin Watson</h5>
                                            </div>
                                        </td>
                                        <td>Web Development</td>
                                        <td>5 Courses</td>
                                        <td>1 July, 2020</td>
                                        <td>6,845</td>
                                        <td>
                                            4.5 <span class="mdi mdi-star"></span>
                                        </td>

                                        <td>
                                            <div class="hstack gap-4">
                                                <a href="#" class="text-muted" data-bs-toggle="tooltip" data-placement="top" aria-label="Message" data-bs-original-title="Message"><i class="fe fe-mail"></i></a>
                                                <a href="#" class="text-muted" data-bs-toggle="tooltip" data-placement="top" aria-label="Delete" data-bs-original-title="Delete"><i class="fe fe-trash"></i></a>
                                                <span class="dropdown dropstart">
                        <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#" role="button" data-bs-toggle="dropdown" data-bs-offset="-20,20" aria-expanded="false">
                          <i class="fe fe-more-vertical"></i></a>
                        <span class="dropdown-menu"><span class="dropdown-header">Settings</span>
                                                <a class="dropdown-item" href="#"><i class="fe fe-edit dropdown-item-icon"></i>Edit</a>
                                                <a class="dropdown-item" href="#"><i class="fe fe-trash dropdown-item-icon"></i>Remove</a>
                                                </span>
                                                </span>
                                               </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="../../assets/images/avatar/avatar-17.jpg" alt="" class="rounded-circle avatar-md me-2">
                                                <h5 class="mb-0">Nia Sikhone</h5>
                                            </div>
                                        </td>
                                        <td>
                                            Web Developer, Designer, and Teacher
                                        </td>
                                        <td>12 Courses</td>
                                        <td>12 June, 2020</td>
                                        <td>8,234</td>
                                        <td>
                                            4.5 <span class="mdi mdi-star"></span>
                                        </td>

                                        <td>
                                            <div class="hstack gap-4">
                                                <a href="#" class="text-muted" data-bs-toggle="tooltip" data-placement="top" aria-label="Message" data-bs-original-title="Message"><i class="fe fe-mail"></i></a>
                                                <a href="#" class="text-muted" data-bs-toggle="tooltip" data-placement="top" aria-label="Delete" data-bs-original-title="Delete"><i class="fe fe-trash"></i></a>
                                                <span class="dropdown dropstart">
                        <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#" role="button" data-bs-toggle="dropdown" data-bs-offset="-20,20" aria-expanded="false">
                          <i class="fe fe-more-vertical"></i></a>
                        <span class="dropdown-menu"><span class="dropdown-header">Settings</span>
                                                <a class="dropdown-item" href="#"><i class="fe fe-edit dropdown-item-icon"></i>Edit</a>
                                                <a class="dropdown-item" href="#"><i class="fe fe-trash dropdown-item-icon"></i>Remove</a>
                                                </span>
                                                </span>
                                               </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="../../assets/images/avatar/avatar-16.jpg" alt="" class="rounded-circle avatar-md me-2">
                                                <h5 class="mb-0">Rivao Luke</h5>
                                            </div>
                                        </td>
                                        <td>Web Development</td>
                                        <td>5 Courses</td>
                                        <td>1 July, 2020</td>
                                        <td>6,845</td>
                                        <td>
                                            4.5 <span class="mdi mdi-star"></span>
                                        </td>

                                        <td>
                                            <div class="hstack gap-4">
                                                <a href="#" class="text-muted" data-bs-toggle="tooltip" data-placement="top" aria-label="Message" data-bs-original-title="Message"><i class="fe fe-mail"></i></a>
                                                <a href="#" class="text-muted" data-bs-toggle="tooltip" data-placement="top" aria-label="Delete" data-bs-original-title="Delete"><i class="fe fe-trash"></i></a>
                                                <span class="dropdown dropstart">
                        <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#" role="button" data-bs-toggle="dropdown" data-bs-offset="-20,20" aria-expanded="false">
                          <i class="fe fe-more-vertical"></i></a>
                        <span class="dropdown-menu"><span class="dropdown-header">Settings</span>
                                                <a class="dropdown-item" href="#"><i class="fe fe-edit dropdown-item-icon"></i>Edit</a>
                                                <a class="dropdown-item" href="#"><i class="fe fe-trash dropdown-item-icon"></i>Remove</a>
                                                </span>
                                                </span>
                                               </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="../../assets/images/avatar/avatar-17.jpg" alt="" class="rounded-circle avatar-md me-2">
                                                <h5 class="mb-0">Nia Sikhone</h5>
                                            </div>
                                        </td>
                                        <td>
                                            Web Developer, Designer, and Teacher
                                        </td>
                                        <td>12 Courses</td>
                                        <td>12 June, 2020</td>
                                        <td>8,234</td>
                                        <td>
                                            4.5 <span class="mdi mdi-star"></span>
                                        </td>

                                        <td>
                                            <div class="hstack gap-4">
                                                <a href="#" class="text-muted" data-bs-toggle="tooltip" data-placement="top" aria-label="Message" data-bs-original-title="Message"><i class="fe fe-mail"></i></a>
                                                <a href="#" class="text-muted" data-bs-toggle="tooltip" data-placement="top" aria-label="Delete" data-bs-original-title="Delete"><i class="fe fe-trash"></i></a>
                                                <span class="dropdown dropstart">
                        <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#" role="button" data-bs-toggle="dropdown" data-bs-offset="-20,20" aria-expanded="false">
                          <i class="fe fe-more-vertical"></i></a>
                        <span class="dropdown-menu"><span class="dropdown-header">Settings</span>
                                                <a class="dropdown-item" href="#"><i class="fe fe-edit dropdown-item-icon"></i>Edit</a>
                                                <a class="dropdown-item" href="#"><i class="fe fe-trash dropdown-item-icon"></i>Remove</a>
                                                </span>
                                                </span>
                                               </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="../../assets/images/avatar/avatar-18.jpg" alt="" class="rounded-circle avatar-md me-2">

                                                <h5 class="mb-0">Xiaon Merry</h5>
                                            </div>
                                        </td>
                                        <td>
                                            Web Developer, Designer, and Teacher
                                        </td>
                                        <td>9 Courses</td>
                                        <td>8 June, 2020</td>
                                        <td>3,242</td>
                                        <td>
                                            4.4 <span class="mdi mdi-star"></span>
                                        </td>

                                        <td>
                                            <div class="hstack gap-4">
                                                <a href="#" class="text-muted" data-bs-toggle="tooltip" data-placement="top" aria-label="Message" data-bs-original-title="Message"><i class="fe fe-mail"></i></a>
                                                <a href="#" class="text-muted" data-bs-toggle="tooltip" data-placement="top" aria-label="Delete" data-bs-original-title="Delete"><i class="fe fe-trash"></i></a>
                                                <span class="dropdown dropstart">
                        <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#" role="button" data-bs-toggle="dropdown" data-bs-offset="-20,20" aria-expanded="false">
                          <i class="fe fe-more-vertical"></i></a>
                        <span class="dropdown-menu"><span class="dropdown-header">Settings</span>
                                                <a class="dropdown-item" href="#"><i class="fe fe-edit dropdown-item-icon"></i>Edit</a>
                                                <a class="dropdown-item" href="#"><i class="fe fe-trash dropdown-item-icon"></i>Remove</a>
                                                </span>
                                                </span>
                                               </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- Pagination -->
                            <div class="card-footer">
                                <nav>
                                    <ul class="pagination justify-content-center mb-0">
                                        <li class="page-item disabled">
                                            <a class="page-link mx-1 rounded" href="#"><i class="mdi mdi-chevron-left"></i></a>
                                        </li>
                                        <li class="page-item active">
                                            <a class="page-link mx-1 rounded" href="#">1</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link mx-1 rounded" href="#">2</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link mx-1 rounded" href="#">3</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link mx-1 rounded" href="#"><i class="mdi mdi-chevron-right"></i></a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
 @section('javascript')
    <script>

$(document).ready(function(){

    $('.js-switch').change(function () {
        let status = $(this).prop('checked') === true ? 1 : 0;
        let formateurId = $(this).data('id');
        $.ajax({
            type: "get",
            dataType: "json",
            url: "/formateur/update-status",
            data: {'status': status, 'formateur_id': formateurId},
            success: function (data) {
                console.log(data.message);
            }
        });
    });
});
    </script>

@endsection
