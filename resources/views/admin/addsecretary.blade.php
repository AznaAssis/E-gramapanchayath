@extends('admin.index')
@section('admin')
<div class="container">
<form method="post" action="/addsecretaryaction" ecntype="multipart/form-data">
    @csrf
    <div class="row">
    <center><h2 class="mb-4">Secretary Registeration</h2></center>
    <div class="col-sm-6">
        <label for="" class="form-label"><h6>NAME</h6></label>
        <input type="text" class="form-control" name="name" placeholder="Enter Here...">
    </div>
    <div class="mb-3 col-sm-6">
    <label for="district"><h6>Panchayth</h6></label>
    <select class="form-control" name="panchayth" id=Panchayth class="form-control">
    <option value="" default>Select Panchayth</option>
        @foreach($gp as $value)
        <option value="{{$value->name}}">{{$value->name}} </option>
        @endforeach
    </select>
    </div>
    <div class="col-sm-6">
        <label for="" class="form-label"><h6>E-mail</h6></label>
        <input type="email" class="form-control" name="email" id="" placeholder="Enter Here...">
    </div>
    <div class="mb-3 col-sm-6">
        <label for="" class="form-label"><h6>Phone Number</h6></label>
        <input type="number" class="form-control" name="phno" id="" placeholder="Enter Here...">
    </div>
    <div class="mb-3 col-sm-6">
        <label for="" class="form-label"><h6>Username</h6></label>
        <input type="text" class="form-control" name="username" placeholder="Enter Here...">
    </div>
    <div class="mb-3 col-sm-6">
        <label for="" class="form-label"><h6>password</h6></label>
        <input type="password" class="form-control" name="password"id="" placeholder="Enter Here...">
</div>
<div class="col-sm-3"></div>
        <div class="mb-3 col-sm-6">
        <input type="submit" value="submit" class="btn btn-block btn-danger btn-lg">

    </div>
    <div class="col-sm-3"></div>
    </div>
</form>   
</div>   
@endsection