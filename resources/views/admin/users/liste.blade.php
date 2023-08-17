@extends('admin.master.master')

@section('master')
<br><br>
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">


            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">
                         Liste des utilisateurs</h4>
                        </div><!-- end card header -->

                        <div class="card-body">
                            <div class="listjs-table" >


                                <div class="table-responsive table-card mt-3 mb-1">
                                    <table class="table align-middle table-nowrap" id="example">
                                        <thead class="table-light">
                                            <tr>

                                                <th class="sort" data-sort="customer_name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nom D'utilisateur </font></font></th>
                                                <th class="sort" data-sort="email"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Email </font></font></th>
                                                <th class="sort" data-sort="phone"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Date d'inscription</font></font></th>
                                                <th class="sort" data-sort="action"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Action</font></font></th>
                                            </tr>
                                        </thead>
                                        <tbody class="list form-check-all">
                                            @foreach ($allUsers as $value )
                                            <tr>
                                                <td class="customer_name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$value->name}}</font></font></td>
                                                <td class="email"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$value->email}}</font></font></td>
                                                <td class="phone"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{date('d/m/Y', strtotime($value->created_at))}}</font></font></td>

                                                {{-- <td>
                                                    <div class="d-flex gap-2">
                                                        <div class="edit">
                                                            <button class="btn btn-sm btn-success edit-item-btn" data-bs-toggle="modal" data-bs-target="#showModal"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Modifier</font></font></button>
                                                        </div>
                                                        <div class="remove">
                                                            <button class="btn btn-sm btn-danger remove-item-btn" data-bs-toggle="modal" data-bs-target="#deleteRecordModal"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Retirer</font></font></button>
                                                        </div>
                                                    </div>
                                                </td> --}}
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <div class="noresult" style="display: none">
                                        <div class="text-center">
                                            <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px"></lord-icon>
                                            <h5 class="mt-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Désolé! </font><font style="vertical-align: inherit;">Aucun résultat trouvé</font></font></h5>
                                            <p class="text-muted mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nous avons recherché plus de 150 commandes Nous n'avons trouvé aucune commande pour votre recherche.</font></font></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-end">
                                    <div class="pagination-wrap hstack gap-2" style="display: none;">
                                        <a class="page-item pagination-prev disabled" href="javascrpit:void(0)"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                            Précédent
                                        </font></font></a>
                                        <ul class="pagination listjs-pagination mb-0"><li class="active"><a class="page" href="#" data-i="1" data-page="8">1</a></li></ul>
                                        <a class="page-item pagination-next disabled" href="javascrpit:void(0)"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                            Suivant
                                        </font></font></a>
                                    </div>
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
                            <h5 class="modal-title" id="exampleModalLabel">Edit Customer</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer" id="close-modal"></button>
                        </div>
                        <form class="tablelist-form" autocomplete="off">
                            <div class="modal-body">
                                <div class="mb-3" id="modal-id" style="display: none;">
                                    <label for="id-field" class="form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">IDENTIFIANT</font></font></label>
                                    <input type="text" id="id-field" class="form-control" placeholder="IDENTIFIANT" readonly="">
                                </div>

                                <div class="mb-3">
                                    <label for="customername-field" class="form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nom du client</font></font></label>
                                    <input type="text" id="customername-field" class="form-control" placeholder="Entrez le nom" required="">
                                    <div class="invalid-feedback"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Veuillez entrer un nom de client.</font></font></div>
                                </div>

                                <div class="mb-3">
                                    <label for="email-field" class="form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">E-mail</font></font></label>
                                    <input type="email" id="email-field" class="form-control" placeholder="Entrez l'e-mail" required="">
                                    <div class="invalid-feedback"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Veuillez saisir un e-mail.</font></font></div>
                                </div>

                                <div class="mb-3">
                                    <label for="phone-field" class="form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Téléphone</font></font></label>
                                    <input type="text" id="phone-field" class="form-control" placeholder="Entrez le numéro de téléphone." required="">
                                    <div class="invalid-feedback"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Veuillez entrer un téléphone.</font></font></div>
                                </div>

                                <div class="mb-3">
                                    <label for="date-field" class="form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Date d'inscription</font></font></label>
                                    <input type="text" id="date-field" class="form-control" placeholder="Sélectionner une date" required="">
                                    <div class="invalid-feedback"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Veuillez sélectionner une date.</font></font></div>
                                </div>

                                <div>
                                    <label for="status-field" class="form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Statut</font></font></label>
                                    <select class="form-control" data-trigger="" name="status-field" id="status-field" required="">
                                        <option value=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Statut</font></font></option>
                                        <option value="Active"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Actif</font></font></option>
                                        <option value="Block"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bloc</font></font></option>
                                    </select>
                                </div>
                            </div>
                            {{-- <div class="modal-footer" style="display: block;">
                                <div class="hstack gap-2 justify-content-end">
                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Fermer</font></font></button>
                                    <button type="submit" class="btn btn-success" id="add-btn">Update</button>
                                    <!-- <button type="button" class="btn btn-success" id="edit-btn">Update</button> -->
                                </div>
                            </div> --}}
                        </form>
                    </div>
                </div>
            </div>

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
                                <button type="button" class="btn w-sm btn-danger " id="delete-record"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Oui, supprimez-le&nbsp;!</font></font></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end modal -->

        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

</div>

@endsection
