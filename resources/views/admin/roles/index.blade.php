@extends('admin.layouts.app')
@section('content')

<div class="page-wrapper">

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Roles</h3>
                        <div class="float-lg-right">

                            <a href="{{route('roles.create')}}"><button class="btn btn-primary">Add new</button></a>
                        </div>
                    </div>
                    @if (Session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade out" role="alert">
                        {{ Session()->get('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    @endif
                    <div class="card-body">
                        <table class="table table-border col-lg-12">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    {{-- <th>Role has permissions</th> --}}
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($roles as $role)
                                <tr>
                                    <td>{{ $role->id }}</td>
                                    <td>{{ $role->name }}</td>
                                    <td>
                                        <a href="{{ route('roles.edit', $role) }}" class="btn btn-primary btn-sm">Edit</a>

                                        <form action="{{ route('roles.destroy', $role->id) }}" method="POST" style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" onclick="return confirm('Are you sure want to delete?')" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
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
