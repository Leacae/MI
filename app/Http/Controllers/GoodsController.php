<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\App;
use App\Services\GoodsService;

class GoodsController extends Controller
{
    /**
     * @var 商品的资料逻辑对象
     */
    protected  $goodsService;
    public  function  __construct(GoodsService $goodsService)
    {
        $this->goodsService=$goodsService;
    }

    /**
     * 商品详情
     * @param $id
     * @return \Illuminate\View\View
     */
    public function info($id){
        $goods=App::call([$this->goodsService,'getInfo'],[$id]);
        return view('goods.info',compact('goods'));
    }
}
