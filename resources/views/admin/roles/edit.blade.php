@extends('admin.layouts.app')
@section('content')

<br>
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
<div class="row">
    <div class="col-12">
        <hr>
        <h2 class="text-center " style="margin-top: 20px;">Manage Permissions for {{ $role->name }}</h2>
        
        <form method="POST" action="{{ route('roles.assign.permissions',$role->id) }}">

            @csrf
            <table class="table table-striped">
                <thead>
                    <th scope="col" width="1%"><input onclick="checkAllPermissions()" type="checkbox" name="all_permission"></th>
                    <th scope="col" width="20%">Name</th>
                    <th scope="col" width="1%">Guard</th> 
                </thead>

                @foreach($permissions as $permission)
                    <tr>
                        <td>
                            <input type="checkbox" 
                            name="permission[]"
                            value="{{ $permission->id}}"
                            class='permission'
                            {{ in_array($permission->id, $role_permissions) 
                                ? 'checked'
                                : '' }}>
                           
                        </td>
                        <td>{{ $permission->name }}</td>
                        <td>{{ $permission->guard_name }}</td>
                    </tr>
                @endforeach
            </table>

            <button type="submit" class="btn btn-primary">Save changes</button>
            <a href="" class="btn btn-default">Back</a>
        </fo rm>
    </div>
    </div>
</div>
                            @if (session()->has('error'))
                                <div class="alert alert-danger">
                                    {{ session()->get('error') }}
                                </div>
                            @endif
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
    function checkAllPermissions() {
    
        if($('[name="all_permission"]').is(':checked')) {
        $('.permission').prop('checked',true);
        } else {
            $('.permission').prop('checked',false);
        }   
     }

    </script>s
@endsection
