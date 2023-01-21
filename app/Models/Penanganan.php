<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penanganan extends Model
{
    protected $table = 'penanganan';
    protected $guarded = ['id'];
    protected $with = ['siswa'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function siswa()
    {
        return $this->belongsTo(Student::class, 'student_id');
    }

    protected $casts = [
        'konfirmasi' => 'boolean'
    ];
}