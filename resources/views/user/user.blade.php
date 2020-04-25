
@extends('layouts.app')

@section('content')



<!-- affiche le nom de l'utilisateur -->

<!-- <img src="{{ Storage::disk('public')->url('profile/'.Auth::user()->image) }}" width="48" height="48" alt="User" /> -->


<!-- <div class="card-footer">

</div> -->











<h5>Bienvenue cher  {{ Auth::user()->name }}
</h5>







@endsection