@extends('reservation.layout')

 

@section('content')

    <div class="row">
<br>
<br>
        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Ateliers</h2>

            </div>

            <div class="pull-right">

          

                <a class="btn btn-primary" href="{{ ('/admin') }}"> Retour</a>


            </div>

        </div>

    </div>

<br>
<br>

   

    @if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>

    @endif

   

    <table class="table table-bordered">

        <tr>


            <th>Nom</th>

            <th>Atelier</th>

            <th>E-mail</th>

            <th>Téléhone</th>

            <th>Message</th>



            <th width="280px">Action</th>

        </tr>

        @foreach ($reservations as $reservation)

        <tr>

           

            <td>{{ $reservation->name }}</td>

            <td>{{ $reservation->firstname }}</td>

            <td>{{ $reservation->email }}</td>

            <td>{{ $reservation->phone }}</td>

            <td>{{ $reservation->message }}</td>


            <td>

                <form action="{{ route('reservation.destroy',$reservation->id) }}" method="POST">

   

                    <a class="btn btn-info" href="{{ route('reservation.show',$reservation->id) }}">Voir</a>

    


   

                    @csrf

                    @method('DELETE')

      

                    <button type="submit" class="btn btn-danger">Supprimer</button>

                </form>

            </td>

        </tr>

        @endforeach

    </table>

  




<!-- function pour signifier une erreur avec toastr -->
    @if ($errors->any())
    @foreach ($errors->all() as $error)

    <script>
        toastr.error('{{ $error }}');
    </script>

    @endforeach
    @endif


<!-- lien pour la petite fenêtre Success Toastr -->
<script src="jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

@jquery
@toastr_js
@toastr_render


<!-- lien pour pagination -->
{!! $reservations->links() !!}


@endsection