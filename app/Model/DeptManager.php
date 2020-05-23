<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class DeptManager extends Model
{
    protected $table = 'dept_manager';
    protected $primaryKey = 'emp_no';

    // Create Relation : Employees Table
    public function emp_relate(){
        return $this->hasOne('App\Model\Employee','emp_no');
    }

    // Create Relation : Departments Table
    public function dep_relate(){
        return $this->belongsTo('App\Model\Department','dept_no');
    }
}
