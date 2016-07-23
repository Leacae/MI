<?php
namespace App\Services;


use App\Models\Goods;
use App\Repositories\AttributesRepository;
use App\Repositories\CategoryRepository;
use App\Repositories\GoodsRepository;

class GoodsService
{
    protected $goodsRepository;
    public function __construct(GoodsRepository $goodsRepository)
    {
        $this->goodsRepository=$goodsRepository;
    }

    /**
     * 获取商品详细信息
     * @param CategoryRepository  $categoryRepository
     * @param AttributesRepository  $attributesRepository
     * @param integer $id
     * @return Goods
     */
    public function getInfo(CategoryRepository $categoryRepository,
                            AttributesRepository $attributesRepository,$id)
    {
        $goods=$this->goodsRepository->getInfo($id);
        $goods->categorys=$categoryRepository
                    ->getParentCategoryById($goods->categorys_id);
        $goods->attributes=$this->getAttributesGroup($attributesRepository->getAttributesByGoodsId($goods->id));
        return $goods;
    }

    /**
     * 把属性进行裁分（分类基本属性和销售属性）
     * @param  array $attributes
     * @return array
     */
    private function getAttributesGroup($attributes){
        $attrs=[
            'simpleAttribute'=>[],
            'marketAttribute'=>[]
        ];
        foreach($attributes as $attribute)
        {
            if($attribute->type==0)
            {
                $attrs['simpleAttribute'][]=$attribute;
            }
            else{
                $attrs['marketAttribute'][]=$attribute;
            }
        }
        return $attrs;
    }
}