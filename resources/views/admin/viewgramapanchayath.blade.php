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
                        <th scope="col">Email</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Username</th>
                        <th scope="col">State</th>
                        <th scope="col">District</th>
                        <th scope="col">Block Panchayth</th>
                        <th scope="col">Thaluk</th>
                        <th scope="col">No.of Wards</th>
                        <th scope="col">No.of Population</th>
                        <th scope="col">No.of Schools</th>
                        <th scope="col">Image</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($gp as $value)
                    <tr>
                        <td>{{$value->id}}</td>
                        <td>{{$value->name}}</td>
                        <td>{{$value->email}}</td>
                        <td>{{$value->phno}}</td>
                        <td>{{$value->username}}</td>
                        <td>{{$value->state}}</td>
                        <td>{{$value->district}}</td>
                        <td>{{$value->bp}}</td>
                        <td>{{$value->taluk}}</td>
                        <td>{{$value->wards}}</td>
                        <td>{{$value->population}}</td>
                        <td>{{$value->schools}}</td>
                        <td><img src="/gp/{{$value->gpimage}}" height="50px"></td>
                        <td><a class="btn btn-sm btn-primary" href="/editgp/{{$value->id}}">Edit</a></td>
                        <td><a class="btn btn-sm btn-primary" href="/deletegp/{{$value->id}}">Delete</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <a class="btn btn-sm btn-primary" href="/addgaramapanchayath">ADD NEW</a>
</div>
@endsection