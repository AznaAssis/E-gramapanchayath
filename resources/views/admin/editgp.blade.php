@extends('admin.index')
@section('admin')
<div class="container">
    @foreach($gp as $value)
<form method="post" action="/editgpaction/{{$value->id}}" enctype="multipart/form-data">
    <div class="row">
        @csrf
<center><h2 class="mb-4">Garamapanchayath Registeration</h2></center>

    <div class="col-sm-12">
        <label for="" class="form-label"><h6>NAME</h6></label>
        <input type="text" class="form-control" name="name" value="{{$value->name}}">
    </div>
    <div class="col-sm-6">
        <label for="" class="form-label"><h6>E-mail</h6></label>
        <input type="email" class="form-control" name="email" id="" value="{{$value->email}}">
    </div>
    <div class="mb-3 col-sm-6">
        <label for="" class="form-label"><h6>Phone Number</h6></label>
        <input type="number" class="form-control" name="phno" id=""value="{{$value->phno}}">
    </div>
    <div class="mb-3 col-sm-6">
        <label for="" class="form-label"><h6>Username</h6></label>
        <input type="text" class="form-control" name="username" value="{{$value->username}}">
    </div>
    <div class="mb-3 col-sm-6">
        <label for="" class="form-label"><h6>password</h6></label>
        <input type="password" class="form-control" name="password"   value="{{$value->password}}">
    </div>
    <div class="mb-3 col-sm-6">
    <label for=""><h6>state</h6></label>
    <select class="form-control" name="state" id="state" class="form-control">
                        <option value="{{$value->state}}" default>{{$value->state}}</option>
                        <option value="Andra Pradesh">Andra Pradesh</option>
                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                        <option value="Assam">Assam</option>
                        <option value="Bihar">Bihar</option>
                        <option value="Chhattisgarh">Chhattisgarh</option>
                        <option value="Goa">Goa</option>
                        <option value="Gujarat">Gujarat</option>
                        <option value="Haryana">Haryana</option>
                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                        <option value="Jharkhand">Jharkhand</option>
                        <option value="Karnataka">Karnataka</option>
                        <option value="Kerala">Kerala</option>
                        <option value="Madya Pradesh">Madya Pradesh</option>
                        <option value="Maharashtra">Maharashtra</option>
                        <option value="Manipur">Manipur</option>
                        <option value="Meghalaya">Meghalaya</option>
                        <option value="Mizoram">Mizoram</option>
                        <option value="Nagaland">Nagaland</option>
                        <option value="Orissa">Orissa</option>
                        <option value="Punjab">Punjab</option>
                        <option value="Rajasthan">Rajasthan</option>
                        <option value="Sikkim">Sikkim</option>
                        <option value="Tamil Nadu">Tamil Nadu</option>
                        <option value="Telangana">Telangana</option>
                        <option value="Tripura">Tripura</option>
                        <option value="Uttaranchal">Uttaranchal</option>
                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                        <option value="West Bengal">West Bengal</option>
                        <option disabled style="background-color:#aaa; color:#fff">UNION Territories</option>
                        <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                        <option value="Chandigarh">Chandigarh</option>
                        <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                        <option value="Daman and Diu">Daman and Diu</option>
                        <option value="Delhi">Delhi</option>
                        <option value="Lakshadeep">Lakshadeep</option>
                        <option value="Pondicherry">Pondicherry</option>
                      </select>
  </div>
  <div class="mb-3 col-sm-6">
    <label for="district"><h6>District</h6></label>
    <select class="form-control" name="district" id=district class="form-control">
        <option value="{{$value->district}}">{{$value->district}}</option>
    </select>
    </div>
    <div class="mb-3 col-sm-6">
        <label for="" class="form-label"><h6>Block Panchayth</h6></label>
        <input type="text" class="form-control" name="bp" value="{{$value->bp}}">
    </div>
    <div class="mb-3 col-sm-6">
        <label for="" class="form-label"><h6>Thaluk</h6></label>
        <input type="text" class="form-control" name="taluk" value="{{$value->taluk}}">
    </div>
    <div class="mb-3 col-sm-4">
        <label for="" class="form-label"><h6>No.of Wards</h6></label>
        <input type="number" class="form-control" name="wards" value="{{$value->wards}}">
    </div>
    
    <div class="mb-3 col-sm-4">
        <label for="" class="form-label"><h6>No.of Population</h6></label>
        <input type="number" class="form-control" name="population" value="{{$value->population}}">
    </div>
    <div class="mb-3 col-sm-4">
        <label for="" class="form-label"><h6>No.of Schools</h6></label>
        <input type="number" class="form-control" name="schools" value="{{$value->schools}}">
    </div>
    <div class="mb-3 col-sm-6">
        <label for="" class="form-label"><h6>No.of Hospitals</h6></label>
        <input type="number" class="form-control" name="hospitals" value="{{$value->hospitals}}">
    </div>
    <div class="mb-3 col-sm-6">
        <label for="" class="form-label"><h6>Image</h6></label>
        <input type="file" class="form-control" name="gpimage" value="{{$value->gpimage}}">
        <img src="/gp/{{$value->gpimage}}" height="50px">
    </div>
    <div class="col-sm-3"></div>
        <div class="mb-3 col-sm-6">
        <input type="submit" value="EDIT" class="btn btn-block btn-danger btn-lg">

    </div>
    <div class="col-sm-3"></div>
    </div>
    </div>
</form>  
@endforeach 
</div>                    
@endsection