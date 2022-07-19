@extends('admin.layouts.app')
@section('content')

<div class="page-wrapper">

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h3>{{$user->name}}</h3>
                        <div class="float-lg-right">

                            <a href="{{route('users.index')}}"><button class="btn btn-primary">View All</button></a>
                        </div>
                    </div>
                    <div class="card-body">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name"  value="{{$user->name}}">
                               
                            </div>
                            <div class="form-group">
                                <label for="name">Email</label>
                                <input type="email" class="form-control" id="email" name="email"  value="{{$user->email}}">
                               
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
