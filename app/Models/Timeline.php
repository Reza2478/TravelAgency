<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timeline extends Model
{
    protected $fillable = [
        'city',
        'staytime',
        'hotel',
        'services',
        'tour_id',
    ];
    use HasFactory;
}
