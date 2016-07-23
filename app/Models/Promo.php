<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    protected $table='promo';

    protected $hidden = [
        'created_at', 'updated_at',
    ];
}
