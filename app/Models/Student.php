<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'telphone',
        'email',
        'birth_date',
        'genre'
    ];

    public function class()
    {
        return $this->belongsToMany(SchoolClass::class, 'class_students', 'student_id', 'class_id');
    }    

    public function school()
    {
        return $this->hasOneThrough(School::class, SchoolClass::class, 'school_id', 'id');
    }
}
