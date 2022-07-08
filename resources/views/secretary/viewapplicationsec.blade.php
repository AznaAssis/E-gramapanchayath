@extends('secretary.index')
@section('secretary')
<section>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-5">
                    <h1>
                        <center><b> CERTIFICATES</b></center>
                    </h1>
                    <br><br><br><br>
                    <table class="table table-hover table-dark">
                        <tr>
                            <th>ID</th>
                            <th>CATEGORY NAME</th>
                        </tr>
                        @foreach($category as $value)
                        <tr>
                            <td>{{$value->id}}</td>
                            <td><a href="/viewsec/{{$value->category}}">{{$value->category}}</a></td>
                        </tr>
                        @endforeach
                    </table>
                </div>
                <div class="col-sm-3"></div>
            </div>
        </div>
    </div>
</section>
@endsection