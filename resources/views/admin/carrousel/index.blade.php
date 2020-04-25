@extends('layouts.app')

@section('title','Carrousel')


@push('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">

@section('content')


<div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{ route('carrousel.create') }}" class="btn btn-primary">Add New</a>
                    <!-- @include('layouts.partial.msg') -->
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">All Carrousel</h4>
                        </div>
                        <div class="card-content table-responsive">
                            <table id="table" class="table"  cellspacing="0" width="100%">
                                <thead class="text-primary">
                                <th>ID</th>
                                <th>Title</th>
                                <th>Sub Title</th>
                                <th>Image</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Action</th>
                                </thead>
                                <tbody>carrousel
                                    <!-- @foreach($carrousels as $key=>$carrousel)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $carrousel->title }}</td>
                                            <td>{{ $carrousel->sub_title }}</td>
                                            <td>{{ $carrousel->image }}</td>
                                            <td>{{ $carrousel->created_at }}</td>
                                            <td>{{ $carrousel->updated_at }}</td>
                                            <td>
                                                <a href="{{ route('carrousel.edit',$carrousel->id) }}" class="btn btn-info btn-sm"><i class="material-icons">mode_edit</i></a>

                                                <form id="delete-form-{{ $carrousel->id }}" action="{{ route('carrousel.destroy',$carrousel->id) }}" style="display: none;" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                                <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure? You want to delete this?')){
                                                    event.preventDefault();
                                                    document.getElementById('delete-form-{{ $carrousel->id }}').submit();
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
    </div> -->


@endsection



@sush('scripts')


@endpush

