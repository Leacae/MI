<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Navs extends Model
{
    protected $table='navs';

    protected $hidden = [
        'created_at', 'updated_at',
    ];
}
