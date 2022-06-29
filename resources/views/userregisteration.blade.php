@extends('index')
@section('indexbody')


    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary py-5">
        <div class="container py-5">
            <div class="row align-items-center py-4">
                <div class="col-md-6 text-center text-md-left">
                    <h1 class="mb-4 mb-md-0 text-primary text-uppercase">User Registration</h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn btn-outline-primary" href="/">Home</a>
                        <i class="fas fa-angle-double-right text-primary mx-2"></i>
                        <a class="btn btn-outline-primary disabled" href="">User Registration</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Start -->
    <section class="bg-form
    
    
    
    ">
        <div class="container ">
        <form method="post" action="/useraction" class="text-white">
            @csrf
            <div class="row">
                <div class="col-sm-6">
                    <label for="" class="form-label"><h6>NAME</h6></label>
                    <input type="text" class="form-control" name="name" placeholder="Enter Here...">
                </div>
                <div class="col-sm-6">
                    <label for="" class="form-label"><h6>E-mail</h6></label>
                    <input type="email" class="form-control" name="email"  placeholder="Enter Here...">
                </div>
                <div class="mb-3 col-sm-4">
                    <label for="" class="form-label"><h6>Phone Number</h6></label>
                    <input type="number" class="form-control" name="phno"  placeholder="Enter Here...">
                </div>
                <div class="mb-3 col-sm-4">
                    <label for="" class="form-label"><h6>Username</h6></label>
                    <input type="text" class="form-control" name="username" placeholder="Enter Here...">
                </div>
                <div class="mb-3 col-sm-4">
                    <label for="" class="form-label"><h6>password</h6></label>
                    <input type="password" class="form-control" name="password" placeholder="Enter Here...">
                </div>
                <div class="col-sm-4">
                    <label for="" class="form-label"><h6>Gender</h6></label><br>
                    Male <input type="radio"  name="gender" value="male" >
                    Female <input type="radio" name="gender" value="female" >
                    Others <input type="radio"  name="gender" value="others">
                </div>
                <div class="mb-3 col-sm-4">
                    <label for="" class="form-label"><h6>Year of Birth</h6></label>
                    <select class="form-control" name="yob" id="yob" class="form-control">
                        <option value="">-- select one -- </option>
                    </select>
                   
                </div>
                     <div class="mb-3 col-sm-4">
                    <label for="" class="form-label"><h6>AGE</h6></label>
                    <input type="" class="form-control" name="age" id="age">
                </div>
                <div class="mb-3 col-sm-4">
                    <label for="" class="form-label"><h6>Nationality</h6></label>
                    <input type="text" class="form-control" name="nationality" placeholder="Enter Here...">
                </div>
                <div class="mb-3 col-sm-4">
                    <label for=""><h6>state</h6></label>
                    <select class="form-control" name="state" id="state" class="form-control">
                        <option value="" default>Select State</option>
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
                <div class="mb-3 col-sm-4">
                    <label for="district"><h6>District</h6></label>
                    <select class="form-control" name="district" id=district class="form-control">
                        <option value="">-- select one -- </option>
                    </select>
                </div>
                <div class="mb-3 col-sm-6">
                    <label for="district"><h6>Panchayath name</h6></label>
                    <select class="form-control" name="panchayth" id=panchayth class="form-control">
                    <option value="" default>Select Panchayth</option>
        @foreach($gp as $value)
        <option value="{{$value->name}}">{{$value->name}} </option>
        @endforeach
    </select>
                    </select>
                </div>
                <div class="mb-3 col-sm-6">
                    <label for="" class="form-label"><h6>House name/Number</h6></label>
                    <input type="text" class="form-control" name="housename" placeholder="Enter Here...">
                </div>
                <div class="mb-3 col-sm-4">
                    <label for="" class="form-label"><h6>Street Name</h6></label>
                    <input type="text" class="form-control" name="streetaddress" placeholder="Enter Here...">
                </div>
                <div class="mb-3 col-sm-4">
                    <label for="" class="form-label"><h6>Post Office Name</h6></label>
                    <input type="text" class="form-control" name="pfname" placeholder="Enter Here...">
                </div>
                <div class="mb-3 col-sm-4">
                    <label for="" class="form-label"><h6>Pincode</h6></label>
                    <input type="text" class="form-control" name="pincode" placeholder="Enter Here...">
                </div>
                <div class="col-sm-"></div>
                <div class="mb-3 col-sm-4">
                    <label for="" class="form-label"><h6>Ward Number</h6></label>
                    <input type="number" class="form-control" name="wards" placeholder="Enter Here...">
                </div>
                <div class="mb-3 col-sm-4">
                    <label for="" class="form-label"><h6>Job</h6></label>
                    <input type="text" class="form-control" name="job" placeholder="Enter Here...">
                </div>
                <div class="mb-3 col-sm-4">
                <label for="" class="form-label"><h6>Marital Status</h6></label>
                    <select name="marital_status" class="form-control" id="marital_status">
                        <option value="">-Select one--</option>
                        <option value="Single">Single</option>
                        <option value="Married">Married</option>
                    </select>
                </div>
                <div class="col-sm-3"></div>
                <div class="mb-3 col-sm-6">
                    <input type="submit" value="Register" class="btn btn-block btn-danger btn-lg">
                </div>
                <div class="col-sm-3"></div>
            </div>
        </form>
        </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

    <script>
                $(function () {
        //Reference the DropDownList.
        var ddlYears = $("#yob");
 
        //Determine the Current Year.
        var currentYear = (new Date()).getFullYear();
 
        //Loop and add the Year values to DropDownList.
        for (var i = 1950; i <= currentYear; i++) {
            var option = $("<option />");
            option.html(i);
            option.val(i);
            ddlYears.append(option);
        }
    });
        
        $("#yob").change(function(){

            // alert('hi');
            var date = $(this).val();
            let now = new Date()
            let today = now.getFullYear()
           // console.log(formatted_date)
            // alert(now);
            var diff = Math.abs(today - date );
            // alert(diff)
            $("#age").val(diff);
        });
    </script>
@endsection

    