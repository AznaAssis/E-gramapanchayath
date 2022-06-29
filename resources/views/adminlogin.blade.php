@extends('index')
@section('indexbody')


    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary py-5">
        <div class="container py-5">
            <div class="row align-items-center py-4">
                <div class="col-md-6 text-center text-md-left">
                    <h1 class="mb-4 mb-md-0 text-primary text-uppercase">Admin Login</h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn btn-outline-primary" href="/">Home</a>
                        <i class="fas fa-angle-double-right text-primary mx-2"></i>
                        <a class="btn btn-outline-primary disabled" href="">Admin Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Start -->
    <section class="bg-form" >
        <div class="container ">
        <form method="post" action="/adminloginaction" class="text-white" style="padding-top:50px;padding-bottom:50px;">
        @csrf <div class="row">
                <div class="mb-3 col-sm-12">
                    <label for="" class="form-label"><h6>Username</h6></label>
                    <input type="text" class="form-control" name="username" placeholder="Enter Here...">
                </div>
                <div class="mb-3 col-sm-12">
                    <label for="" class="form-label"><h6>password</h6></label>
                    <input type="password" class="form-control" name="password" placeholder="Enter Here...">
                </div>
                <div class="col-sm-3"></div>
                <div class="mb-3 col-sm-6">
                    <input type="submit" value="Login" class="btn btn-block btn-danger btn-lg">
                </div>
                <div class="col-sm-3"></div>
            </div>
        </form>
        </div>
    </section>
  
@endsection

    