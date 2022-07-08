@extends('admin.index')
@section('admin')
<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">VIEW SCHEMES</h6>
            <a href="">Show All</a>
        </div>
        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
                    <tr class="text-white">
                        <th scope="col">ID</th>
                        <th scope="col">SCHEME NAME</th>
                        <th scope="col">DISCRIPTION</th>
                        <th scope="col">AMOUNT</th>
                        <th scope="col">START DATE</th>
                        <th scope="col">END DATE</th>
                        <th scope="col">PANCHAYATH ID</th>
                        <th scope="col">STATUS</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($schemes as $value)
                    <tr>
                        <center><td>{{$value->id}}</td></center>
                        <center><td>{{$value->name}}</td></center>
                        <td>{{$value->about}}</td>
                        <center><td>{{$value->amount}}</td></center>
                        <center><td>{{$value->adate}}</td></center>
                        <center><td>{{$value->enddate}}</td></center>
                        <center><td>{{$value->panchayath_id}}</td></center>
                        <center><td>{{$value->status}}</td></center>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection