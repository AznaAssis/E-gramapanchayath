@extends('gp.gpindex')
@section('gpindex')
<div class="container">

    <div class="row">
        <div class="col-sm-4">
            <form method="post" action="/gp/addsecretaryaction" ecntype="multipart/form-data">
                @csrf
                <div class="row">
                    <center>
                        <h2 class="mb-4">Secretary Registeration</h2>
                    </center>
                    <div class="col-sm-12">
                        <label for="" class="form-label">
                            <h6>NAME</h6>
                        </label>
                        <input type="text" class="form-control" name="name" placeholder="Enter Here...">
                    </div>
                    <div class="mb-3 col-sm-12">
                        <label for="district">
                            <h6>Panchayth</h6>
                        </label>
                        <select class="form-control" name="panchayth" id=Panchayth class="form-control">
                            <option value="" default>Select Panchayth</option>
                            @foreach($gp as $value)
                            <option value="{{$value->name}}">{{$value->name}} </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-sm-12">
                        <label for="" class="form-label">
                            <h6>E-mail</h6>
                        </label>
                        <input type="email" class="form-control" name="email" id="" placeholder="Enter Here...">
                    </div>
                    <div class="mb-3 col-sm-12">
                        <label for="" class="form-label">
                            <h6>Phone Number</h6>
                        </label>
                        <input type="number" class="form-control" name="phno" id="" placeholder="Enter Here...">
                    </div>
                    <div class="mb-3 col-sm-12">
                        <label for="" class="form-label">
                            <h6>Username</h6>
                        </label>
                        <input type="text" class="form-control" name="username" placeholder="Enter Here...">
                    </div>
                    <div class="mb-3 col-sm-12">
                        <label for="" class="form-label">
                            <h6>password</h6>
                        </label>
                        <input type="password" class="form-control" name="password" id="" placeholder="Enter Here...">
                    </div>
                    <div class="col-sm-3"></div>
                    <div class="mb-3 col-sm-6">
                        <input type="submit" value="ADD SECRETARY" class="btn btn-block btn-danger btn-lg">

                    </div>
                    <div class="col-sm-3"></div>
                </div>
            </form>
        </div>
        <div class="col-sm-8">
            <center>
                <h2 class="mb-4">Secretary</h2>
            </center>
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">

                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">

                            @foreach($secretary as $value)

                            <tr>
                                <th scope="col">ID</th>
                                <td>{{$value->id}}</td>
                            </tr>
                            <tr>
                                <th scope="col">Name</th>
                                <td>{{$value->name}}</td>
                            </tr>
                            <tr>
                                <th scope="col">Phone Number</th>
                                <td>{{$value->phno}}</td>
                            </tr>
                            <tr>
                                <th scope="col">Username</th>
                                <td>{{$value->username}}</td>
                            </tr>
                            <tr>
                                <th scope="col">Panchayth</th>
                                <td>{{$value->panchayth}}</td>
                            </tr>
                            <tr>
                                <td><a class="btn btn-sm btn-primary" href="/gp/editsecretary/{{$value->id}}">Edit</a></td>
                                <td><a class="btn btn-sm btn-primary" href="/gp/deletesecretary/{{$value->id}}">DELETE</a></td>
                            </tr>
                            @endforeach

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection