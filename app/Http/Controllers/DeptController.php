<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course_Student;
use App\Models\Course_Teacher;
use App\Models\Department;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Course;


class DeptController extends Controller
{
    //
    function info()
    {
        $dept=Department::where('d_id',1)->get();
        return view('department.info')->with('dept',$dept);
        //return $dept->course->course_teacher;
    }
   
}
