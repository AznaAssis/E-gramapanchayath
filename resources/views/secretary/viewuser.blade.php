@extends('secretary.index')
@section('secretary')
<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h3 class="mb-0">VIEW USERS</h3>
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
                        <th scope="col">Gender</th>
                        <th scope="col">AGE</th>
                        <th scope="col">Ward No.</th>
                        <th scope="col">House name</th>
                        <th scope="col">Street</th>
                        <th scope="col">Post Office</th>
                        <th scope="col">pincode</th>
                        <th scope="col">Job</th>
                        <th scope="col">marital Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($user as $value)
                    <tr>
                        <td>{{$value->id}}</td>
                        <td>{{$value->name}}</td>
                        <td>{{$value->email}}</td>
                        <td>{{$value->phno}}</td>
                        <td>{{$value->gender}}</td>
                        <td>{{$value->age}}</td>
                        <td>{{$value->wards}}</td>
                        <td>{{$value->housename}}</td>
                        <td>{{$value->streetaddress}}</td>
                        <td>{{$value->pfname}}</td>
                        <td>{{$value->pincode}}</td>
                        <td>{{$value->job}}</td>
                        <td>{{$value->marital_status}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection