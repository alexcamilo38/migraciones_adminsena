<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    //Relacion Uno a Muchos (Inversa) 
    public function training_center()
    {
        return $this->belongsTo('App\Models\training_center');
    }
    // Relacion Uno a Muchos
    public function apprentices()
    {
        return $this->hasMany('App\Models\apprentice');
    }
    //Relacion Muchos a Muchos
    public function teachers()
    {
        return $this->belongsToMany('App\Models\teacher');
    }
    public function environment()
    {
        return $this->belongsTo('App\Models\environment');
    }
    public function cohort()
    {
        return $this->belongsTo('App\Models\cohort');
    }

    protected $fillable = [
        'course_number',
        'day',
        'training_center_id',
        'cohort_id',
        'environment_id',

    ];
}
