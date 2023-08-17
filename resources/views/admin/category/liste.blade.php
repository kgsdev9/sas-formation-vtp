@extends('admin.master.master')

@section('master')
<br>
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">



            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header d-flex align-items-center">
                            <h5 class="card-title flex-grow-1 mb-0">Liste des Catégories  </h5>
                            <div class="d-flex gap-1 flex-wrap">
                                <button class="btn btn-soft-danger" id="remove-actions" onclick="deleteMultiple()"><i class="ri-delete-bin-2-line"></i></button>
                                <button class="btn btn-sm btn-success edit-item-btn" data-bs-toggle="modal" data-bs-target="#showModal"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nouvelle Catégorie </font></font></button>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="listjs-table" >
                                <div class="table-responsive table-card mt-3 mb-1">
                                    <table class="table align-middle table-nowrap" id="example">
                                        <thead class="table-light">
                                            <tr>

                                                <th class="sort" data-sort="customer_name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Désignation </font></font></th>
                                                <th class="sort" data-sort="email"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Image</font></font></th>
                                                <th class="sort" data-sort="phone"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tendance </font></font></th>
                                                <th class="sort" data-sort="phone"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Populaire  </font></font></th>
                                                <th class="sort" data-sort="action"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Action</font></font></th>
                                            </tr>
                                        </thead>
                                        <tbody class="list form-check-all">
                                            @foreach ($category as $value )
                                            <tr>
                                                <td class="customer_name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$value->name}}</font></font></td>
                                                <td class="email"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                                    <img src="{{asset('categories/images/'.$value->image)}}" alt="" style="height: 60px;width:60px;">
                                                </td>
                                                <td class="email"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$value->tendance}}</font></font></td>
                                                <td class="phone"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> populaire</td>

                                                <td>
                                                    <div class="d-flex gap-2">
                                                        <div class="edit">
                                                         <a href="{{route('category.edit', $value->id)}}" class="btn btn-sm btn-success edit-item-btn">Editer </a>
                                                        </div>
                                                        <div class="remove">
                                                            <button class="btn btn-sm btn-danger remove-item-btn" data-bs-toggle="modal" data-bs-target="#deleteRecordModal"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Retirer</font></font></button>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                              <!-- Modal -->
            <div class="modal fade zoomIn" id="deleteRecordModal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer" id="btn-close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mt-2 text-center">
                                <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                                <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                                    <h4><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Es-tu sûr ?</font></font></h4>
                                    <p class="text-muted mx-4 mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Êtes-vous sûr de vouloir supprimer cet enregistrement&nbsp;?</font></font></p>
                                </div>
                            </div>
                            <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                                <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Fermer</font></font></button>
                                <form action="{{route('category.destroy', $value->id)}}" method="POST">
                                    @csrf
                                   @method('DELETE')
                                    <button type="submit" class="btn w-sm btn-danger " id="delete-record"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Oui, supprimez-le&nbsp;!</font></font></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end modal -->

                                            @endforeach
                                        </tbody>
                                    </table>

                                </div>


                            </div>
                        </div><!-- end card -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->


            <!-- end row -->


            <!-- end row -->

            <div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header bg-light p-3">
                            <h5 class="modal-title" id="exampleModalLabel">Nouvelle Catégorie </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer" id="close-modal"></button>
                        </div>
                        <form  method="POST" action="{{route('category.store')}}" class="tablelist-form" autocomplete="off" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">


                                <div class="mb-3">
                                    <label for="customername-field" class="form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Désignation de la catégorie </font></font></label>
                                    <input type="text" id="customername-field" name="name" class="form-control" placeholder="Entrez le nom" required="" value="{{old('name')}}">

                                </div>

                                <div class="mb-3">
                                    <label for="email-field" class="form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Image de la catégorie</font></font></label>
                                    <input type="file" id="email-field" name="image" class="form-control" placeholder="Entrez l'e-mail" required="">
                                </div>






                            </div>
                            <div class="modal-footer" style="display: block;">
                                <div class="hstack gap-2 justify-content-end">
                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Fermer</font></font></button>
                                    <button type="submit" class="btn btn-success" id="add-btn">Enregistrer</button>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>



        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

</div>


@endsection
