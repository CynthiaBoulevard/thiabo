@extends('products.layout')

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">
<br>
<br>

                <h2> Voir l'atelier</h2>
<br>
<br>

            </div>

            <div class="pull-right">
<br>
<br>

                <a class="btn btn-primary" href="{{ route('products.index') }}"> Retour</a>

            </div>

        </div>

    </div>

   

    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Titre:</strong>

                {{ $product->titre }}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Date:</strong>

                {{ $product->date }}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Prix:</strong>

                {{ $product->prix }}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Détail:</strong>

                {{ $product->detail }}

            </div>

        </div>





    </div>

@endsection