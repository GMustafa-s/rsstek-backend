@extends('admin.layouts.app')
@section('content')

<div class="page-wrapper">

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                    @if (Session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade out" role="alert">
                            {{ Session()->get('success') }}
                        </div>

                    @endif
                        <h3>Users</h3>
                        <div class="float-lg-right">

                            <a href="{{route('users.create')}}"><button class="btn btn-primary">Add new</button></a>
                        </div>
                    </div>
                    
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Created at</th>
                                    <th>Updated at</th>
                                    <th class="text text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        @if ($user->roles->count() > 0)
                                            @foreach($user->roles as $role)
                                                {{$role->name}}
                                            @endforeach
                                        @else
                                            ...
                                        @endif
                                    </td>
                                    <td>{{ $user->created_at->diffForHumans() }}</td>
                                    <td>{{ $user->updated_at->diffForHumans()}}</td>
                                    <td>

                                        <a href="{{route('users.show', $user->id)}}" class="btn btn-warning btn-sm">show</a>
                                        <a href="{{route('users.edit', $user->id)}}" class="btn btn-primary btn-sm">edit</a>

                                        <form action="{{route('users.destroy', $user->id)}}" method="POST" style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" onclick="return confirm('Are you sure want to delete?')" class="btn btn-danger btn-sm">delete</button>
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
