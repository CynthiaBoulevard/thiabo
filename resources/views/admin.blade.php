
@extends('layouts.app')

@section('content')



<!-- SIDEBAR -->
<div class="row ">

<div class="col-sm-4">


<div class="card" style="max-width: 20rem;">


<div class="card-header">

<h2>TABLEAU DE BORD</h2>
</div>
<!-- affiche le nom de l'utilisateur -->

<!-- <img src="{{ Storage::disk('public')->url('profile/'.Auth::user()->image) }}" width="48" height="48" alt="User" /> -->

<div class="email">{{ Auth::user()->name }}</div>

<div class="card-body">

<ul class="nav nav-pills flex-column">

<li class="nav-item">
<a class="nav-link active" href="#">CARROUSEL</a>
</li>

<li class="nav-item">
<a class="nav-link" href="#">ATELIERS</a>
</li>

<li class="nav-item">
<a class="nav-link" href="#">GALERIE</a>
</li>

<li class="nav-item">
<a class="nav-link" href="#">INSCRIPTIONS ATELIERS</a>
</li>

<li class="nav-item">
<a class="nav-link" href="#">UTILISATEURS</a>
</li>

<li class="nav-item">
<a class="nav-link" href="#">MESSAGES</a>
</li>
</ul>

</div>





<!-- <div class="card-footer">

</div> -->

</div>





</div>










<div class="col-sm-8">


<div class="card-header">

<h5>Bienvenue cher administrateur</h5>

</div>

</div>

</div>




@endsection