<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Department;
use App\Models\Course_Teacher;

class Teacher extends Model
{
    use HasFactory;
    protected $table = "teacher";

    function course_teacher()
    {
        return $this->hasMany(Course_Teacher::class,'t_id','t_id');
    }

    function department()
    {
        return $this->belongsTo(Department::class,'d_id','d_id');
    }
}
