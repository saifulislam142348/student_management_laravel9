<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department_course extends Model
{
    use HasFactory;
    public function department()
    {
        return $this->belongsTo(department::class);
    }
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
