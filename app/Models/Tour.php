<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    protected $fillable = [
        'from',
        'to',
        'amount',
        'capacity',
        'departuredate',
        'returndate',
        'timewent',
        'timeback',
        'tag',
        'type',
        'services',
        'hotel',
        'travelcompany',
        'image',
        'staytime'
    ];
    public function timelines()
    {
        return $this->hasMany('App\Models\Timeline');
    }
    use HasFactory;
}
