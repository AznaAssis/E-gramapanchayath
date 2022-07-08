@extends('secretary.index')
@section('secretary')
<section>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1>
                        <center><b> SCHEMES APPLICATIONS</b></center>
                    </h1>
                    <br><br><br><br>
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
                            <td><a href="/verifys/{{$value->id}}">Verify</a></td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection