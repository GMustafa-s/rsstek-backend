@extends('admin.layouts.app')
@section('content')

<div class="page-wrapper">

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h3>{{$data->heading}}</h3>
                        <div class="float-lg-right">

                            <a href="{{route('cms.industries.security-section.index')}}"><button class="btn btn-primary">View All</button></a>
                        </div>
                    </div>
                    <div class="card-body">
                            <div class="form-group">
                                <label for="name">Industries Page</label>
                                <input type="text" class="form-control" id="name" name="name"  value="{{$name}}">

                            </div>
                            <div class="form-group">
                                <label for="name">Heading</label>
                                <input type="text" class="form-control" id="name" name="name"  value="{{$data->heading}}">

                            </div>
                            <div class="form-group">
                                <label for="name">Description</label>
                                <input type="email" class="form-control" id="" name=""  value="{{$data->description}}">

                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-6">
                                        <label for="name">Image</label>
                                    </div>
                                    <div class="col-6">
                                        <img width="50px" height="50px" src="{{asset('frontend')}}/images/industries/security-section/{{$data->image}}" alt="">
                                    </div>
                                </div>

                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
