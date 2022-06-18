@extends('admin.layouts.app')
@section('content')

    <div class="page-wrapper">

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Edit Role</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('roles.update', $role->id) }}" method="POST">
                                @csrf
                                @if (session('success'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        {{ Session()->get('success') }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif
                                @method('PUT')
                                <div class="form-group">
                                    <label for="name">Role Name</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                        value="{{ $role->name }}" name="name" placeholder="Enter name">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>

                            <div class="form-group mt-4">
                                <h4 class="text text-md-left" for="permission">{{ $role->name }} Permission</h4>
                                @if ($role->permissions->count() > 0)
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th> Permission name</th>
                                                <th> Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($role->permissions as $role_permission)
                                                <tr>
                                                    <td>{{ $role_permission->name }}</td>
                                                    <td>
                                                        <form
                                                            action="{{ route('roles.permissions.revoke', [$role->id, $role_permission->id]) }}"
                                                            method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                onclick="return confirm('Are you sure want to revoke permission?')"
                                                                class="btn btn-danger btn-sm">Remove</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                @else
                                    <p class="text text-secondary">No Permission</p>
                                @endif
                            </div>

                            @if (session()->has('error'))
                                <div class="alert alert-danger">
                                    {{ session()->get('error') }}
                                </div>
                            @endif
                            <form action="{{ route('roles.assign.permissions', $role->id) }}" method="POST">
                                @csrf

                                <div class="form-group">
                                    <label for="name"><h4>Assign new permission</h4></label>
                                    <select name="permission" class="form-control" id="">permission
                                        <option value="">---Select Permission---</option>
                                        @if ($permissions->count() > 0)
                                            @foreach ($permissions as $permission)
                                                <option value="{{ $permission->name }}">{{ $permission->name }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Assign Permission</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
