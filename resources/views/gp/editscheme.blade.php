@extends('gp.gpindex')
@section('gpindex')
<div>
    @foreach($scheme as $value)
    <div class="container">
        <h1>Edit Schemes</h1>

        <form action="/gp/editschemeaction/{{$value->id}}" method="post">
            @csrf
            <div class="row">
                <div class="col-sm-6">
                    <label for="" class="form-label">
                        <h6>NAME</h6>
                    </label>
                    <input type="text" class="form-control" name="name" value="{{$value->name}}">
                </div>
                <div class="col-sm-6">
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
                <textarea name="about" class="form-control" rows="10" value="{{$value->about}}">{{$value->about}}</textarea>
            </div>
            <br><br>
            <div class="row">
                <div class="mb-3 col-sm-4">
                    <label for="" class="form-label">
                        <h6>Apply date</h6>
                    </label>
                    <input type="date" class="form-control" name="adate" id="" value="{{$value->adate}}">
                </div>
                <div class="mb-3 col-sm-4">
                    <label for="" class="form-label">
                        <h6>End date</h6>
                    </label>
                    <input type="date" class="form-control" name="enddate" value="{{$value->enddate}}">
                </div>
                <div class="mb-3 col-sm-4">
                    <label for="" class="form-label">
                        <h6>Status</h6>
                    </label>
                    <input type="text" class="form-control" name="status" id="" value="{{$value->status}}">
                </div>
            </div>
            <br><br><br>
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    <input type="submit" value="edit" class="btn btn-danger btn-block">
                </div>
                <div class="col-sm-3"></div>
            </div>
        </form>
    </div>
    @endforeach
</div>
@endsection