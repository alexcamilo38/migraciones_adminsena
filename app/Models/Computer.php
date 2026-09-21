<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Computer extends Model
{
    use HasFactory;
    public function apprentices()
    {
        return $this->hasMany('App\Models\apprentice');
    }

    public function environment()
    {
        return $this->belongsTo('App\Models\environment');
    }

    protected $fillable = [
        'number',
        'brand',
        'state',
        'environment_id',
    ];
}
