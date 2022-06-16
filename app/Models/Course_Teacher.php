<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Teacher;
use App\Models\Course;
use App\Models\Course_Student;

class Course_Teacher extends Model
{
    use HasFactory;
    protected $table = "course_teacher";

    function course()
    {
        return $this->belongsTo(Course::class,'c_id','c_id');
    }

    function teacher()
    {
        return $this->belongsTo(Teacher::class,'t_id','t_id');
    }

    function course_student()
    {
        return $this->hasMany(Course_Student::class,'ct_id','ct_id');
    }
}
