<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cohort extends Model
{
    use HasFactory;

   

    public function offer()
    {
        return $this->belongsTo('App\Models\offer');
    }

     public function course()
    {
        return $this->hasMany('App\Models\course');
    }
     protected $fillable = [
        'code',
        'start_date',
        'schedule',
        'offer_id',
    ];
}
