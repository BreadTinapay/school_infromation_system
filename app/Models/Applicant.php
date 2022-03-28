<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    use HasFactory;

    protected $fillable = [
        'NAME',
        'COLLEGE',
        'PROGRAM',
        'COARSE_CODE',
        'COARSE_NAME',
        'STUDENT_NUMBER',
    ];
}
