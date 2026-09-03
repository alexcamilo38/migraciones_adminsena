<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    public function program()
    {
        return $this->belongsTo('App\Models\program');
    }
    

    public function cohorts()
    {
        return $this->hasMany('App\Models\cohort');
    }
    
     protected $fillable = [
        'shift',
        'registration_date',
        'capacity',
        'program_id',
    ];
}
