@extends('layouts.app')

@section('title','contacte')


@push('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">

@section('content')


<div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">Tous les messages</h4>
                        </div>
                        <div class="card-content table-responsive">
                            <table id="table" class="table"  cellspacing="0" width="100%">
                                <thead class="text-primary">
                                <th>ID</th>
                                <th>Name</th>
                                <th>Firstname</th>
                                <th>Email</th>
                                <th>Message</th>
                                <th>Sent At</th>
                                <th>Action</th>
                                </thead>
                                <tbody>
                                    @foreach($contactes as $key=>$contacte)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $contacte->Name }}</td>
                                            <td>{{ $contacte->Firstname }}</td>
                                            <td>{{ $contacte->Email }}</td>
                                            <td>{{ $contacte->Message }}</td>
                                            <td>{{ $contacte->created_at }}</td>
                                            <td>{{ $contacte->updated_at }}</td>
                                            <td>
                                                <a href="" class="btn btn-info btn-sm"><i 
                                                class="material-icons">
                                                mode_edit</i></a>

                                                <form id="delete-form-{{ $contacte->id }}" 
                                                action="{{ route('contacte.destroy',$contacte->id) }}" 
                                                style="display: none;" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                                <button type="button" class="btn btn-danger btn-sm" 
                                                onclick="if(confirm('Voulez-vous vraiment supprimer ceci?')){
                                                event.preventDefault();
                                                document.getElementById('delete-form-{{ $contacte->id }}').submit();
                                                }else {
                                                    event.preventDefault();
                                                        }"><i class="material-icons">delete</i></button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection



@sush('scripts')


@endpush


