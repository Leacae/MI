<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GoodsAttribute extends Model
{
    protected $table='goods_attributes';

    protected $hidden = [
        'created_at', 'updated_at',
    ];
    /**
     * 关联到Attribute模型
     */
    public function attribute(){
        $this->belongsTo(Attributes::class);
    }
}
