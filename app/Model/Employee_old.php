<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    // กรณีชื่อตารางไม่ตรงกับ Model
    // protected $table = 'tbl_employee';

    // กรณีที่ชื่อ primary key ไม่ใช่ id
    // protected $primaryKey = 'emp_id';

    // กรณีที่ไม่มีฟิลด์ created_at และ updated_at
    // protected $timestamps = false;

    // การเปลี่ยนชื่อ Field 
    // const CREATED_AT = '';
    // const UPDATED_AT = '';

}
