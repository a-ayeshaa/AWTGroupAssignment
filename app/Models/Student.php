<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Department;
use App\Models\Course_Student;

class Student extends Model
{
    use HasFactory;
    protected $table = "student";

    function course_student()
    {
        return $this->hasMany(Course_Student::class,'st_id','st_id');
    }

    function department()
    {
        return $this->belongsTo(Department::class,'d_id','d_id');
    }
}
