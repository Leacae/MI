<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GoodsGallery extends Model
{
    protected $table='goods_gallerys';

    protected $hidden = [
        'created_at', 'updated_at',
    ];
}
