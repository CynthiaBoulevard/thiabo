@extends('contact.layout')

 

@section('content')

    <div class="row">
<br>
<br>
        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Messages</h2>

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

            <th>Prénom</th>

            <th>E-mail</th>

            <th>Message</th>



            <th width="280px">Action</th>

        </tr>

        @foreach ($contacts as $contact)

        <tr>

           

            <td>{{ $contact->name }}</td>

            <td>{{ $contact->firstname }}</td>

            <td>{{ $contact->email }}</td>

            <td>{{ $contact->message }}</td>


            <td>

                <form action="{{ route('contact.destroy',$contact->id) }}" method="POST">

   

                    <a class="btn btn-info" href="{{ route('contact.show',$contact->id) }}">Voir</a>

    
   

                    @csrf

                    @method('DELETE')

      

                    <button type="submit" class="btn btn-danger">Supprimer</button>

                </form>

            </td>

        </tr>

        @endforeach

    </table>

  





    @if ($errors->any())
    @foreach ($errors->all() as $error)

    <script>
        toastr.error('{{ $error }}');
    </script>

    @endforeach
    @endif



<script src="jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

@jquery
@toastr_js
@toastr_render


{!! $contacts->links() !!}

@endsection