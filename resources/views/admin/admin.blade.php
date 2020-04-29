
@extends('layouts.app')

@section('content')



<!-- SIDEBAR -->
<div class="row ">

<div class="col-sm-4">


<div class="card" style="max-width: 20rem;">


<div class="card-header">

<h2>TABLEAU DE BORD</h2>
</div>


    
    <div class="card-body">

    <ul class="nav nav-pills flex-column">



    <li class="nav-item">


    <a class="nav-link" href="">ATELIERS</a>
    </li>



    <li class="nav-item">
    <a class="nav-link" href="{{ route('reservation.index') }}">INSCRIPTIONS ATELIERS</a>
    </li>

    <!-- <li class="nav-item">
    <a class="nav-link" href="#">UTILISATEURS</a>
    </li> -->

    <li class="nav-item">
    <a class="nav-link" href="{{ route('contact.index') }}">MESSAGES</a>
    </li>


    </ul>

    </div>

    </div>
</div>






 



    <div class="col-sm-8">


    <div class="card-header">

    <h5>Bienvenue <div class="email">{{ Auth::user()->name }}</div>
</h5>

    </div>

    </div>

    </div>





@endsection


