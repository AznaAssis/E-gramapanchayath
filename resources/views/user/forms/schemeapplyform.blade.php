@extends('user.forms.formsheader')
@section('indexbody')
<br><br><br>
<section>
    <div class="container">
        <center>
            @foreach($scheme as $value)
            <form action="/schemeapllyaction/{{$value->id}}" method="post">
                @csrf
                <div class="row">
                    <div class="col-sm-6">
                        <label for="">Scheme Name</label>
                        <input type="hidden" name="sname" value="{{$value->name}}">
                    </div>
                    <div class="col-sm-6">
                        <label>{{$value->name}}</label>
                    </div>
                </div><br><br>
                <div class="row">
                    <div class="col-sm-6">
                        <label for="">Scheme amount</label>
                        <input type="hidden" name="samount" value="{{$value->amount}}">
                    </div>
                    <div class="col-sm-6">
                        <label>{{$value->amount}}</label>
                    </div>
                </div><br><br>
                <div class="row">
                    <div class="col-sm-6">
                        <label for="">Application date</label>
                        <input type="hidden" name="date" value="">
                    </div>
                    <div class="col-sm-6">
                        <input type="date" name="date" class="form-control" value="">
                    </div>
                </div><br><br>
                @foreach($user as $val)
                <div class="row">
                    <div class="col-sm-6">
                        <label for="">Apllicant Id</label>
                        <input type="hidden" name="applicantid" value="{{$val->id}}">
                    </div>
                    <div class="col-sm-6">
                        <label>{{$val->id}}</label>
                    </div>
                </div><br><br>
                <div class="row">
                    <div class="col-sm-6">
                        <label for="">applicant Name</label>
                        <input type="hidden" name="anamae" value="{{$val->name}}">
                    </div>
                    <div class="col-sm-6">
                        <label>{{$val->name}}</label>
                    </div>
                </div><br><br>
                @endforeach
                <div class="row">
                    <div class="col-sm-6">
                        <center><input type="clear" class="btn btn-block btn-danger" value="reset"></center>
                    </div>
                    <div class="col-sm-6">
                        <center><input type="submit" class="btn btn-block btn-danger" value="apply"></center>
                    </div>
                </div>
            </form>
            @endforeach
        </center>
    </div>
</section>
@endsection