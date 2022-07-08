@extends('user.forms.formsheader')
@section('indexbody')
<section>
        <div class="container">
            <center> <h2>APPLICATION FOR BIRTH REGISTRATION</h2></center>
            <br><br><br>
            <form  method="post" action="/birthcertificateaction">
                <div class="row">
                    <div class="col-sm-6">
                        <label for="">CHILD NAME</label>
                        <input type="text" name="cname" id="" class="form-control">
                    </div>
                    <div class="col-sm-6">
                        <label for="">DATE OF BIRTH</label>
                        <input type="text" name="dob" id="" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <label for="">FATHER NAME</label>
                        <input type="text" name="fname" id="" class="form-control">
                    </div>
                    <div class="col-sm-6">
                        <label for="">MOTHER NAME</label>
                        <input type="text" name="mname" id="" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <label for="">PERMENANT ADDRESS</label>
                        <textarea name="paddress" class="form-control" rows="4"></textarea>
                    </div>
                    <div class="col-sm-4">
                        <label for="">CURRENT ADDRESS ADDRESS</label>
                        <textarea name="caddress" class="form-control" rows="4"></textarea>
                    </div><br><br><br>
                    <div class="col-sm-1">
                        <label for="">GENDER</label>
                    </div>
                    <div class="col-sm-3">
                        Male<input type="radio" name="gender">
                        Female<input type="radio" name="gender">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <label for="">Birth place</label>
                        <input type="text" name="birthplace" id="" class="form-control">
                    </div>
                    <div class="col-sm-4">
                        <label for="">APPLICATION DATE</label>
                        <input type="date" name="appdate" id="" class="form-control">
                    </div>
                    <div class="col-sm-4">
                        <label for="">HOSPITAL BILL</label>
                        <input type="file" name="bill" id="" class="form-control">
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