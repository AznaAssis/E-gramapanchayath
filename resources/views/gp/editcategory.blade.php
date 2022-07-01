@extends('gp.gpindex')
@section('gpindex')
<div class="container">
    @foreach($category as $value)
    <form method="post" action="/editcategoryaction/{{$value->id}}" ecntype="multipart/form-data">
    @csrf
    <div class="row">
        <center><h2 class="mb-4">Edit CATEGORY</h2></center>
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <center><label for="" class="form-label"><h6>Category Name</h6></label></center>
            <input type="text" class="form-control" name="category" value="{{$value->category}}">
        </div>
        <div class="col-sm-2"></div>
        <div class="col-sm-3"></div>
        <div class="mb-3 col-sm-6"  style="padding-top:20px">
            <input type="submit" value="EDIT" class="btn btn-block btn-danger btn-lg">
        </div>
        <div class="col-sm-3"></div>
    </div>
    </form> 
    @endforeach  
</div>   
@endsection