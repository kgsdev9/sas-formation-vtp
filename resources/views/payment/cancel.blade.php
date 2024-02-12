@extends('layout.layout')
@section('content')
<div class="container">
    <div class="container row-justify-content-center text-center">
<div class="card mt-4">
    <div class="card-body">
        <div class="mb-4">
            <h2 class="mb-0">Votre Commande a echouée  </h2>
           <p>Essayer dans une minute .</p>
        </div>
        <a href="{{route('formation.annuaire')}}" class="btn btn-outline-secondary">
            <svg fill="#000000" height="20px" width="20px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M256,0C114.859,0,0,114.837,0,256c0,141.141,114.859,256,256,256c141.163,0,256-114.859,256-256 C512,114.837,397.163,0,256,0z M403.691,264.149c-1.088,2.603-2.645,4.971-4.608,6.933l-85.333,85.333 c-4.16,4.16-9.621,6.251-15.083,6.251c-5.461,0-10.901-2.091-15.083-6.251c-8.32-8.341-8.32-21.845,0-30.165l48.917-48.917H128 c-11.776,0-21.333-9.557-21.333-21.333c0-11.797,9.557-21.333,21.333-21.333h204.501l-48.917-48.917 c-8.32-8.341-8.32-21.845,0-30.165c8.341-8.341,21.845-8.341,30.165,0l85.333,85.312c1.963,1.963,3.52,4.331,4.608,6.955 C405.845,253.056,405.845,258.923,403.691,264.149z"></path> </g> </g> </g></svg>
            Retourner</a>
    </div>
</div>
</div>
<br>

</div>
@endsection
