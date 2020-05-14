@extends('reservation.layout')

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">
<br>
<br>
                <h2>Voir </h2>

            </div>

            <div class="pull-right">
<br>
<br>

                <a class="btn btn-primary" href="{{ route('reservation.index') }}"> Retour</a>

            </div>

        </div>

    </div>

   

    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">
                <br>

                <strong>Nom:</strong>

               
                <td>{{ $reservations->name }}</td>

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Atelier:</strong>

                <p>  {{ $lies->titre }} </p>


            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>E-mail:</strong>

                <p>  {{ $reservations->email }} </p>


            </div>

        </div>

        
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Téléphone:</strong>

                <p>  {{ $reservations->phone }} </p>


            </div>

        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong> Message:</strong>

              <p>  {{ $reservations->message }} </p>

              

            </div>

        </div>

        @csrf 

    </div>

@endsection