@extends('user.userheader')
@section('indexbody')

<section>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px; visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <h1 class="text-primary">CERTIFICATES</h1>
            </div>
            <div class="row g-4">
                @foreach($certificate as $value)
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <div class="service-item rounded overflow-hidden">
                        <center><img class="img-fluid" height="200px" width="200px" src="/img/cicon.jpg"></center>
                        <div class="position-relative p-4 pt-0">
                            <center>
                                <h4 class="mb-3">{{$value->category}}</h4>
                            </center>
                            <center>
                                <a class="small fw-medium" href="/view/{{$value->category}}">View certificate<i class="fa fa-arrow-right ms-2"></i></a>
                            </center>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection