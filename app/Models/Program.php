<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;
    public function area()
    {
        return $this->belongsTo('App\Models\area');
    }
    public function offers()
    {
         return $this->hasMany('App\Models\offer');
    }

    protected $fillable = [
        'name',
        'description',
        'type',
        'duration',
        'modality',
        'image',
        'area_id',
    ];
}
