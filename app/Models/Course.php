<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    public function categoryInfo(){
        return $this->belongsTo(Category::class, 'category', 'id');
    }
}
