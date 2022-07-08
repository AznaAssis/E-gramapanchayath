@extends('admin.index')
@section('admin')
<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary text-center rounded p-4">
        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered border-danger table-hover mb-0">
                <tr class="text-white">
                    <th scope="col">ID</th>
                    <th scope="col">NAME</th>
                    <th scope="col">email</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">username</th>
                    <th scope="col">panchayath</th>
                </tr>
                @foreach($secretary as $value)
                <tr class="text-white">

                    <td>{{$value->id}}</td>
                    <td>{{$value->name}}</td>
                    <td>{{$value->email}}</td>
                    <td>{{$value->phno}}</td>
                    <td>{{$value->username}}</td>
                    <td>{{$value->panchayth}}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection