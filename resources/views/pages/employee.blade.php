@extends('layouts.master_template')
@section('title') Employee : รายชื่อพนักงาน @endsection
@section('content')

<div class="jumbotron">
    <div class="container">
        <h1 class="display-3">Employee list</h1>
        <p class="lead">Jumbo helper text</p>
        <hr class="my-2">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi illum nesciunt non, mollitia cum sit! Qui veniam repellendus ipsum at, sunt obcaecati corporis aspernatur fugit numquam facere delectus amet tempora.</p>
    </div>
</div>

<div class="container">
    <table class="table table-bordered">
        <thead>
            <tr class="bg-primary text-white text-center">
                <th>ID</th>
                <th>Fullname</th>
                <th>Gender</th>
                <th>Email</th>
                <th>Tel</th>
                <th>Age</th>
                <th>Address</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($emps as $emp)
                <tr>
                    <td class="text-center">{{$emp->id}}</td>
                    <td>{{$emp->fullname}}</td>
                    <td>{{$emp->gender}}</td>
                    <td>{{$emp->email}}</td>
                    <td>{{$emp->tel}}</td>
                    <td>{{$emp->age}}</td>
                    <td>{{$emp->address}}</td>
                    <td class="text-center">
                        @if ($emp->status == 1) 
                            <span class="badge badge-success">Enabled</span>
                        @else
                            <span class="badge badge-danger">Disabled</span>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
