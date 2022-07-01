@extends('gp.gpindex')
@section('gpindex')
<div>
    @foreach($scheme as $value)
    <div class="container">
        <h1>Edit Schemes</h1>

        <form action="/editschemeaction/{{$value->id}}" method="post">
            @csrf
            <div class="row">
                <div class="col-sm-12">
                    <label for="" class="form-label">
                        <h6>NAME</h6>
                    </label>
                    <input type="text" class="form-control" name="name" value="{{$value->name}}">
                </div>
                <div class="col-sm-12">
                    <label for="" class="form-label">
                        <h6>Loan Amount</h6>
                    </label>
                    <input type="number" class="form-control" name="amount" value="{{$value->amount}}">
                </div>
            </div>
            <br><br>
            <div class="mb-3 col-sm-12">
                <label for="" class="form-label">
                    <h6>About Scheme</h6>
                </label>
                <textarea name="about" class="form-control" value="{{$value->about}}">{{$value->about}}</textarea>
            </div>
            <br><br>
            <div class="row">
                <div class="mb-3 col-sm-12">
                    <label for="" class="form-label">
                        <h6>Apply date</h6>
                    </label>
                    <input type="date" class="form-control" name="adate" id="" value="{{$value->adate}}">
                </div>
                <div class="mb-3 col-sm-12">
                    <label for="" class="form-label">
                        <h6>End date</h6>
                    </label>
                    <input type="date" class="form-control" name="enddate" value="{{$value->enddate}}">
                </div>
            </div>
            <br><br><br>
            <div class="row">
                <div class="col-sm-12">
                    <input type="submit" value="edit" class="btn btn-danger btn-block">
                </div>
            </div>
        </form>
    </div>
    @endforeach
</div>
@endsection