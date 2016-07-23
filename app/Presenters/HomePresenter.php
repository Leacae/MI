<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/6/20
 * Time: 14:20
 */

namespace App\Presenters;


use Illuminate\Support\Facades\Input;

class HomePresenter
{
    /**
     * 获取slider的html
     * @param  $sliders
     * @return string
     */
    public function getSliderHtml($sliders){
        $html='<div class="ui-wrapper" style="max-width: 100%;">';
        $html.='<div class="ui-viewport">';
        $html.='<div id="J_homeSlider" class="xm-slider" data-stat-title="焦点图轮播" style="width: auto; position: relative;">';
        foreach ($sliders as $key=>$slider) {
            $style='';
            if($key==0)
            {
                $style='style="display:block;"';
            }
            $html.='<div class="slide loaded" '.$style.'>';
            $html.='<a href="'.$slider->path.'" target="_blank"><img src="'.url($slider->image).'"></a>';
            $html.='</div>';
        }
        $html.='</div>';
        $html.=' </div>';
        $html.='<div class="ui-controls ui-has-pager ui-has-controls-direction">';
        $html.='<div class="ui-pager ui-default-pager">';
        foreach($sliders as $key=>$slider)
        {
            $html.='<div class="ui-pager-item">';
            $active='';
            if($key==0)
            {
                $active='active';
            }
            $html.='<a href="" data-slide-index="'.$key.'" class="ui-pager-link '.$active.'">'.($key+1).'</a>';
            $html.='</div>';
        }
        $html.='</div>';
        $html.='<div class="ui-controls-direction">';
        $html.='<a class="ui-prev prev" href="">上一张</a>';
        $html.='<a class="ui-next next" href="">下一张</a>';
        $html.='</div>';
        $html.='</div>';
        $html.='</div>';
        return $html;
    }

    /**
     * 得到首页商品推销广告的html
     * @param $promos
     * @return string
     */
    public function getPromoHtml($promos){
        $html='<ul class="home-promo-list clearfix">';
        foreach ($promos as $key=>$promo) {
            $first='';
            if(!$key) $first=' class="first"';
            $html.='<li'.$first.'>';
            $html.='<a class="item" href="'.$promo->path.'" target="_blank"  ><img alt="'.$promo->title.'" src="'.url($promo->image).'"></a>';
            $html.='</li>';
        }
        $html.='</ul>';
        return $html;
    }

    /**
     * 获取明星商品的html
     * @param $starGoods
     * @return  string
     */
    public function getStarGoodsHtml($starGoods){
        $html='<div class="xm-carousel-wrapper">';
        $html.='<ul class="xm-carousel-list xm-carousel-col-5-list goods-list rainbow-list clearfix J_carouselList">';
        foreach ($starGoods as $key=>$starGood) {
            $html.='<li class="rainbow-item-'.($key+1).'">';
            $html.='<a class="thumb" href="'.route('info',$starGood->id).'"  target="_blank"><img src="'.$starGood->image.'" alt="'.$starGood->name.'"></a>';
            $html.='<h3 class="title"><a href="'.route('info',$starGood->id).'" target="_blank">'.$starGood->name.'</a></h3>';
            $html.='<p class="desc">'.$starGood->depict.'</p>';
            $html.='<p class="price">'.(int)$starGood->discount_price.'元</p>';
            $html.='</li>';
        }
        $html.='</ul>';
        $html.='</div>';
        return $html;
    }

    /**
     * 获取智能硬件
     * @param $hardwareGoods
     * @return string
     */
    public function  getHardwareHtml($hardwareGoods){
        $html='';
        $html.='';
        $html.='';
        $html.='';
        $html.='';
        $html.='';
        $html.='';
        $html.='';
        return $html;
    }
}