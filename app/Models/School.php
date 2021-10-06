<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class School extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fileble = [
        'name',
        'address',
        'country',
        'city',
        'state'
    ];

    public function schoolClasses()
    {
        return $this->belongsToMany(SchoolClass::class);
    }
}
