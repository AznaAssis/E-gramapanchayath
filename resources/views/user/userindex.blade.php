@extends('user.userheader')
@section('indexbody')

<section>
    <div>
        @foreach($user as $value)
        <center>
            <h1 style="background-color:lightgrey;padding:200px;text-transform:uppercase">
                <b>Hello {{$value->name}}</b>
            </h1>
        </center>
        @endforeach
    </div>
</section>




@endsection