<?php

namespace App\Repositories;


use App\Models\Categorys;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class CategoryRepository extends EloquentRepository
{
    /**
     * @var 注入的model
     */
    protected $model;
    public function __construct(Categorys $categorys)
    {
        $this->model= $categorys;
    }

    /**
     *根据指定节点获取父节点（直到顶层节点）
     * @param $id
     * @return array
     */
    public function getParentCategoryById($id){
        $tree=[];
        try{
            while($id){
                $category=$this->find($id,['id','name','parent_id']);
                $tree[]=$category;
                $id=$category->parent_id;
            }
        }catch(ModelNotFoundException $e){}
        $category=new Categorys();
        $category->id=0;
        $category->name='所有分类';
        $category->parent_id=0;
        $tree[]=$category;
        return array_reverse($tree);
    }

    /**
     *根据节点获取子孙节点(二级分类)
     * @param $id
     * @return  Categorys
     */
    public function getChildCategoryById($id){
        try{
            $categorys=$this->find($id);
            $categorys->level=1;
        }
        catch(ModelNotFoundException  $e){
            $categorys=new Categorys();
            $categorys->name="所有分类";
            $categorys->id=0;
            $categorys->level=1;
        }
        $categorys->children=$this->findBy('parent_id',$categorys->id);
        if($categorys->children->isEmpty())
        {
            $categorys->level=2;
            $categorys->children=$this->findBy('parent_id',$categorys->parent_id);
        }
        return $categorys;
    }

    /**
     * 获取指定分类下所有的分类(全部子分类)
     * @param  $categorys
     * @param $id
     * @return  Collection
     */
    public function getChildAllCategoryById($categorys,$id){
        static $cates =[];
        foreach($categorys as $category){
            if($category['parent_id']==$id){
                $cates[] = $category;
                $this->getChildAllCategoryById($categorys,$category['id']);
            }
        }
        if(empty($cates))
        {
            try{
                $cates[]=$this->find($id);
            }
            catch(ModelNotFoundException $e)
            {
                return $this->getChildAllCategoryById($categorys,0);
            }
        }
        return $cates;
    }

    /**
     * 获取首页显示的顶级分类
     */
    public function getHomeTopCategorys()
    {
        $goodColumns=[
            'id',
            'name',
            'image',
            'depict',
            'discount_price',
            'cost_price',
            'slogan',
            'categorys_id'
        ];
        $categorys=$this->model
            ->where('is_cake',true)
            ->where('parent_id',false)
            ->with(['child'=>function($query)use($goodColumns){
                $query->where('is_home',true)
                      ->where('is_cake',false)
                      ->with(['goods'=>function($query)use($goodColumns){
                          $query->select($goodColumns)->limit(8);
                      }]);
            }])
            ->get();
        return $categorys;
    }
}