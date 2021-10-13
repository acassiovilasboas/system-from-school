<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SchoolClass extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $filable = [
        'year',
        'level_education', // nivel do ensino (fundamento ou medio)
        'school_year', // série (5 ano, 6 ano/ 5 serie, 6 serie)
        'rotation' //turno (matutino, vespertino, noturno)
    ];

    public function students()
    {
        return $this->hasMany(Student::class);
    }

    public function school()
    {
        return $this->belongsTo(School::class);
    }
    // public function shocool()
    // {
    //     return $this->belongsTo(School::class);
    // }

    // public function student()
    // {
    //     return $this->belongsToMany(Student::class, 'class_students', 'user_id', 'class_id');
    // }
}
