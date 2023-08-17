@extends('admin.master.master')

@section('master')


<section class="container-fluid p-4">
	<div class="row">
		<!-- Page Header -->
		<div class="col-lg-12 col-md-12 col-12">
			<div class="border-bottom pb-3 mb-3 d-flex justify-content-between align-items-center">
				<div class="mb-2 mb-lg-0">
					<h1 class="mb-1 h2 fw-bold">Liste des formateurs </h1>
					<!-- Breadcrumb  -->

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
					
					<div class="row">
                        @foreach ($teachers as $value)


						<div class="col-xl-3 col-lg-6 col-md-6 col-12">
							<!-- Card -->
							<div class="card mb-4">
								<!-- Card body -->
								<div class="card-body">
									<div class="text-center">
										<img src="{{asset('formateurs/images/'.$value->avatar)}}" class="rounded-circle avatar-xl mb-3" alt="">
										<h4 class="mb-0">{{$value->fullname}}</h4>
										<p class="mb-0">
											{{$value->poste}}
										</p>
									</div>
									<div class="d-flex justify-content-between border-bottom py-2 mt-4">
										<span>TELEPHONE</span>
										<span class="text-dark">{{$value->telephone}}</span>
									</div>
									<div class="d-flex justify-content-between border-bottom py-2">
										<span>Spécialité</span>
										<span class="text-warning">{{$value->perfomance}}</span>
									</div>
									<div class="d-flex justify-content-between pt-2">
										<span>Formations </span>
										<span class="text-dark"> {{count($value->courses)}} </span>
									</div>
								</div>
							</div>
						</div>

                        @endforeach
					</div>
				</div>
				<!-- tab pane -->

			</div>
		</div>
	</div>
</section>


@endsection
 @section('javascript')
    <script>

// $(document).ready(function(){

//     $('.js-switch').change(function () {
//         let status = $(this).prop('checked') === true ? 1 : 0;
//         let formateurId = $(this).data('id');
//         $.ajax({
//             type: "get",
//             dataType: "json",
//             url: "/formateur/update-status",
//             data: {'status': status, 'formateur_id': formateurId},
//             success: function (data) {
//                 console.log(data.message);
//             }
//         });
//     });
// });
//     </script>

@endsection
