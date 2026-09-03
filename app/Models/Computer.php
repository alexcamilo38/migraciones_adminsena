<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Computer extends Model
{
    use HasFactory;
    public function apprentice()
    {
        return $this->hasOne('App\Models\apprentice');
    }

    public function environment()
    {
        return $this->belongsTo('App\Models\environment');
    }

    protected $fillable = [
        'number',
        'brand',
    ];
}
