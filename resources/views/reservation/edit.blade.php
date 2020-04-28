@extends('layout.app')

   

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Modifier atelier</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('reservation.index') }}"> Retour</a>

            </div>

        </div>

    </div>

   

    @if ($errors->any())

        <div class="alert alert-danger">

            <strong>Whoops!</strong> There were some problems with your input.<br><br>

            <ul>

                @foreach ($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach

            </ul>

        </div>

    @endif

  

    <form action="{{ route('reservations.update',$reservation->id) }}" method="POST">

        @csrf

        @method('PUT')

   

         <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Title:</strong>

                    <input type="text" name="title" value="{{ $reservation->title }}" class="form-control" placeholder="Title">

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Date:</strong>

                    <textarea class="form-control" style="height:150px" name="date" placeholder="Date">{{ $reservation->date }}</textarea>

                </div>

            </div>

             <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Prix:</strong>

                    <input type="text" name="price" value="{{ $reservation->price }}" class="form-control" placeholder="Price">

                </div>

            </div>

             <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Détail:</strong>

                    <input type="text" name="détail" value="{{ $reservation->détail }}" class="form-control" placeholder="Détail">

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">

              <button type="submit" class="btn btn-primary">Submit</button>

            </div>

        </div>

   

    </form>

@endsection