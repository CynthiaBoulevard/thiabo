@extends('reservation.layout')

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Voir ateliers</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('reservation.index') }}"> Retour</a>

            </div>

        </div>

    </div>

   

    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Nom:</strong>


            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>date:</strong>


            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>E-mail:</strong>


            </div>

        </div>

        
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Téléphone:</strong>


            </div>

        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong> Message:</strong>

                
            </div>

        </div>


    </div>

@endsection