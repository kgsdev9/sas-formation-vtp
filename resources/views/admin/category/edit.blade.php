@extends('admin.master.master')
@section('master')

<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">



            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Edition de la catégorie </h4>
                        </div><!-- end card header -->

                        <div class="card-body">
                            <form action="{{route('category.update', $category->id)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div>

                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="mb-3">
                                                <label for="cleave-date" class="form-label">Designation </label>
                                                <input type="text" class="form-control" name="name"  id="cleave-date" value="{{$category->name}}">
                                            </div>

                                        </div><!-- end col -->

                                        <div class="col-xl-12">
                                            <div class="mb-3">
                                                <label for="cleave-date-format" class="form-label">Image</label>
                                                <input type="file" name="image" class="form-control" value="{{$category->image}}">
                                            </div>
                                        </div><!-- end col -->
                                    </div><!-- end row -->
                                </div>

                                    <button class="btn btn-dark">Enregistrer les modifications  </button>

                            </form><!-- end form -->
                        </div><!-- end card-body -->
                    </div><!-- end card -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

</div>



@endsection
