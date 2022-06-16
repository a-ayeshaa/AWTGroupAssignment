<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Course;


class Department extends Model
{
    use HasFactory;
    protected $table = "department";

    function student()
    {
        return $this->hasMany(Student::class,'d_id','d_id');
    }

    function teacher()
    {
        return $this->hasMany(Teacher::class,'d_id','d_id');
    }

    function course()
    {
        return $this->hasMany(Course::class,'d_id','d_id');
    }
}
