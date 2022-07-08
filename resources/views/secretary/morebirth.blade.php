@extends('secretary.index')
@section('secretary')
<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary text-center rounded p-4">
        @foreach($birth as $value)
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h3 class="mb-0">{{$value->name}}</h3>
        </div>
        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered border-danger table-hover mb-0">

                <tr class="text-white">
                    <th scope="col">ID</th>:<td>{{$value->id}}</td>
                </tr>
                <tr class="text-white">
                    <th scope="col">Child Name</th>:<td>{{$value->childnname}}</td>
                </tr>
                <tr class="text-white">
                    <th scope="col">Father Name</th>:<td>{{$value->fathernname}}</td>
                </tr>
                <tr class="text-white">
                    <th scope="col">Mother Name</th>:<td>{{$value->mothername}}</td>
                </tr>
                <tr class="text-white">
                    <th scope="col">DOB</th>:<td>{{$value->dob}}</td>
                </tr>
                <tr class="text-white">
                    <th scope="col">Permenant Address</th>:<td>{{$value->permenantaddress}}</td>
                </tr>
                <tr class="text-white">
                    <th scope="col">Current Address</th>
                    <td>{{$value->currentaddress}}</td>
                </tr>
                <tr class="text-white">
                    <th scope="col">Gender</th>
                    <td>{{$value->gender}}</td>
                </tr>
                <tr class="text-white">
                    <th scope="col">Birth Place</th>
                    <td>{{$value->birthplace}}</td>
                </tr>
                <tr class="text-white">
                    <th scope="col">Application Date</th>
                    <td>{{$value->applicationdate}}</td>
                </tr>
                <tr class="text-white">
                    <th scope="col">Medical Bill</th>
                    <td><a href="/certificate/{{$value->bill}}">{{$value->bill}}</a></td>
                </tr>
                <tr class="text-white">
                    <th scope="col">Verify</th>
                    <td><a href="/verifyb/{{$value->id}}">Verify</a></td>
                </tr>

                </tbody>
            </table>
        </div>
        @endforeach
    </div>
</div>
@endsection