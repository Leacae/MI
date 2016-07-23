<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Repositories\CategoryRepository;
use App\Repositories\GoodsRepository;
use App\Repositories\PromoRepository;
use App\Repositories\SliderRepository;
use App;

class HomeController extends Controller
{

    protected $goodsRepository;
    protected $categoryRepository;
    public function __construct(GoodsRepository $goodsRepository,
                                CategoryRepository $categoryRepository)
    {
        $this->goodsRepository=$goodsRepository;
        $this->categoryRepository=$categoryRepository;
    }

    /**
     * 首页
     * @return \Illuminate\View\View
     */
    public function index(){
        dump($this->getHomeTopCategory());
        $sliders=App::call([$this,'getSliders']);
        $promos=App::call([$this,'getPromos']);
        $starGoods=$this->getStarGoods();
        return view('index',compact('sliders','promos','starGoods'));
    }
    /**
     * 得到slider幻灯片数据
     * @param SliderRepository $sliderRepository
     * @return mixed
     */
    public function getSliders(SliderRepository $sliderRepository){
        return $sliderRepository->getSliders();
    }

    /**
     * 得到promo商品推销广告数据
     * @param PromoRepository $promoRepository
     * @return mixed
     */
    public function getPromos(PromoRepository $promoRepository){
        return $promoRepository->getPromos();
    }

    /**
     * 获取明星商品数据
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getStarGoods(){
        return $this->goodsRepository->getGoodsByStar();
    }

    /**
     * 获取首页分类数据
     */
    public function getHomeTopCategory(){
        $categorys=$this->categoryRepository->getHomeTopCategorys();
        return $categorys;
    }
}
