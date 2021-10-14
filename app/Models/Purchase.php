<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $fillable = [
        'tour_id',
        'track',
        'number'
    ];
    public function tour()
    {
        return $this->belongsTo('App\Models\Tour','tour_id','id');
    }
    use HasFactory;
}
