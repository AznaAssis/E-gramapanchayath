@extends('gp.gpindex')
@section('gpindex')
<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h3 class="mb-0">VIEW USERS</h3>
            <a href="">Show All</a>
        </div>
        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
                    <tr class="text-white">
                        <th scope="col">ID</th>
                        <th scope="col">Scheme Name</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Applicant Name</th>
                        <th scope="col">Applicant Email</th>
                        <th scope="col">Applicant Phone Number</th>
                        <th scope="col">Proof 1</th>
                        <th scope="col">Proof 2</th>
                        <th scope="col">Proof 3</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>
@endsection