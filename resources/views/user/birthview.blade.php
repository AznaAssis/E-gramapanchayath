@extends('user.userheader')
@section('indexbody')
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <center>
                    <h1> View Birth certificate status</h1>
                </center>
                <div class="row">
                    <table class="table table-hover table-warning">
                        @foreach($birth as $value)
                        <center>
                            <tr>
                                <th>Application ID</th>
                                <td>{{$value->id}}</td>
                            </tr>
                        </center>
                        <center>
                            <tr>
                                <th>GP ID</th>
                                <td>{{$value->gpid}}</td>
                            </tr>
                        </center>
                        <center>
                            <tr>
                                <th>USER ID</th>
                                <td>{{$value->userid}}</td>
                            </tr>
                        </center>
                        <center>
                            <tr>
                                <th>Status</th>
                                <td>{{$value->status}}</td>
                            </tr>
                        </center>
                        <center>
                            @if($value->status=="approve")
                            <tr>
                                <th>download</th>
                                <td><a href="">download</a></td>
                            </tr>
                            @endif
                        </center>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
        </div>
    </div>
    </div>
</section>
@endsection