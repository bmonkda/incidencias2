<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incident extends Model
{
    use HasFactory;

    // Relación uno a muchos inversa

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function emergency(){
        return $this->belongsTo(Emergency::class);
    }
    
    public function estatu(){
        return $this->belongsTo(Estatu::class);
    }

    public function subcategory(){
        return $this->belongsTo(Subcategory::class);
    }



    // public function category(){
    //     return $this->belongsTo(Category::class);
    // }

    // Relacion uno a uno polimórfica

    public function image(){
        return $this->morphOne(Image::class, 'imageable');
    }

}
