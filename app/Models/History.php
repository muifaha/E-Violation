<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    protected $guarded = ['id'];

    protected $with = ['siswa', 'rule'];
    public function rule()
    {
        return $this->belongsTo(Rule::class);
    }

    public function siswa()
    {
        return $this->belongsTo(Student::class, 'student_id');
    }
}