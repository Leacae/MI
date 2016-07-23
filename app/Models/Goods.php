<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
    protected $table='goods';

    protected $hidden = [
        'created_at', 'updated_at',
    ];

    /**
     * 关联到商品的gallery模型
     */
    public  function gallerys()
    {
        return $this->hasMany(GoodsGallery::class);
    }

    /**
     * 关联到商品的attributes模型
     */
    public function attributes(){
        return $this->hasMany(GoodsAttribute::class);
    }

    /**
     * 关联商品的分类模型
     */
    public function category(){
        return $this->belongsTo(Categorys::class);
    }
}
