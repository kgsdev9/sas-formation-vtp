@extends('admin.master.master')

@section('admin')
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Annuaire des Coupons </h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Coupn</a></li>
                                <li class="breadcrumb-item active">Coupons </li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-4">
                    <div class="card card-height-100">
                        <div class="card-body">
                            <h5 class="card-title mb-3">Pourcentage Coupon </h5>
                            <div class="progress animated-progress custom-progress mb-1">
                                <div class="progress-bar bg-info" role="progressbar" style="width: {{count($couponsAll)}}%" aria-valuenow="{{count($couponsAll)}}" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p class="text-muted mb-2">Nombre total  de coupons </p>
                            <div class="text-end">
                                <button type="button" class="btn btn-success btn-sm create-btn" data-bs-toggle="modal" data-bs-target="#api-key-modal">Créer un coupon </button>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
                <div class="col-lg-4">
                    <div class="card card-animate card-height-100">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <p class="fw-medium text-muted mb-0">Coupon Active </p>
                                    <h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value" data-target="{{$couponEnable}}">{{$couponEnable}}</span></h2>

                                </div>
                                <div>
                                    <div class="avatar-sm flex-shrink-0">
                                        <span class="avatar-title bg-soft-success rounded-circle fs-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle text-success"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end card body -->
                    </div>
                </div><!--end col-->
                <div class="col-lg-4">
                    <div class="card card-animate card-height-100">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <p class="fw-medium text-muted mb-0">Coupon Expiré </p>
                                    <h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value" data-target="{{$couponDisable}}">{{$couponDisable}}</span></h2>

                                </div>
                                <div>
                                    <div class="avatar-sm flex-shrink-0">
                                        <span class="avatar-title bg-soft-danger rounded-circle fs-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-octagon text-danger"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end card body -->
                    </div>
                </div><!--end col-->
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card" id="apiKeyList">
                        <div class="card-header d-flex align-items-center">
                            <h5 class="card-title flex-grow-1 mb-0">Liste des coupons </h5>
                            <div class="d-flex gap-1 flex-wrap">
                                <button class="btn btn-soft-danger" id="remove-actions" onclick="deleteMultiple()"><i class="ri-delete-bin-2-line"></i></button>
                                <button type="button" class="btn btn-success create-btn" data-bs-toggle="modal" data-bs-target="#api-key-modal"><i class="ri-add-line align-bottom me-1"></i> Nouveau Coupon</button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div>
                                <div class="table-responsive table-card mb-3">
                                    <table class="table align-middle table-nowrap mb-0" id="example">
                                        <thead class="table-light">
                                            <tr>

                                                <th class="sort d-none" data-sort="id" scope="col">Id</th>
                                                <th class="sort" data-sort="name" scope="col">Fomation</th>
                                                <th class="sort" data-sort="createBy" scope="col">Pourcentage</th>
                                                <th class="sort" data-sort="apikey" scope="col">Code</th>
                                                <th class="sort" data-sort="status" scope="col">Date de création </th>
                                                <th class="sort asc" data-sort="create_date" scope="col">Date d'expiration</th>
                                                <th class="sort" data-sort="expiry_date" scope="col">Expire dans </th>
                                                <th class="sort" data-sort="expiry_date" scope="col">Status  </th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody class="list form-check-all">
                                            @foreach ($couponsAll as $value )
                                            <tr>


                                                <td class="name">   {{$value->course->title}}</td>
                                                <td class="createBy"> {{$value->discount_percent}}</td>
                                                <td class="apikey">
                                                    <input type="text" class="form-control apikey-value" readonly="" value="{{$value->code}}">
                                                </td>
                                                <td class="create_date">{{$value->created_at}}</td>
                                                <td class="create_date">{{$value->delai}}</td>
                                                <td class="expiry_date">

                                                    {{$value->expire_at}} Jours

                                                </td>
                                                <td class="status">
                                                    @if($value->expire_at =! 0)
                                                    <span class="badge badge-soft-success">Active</span>
                                                    @elseif($value->expire_at == 0 )
                                                    <span class="badge badge-soft-danger">Disable</span>
                                                    @endif

                                                </td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="ri-more-fill align-middle"></i>
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a class="dropdown-item regenerate-api-btn" href="#api-key-modal" data-bs-toggle="modal">Editer</a></li>
                                                            <li><a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteApiKeyModal">Delete</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                                    <!-- Modal -->
                                                <div class="modal fade zoomIn" id="deleteApiKeyModal" tabindex="-1" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="deleteRecord-close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="mt-2 text-center">
                                                                    <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                                                                    <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                                                                        <h4>Vous etes surs  ?</h4>
                                                                        <p class="text-muted mx-4 mb-0">Voulez-vous Vraiment Supprimer le coupon ?</p>
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                                                                    <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Fermer</button>
                                                                    <a href="{{route('coupon.destroy', $value->id)}}" class="btn w-sm btn-danger">Supprimer </a>
                                                                </div>
                                                            </div>

                                                        </div><!-- /.modal-content -->
                                                    </div>
                                                </div>
                                                <!--end modal -->

                                            @endforeach
                                        </tbody>
                                    </table>
                                    <div class="noresult" style="display: none">
                                        <div class="text-center">
                                            <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px"></lord-icon>
                                            <h5 class="mt-2">Sorry! No Result Found</h5>
                                            <p class="text-muted mb-0">We've searched more than 150+ API Keys We did not find any API for you search.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mt-3">
                                    <div class="pagination-wrap hstack gap-2" style="display: none;">
                                        <a class="page-item pagination-prev disabled" href="#">
                                            Previous
                                        </a>
                                        <ul class="pagination listjs-pagination mb-0"><li class="active"><a class="page" href="#" data-i="1" data-page="8">1</a></li></ul>
                                        <a class="page-item pagination-next disabled" href="#">
                                            Next
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    <!-- Modal -->
    <div class="modal fade" id="api-key-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Nouveau Coupon </h5>
                    <button type="button" class="btn-close" id="close-modal" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form autocomplete="on" method="POST" action="{{route('coupon.store')}}">
                        @csrf
                        <div id="api-key-error-msg" class="alert alert-danger py-2 d-none"></div>
                        <input type="hidden" id="apikeyId">
                        <div class="mb-3">
                            <label for="api-key-name" class="form-label">Formation  <span class="text-danger">*</span></label>
                            <select name="course_id" id="" class="form-control">
                                @foreach ($courseAll as $value )
                                <option value="{{$value->id}}">{{$value->title}}</option>
                                @endforeach

                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="api-key-name" class="form-label">Pourcentage Reduction  <span class="text-danger">*</span></label>
                             <input type="number" class="form-control" name="pourcent" value="{{old('pourcent')}}" placeholder="20%">
                        </div>

                        <div class="mb-3">
                            <label for="api-key-name" class="form-label">Code   <span class="text-danger">*</span></label>
                             <input type="number" class="form-control" name="code" value="{{old('code')}}" placeholder="CP4566567776">
                        </div>

                        <div class="mb-3">
                            <label for="api-key-name" class="form-label">Delai d'expiration  <span class="text-danger">*</span></label>
                             <input type="date" class="form-control" name="delai" value="{{old('pourcent')}}">
                        </div>

                </div>
                <div class="modal-footer" style="display: block;">
                    <div class="hstack gap-2 justify-content-end">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer </button>
                        <button type="submit" class="btn btn-primary" id="createApi-btn" style="display: block;">Créer le coupon </button>
                    </div>
                </div>
            </form>
            </div>
            <!-- modal content -->
        </div>
    </div>
    <!-- end modal -->



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
