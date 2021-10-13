<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class School extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'address',
        'district',
        'city',
        'state'
    ];

    public function schoolClasses()
    {
        return $this->hasMany(SchoolClass::class);
    }

    public function students()
    {
        return $this->hasManyThrough(Student::class, SchoolClass::class);
    }
}
