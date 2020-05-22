<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class BasicController extends Controller
{
    // Function Home
    public function home(){
        return view('pages.home');
    }

    // Function About
    public function about(){
        return view('pages.about');
    }

    // Function Service
    public function service(){
        return view('pages.service');
    }

    // Function Contact
    public function contact(){
        return view('pages.contact');
    }

    // Function Login
    public function login(){
        return view('pages.login');
    }

    // Function Select Employee
    public function employees(){
        // $emp = DB::table('employees')->get();
        // $emp = DB::table('employees')->where('id',3)->get(['id','fullname','email']); // Query String : select id,fullname,email from employees where id = 3

        // $emp = DB::table('employees')->first();
        // $emp = DB::table('employees')->first(['fullname','email']);
        //  $emp = DB::table('employees')->find(2);
        //  $emp = DB::table('employees')
        //             ->where('id',3)
        //             ->where('age',22) 
        //             ->first();

        //  $emp = DB::table('employees')
        //             ->where('id',3)
        //             ->where('status',1) // AND
        //             ->orWhere('age',22) // OR
        //             ->first();

        // $emp = DB::table('employees')->count(); // นับจำนวนรายการใน Table
        // $emp = DB::table('employees')->max('age'); // หาจำนวนมากที่สุด
        // $emp = DB::table('employees')->min('age'); // หาจำนวนน้อยที่สุด
        // $emp = DB::table('employees')->avg('age'); // หาค่าเฉลี่ย
        // $emp = DB::table('employees')->where('id',3)->exists(); // หาว่ามีข้อมูลหรือไม่
        // if($emp){
        //     return "Data exists";
        // }else{
        //     return "Data not exists";
        // }

        // Raw Expressions
        // $emp = DB::select('SELECT * FROM employees'); 

        
        // OrderBy and Limit
        // $emp = DB::table('employees')->orderByDesc('id')->limit(1)->get();


        // dd($emp);
        // echo "<pre>";
        // print_r($emp);
        // echo "</pre>";

        ///// INSERT /////
        // $data_emp = array(
        //     'fullname' => 'Pattarapong Thammasatitayasuk',
        //     'gender' => 'Male',
        //     'email' => 'home.pattarapong@gmail.com',
        //     'tel' => '021234567',
        //     'age' => '37',
        //     'address' => '440/50 Chan Rd.,',
        //     'avartar' => 'noavartar.jpg',
        //     'status' => 1,
        // );

        // $emp = DB::table('employees')->insert($data_emp);
        // print_r($emp);

        ///// ส่งค่าไปยัง View /////            
        $emps = DB::table('employees')->get();
        // foreach ($emps as $emp) {
        //     echo "<b>".$emp->fullname."</b><BR><small>".$emp->email."</small><br><br>";
        // }
        
        return view('pages.employee')->with('emps',$emps); // สร้างตัวแปร แล้วก็ใส่ Data  

    }

}
