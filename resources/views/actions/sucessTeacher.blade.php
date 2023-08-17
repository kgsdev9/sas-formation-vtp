@extends('layout.layout')

@section('content')
<br><br>
<div class="offset-xl-3 col-xl-6 offset-lg-2 col-lg-8 col-12">
    <!-- card -->
    <div class="card">
      <!-- card body -->
      <div class="card-body p-10 text-center">
        <!-- text -->
        <div class="mb-4 ">
          <h2>🎉 Fécilitation . Votre Candidature a été soumise avec succes!</h2>
          <p class="mb-0 px-lg-14">Commencez dés à present à publier vos formations, pendant que nous effectuerons certaine verification sur votre profil vous serez informez par mail.</p>
        </div>
        <!-- chart -->
        <!-- btn -->
        <div class="mt-6">
          <a href="{{url('/profiles')}}" class="btn btn-primary">Mon Tableau de bord </a>

        </div>
      </div>
    </div>
  </div>



  

@endsection
