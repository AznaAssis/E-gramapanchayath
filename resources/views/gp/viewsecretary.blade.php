@extends('gp.gpindex')
@section('gpindex')
<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary text-center rounded p-4">
        @foreach($gp as $value)
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h3 class="mb-0" >{{$value->name}}</h3>
        </div>
        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered border-danger table-hover mb-0">
                
                <tr class="text-white"><th scope="col">ID</th>:<td>{{$value->id}}</td></tr>
                <tr class="text-white"><th scope="col">NAME</th>:<td>{{$value->name}}</td></tr>
                <tr class="text-white"><th scope="col">email</th>:<td>{{$value->email}}</td></tr>
                <tr class="text-white"><th scope="col">Phone Number</th>:<td>{{$value->phno}}</td></tr>
                <tr class="text-white"><th scope="col">username</th>:<td>{{$value->username}}</td></tr>
                <tr class="text-white"><th scope="col">panchayath</th>:<td>{{$value->panchayth}}</td></tr>
            </tbody>
            </table>
        </div>
        @endforeach
    </div>
</div>
@endsection
 