<?php

namespace App\Services;


use App\Repositories\CategoryRepository;
use App\Repositories\GoodsRepository;

class CategoryService
{
    protected $categoryRepository;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository=$categoryRepository;
    }

    /**
     * 商品分类业务（商品分类+商品列表）
     * @param  GoodsRepository $goodsRepository
     * @param  $id
     * @param $machines
     * @param  $brands
     * @param  $type
     * @return array
     */
    public function getCategory(GoodsRepository $goodsRepository,$id,$machines,$brands,$type){
        $category=[];
        $category['path']=$this->categoryRepository->getParentCategoryById($id);
        $category['cates']=$this->categoryRepository->getChildCategoryById($id);
        $child=$this->categoryRepository->getChildAllCategoryById(
                                $this->categoryRepository->all(),$id);
        $ids=$this->getCategoryId($child);
        $category['machines']=$goodsRepository->getMachinesByCategorys($ids);
        $category['brands']=$goodsRepository->getBrandsByCategorys($ids);
        $category['goods']=$goodsRepository->getGoodsByCategorys($ids,$machines,$brands,$type);
        $category["params"]=compact('id','machines','brands','type');
        return $category;
    }

    /**
     * 通过给的分类集合获取ID列表
     * @param array $category
     * @return  array
     */
    private  function  getCategoryId($category){
        $ids=[];
        foreach($category as $item){
            $ids[]=$item->id;
        }
        return $ids;
    }
}