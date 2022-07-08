@extends('gp.gpindex')
@section('gpindex')
<div class="container">

    <div class="row">
        <div class="col-sm-12">
            <center>
                <h1>Add CATEGORY</h1>
            </center>
            <center>
                <form action="/gp/categoryaction" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-8">
                            <label for="" class="form-label">
                                <h6>CATEGORY NAME</h6>
                            </label>
                            <select type="text" class="form-control" name="category" >
                                <option value="" default>------  select one ------</option>
                                <option value="birth certificate">birth certificate</option>
                                <option value="death certificate">death certificate</option>
                                <option value="marriage(common)">marriage(common)</option>
                                <option value="marriage(Hindu)">marriage(Hindu)</option>
                                <option value="others">others</option>
                            </select>
                        </div>
                        <div class="col-sm-2"></div><br>
                    </div>
                    <div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-8">
                            <label for="" class="form-label">
                                <h6>CATEGORY DISCRIPTION</h6>
                            </label>
                            <textarea type="text" class="form-control" name="discription" rows="10" placeholder="Enter Here..."></textarea>
                        </div>
                        <div class="col-sm-2"></div>
                    </div>
                    <br><br><br>
                    <div class="row">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-6">
                            <input type="submit" value="ADD" class="btn btn-danger btn-block">
                        </div>
                        <div class="col-sm-3"></div>
                    </div>
                </form>
            </center>
        </div>
    </div>
    <br><br><br>
    <div class="row">
        <div class="col-sm-12">
            <center>
                <h1>VIEW CATEGORY</h1>
            </center>
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">

                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Discription</th>
                                    <th scope="col">panchayath_id</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($category as $value)
                                <tr>
                                    <td>{{$value->id}}</td>
                                    <td>{{$value->category}}</td>
                                    <td>{{$value->discription}}</td>
                                    <td class="content-align-center">{{$value->gpid}}</td>
                                    <td><a class="btn btn-sm btn-primary" href="/gp/editcategory/{{$value->id}}">EDIT</a></td>
                                    <td><a class="btn btn-sm btn-primary" href="/gp/deletecategory/{{$value->id}}">DELETE</a></td>
                                    <td><a class="btn btn-sm btn-primary" href="/gp/viewcertificate/{{$value->category}}">View Applications</a></td>
                                    @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection