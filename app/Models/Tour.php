<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    public function timelines()
    {
        return $this->hasOne('App\Models\Timeline');
    }
    public function users()
    {
        return $this->belongsToMany('App\User');
    }
    use HasFactory;
}
