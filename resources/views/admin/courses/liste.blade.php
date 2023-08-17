@extends('admin.master.master')

@section('master')
<section class="container-fluid p-4">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-12">
			<!-- Page Header -->
			<div class="border-bottom pb-3 mb-3 d-md-flex align-items-center justify-content-between">
				<div class="mb-3 mb-md-0">
					<h1 class="mb-1 h2 fw-bold">Liste des formations </h1>
					<!-- Breadcrumb -->

				</div>

			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12 col-md-12 col-12">
			<!-- Card -->
			<div class="card rounded-3">
				<div>
					<!-- Table -->
					<div class="tab-content" id="tabContent">
						<!--Tab pane -->
						<div class="tab-pane fade show active" id="courses" role="tabpanel" aria-labelledby="courses-tab">
							<div class="table-responsive border-0 overflow-y-hidden">
								<table class="table mb-0 text-nowrap table-centered table-hover">
									<thead class="table-light">
										<tr>
											<th scope="col">
												Courses
											</th>
											<th scope="col">
												Instructor
											</th>
											<th scope="col">
												Catégorie
											</th>

                                            <th scope="col">
												 Niveau
											</th>


											<th scope="col">
												ACTION
											</th>
											<th scope="col"></th>
										</tr>
									</thead>
									<tbody>

                                        @foreach ( $course as $value )
										<tr>
											<td>
												<a href="#" class="text-inherit">
													<div class="d-flex align-items-center">
														<div>
															<img src="{{asset('courss/images/'.$value->image)}}" alt="" class="img-4by3-lg rounded">
														</div>
														<div class="ms-3">
															<h4 class="mb-1 text-primary-hover">{{$value->title}}</h4>
															<span class="text-muted">{{$value->prix}} € - {{$value->prix * 650}}FCFA  </span>
														</div>
													</div>
												</a>
											</td>
											<td>
												<div class="d-flex align-items-center">
													<img src="{{asset('formateurs/images/'.$value->formateur->avatar)}}" alt="" class="rounded-circle avatar-xs me-2">
													<h5 class="mb-0">
														{{$value->formateur->fullname}}
													</h5>
												</div>
											</td>

                                            <td>
												<span class="badge-dot bg-warning me-1 d-inline-block align-middle"></span>
												{{$value->category->name}}
											</td>
											<td>
												<span class="badge-dot bg-warning me-1 d-inline-block align-middle"></span>
												{{$value->level->name}}
											</td>

										</tr>

                                        @endforeach





									</tbody>
								</table>
							</div>
						</div>
						<!--Tab pane -->

						<!--Tab pane -->

					</div>
				</div>
				<!-- Card Footer -->
				<div class="card-footer">
					<nav aria-label="Page navigation example">
						<ul class="pagination justify-content-center mb-0">
							{{$course->links()}}
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
