@extends('user.forms.formsheader')
@section('indexbody')
<section>
    <div class="container">
        <center>
            <h2>APPLICATION FOR DEATH REGISTRATION</h2>
        </center>
        <br><br><br>
        <form method="post" action="/deathcertificateaction" enctype="multipart/form-data">
            @csrf <div class="row">
                <div class="col-sm-6">
                    <label for="">Applicant NAME</label>
                    <input type="text" name="name" id="" class="form-control">
                </div>
                <div class="col-sm-6">
                    <label for="">DATE OF DEATH</label>
                    <input type="text" name="dob" id="" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <label for="">FATHER NAME</label>
                    <input type="text" name="fname" id="" class="form-control">
                </div>
                <div class="col-sm-4">
                    <label for="">MOTHER NAME</label>
                    <input type="text" name="mname" id="" class="form-control">
                </div>
                <br><br>
                <div class="col-sm-3">
                    <label for="">GENDER</label>
                    <br><br>
                    Male<input type="radio" value="male" name="gender">
                    Female<input type="radio" value="female" name="gender">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <label for="">APPLICATION DATE</label>
                    <input type="date" name="appdate" id="" class="form-control">
                </div>
                <div class="col-sm-6">
                    <label for="">MEDICAL CERTIFICATE</label>
                    <input type="file" name="bill" id="" class="form-control">
                </div>
                <br><br>
                <div class="row">

                    <div class="col-sm-6">
                        <label for="">Ration card</label>
                        <input type="file" name="rcard" id="" class="form-control">
                    </div>
                    <div class="col-sm-6">
                        <label for="">BIRTH OR SSLC CERTIFICATE</label>
                        <input type="file" name="certificate" id="" class="form-control">
                    </div>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-sm-6">
                    <input type="submit" value="Apply" class="btn btn-block btn-danger">
                </div>
                <div class="col-sm-6">
                    <input type="Reset" value="Clear" class="btn btn-block btn-danger">
                </div>
            </div>
        </form>
    </div>
</section>
@endsection