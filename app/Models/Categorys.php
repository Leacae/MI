<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categorys extends Model
{
    protected  $table='categorys';

    protected $hidden = [
        'created_at', 'updated_at',
    ];

    /**
     * 关联分类的分类模型（关联自身，父辈）
     */
    public function parent(){
        return $this->belongsTo(Categorys::class,'parent_id');
    }

    /**
     * 关联分类的分类模型（关联子孙，子孙）
     */
    public function child()
    {
        return $this->hasMany(Categorys::class,'parent_id');
    }
    /**
     * 关联到商品模型
     */
    public function goods(){
        return $this->hasMany(Goods::class);
    }
}
