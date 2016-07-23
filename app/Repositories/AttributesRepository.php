<?php

namespace App\Repositories;


use App\Models\Attributes;
use Illuminate\Support\Facades\DB;

class AttributesRepository extends EloquentRepository
{
    /**
     * @var 注入的model
     */
    protected $model;
    public function __construct(Attributes $attributes)
    {
        $this->model= $attributes;
    }

    /**
     * 根据商品ID获取属性信息（需要join多表查询）
     * @param $good_id
     * @return mixed
     */
    public function getAttributesByGoodsId($good_id){
        $columns=[
            'goods_attributes.id',
            'goods_attributes.value',
            'goods_attributes.price',
            'goods_attributes.image',
            'goods_attributes.attributes_id',
            'attributes.name',
            'attributes.input_type',
            'attributes.type'
        ];
        $attributes=DB::table('goods_attributes')
            ->join('attributes', function ($join)use($good_id) {
                $join->on('goods_attributes.attributes_id', '=', 'attributes.id')
                    ->where('goods_attributes.goods_id', '=',$good_id);
            })
            ->get($columns);
        return $attributes;
    }
}