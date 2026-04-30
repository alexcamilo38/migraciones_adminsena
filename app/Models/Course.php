<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    
    public function area()
    {
        return $this->belongsTo('App\Models\area');
    }
    //Relacion Uno a Muchos (Inversa) 
    public function training_center(){
        return $this->belongsTo('App\Models\training_center');
    }
    // Relacion Uno a Muchos
    public function apprentices(){
        return $this->hasMany('App\Models\apprentice');
    }
     //Relacion Muchos a Muchos
    public function teachers(){
        return $this->belongsToMany('App\Models\teacher');
    }
}
