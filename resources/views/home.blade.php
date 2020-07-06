


<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tableau de bord</title>


    </head>



@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tableau de bord</div>

                <div class="card-body">
                @if(auth()->user()->is_admin == 1)
                    Vous êtes connecté cher 
                     <a href="{{url('admin')}}">Administrateur </a>
                    @else 

              
                         </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
