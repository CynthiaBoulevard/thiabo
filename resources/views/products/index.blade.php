@extends('products.layout')

 

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div >
<br>

                <h2>Ateliers</h2>


            </div>

            <div class="pull-left">

<br>


                <a class="btn btn-success" href="{{ route('products.create') }}"> Créer un nouvel atelier</a>
<br>



            </div>

        </div>

    </div>

    <div class="pull-right">


                <a class="btn btn-primary" href="{{ ('/admin') }}"> Retour</a>

            </div>

    @if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>

    @endif

   

    <table class="table table-bordered">

        <tr>

            <th>No</th>

            <th>Titre</th>

            <th>Date</th>

            <th>Prix</th>

            <th>Details</th>

            <th width="300px">Action</th>

        </tr>

        @foreach ($products as $product)

        <tr>

            <td>{{ ++$i }}</td>

            <td>{{ $product->titre }}</td>

            <td>{{ $product->date }}</td>

            <td>{{ $product->prix }}</td>

            <td>{{ $product->detail }}</td>

            <td>

                <form action="{{ route('products.destroy',$product->id) }}" method="POST">

   

                    <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Voir</a>

    

                    <a class="btn btn-primary"  href="{{ route('products.edit',$product->id) }}">Modifier</a>

                    

                    @csrf

                    @method('DELETE')

      

                    <button type="submit" class="btn btn-danger">Supprimer</button>

                </form>

            </td>

        </tr>

        @endforeach

    </table>


 


    {!! $products->links() !!}

      

@endsection