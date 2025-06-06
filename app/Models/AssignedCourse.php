<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssignedCourse extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'teacher_id', 'subject_id', 'session_id', 'program_id', 'semester_id', 'section_id','status',
    ];

    public function teacher()
    {
        return $this->belongsTo('App\User', 'teacher_id');
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class, 'subject_id');
    }


    public function session()
    {
        return $this->belongsTo(Session::class, 'session_id');
    }

    public function program()
    {
        return $this->belongsTo(Program::class, 'program_id');
    }

    public function semester()
    {
        return $this->belongsTo(Semester::class, 'semester_id');
    }

    public function section()
    {
        return $this->belongsTo(Section::class, 'section_id');
    }
}
