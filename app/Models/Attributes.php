<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attributes extends Model
{
    protected $table="attributes";

    protected $hidden = [
        'created_at', 'updated_at',
    ];

}
