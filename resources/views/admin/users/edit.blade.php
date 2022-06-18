@extends('admin.layouts.app')
@section('content')


<div class="page-wrapper">

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <span class="text text-bold text-primary text-lg">{{$user->name}}</span>
                            <a style="float: right" href="{{route('users.index')}}"><button class="btn btn-primary">All users</button></a>

                    </div>

                    <div class="card-body">
                        <form action="{{ route('users.update', $user->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            {{-- {{ json_encode($data) }} --}}

                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" value="{{$user->name}}" name="name" value="{{$user->name}}">
                            </div>
                            <div class="form-group">
                                <label for="name">Email</label>
                                <input type="text" class="form-control" id="name" value="{{$user->email}}" name="email" value="{{$user->email}}">
                            </div>


                            <div class="form-group">
                                <label for="name">Assign Role</label>
                                <select class="form-control" name="role" id="">
                                    <option>Select Roles</option>
                                    @if ($roles)
                                        @foreach($roles as $role)
                                        <option value="{{$role->name}}">{{$role->name}}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>

                            <div class="mt-5">
                                <h4 class="text text-primary">Assigned Role</h4>
                                <table class="table table-stripped col-lg-12">
                                    <thead>
                                        <tr>
                                            <th>Role Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($assigned_roles->count() > 0)
                                            @foreach($assigned_roles as $role)
                                                <tr id="delete-row">
                                                    <td>{{$role->name}}</td>
                                                    <td>
                                                        <button id="delete-btn" onclick="deleteUser({{$user->id}},{{$role->id}})" class="btn btn-danger btn-sm" >Revoke</button>

                                                        {{-- <button onclick="return confirm('Are you sure to delete?')"  class="btn btn-danger btn-sm btn-delete" >Revoke</button> --}}

                                                    </td>
                                                </tr>
                                            @endforeach
                                                @else
                                                    <tr>
                                                        <td colspan="2" class="text-center">No role assigned</td>
                                                    </tr>

                                        @endif
                                    </tbody>
                                </table>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script  type="text/javascript">
    function deleteUser(user_id,role_id){
        if(confirm('Are you sure to revoke this role?')){

            $.ajax({
                url:"{{route('users.revoke.roles')}}",
                method: 'delete',
                data :
                {
                        "user_id" : user_id,
                        "role_id" : role_id,
                        "_token": "{{ csrf_token() }}",
                },
                datatype: "json",
                success:function(response)
                {
                    if(response.success){
                        console.log(response.success);
                        $('#delete-row').remove();
                    }
                }
            });
        }
    }



</script>
@section('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
@endsection

@endsection
