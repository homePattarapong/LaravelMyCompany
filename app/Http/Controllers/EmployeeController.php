<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Load Model
use App\Model\DeptManager;
use App\Model\Employee;
use App\Model\Department;

class EmployeeController extends Controller
{
    public function view_deptmanager(){
        // $dep_manager = DeptManager::all();

        // $dep_manager = DeptManager::where('dept_no','=','d004')->first();

        // echo $dep_manager->emp_relate->first_name;
        // echo "<BR>";
        // echo $dep_manager->emp_relate->last_name;
        // echo "<BR>";
        // echo $dep_manager->emp_relate->gender;

        //  echo "<pre>";
        //  print_r($dep_manager);
        //  echo "</pre>";

        $dep_managers = DeptManager::paginate(10);
        //$dep_managers = DeptManager::where('dept_no','=','d004')->first();        
        
        return view('pages.deptmanager')->with('dep_managers',$dep_managers);

        
    }
}
