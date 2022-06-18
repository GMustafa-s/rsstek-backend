@extends('admin.layouts.app')
@section('content')

<div class="page-wrapper">

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="ml-2">Permission</h2>
                <div class="card">
                    <div class="card-header">
                        <h3>Edit ({{$permission->name}})</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('permissions.update', $permission->id) }}" method="POST">
                            @if (Session()->has('success'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        {{ Session()->get('success') }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                            @endif
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="name">Permission Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" value="{{$permission->name}}" name="name" placeholder="Enter name">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>

                        {{-- <div class="form-group mt-4">
                            <h4 class="text text-md-left" for="permission">{{$permission->name}} Roles</h4>
                            @if($permission->roles->count()> 0)
                            <table>
                                <thead>
                                    @foreach($permission->roles as $permission_role)
                                    <tr>
                                        <th>
                                            {{$permission_role->name}}
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <form action="{{route('permissions.roles.revoke', [$permission->id,$permission_role->id])}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" onclick="return confirm('Are you sure want to revoke role? ')" class="btn btn-danger btn-sm">Revoke</button>
                                            </form>
                                        </td>
                                    </tr>
                                </tbody>
                                @endforeach
                            </table>
                            @else
                                <p class="text text-secondary">No Role</p>
                            @endif
                        </div> --}}

                        @if(session()->has('error'))
                            <div class="alert alert-danger">
                                {{ session()->get('error') }}
                            </div>
                        @endif
                    {{-- <form action="{{ route('permissions.assign.roles', $permission->id) }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Assign new role</label>
                            <select name="role" class="form-control" id="">role
                                <option value="">---Select role---</option>
                                @if ($roles->count()>0)
                                    @foreach($roles as $role)
                                    <option value="{{$role->name}}">{{$role->name}}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Assign Role</button>
                    </form> --}}

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
