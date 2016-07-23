<?php

namespace App\Repositories;



use App\Models\Navs;

class NavsRepository extends  EloquentRepository
{
    /**
     * 注入的model
     * @var $model
     */
    protected $model;
    public function __construct(Navs $navs)
    {
        $this->model=$navs;
    }

    /**
     * 获得所有的顶级nav分类（parent_id==0）
     */
    public function getTopNavs(){
        $navs=$this->findBy('parent_id',0);
        return $navs;
    }
}