@extends('admin.master.master')

@section('master')
<section class="container-fluid p-4">
    <div class="row ">
      <div class="col-lg-12 col-md-12 col-12">
        <!-- Page header -->
        <div class="border-bottom pb-3 mb-3 d-lg-flex align-items-center justify-content-between">
          <div class="mb-2 mb-lg-0">
            <h1 class="mb-0 h2 fw-bold">Liste  des commandes     </h1>

          </div>
          <!-- button -->

        </div>

      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 col-md-12 col-12">
        <!-- Card -->
        <div class="card rounded-3">
          <!-- Card Header -->


          <div>
            <div class="tab-content" id="tabContent">
              <!-- Tab -->
              <div class="tab-pane fade show active" id="all-orders" role="tabpanel" aria-labelledby="all-orders-tab">
                <div class="table-responsive">
                  <!-- Table -->
                  <table class="table mb-0 text-nowrap table-hover table-centered table-with-checkbox">
                    <!-- Table Head -->
                    <thead class="table-light">
                      <tr>
                        <th>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="checkAll">
                            <label class="form-check-label" for="checkAll"></label>
                          </div>
                        </th>
                        <th>CODECOMMANDE</th>
                        <th>CLIENT  </th>
                        <th>DATE</th>

                        <th>STATUS</th>
                        <th>Total</th>

                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($orders as $value)
                      <tr>
                        <td>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="orderOne">
                            <label class="form-check-label" for="orderOne"></label>
                          </div>
                        </td>
                        <td>
                          <a href="#" class="fw-semibold">
                           {{$value->codeCommande}}
                          </a>
                        </td>
                        <td>
                            {{$value->fullname}}
                        </td>
                        <td>
                            {{$value->created_at}}

                        </td>
                        <td>
                            @if($value->status === "en atttente")
                          <span class="badge text-success bg-light-warning">{{$value->status}}</span>
                          @elseif($value->status ==="effectue")
                          <span class="badge text-success bg-light-success">{{$value->status}}</span>

                          @elseif($value->status ==="echec")
                          <span class="badge text-success bg-light-danger">{{$value->status}}</span>
                          @endif
                        </td>
                        <td>
                            {{$value->amount}}€  -  {{$value->amount * 650}}FCFA
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>



            </div>
          </div>
          <!-- Card Footer -->

        </div>
      </div>
    </div>
  </section>

@endsection
