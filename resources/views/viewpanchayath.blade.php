@extends('indexheader')
@section('indexbody')
<section class=bg-light>
    <div class="container" style="padding-bottom:40px;padding-top:20px">
        
        <div class="row" style="padding-bottom:40px;padding-top:20px">
        @foreach($gp as $value)
            <div class="col-sm-4 "style="padding-bottom:30px;padding-top:30px" >
                <div class="view" >
                    <center><img src="/gp/{{$value->gpimage}}" height="200px"></center>
                    <div style="padding-top: 15px;">
                    <center>
                        <h5 >{{$value->name}}</h5>
                        <h5 >population: {{$value->population}}</h5>
                    </center>
                    </div>
                    <br>
                    <center> <button class="btn btn-dark btn-block"><a href="/viewgp/{{$value->id}}">VIEW SCHEMES</a></button></center>
                </div>
            </div>
        @endforeach
        </div>
    </div>
</section>
@endsection