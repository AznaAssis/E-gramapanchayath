@extends('secretary.index')
@section('secretary')
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
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection