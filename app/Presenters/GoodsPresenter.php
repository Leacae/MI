<?php

namespace App\Presenters;


class GoodsPresenter
{
    /**
     * 根据商品图片列表获取html
     * @param array $gallerys
     * @return string
     */
    public function getGallerys($gallerys){

        $html='';
        foreach($gallerys as $index=>$gallery)
        {
            if($index==0)
            {
                $html.='<li class="current"><img src="'.$gallery->thumb_url.'" data-src="'.$gallery->img_url.'" data-src-b="'.$gallery->big_url.'"></li>';
            }else{
                $html.='<li><img src="'.$gallery->thumb_url.'" data-src="'.$gallery->img_url.'" data-src-b="'.$gallery->big_url.'"></li>';
            }
        }
        return $html;
    }

    /**
     * 获取商品详情的头部的面包屑导航
     * @param array $categorys
     * @param string $goodsName
     * @return string
     */
    public function getCategorys($categorys,$goodsName){
        $html='<a href="'.url('/').'">首页</a>'.
               '<span class="sep">/</span>';
        foreach($categorys as $category){
            $html.='<a href="'.url('').'">'.$category->name.'</a>'.
                   '<span class="sep">/</span>';
        }
        $html.='<a href="javascript:void(0);">'.$goodsName.'</a>';
        return $html;
    }

    /**
     * 获取商品的基本属性
     * @param array $attributes
     * @return string
     */
    public function getSimpleAttribute($attributes){
        $html='';
        foreach($attributes as $attribute){
            if($attribute->type==0)
            {
                $html.='<li>'.$attribute->name.'：'.$attribute->value.'</li>';
            }
        }
        return $html;
    }

    /**
     * 获取商品的销售属性
     * @param $attributes
     * @return string
     */
    public function getMarketAttribute($attributes){
        /**
         * 首先需要对数组进行分组（以属性id相同）
         *
         */
        $attrs=[];
        foreach ($attributes as $item){
            $key =$item->attributes_id;
            if (!isset($attrs[$key])) {
                $attrs[$key] = array(
                    'items' => array($item),
                    'type' =>$item->type,
                    'name'  =>$item->name
                );
            } else {
                $attrs[$key]['items'][] = $item;
            }
        }
        /**
         * 生成html代码
         */
        $html='';
        foreach($attrs as $attr){
            if($attr['type']==1)
            {
                $html.='<dd class="goods-info-head-colors clearfix">';
                $html.='<span class="style-name">'.$attr['name'].'：</span>';
                $html.='<div class="clearfix">';
                foreach($attr['items'] as $item){
                    $html.='<div class="colorli">';
                    $html.='<a href="" class="" title="'.$item->value.'">';
                    $html.='<img class="square" src="'.$item->image.'">';
                    $html.='</a>';
                    $html.='</div>';
                }
                $html.='</div>';
                $html.='</dd>';
            }
            else if($attr['type']==2){
                $html.='<dd class="goods-info-head-size clearfix">';
                $html.='<span class="label">'.$attr['name'].'：</span>';
                $html.='<ul class="clearfix" id="J_goodsSize">';
                foreach($attr['items'] as $item){
                    $html.='<li class=" ">';
                    $html.=' <a href="javascript:void(0);" class="item goodsStyle " data-id="'.$item->id.'" data-price="'.$item->price.'" data-is-cos="false">';
                    $html.=$item->value;
                    $html.='</a>';
                    $html.='</li>';
                }
                $html.='</ul>';
                $html.='</dd>';
            }
        }
        return $html;
    }
}