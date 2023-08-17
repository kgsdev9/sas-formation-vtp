@extends('admin.master.master')

@section('admin')

<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <div class="card mt-n4 mx-n4">
                        <div class="bg-soft-warning">
                            <div class="card-body pb-0 px-4">
                                <div class="row mb-3">
                                    <div class="col-md">
                                        <div class="row align-items-center g-3">
                                            <div class="col-md-auto">
                                                <div class="avatar-md">
                                                    <div class="avatar-title bg-white rounded-circle">
                                                        <img src="assets/images/brands/slack.png" alt="" class="avatar-xs">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md">
                                                <div>
                                                    <h4 class="fw-bold"> {{$course->title}}</h4>
                                                    <div class="hstack gap-3 flex-wrap">
                                                        <div><i class="ri-building-line align-bottom me-1"></i>Auteur {{$course->formateur->fullname}}</div>
                                                        <div class="vr"></div>
                                                        <div>Date de création  : <span class="fw-medium">{{$course->created_at}}</span></div>
                                                        <div class="vr"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <ul class="nav nav-tabs-custom border-bottom-0" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active fw-semibold" data-bs-toggle="tab" href="#project-overview" role="tab" aria-selected="true">
                                            Overview
                                        </a>
                                    </li>


                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link fw-semibold" data-bs-toggle="tab" href="#project-team" role="tab" aria-selected="false" tabindex="-1">
                                           Episode
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- end card body -->
                        </div>
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="tab-content text-muted">
                        <div class="tab-pane fade show active" id="project-overview" role="tabpanel">
                            <div class="row">
                                <div class="col-xl-9 col-lg-8">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="text-muted">
                                                <h6 class="mb-3 fw-semibold text-uppercase">Description</h6>
                                                <p>{{$course->description}}</p>

                                                <div class="pt-3 border-top border-top-dashed mt-4">
                                                    <div class="row">



                                                        <div class="col-lg-3 col-sm-6">
                                                            <div>
                                                                <p class="mb-2 text-uppercase fw-medium">Statut  :</p>
                                                                <div class="badge bg-danger fs-12"> {{$course->status}}</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-sm-6">
                                                            <div>
                                                                <p class="mb-2 text-uppercase fw-medium">Niveau  :</p>
                                                                <div class="badge bg-warning fs-12">{{$course->level->name}}</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                        <!-- end card body -->
                                    </div>
                                    <!-- end card -->

                                    <div class="card">
                                        <div class="card-header align-items-center d-flex">
                                            <h4 class="card-title mb-0 flex-grow-1">Comments</h4>
                                            <div class="flex-shrink-0">
                                                <div class="dropdown card-header-dropdown">
                                                    <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="text-muted">Recent<i class="mdi mdi-chevron-down ms-1"></i></span>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="#">Recent</a>
                                                        <a class="dropdown-item" href="#">Top Rated</a>
                                                        <a class="dropdown-item" href="#">Previous</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- end card header -->

                                        <div class="card-body">

                                            <div data-simplebar="init" style="height: 300px;" class="px-3 mx-n3 mb-2"><div class="simplebar-wrapper" style="margin: 0px -16px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: 100%; overflow: hidden scroll;"><div class="simplebar-content" style="padding: 0px 16px;">
                                                <div class="d-flex mb-4">
                                                    <div class="flex-shrink-0">
                                                        <img src="assets/images/users/avatar-8.jpg" alt="" class="avatar-xs rounded-circle">
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <h5 class="fs-13">Joseph Parker <small class="text-muted ms-2">20 Dec 2021 - 05:47AM</small></h5>
                                                        <p class="text-muted">I am getting message from customers that when they place order always get error message .</p>
                                                        <a href="javascript: void(0);" class="badge text-muted bg-light"><i class="mdi mdi-reply"></i> Reply</a>
                                                        <div class="d-flex mt-4">
                                                            <div class="flex-shrink-0">
                                                                <img src="assets/images/users/avatar-10.jpg" alt="" class="avatar-xs rounded-circle">
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <h5 class="fs-13">Alexis Clarke <small class="text-muted ms-2">22 Dec 2021 - 02:32PM</small></h5>
                                                                <p class="text-muted">Please be sure to check your Spam mailbox to see if your email filters have identified the email from Dell as spam.</p>
                                                                <a href="javascript: void(0);" class="badge text-muted bg-light"><i class="mdi mdi-reply"></i> Reply</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex mb-4">
                                                    <div class="flex-shrink-0">
                                                        <img src="assets/images/users/avatar-6.jpg" alt="" class="avatar-xs rounded-circle">
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <h5 class="fs-13">Donald Palmer <small class="text-muted ms-2">24 Dec 2021 - 05:20PM</small></h5>
                                                        <p class="text-muted">If you have further questions, please contact Customer Support from the “Action Menu” on your <a href="javascript:void(0);" class="text-decoration-underline">Online Order Support</a>.</p>
                                                        <a href="javascript: void(0);" class="badge text-muted bg-light"><i class="mdi mdi-reply"></i> Reply</a>
                                                    </div>
                                                </div>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0">
                                                        <img src="assets/images/users/avatar-10.jpg" alt="" class="avatar-xs rounded-circle">
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <h5 class="fs-13">Alexis Clarke <small class="text-muted ms-2">26 min ago</small></h5>
                                                        <p class="text-muted">Your <a href="javascript:void(0)" class="text-decoration-underline">Online Order Support</a> provides you with the most current status of your order. To help manage your order refer to the “Action Menu” to initiate return, contact Customer Support and more.</p>
                                                        <div class="row g-2 mb-3">
                                                            <div class="col-lg-1 col-sm-2 col-6">
                                                                <img src="assets/images/small/img-4.jpg" alt="" class="img-fluid rounded">
                                                            </div>
                                                            <div class="col-lg-1 col-sm-2 col-6">
                                                                <img src="assets/images/small/img-5.jpg" alt="" class="img-fluid rounded">
                                                            </div>
                                                        </div>
                                                        <a href="javascript: void(0);" class="badge text-muted bg-light"><i class="mdi mdi-reply"></i> Reply</a>
                                                        <div class="d-flex mt-4">
                                                            <div class="flex-shrink-0">
                                                                <img src="assets/images/users/avatar-6.jpg" alt="" class="avatar-xs rounded-circle">
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <h5 class="fs-13">Donald Palmer <small class="text-muted ms-2">8 sec ago</small></h5>
                                                                <p class="text-muted">Other shipping methods are available at checkout if you want your purchase delivered faster.</p>
                                                                <a href="javascript: void(0);" class="badge text-muted bg-light"><i class="mdi mdi-reply"></i> Reply</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div></div></div></div><div class="simplebar-placeholder" style="width: auto; height: 879px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="width: 0px; display: none; transform: translate3d(0px, 0px, 0px);"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: visible;"><div class="simplebar-scrollbar" style="height: 102px; transform: translate3d(0px, 0px, 0px); display: block;"></div></div></div>
                                            <form class="mt-4">
                                                <div class="row g-3">
                                                    <div class="col-12">
                                                        <label for="exampleFormControlTextarea1" class="form-label text-body">Leave a Comments</label>
                                                        <textarea class="form-control bg-light border-light" id="exampleFormControlTextarea1" rows="3" placeholder="Enter your comment..."></textarea>
                                                    </div>
                                                    <div class="col-12 text-end">
                                                        <button type="button" class="btn btn-ghost-secondary btn-icon waves-effect me-1"><i class="ri-attachment-line fs-16"></i></button>
                                                        <a href="javascript:void(0);" class="btn btn-success">Post Comments</a>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- end card body -->
                                    </div>
                                    <!-- end card -->
                                </div>
                                <!-- ene col -->
                                <div class="col-xl-3 col-lg-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title mb-4">Prerequis</h5>
                                            <div class="d-flex flex-wrap gap-2 fs-16">

                                                <div class="badge fw-medium badge-soft-secondary">{{$course->perfomance}}</div>

                                            </div>
                                        </div>
                                        <!-- end card body -->
                                    </div>
                                    <!-- end card -->

                                     <div class="card">
                                        <div class="card-header align-items-center d-flex border-bottom-dashed">
                                            <h4 class="card-title mb-0 flex-grow-1">Members</h4>
                                            <div class="flex-shrink-0">
                                                <button type="button" class="btn btn-soft-danger btn-sm" data-bs-toggle="modal" data-bs-target="#inviteMembersModal"><i class="ri-share-line me-1 align-bottom"></i> Invite Member</button>
                                            </div>
                                        </div>


                                        <!-- end card body -->
                                    </div>
                                    <!-- end card -->


                                    <!-- end card -->
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->
                        </div>
                        <!-- end tab pane -->


                        <!-- end tab pane -->
                        <div class="tab-pane fade" id="project-team" role="tabpanel">

                            <!-- end row -->

                            <div class="team-list list-view-filter">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center mb-4">
                                            <h5 class="card-title flex-grow-1">Liste des episodes de  </h5>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="table-responsive table-card">
                                                    <table class="table table-borderless align-middle mb-0" id="example">
                                                        <thead class="table-light">
                                                            <tr>
                                                                <th scope="col">Titre De l'episode </th>
                                                                <th scope="col">Duration </th>
                                                                <th scope="col">Date de création </th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>

                                                            @forelse ($cours as $value )
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="avatar-sm">
                                                                            <div class="avatar-title bg-light text-secondary rounded fs-24">
                                                                                <i class="ri-folder-zip-line"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="ms-3 flex-grow-1">
                                                                            <h5 class="fs-14 mb-0"><a href="javascript:void(0)" class="text-dark">{{$value->name}}</a></h5>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>{{$value->duration}} H </td>
                                                       
                                                                <td>{{$value->created_at}}</td>
                                                              {{--  <td>

                                                                    {{-- <div class="dropdown">
                                                                        <a href="javascript:void(0);" class="btn btn-soft-secondary btn-sm btn-icon" data-bs-toggle="dropdown" aria-expanded="false">
                                                                            <i class="ri-more-fill"></i>
                                                                        </a>
                                                                        <ul class="dropdown-menu dropdown-menu-end" style="">
                                                                            <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-eye-fill me-2 align-bottom text-muted"></i>View</a></li>
                                                                            <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-download-2-fill me-2 align-bottom text-muted"></i>Download</a></li>
                                                                            <li class="dropdown-divider"></li>
                                                                            <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-fill me-2 align-bottom text-muted"></i>Delete</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </td> --}}
                                                            </tr>

                                                            @empty
                                                                <span>Acun cours pour le moment </span>
                                                            @endforelse


                                                        </tbody>
                                                    </table>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <!-- end team list -->


                        </div>
                        <!-- end tab pane -->
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <script>document.write(new Date().getFullYear())</script>2023 © Velzon.
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-end d-none d-sm-block">
                        Design &amp; Develop by Themesbrand
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>

@endsection
