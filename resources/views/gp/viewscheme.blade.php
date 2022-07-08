@extends('gp.gpindex')
@section('gpindex')
<div class="container">
    

    <div class="row">
        <center>
            <label for="" class="form-label">
                <h2>VIEW SCHEME</h2>
            </label>
        </center>
        <div class="col-sm-12">
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">

                    </div>
                    <div class="table-responsive">
                    <table class="table table-hover table-dark">
                        <tr>
                            <th>ID</th>
                            <th>User ID</th>
                            <th>Apply date</th>
                            <th>Scheme Name</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        @foreach($scheme as $value)
                        <tr>
                            <td>{{$value->id}}</td>
                            <td>{{$value->userid}}</td>
                            <td>{{$value->date}}</td>
                            <td>{{$value->name}}</td>
                            <td>{{$value->status}}</td>
                            <td><a href="/approves/{{$value->id}}">Approve</a></td>
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