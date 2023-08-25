<?php

namespace App\Models;

use App\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;
    use Filterable;

    protected $table = 'plans';

    protected $fillable = [
        'price',
        'wifi',
        'games',
        'movies',
        'speed',
        'mega',
        'giga',
        'best',
    ];
}
