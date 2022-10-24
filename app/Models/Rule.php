<?php

namespace App\Models;

use App\Models\Poin;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Rule extends Model
{
    protected $guarded = ['id'];


    public function scopeFilter($query, $search)
    {
        $query->when($search ?? false, function ($query, $search) {
            return $query->where('name', 'like', '%' . $search . '%')
                ->orWhere('poin', 'like', '%' . $search . '%');
        });
    }

    public function ruleType()
    {
        return $this->belongsTo(RuleType::class);
    }

    public function siswa()
    {
        return $this->belongsToMany(Student::class, 'histories');
    }

    public function history()
    {
        return $this->hasMany(History::class);
    }
}