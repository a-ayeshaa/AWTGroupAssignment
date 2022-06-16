<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student;
use App\Models\Course;
use App\Models\Course_Teacher;

class Course_Student extends Model
{
    use HasFactory;
    protected $table = "course_student";

    function course()
    {
        return $this->belongsTo(Course::class,'c_id','c_id');
    }

    function student()
    {
        return $this->belongsTo(Student::class,'st_id','st_id');
    }

    function course_teacher()
    {
        return $this->belongsTo(Course_Teacher::class,'ct_id','ct_id');
    }
}
