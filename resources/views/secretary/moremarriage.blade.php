@extends('secretary.index')
@section('secretary')
<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary text-center rounded p-4">
        @foreach($marriage as $value)
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h3 class="mb-0">{{$value->name}}</h3>
        </div>
        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered border-danger table-hover mb-0">

                <tr class="text-white">
                    <th scope="col">ID</th>:<td>{{$value->id}}</td>
                </tr>
                <tr class="text-white">
                    <th scope="col">Huband Name</th>:<td>{{$value->hname}}</td>
                </tr>
                <tr class="text-white">
                    <th scope="col">Wife Name</th>:<td>{{$value->wname}}</td>
                </tr>
                <tr class="text-white">
                    <th scope="col">Husband Photo</th>:<td><a href="/certificate/{{$value->hphoto}}">{{$value->hphoto}}</a></td>
                </tr>
                <tr class="text-white">
                    <th scope="col">Wife Photo</th>:<td><a href="/certificate/{{$value->wphoto}}">{{$value->wphoto}}</a></td>
                </tr>
                <tr class="text-white">
                    <th scope="col">Husband Religion</th>:<td>{{$value->hrelegion}}</td>
                </tr>
                <tr class="text-white">
                    <th scope="col">Wife Religion</th>:<td>{{$value->wrelegion}}</td>
                </tr>
                <tr class="text-white">
                    <th scope="col">Husband Cast</th>:<td>{{$value->hcast}}</td>
                </tr>
                <tr class="text-white">
                    <th scope="col">Wife Cast</th>:<td>{{$value->wcast}}</td>
                </tr>
                <tr class="text-white">
                    <th scope="col">Husband Age</th>:<td>{{$value->hage}}</td>
                </tr>
                <tr class="text-white">
                    <th scope="col">Wife Age</th>:<td>{{$value->wage}}</td>
                </tr>
                <tr class="text-white">
                    <th scope="col">Husband Occupation</th>
                    <td>{{$value->hoccupation}}</td>
                </tr>
                <tr class="text-white">
                    <th scope="col">wife Occupation</th>
                    <td>{{$value->woccupation}}</td>
                </tr>
                <tr class="text-white">
                    <th scope="col">Husband ID Proof</th>
                    <td><a href="certificate/{{$value->hidproof}}">{{$value->hidproof}}</a></td>
                </tr>
                <tr class="text-white">
                    <th scope="col">Wife ID Proof</th>
                    <td><a href="certificate/{{$value->widproof}}">{{$value->widproof}}</a></td>
                </tr>
                <tr class="text-white">
                    <th scope="col">Verify</th>
                    <td><a href="/verifym/{{$value->id}}">Verify</a></td>
                </tr>

                </tbody>
            </table>
        </div>
        @endforeach
    </div>
</div>
@endsection