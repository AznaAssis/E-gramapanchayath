@extends('gp.gpindex')
@section('gpindex')
<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">VIEW CERTIFICATE CATEGORY</h6>
            <a href="">Show All</a>
        </div>
        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
                    <tr class="text-white">
                        <th scope="col">ID</th>
                        <th scope="col">CATEGORY NAME</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($category as $value)
                    <tr>
                        <td>{{$value->id}}</td>
                        <td>{{$value->category}}</td>
                        <td><a class="btn btn-sm btn-primary" href="/editcategory/{{$value->id}}">EDIT</a></td>
                        <td><a class="btn btn-sm btn-primary" href="/deletecategory/{{$value->id}}">Delete</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <a class="btn btn-sm btn-primary" href="/addcatecategory">ADD NEW</a>
</div>
@endsection