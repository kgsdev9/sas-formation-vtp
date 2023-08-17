@extends('admin.master.master')

@section('admin')

<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Seller Details</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                <li class="breadcrumb-item active">Seller Details</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-xxl-3">
                    <div class="card">
                        <div class="card-body p-4">
                            <div>
                                <div class="flex-shrink-0 avatar-md mx-auto">
                                    <div class="avatar-title bg-light rounded">

    <img src="{{Storage::url($formateur->avatar)}}" alt="" height="50">
                                    </div>
                                </div>
                                <div class="mt-4 text-center">
                                    <h5 class="mb-1">{{$formateur->fullname}}</h5>
                                    <p class="text-muted">Candidature Soumis {{$formateur->created_at->diffForHumans()}}</p>
                                </div>
                                <div class="table-responsive">
                                    <table class="table mb-0 table-borderless">
                                        <tbody>
                                            <tr>
                                                <th><span class="fw-medium">Nom et Prénom
                                                 </span></th>
                                                <td>{{$formateur->fullname}}</td>
                                            </tr>
                                            <tr>
                                                <th><span class="fw-medium">Télephone</span></th>
                                                <td>{{$formateur->telephone}}</td>
                                            </tr>
                                            <tr>
                                                <th><span class="fw-medium">Whattsap</span></th>
                                                <td>{{$formateur->whattsapp	}}</td>
                                            </tr>
                                            <tr>
                                                <th><span class="fw-medium">Genre</span></th>
                                                <td>
                                                    <a href="javascript:void(0);" class="link-primary">{{$formateur->genre}}</a></td>
                                            </tr>
                                            <tr>
                                                <th><span class="fw-medium">Statut de la candidature </span></th>
                                                <td>
        {{$formateur->staut== 0 ? 'validation en cours' : 'Validé'}}
                                                </td>
                                            </tr>
                                            <tr>
                                                <th><span class="fw-medium">Perfomance</span></th>
                                                <td>{{$formateur->perfomance}}</td>
                                            </tr>
                                            <tr>
                                                <th><span class="fw-medium">Email</span></th>
                                                <td>{{$formateur->user->email}}</td>
                                            </tr>


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!--end card-body-->

                        <!--end card-body-->


                        <!--end card-body-->
                    </div>
                    <!--end card-->
                </div>
                <!--end col-->
                    </div><!-- end card -->
                </div>
                <!--end col-->
            </div>
            <!--end row-->
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


