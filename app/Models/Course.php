<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Course_Student;
use App\Models\Course_Teacher;
use App\Models\Department;

class Course extends Model
{
    use HasFactory;
    protected $table = "course";

    function course_student()
    {
        return $this->hasMany(Course_Student::class,'c_id','c_id');
    }

    function course_teacher()
    {
        return $this->hasMany(Course_Teacher::class,'c_id','c_id');
    }

    function department()
    {
        return $this->belongsTo(Department::class,'d_id','d_id');
    }
}
