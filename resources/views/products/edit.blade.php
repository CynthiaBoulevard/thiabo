@extends('products.layout')

   

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">
<br>
<br>

                <h2>Modifier l'atelier</h2>
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

  

    <form action="{{ route('products.update',$product->id) }}" method="POST">

        @csrf

        @method('PUT')

   

         <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Titre:</strong>

                    <input type="text" name="titre" value="{{ $product->titre }}" class="form-control" placeholder="Titre">

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Date:</strong>

                    <textarea class="form-control" style="height:40px" name="date" placeholder="Date">{{ $product->date }}</textarea>

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Prix:</strong>

                    <textarea class="form-control" style="height:40px" name="prix" placeholder="Prix">{{ $product->prix }}</textarea>

                </div>

            </div>


            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Detail:</strong>

                    <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail">{{ $product->detail }}</textarea>

                </div>

            </div>





            <div class="col-xs-12 col-sm-12 col-md-12 text-center">

              <button type="submit" class="btn btn-primary">Modifier</button>

            </div>

        </div>

   

    </form>

@endsection