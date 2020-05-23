@extends('layouts.master_template')
@section('title') Department Manager : ข้อมูลรายชื่อผู้จัดการแผนก @endsection
@section('content')

<div class="jumbotron pt-5 pb-3">
    <div class="container">
        <div class="row">
            <div class="col-md-1 p-2" style="height:100;display:inline-block;">
                <i class="fad fa-user-astronaut fa-6x text-success"></i>
            </div>
            <div class="col-md-11">
                <h1 class="display-4">รายชื่อผู้จัดการแผนก</h1>
                <p class="lead">Department Manager</p>
            </div>

        </div>
        
    </div>
</div>
<div class="container mb-5">
    <table class="table table-bordered table-striped">
        <thead>
            <tr class="bg-primary text-white text-center">
                <th>ลำดับ</th>
                <th>รหัสพนักงาน</th>
                <th>ชื่อ</th>
                <th>นามสกุล</th>
                <th>รหัสแผนก</th>
                <th>ชื่อแผนก</th>
                <th>เพศ</th>
                <th>เริ่มงาน</th>
                <th>สิ้นสุด</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dep_managers as $key => $dm)
                <tr>
                    <td class="text-center">{{$dep_managers->firstitem()+$key}}</td>
                    <td class="text-center">{{$dm->emp_no}}</td>
                    <td>{{$dm->emp_relate->first_name}}</td> 
                    <td>{{$dm->emp_relate->last_name}}</td>
                    <td class="text-center">{{$dm->dept_no}}</td> 
                    <td>{{$dm->dep_relate->dept_name}}</td> 
                    <td class="text-center">{{$dm->emp_relate->gender}}</td>
                    <td class="text-center">{{$dm->from_date}}</td>
                    <td class="text-center">
                        @if ($dm->to_date != "9999-01-01")
                            {{$dm->to_date}}
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$dep_managers->links()}}
</div>

@endsection
