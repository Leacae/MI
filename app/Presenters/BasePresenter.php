<?php

namespace App\Presenters;


class BasePresenter
{
    /**
     *获取menu顶部导航html
     * @param  $menus
     * @return  string
     */
    public function getMenusHtml($menus){
        $html='';
        foreach ($menus as $menu) {
            $html.='<li class="nav-item">';
            if($menu->is_link)
            {
                $html.='<a class="link" href="'.$menu->path.'" target="_blank"><span class="text">'.$menu->name.'</span></a>';
            }
            else
            {
                $html.='<a class="link" href="'.$menu->path.'"><span class="text">'.$menu->name.'</span><span class="arrow"></span></a>';
                $html.='<div class="item-children">';
                $html.='<div class="container">';
                $html.='<ul class="children-list clearfix">';
                foreach($menu['goods'] as $key=>$good)
                {
                    $first='';
                    if(!$key)$first='class="first"';
                    $html.='<li '.$first.'>';
                    $html.='<div class="figure figure-thumb">';
                    $html.='<a href="'.route('info',$good->id).'"><img src="'.url('img/placeholder-220!110x110.png').'" data-echo="'.$good->image.'" alt="'.$good->name.'" width="160" height="110"></a>';
                    $html.='</div>';
                    $html.='<div class="title"><a href="'.route('info',$good->id).'">'.$good->name.'</a></div>';
                    $html.='<p class="price">'.(int)$good->discount_price.'元</p>';
                    $html.='</li>';
                }
                $html.='</ul>';
                $html.='</div>';
                $html.=' </div>';
            }
            $html.='</li>';
        }
        return $html;
    }

    /**
     * 获取nav侧边栏导航html
     * @param  array $navs
     * @return  string
     */
    public function getNavHtml($navs){
        $html='<li id="J_navCategory" class="nav-category">';
        $html.='<a class="link-category" href=""><span class="text">全部商品分类</span></a>';
        $html.='<div class="site-category">';
        $html.='<ul id="J_categoryList" class="site-category-list clearfix">';
        foreach($navs as $nav)
        {
            $html.='<li class="category-item">';
            $html.='<a class="title" href="'.$nav->link.'">'.$nav->name.'<i class="iconfont"></i></a>';
            $html.='</li>';
        }
        $html.='</ul>';
        $html.='</div>';
        $html.='</li>';
        return $html;
    }
}