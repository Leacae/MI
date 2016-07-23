<?php

namespace App\Repositories;

use App\Models\Goods;
use Illuminate\Contracts\Queue\Queue;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;

class GoodsRepository extends EloquentRepository
{
    /**
     * @var 注入的model
     */
    protected $model;
    public function __construct(Goods $goods)
    {
        $this->model= $goods;
    }

    /**
     * 根据id获取商品的详细信息
     * 包括基本信息，图片列表，商品属性
     * @param $id
     * @return mixed
     */
    public function getInfo($id){
        $goods=$this->find($id);
        $goods->gallerys=$goods->gallerys()->get();
        return $goods;
    }

    /**
     * 获取分类（集合）下的商品（分页）
     * @param array $ids 分类的id数组
     * @param $machines  机型
     * @param $brands  品牌
     * @param $type  刷选 0(推荐，默认不排序) 1（新品，按时间） 2（低到高） 3（评论数排序）
     * @return mixed
     */
    public function getGoodsByCategorys($ids,$machines,$brands,$type){
        $query=$this->model
                 ->whereIn('categorys_id',$ids);
        if($machines>0)
        {
            $query->where('machines_id',$machines);
        }
        if($brands>0)
        {
            $query->where('brands_id',$brands);
        }
        if($type==1){
            $query->orderBy('created_at','desc');
        }
        else if($type==2){
            $query->orderBy('discount_price','asc');
        }
        else if($type==3){
            $query->orderBy('comments','desc');
        }
        return $query->paginate(20,['id','name','image','discount_price']);
    }

    /**
     * 查询指定商品iD的信息
     * @param array $ids 商品ID数组
     * @param  array　$columns 查询的字段
     */
    public function getGoodsByGoodsIds($ids,$columns=['*'])
    {
        return $this->model->whereIn('id',$ids)->get($columns);
    }

    /**
     * 通过分类（数组）查询分类下商品对应的品牌
     * @param array $ids 商品分类ID数组
     * @return  array
     */
    public function getBrandsByCategorys($ids)
    {
        $colums=[
            'brands.*'
        ];
        $brands=DB::table('brands')->join('goods',function($join)use ($ids){
                    $join->on('brands.id', '=', 'goods.brands_id')
                        ->whereIn('goods.categorys_id', $ids);
                })->get($colums);
        return collect($brands)->unique();
    }

    /**
     * 通过分类（数组） 查询分类下商品的机型
     * @param array $ids  商品分类ID数组
     * @return  array
     */
    public function getMachinesByCategorys($ids){
        $colums=[
            'machines.*'
        ];
        $machines=DB::table('machines')->join('goods',function($join)use ($ids){
                    $join->on('machines.id','=','goods.machines_id')
                        ->whereIn('goods.categorys_id', $ids);
                })->get($colums);
        return collect($machines)->unique();
    }

    /**
     * 获取明星单品
     * 条件
     * is_star==1
     * $limit=15
     * @return Collection
     */
    public function getGoodsByStar(){
        $columns=[
            'id',
            'name',
            'image',
            'depict',
            'slogan',
            'discount_price'
        ];
        return $this->model->where('is_star',1)
                    ->limit(15)
                    ->get($columns);
    }

    /**
     * 查询指定分类（数组）下的商品
     * @param $ids
     * @return Queue
     */
    public function getGoodsByCategoryIds($ids){
        return $this->model->whereIn('category_id',$ids);
    }
}