<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class courseconfirm extends Model
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
    public function student()
    {
        return $this->belongsTo(Registration::class);
    }
}
