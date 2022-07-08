@extends('user.userheader')
@section('indexbody')

<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px; visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
            <h1 class="text-primary">SCHEMES</h1>
        </div>
        @foreach($scheme as $value)
        <div class="row g-4">
            <div class="col-md-12 col-lg-12 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <div class="service-item rounded overflow-hidden">
                    <center><img class="img-fluid" height="200px" width="200px" src="/img/icon.jpg"></center>
                    <div class="position-relative p-4 pt-0">
                        <center>
                            <h3 class="mb-3">{{$value->name}}</h3>
                        </center>
                        <center>
                            <h4>{{$value->amount}}/-</h4>
                        </center>
                        <center>
                            <p class="mb-3">{{$value->about}}</p>
                        </center>
                        <center>
                            <h4>Apply date   {{$value->adate}}</h4>
                        </center>
                        <center>
                            <h3 class="mb-3">End date {{$value->enddate}}</h3>
                        </center>
                        <center>
                            <h4>{{$value->status}}</h4>
                        </center>
                        <CENTER><a class="small fw-medium" href="/applyscheme/{{$value->id}}">Apply now<i class="fa fa-arrow-right ms-2"></i></a></CENTER>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection