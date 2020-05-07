


<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tableau de bord</title>


    </head>



@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="css/main.css" />



<!-- SIDEBAR -->
<div class="row ">

<div class="col-sm-4">


<div class="card" style="max-width: 16rem;">


<div class="card-header">

<h4>Bienvenue {{ Auth::user()->name }}</h4>
</div>


    
    <div class="card-body">

    <ul class="nav nav-pills flex-column">



  

    <li class="nav-item">
    <a class="nav-link" href="{{ route('products.index') }}">ATELIERS</a>
    </li>



    <li class="nav-item">
    <a class="nav-link" href="{{ route('reservation.index') }}">INSCRIPTIONS ATELIERS</a>
    </li>

   

    <li class="nav-item">
    <a class="nav-link" href="{{ route('contact.index') }}">MESSAGES</a>
    </li>


    </ul>

    </div>

    </div>
</div>



@endsection


