<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MjuStudent extends Model
{
    use HasFactory;
    protected $primaryKey = 'student_code';
    protected $table = 'mju_students';

        protected $fillable = [
        'student_code',
        'first-name',
        'last-name',
        'first-name_en',
        'last-name_en',
        'major_id',
        'idcard',
        'birthdate',
        'gender',
        'address',
        'phone',
        'email',
    ];

     public function major()
    {
        return $this->hasMany(MjuStudent::class, 'major_id');
    }
}
