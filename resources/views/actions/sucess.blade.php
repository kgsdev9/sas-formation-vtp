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
          <h2>🎉 Fécilitation . Votre Compté  a été crée avec succes!</h2>
          <p class="mb-0 px-lg-14">Vous pouvez vous connectez en toute securité , en attendant de confirmer votre compte ! </p>
          <p>Merci de faire partie de la communauté DE SAS FORMATION. </p>
        </div>
        <!-- chart -->
        <!-- btn -->
        <div class="mt-6">
          <a href="{{route('auth.login')}}" class="btn btn-primary">Se Connecter </a>

        </div>
      </div>
    </div>
  </div>





@endsection
