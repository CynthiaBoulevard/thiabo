@extends('reservation.layout')

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">
<br>
<br>

                <h2>Voir</h2>

            </div>

            <div class="pull-right">

<br>
<br>

                <a class="btn btn-primary" href="{{ ('/admin') }}"> Retour</a>


            </div>

        </div>

    </div>

   

    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">
<br>
                <strong>Nom:</strong>


                <p>  {{ $contact->name?? '' }} </p>


            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>date:</strong>

                <p>  {{ $contact->date ?? '' }} </p>

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>E-mail:</strong>

                <p>  {{ $contact->email ?? '' }} </p>

            </div>

        </div>

        
    


        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong> Message:</strong>

                <p>  {{ $contact->message ?? '' }} </p>

            </div>

        </div>


    </div>

@endsection