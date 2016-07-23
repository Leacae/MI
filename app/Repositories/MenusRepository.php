<?php

namespace App\Repositories;



use App\Models\Menus;

class MenusRepository extends EloquentRepository
{
    /**
     * @var 注入的model
     */
    protected $model;
    public function __construct(Menus $menus)
    {
        $this->model= $menus;
    }

    /**
     * 获取全部的菜单信息（包括商品列表）
     */
    public function getAllMenuInfo(){
        $menus=$this->model->orderBy('sort','asc')->get();
        return $menus;
    }
}