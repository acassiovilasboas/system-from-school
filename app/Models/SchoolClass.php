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

    public function shocool()
    {
        return $this->belongsTo(School::class);
    }
}
