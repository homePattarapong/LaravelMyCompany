@extends('layouts.master_template')
@section('title') Department Manager : ข้อมูลรายชื่อผู้จัดการแผนก @endsection
@section('content')

<div class="jumbotron">
    <div class="container">
        <h1 class="display-3">Department Manager</h1>
        <p class="lead">ข้อมูลรายชื่อผู้จัดการแผนก</p>
        <hr class="my-2">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi illum nesciunt non, mollitia cum sit! Qui veniam repellendus ipsum at, sunt obcaecati corporis aspernatur fugit numquam facere delectus amet tempora.</p>
    </div>
</div>

<div class="container">
    <table class="table table-bordered">
        <thead>
            <tr class="bg-primary text-white text-center">
                <th>ลำดับ</th>
                <th>รหัสพนักงาน</th>
                <th>แผนก</th>
                <th>ชื่อ</th>
                <th>นามสกุล</th>
                <th>เพศ</th>
                <th>เริ่มงาน</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dep_managers as $key => $dm)
                <tr>
                    <td class="text-center">{{$key+1}}</td>
                    <td>{{$dm->emp_no}}</td>
                    <td>{{$dm->dept_no}}</td> 
                    <td>{{$dm->emp_relate->first_name}}</td> 
                    <td>{{$dm->emp_relate->last_name}}</td>
                    <td>{{$dm->emp_relate->gender}}</td>
                    <td>{{$dm->emp_relate->hire_date}}</td>
                    <td class="text-center">
                      
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
