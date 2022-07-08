@extends('secretary.index')
@section('secretary')
<section>
    <div class="container">
        <div class="table">
            <h1>
                <center><b> View Birth Cerificate Application</b></center>
            </h1>
            <br><br>
            <table class="table table-hover table-dark">
                <tr>
                    <th>ID</th>
                    <th>User ID</th>
                    <th> Status</th>
                    <th>More Details </th>
                    <th>Verification</th>
                </tr>
                @foreach($birth as $value)
                <tr>
                    <td>{{$value->id}}</td>
                    <td>{{$value->userid}}</td>
                    <td>{{$value->status}}</td>
                    <td><a href="/morebirth/{{$value->id}}">View</a></td>
                    <td><a href="/verifyb/{{$value->id}}">Verify</a></td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</section>
@endsection