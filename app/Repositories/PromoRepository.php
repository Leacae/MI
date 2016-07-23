<?php

namespace App\Repositories;



use App\Models\Promo;

class PromoRepository extends EloquentRepository
{
    /**
     * 注入的model
     * @var $model
     */
    protected $model;
    public function __construct(Promo $promo)
    {
        $this->model=$promo;
    }

    /**
     * 获取首页焦点图下方的商品推销广告（前3条）
     */
    public function getPromos(){
        return $this->model->limit(3)->get();
    }
}