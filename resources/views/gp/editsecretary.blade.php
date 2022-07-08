@extends('gp.gpindex')
@section('gpindex')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
        @foreach($secretary as $value)
            <form method="post" action="/gp/editsecretaryaction/{{$value->id}}" ecntype="multipart/form-data">
                @csrf
                <div class="row">
                    <center>
                        <h2 class="mb-4">Edit</h2>
                    </center>
                    <div class="col-sm-12">
                        <label for="" class="form-label">
                            <h6>NAME</h6>
                        </label>
                        <input type="text" class="form-control" name="name" value="{{$value->name}}">
                    </div>
                    <div class="mb-3 col-sm-12">
                        <label for="district">
                            <h6>Panchayth</h6>
                        </label>
                        <select class="form-control" name="panchayth" id=Panchayth class="form-control">
                            <option value="{{$value->panchayth}}" default>{{$value->panchayth}}</option>
                            @foreach($gp as $value)
                            <option value="{{$value->name}}">{{$value->name}} </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-sm-12">
                        <label for="" class="form-label">
                            <h6>E-mail</h6>
                        </label>
                        <input type="email" class="form-control" name="email" id="" value="{{$value->email}}">
                    </div>
                    <div class="mb-3 col-sm-12">
                        <label for="" class="form-label">
                            <h6>Phone Number</h6>
                        </label>
                        <input type="number" class="form-control" name="phno" value="{{$value->phno}}">
                    </div>
                    <div class="mb-3 col-sm-12">
                        <label for="" class="form-label">
                            <h6>Username</h6>
                        </label>
                        <input type="text" class="form-control" name="username" value="{{$value->username}}">
                    </div>
                    <div class="mb-3 col-sm-12">
                        <label for="" class="form-label">
                            <h6>password</h6>
                        </label>
                        <input type="text" class="form-control" name="password" value="{{$value->password}}">
                    </div>
                    <div class="col-sm-3"></div>
                    <div class="mb-3 col-sm-6">
                        <input type="submit" value="EDIT SECRETARY" class="btn btn-block btn-danger btn-lg">

                    </div>
                    <div class="col-sm-3"></div>
                </div>
            </form>
        @endforeach
        </div>
    </div>
</div>

@endsection