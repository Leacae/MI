<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use App\Http\Requests;
use Illuminate\Support\Facades\App;
use App\Services\CategoryService;

class CategoryController extends Controller
{
    /**
     * @var 商品分类逻辑对象
     */
    protected  $categoryService;
    public  function  __construct(CategoryService $categoryService)
    {
        $this->categoryService=$categoryService;
    }

    /**
     * 分类首页
     * @param int $id 分类ID，默认为0（表示全部分类）
     * @param int $machines 机型
     * @param int $brands  品牌
     * @param int $type   筛选条件（推荐（默认），新品，价格，评论数量）
     * @return View
     */
    public function index($id=0,$machines=0,$brands=0,$type=0){
        if($type>3)$type=0;
        $category=App::call([$this->categoryService,'getCategory'],[$id,$machines,$brands,$type]);
        return view('category.index',compact('category'));
    }
}
