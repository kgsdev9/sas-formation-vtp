@extends('admin.master.master')

@section('admin')

<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Annuaire des formateurs Verifiés </h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Liste des candidatures</a></li>
                                <li class="breadcrumb-item active">Acceptées </li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            {{-- <div class="row g-4 mb-3">
                <div class="col-sm-auto">
                    <div>
                        <a href="#!" class="btn btn-primary"><i class="ri-add-line align-bottom me-1"></i> Nouvelle Candidature</a>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="d-md-flex justify-content-sm-end gap-2">
                        <div class="search-box ms-md-2 flex-shrink-0 mb-3 mb-md-0">
                            <input type="text" class="form-control" id="searchJob" placeholder="Search for candidate name or designation..." autocomplete="off">
                            <i class="ri-search-line search-icon"></i>
                        </div>

                        <div class="choices" data-type="select-one" tabindex="0" role="listbox" aria-haspopup="true" aria-expanded="false"><div class="choices__inner"><select class="form-control w-md choices__input" data-choices="" data-choices-search-false="" hidden="" tabindex="-1" data-choice="active"><option value="Yesterday" data-custom-properties="[object Object]">Yesterday</option></select><div class="choices__list choices__list--single"><div class="choices__item choices__item--selectable" data-item="" data-id="1" data-value="Yesterday" data-custom-properties="[object Object]" aria-selected="true">Yesterday</div></div></div><div class="choices__list choices__list--dropdown" aria-expanded="false"><div class="choices__list" role="listbox"><div id="choices--ebg4-item-choice-1" class="choices__item choices__item--choice choices__item--selectable is-highlighted" role="option" data-choice="" data-id="1" data-value="All" data-select-text="Press to select" data-choice-selectable="" aria-selected="true">All</div><div id="choices--ebg4-item-choice-2" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="2" data-value="Last 7 Days" data-select-text="Press to select" data-choice-selectable="">Last 7 Days</div><div id="choices--ebg4-item-choice-3" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="3" data-value="Last 30 Days" data-select-text="Press to select" data-choice-selectable="">Last 30 Days</div><div id="choices--ebg4-item-choice-4" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="4" data-value="Last Year" data-select-text="Press to select" data-choice-selectable="">Last Year</div><div id="choices--ebg4-item-choice-5" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="5" data-value="This Month" data-select-text="Press to select" data-choice-selectable="">This Month</div><div id="choices--ebg4-item-choice-6" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="6" data-value="Today" data-select-text="Press to select" data-choice-selectable="">Today</div><div id="choices--ebg4-item-choice-7" class="choices__item choices__item--choice is-selected choices__item--selectable" role="option" data-choice="" data-id="7" data-value="Yesterday" data-select-text="Press to select" data-choice-selectable="">Yesterday</div></div></div></div>
                    </div>
                </div>
            </div> --}}

            <div class="row job-list-row">

                @foreach ($allTeachers as $value )


                <div class="col-xxl-3 col-md-6">
                    <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                        <a href="{{route('formateur.view', $value->id)}}">
                            <div class="avatar-lg rounded" style="cursor: pointer">
                                <img src="{{Storage::url($value->avatar)}}" alt="" class="member-img img-fluid d-block rounded">
                    </div>
                        </a>

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
                                        {{-- <form action="" method="POST">

                                        </form> --}}
                                        <input type="checkbox" data-id="{{$value->id}}" name="status" class="js-switch" {{ $value->status== 1 ? 'checked' : '' }}>
                                        </td>


                                     </div>
                                    </div>
                                      </div>
                                    </div>

                </div>
                @endforeach

            </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->x
</div>


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
