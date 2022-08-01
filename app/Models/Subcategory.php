<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;

    // Relación uno a muchos
    public function incidents(){
        return $this->hasMany(Incident::class);
    }

    // Relación uno a muchos inversa
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
