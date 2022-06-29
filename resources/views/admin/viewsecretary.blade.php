@extends('admin.index')
@section('admin')
<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">VIEW GRAMAPANACHAYATH</h6>
            <a href="">Show All</a>
        </div>
        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
                    <tr class="text-white">
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Username</th>
                        <th scope="col"> Panchayth</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($secretary as $value)
                    <tr>
                        <td>{{$value->id}}</td>
                        <td>{{$value->name}}</td>
                        <td>{{$value->email}}</td>
                        <td>{{$value->phno}}</td>
                        <td>{{$value->username}}</td>
                        <td>{{$value->panchayth}}</td>
                        <td><a class="btn btn-sm btn-primary" href="/deletesecretary/{{$value->id}}">Delete</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <a class="btn btn-sm btn-primary" href="/addsecretary">ADD NEW</a>
</div>
@endsection