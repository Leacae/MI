<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $table='slider';

    protected $hidden = [
        'created_at', 'updated_at',
    ];
}
