<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emergency extends Model
{
    use HasFactory;

    // Relación uno a muchos

    public function incidents(){
        return $this->hasMany(Incident::class);
    }
}
