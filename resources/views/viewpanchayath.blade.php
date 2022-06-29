
@extends('indexheader')
@section('indexbody')
<section>
    <div class="container">
        <div class="row">
            <div class="mb-3 col-sm-5">
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
            <div class="mb-3 col-sm-5">
                <label for="district"><h6>District</h6></label>
                <select class="form-control" name="district" id=district class="form-control">
                    <option value="">-- select one -- </option>
                </select>
            </div>
            <div class="mb-3 col-sm-2">
                <label for=""><h6>             </h6></label><br>
                <button type="submit" value="Search" class="btn btn-info ">Search</button>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
          <div class="col-md-4 mb-4">
          @foreach($gp as $value)
                    <div class="card border-0 mb-2" style="height:300px; width=50%">
                        <img class="card-img-top" src="/gp/{{$value->gpimage}}" height="200px" >
                        <div class="card-body bg-white p-4">
                            <div class="d-flex align-items-center mb-3">
                                <a class="btn " href=""></a>
                                <center>
                                <h5 class="m-56 ml-3 text-truncate">{{$value->name}}</h5>
                                </center>
                            </div>
                   <center> <button><a href="/viewgp/{{$value->id}}">More Details</a></button></center>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            
        </div>
    </div>
</section>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
<script>
    $(document).ready(function(){
		$("#district").on('change', function()
		{
			alert("hai")
			$.ajax({
				type:"post",
				url:"/viewgp",
				data:{
					id:$('#district').val()
				},
				success:function(result)
				{
					// // alert(result)
					// $('#sub').html(result);
				}
			});
		});
	});
</script>
@endsection