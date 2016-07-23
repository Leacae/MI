<?php

namespace App\Http\ViewComposers;


use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\App;
use Illuminate\View\View;
use App\Repositories\MenusRepository;
use App\Repositories\GoodsRepository;
use App\Repositories\NavsRepository;

class AppViewComposer
{
    /**
     * 将数据绑定到视图。
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $menus=App::call([$this,'getMenus']);
        $navs=App::call([$this,'getTopNavs']);
        $view->with(compact('menus','navs'));
    }

    /**
     * 得到顶级的nav导航菜单
     * @param NavsRepository  $navsRepository
     * @return  Collection
     */
    public function getTopNavs(NavsRepository $navsRepository){
        $navs=$navsRepository->getTopNavs();
        return $navs;
    }

    /**
     * 得到顶部导航menus信息
     * @param GoodsRepository $goodsRepository
     * @param MenusRepository $menusRepository
     * @return mixed
     */
    public function getMenus(GoodsRepository $goodsRepository,MenusRepository $menusRepository){
        $menus=$menusRepository->getAllMenuInfo();
        $ids=$this->getIdsByMenus($menus);
        $menuGoods=$goodsRepository->getGoodsByGoodsIds($ids,
            ['id','name','image','discount_price']);
        $menus=$this->getMenusByGoods($menus,$menuGoods);
        return $menus;
    }
    /**
     * 通过menus获取管理的商品ID
     * @param  array $menus
     * @return Collection
     */
    private function getIdsByMenus($menus){
        $ids=[];
        foreach($menus as $menu)
        {
            if(!$menu->is_link)
            {
                $ids=array_merge($ids,explode(',',$menu->goods_ids));
            }
        }
        return $ids;
    }

    /**
     * 通过menus和goods组成新的menus（在goods查找menu中的所属商品）
     * @param $menus
     * @param $goods
     */
    private function getMenusByGoods($menus,$goods){
        $data=[];
        foreach($menus as &$menu) {
            if(!$menu->is_link)
            {
                $ids = explode(',', $menu->goods_ids);
                foreach($goods as $key=>$good)
                {
                    if(in_array($good->id,$ids))
                    {
                        $data[]=$good;
                    }
                }
                $menu->goods=$data;
                unset($data);
            }
        }
        return $menus;
    }
}