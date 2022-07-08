

@extends('user.forms.formsheader')
@section('indexbody')
<section>
        <div class="container">
            <center> <h2>MARRIAGE CERTIFICATE REGISTRATION</h2></center>
            <br><br><br><form action="/marrigecertificateaction" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-sm-4"></div>
                    <div class="col-sm-6">
                        <select name="mtype" id="" class="form-control">
                            <option value="">SELECT TYPE</option>
                            <option value="common">Common</option>
                            <option value="hindu">Hindu</option>
                        </select>
                    </div>
                </div>
                <br><br><br><br>
                <div class="row">
                    <div class="col-sm-4">
                        <label for="">PHOTO </label>
                    </div>
                    <div class="col-sm-4">
                        <input type="file" name="hphoto" id="" class="form-control">
                    </div>
                    <div class="col-sm-4">
                        <input type="file" name="wphoto" id="" class="form-control">
                    </div>
                </div><br><br>
                <div class="row">
                    <div class="col-sm-4">
                        <label for="">name</label>
                    </div>
                    <div class="col-sm-4">
                        <input type="text" name="hname" id="" class="form-control">
                    </div>
                    <div class="col-sm-4">
                        <input type="text" name="wname" id="" class="form-control">
                    </div>
                </div><br><br>
                <div class="row">
                    <div class="col-sm-4">
                        <label for="">Religion</label>
                    </div>
                    <div class="col-sm-4">
                        <input type="text" name="hrelegion" id="" class="form-control">
                    </div>
                    <div class="col-sm-4">
                        <input type="text" name="wrelegion" id="" class="form-control">
                    </div>
                </div><br><br>
                <div class="row">
                    <div class="col-sm-4">
                        <label for="">cast</label>
                    </div>
                    <div class="col-sm-4">
                        <input type="text" name="hcast" id="" class="form-control">
                    </div>
                    <div class="col-sm-4">
                        <input type="text" name="wcast" id="" class="form-control">
                    </div>
                </div><br><br>
                <div class="row">
                    <div class="col-sm-4">
                        <label for="">Age</label>
                    </div>
                    <div class="col-sm-4">
                        <input type="number" name="hage" id="" class="form-control">
                    </div>
                    <div class="col-sm-4">
                        <input type="number" name="wage" id="" class="form-control">
                    </div>
                </div><br><br>
                <div class="row">
                    <div class="col-sm-4">
                        <label for="">Occupation</label>
                    </div>
                    <div class="col-sm-4">
                        <input type="text" name="hoccupation" id="" class="form-control">
                    </div>
                    <div class="col-sm-4">
                        <input type="text" name="woccupation" id="" class="form-control">
                    </div>
                </div><br><br>
                <div class="row">
                    <div class="col-sm-4">
                        <label for="">Name ID proof</label>
                    </div>
                    <div class="col-sm-4">
                       <select name="hidproof" class="form-control">
                       <option value="adhar card">Adhar card</option>
                        <option value="voter id card">Voter Id card</option>
                        <option value="pancard">Pancard</option>
                       </select>
                    </div>
                    <div class="col-sm-4">
                    <select name="widproof" class="form-control">
                       <option value="adhar card">Adhar card</option>
                        <option value="voter id card">Voter Id card</option>
                        <option value="pancard">Pancard</option>
                       </select>
                    </div>
                </div><br><br>
                <div class="row">
                    <div class="col-sm-4">
                        <label for=""></label>ID proof</label>
                    </div>
                    <div class="col-sm-4">
                        <input type="file" name="hidproof" id="" class="form-control">
                    </div>
                    <div class="col-sm-4">
                        <input type="file" name="widproof" id="" class="form-control">
                    </div>
                </div><br><br>
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