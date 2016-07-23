<?php

namespace App\Presenters;



class CategoryPresenter
{
    /**
     * 根据category生成html
     * @param $categorys
     * @param $params
     * @return string
     */
    public function getCategoryHtml($categorys,$params){
        $html='<div class="filter-list-wrap">';
        $html.='<dl class="filter-list clearfix">';
        $html.=' <dt>分类：</dt>';
        if($categorys->level==1)
        {
            $html.='<dd class="active">全部</dd>';
        }else{
            $params['id']=$categorys->parent_id;
            $html.='<dd><a href="'.$this->getUrlByParams($params).'">全部</a></dd>';
        }
        /*循环遍历添加*/
        foreach($categorys->children as $category)
        {
                if($category->id==$categorys->id)
                {
                    $html.='<dd class="active">'.$category->name.'</dd>';
                }
                else{
                    $params['id']=$category->id;
                    $html.='<dd ><a href="'.$this->getUrlByParams($params).'">'.$category->name.'</a></dd>';
                }
        }
        $html.='</dl>';
        $html.='</div>';
        return $html;
    }

    /**
     * 根据machines生成html
     * @param $machines
     * @param  $params
     * @return  string
     */
    public function getMachinesHtml($machines,$params){
        if($machines->isEmpty())
        {
            return '';
        }
        $html='<div class="filter-list-wrap">';
        $html.='<dl class="filter-list clearfix">';
        $html.='<dt>机型：</dt>';
        $machines_id=$params['machines'];
        if($params['machines']==0)
        {
            $html.='<dd class="active">全部</dd>';
        }
        else{
            $params['machines']=0;
            $html.='<dd><a href="'.$this->getUrlByParams($params).'">全部</a></dd>';
        }
        foreach($machines as $machine)
        {
            if($machine->id==$machines_id)
            {
                $html.='<dd class="active">'.$machine->name.'</dd>';
            }
            else{
                $params['machines']=$machine->id;
                $html.='<dd><a href="'.$this->getUrlByParams($params).'">'.$machine->name.'</a></dd>';
            }
        }
        $html.='</dl>';
        $html.='</div>';
        return $html;
    }

    /**
     * 根据brand生成html
     * @param $brands
     * @param  $params
     * @return  string
     */
    public function  getBrandHtml($brands,$params)
    {
        if($brands->isEmpty())
        {
            return '';
        }
        $html='<div class="filter-list-wrap">';
        $html.='<dl class="filter-list clearfix">';
        $html.='<dt>品牌：</dt>';
        $brands_id=$params['brands'];
        if($params['brands']==0)
        {
            $html.='<dd class="active">全部</dd>';
        }
        else{
            $params['brands']=0;
            $html.='<dd><a href="'.$this->getUrlByParams($params).'">全部</a></dd>';
        }
        foreach($brands as $brand)
        {
            if($brand->id==$brands_id)
            {
                $html.='<dd class="active">'.$brand->name.'</dd>';
            }
            else{
                $params['brands']=$brand->id;
                $html.='<dd><a href="'.$this->getUrlByParams($params).'">'.$brand->name.'</a></dd>';
            }
        }
        $html.='</dl>';
        $html.='</div>';
        return $html;
    }

    /**
     * 通过category数组得到当前路径html
     * @param $categorys
     * @return string
     */
    public function getCategoryPathHtml($categorys){
        $html='<a href="'.url('/').'">首页</a>';
        foreach($categorys as $key=>$category){
            if(count($categorys)==$key+1)
            {
                $html.='<span class="sep">/</span>'.
                    '<span>'.$category->name.'</span>';
            }else{
                $params=[
                    'id'=>$category->id,
                    'brands'=>0,
                    'machines'=>0,
                    'type'=>0
                ];
                $html.='<span class="sep">/</span>'.
                    '<a href="'.$this->getUrlByParams($params).'">'.$category->name.'</a>';
            }
        }
        return $html;
    }

    /**
     * 根据以下参数得到刷选html
     * @param $params
     * @param $type
     * @param $name
     * @return string
     */
    public function getCategoryTypeHtml($params,$type,$name){
        $icon='';
        if($type==2)
        {
            $icon='<i class="iconfont">&#xe62f;</i>';
        }
        if($params['type']==$type)
        {
            $html='<li class="active"><a href="javascript:void(0);">'.$name.$icon.'</a></li>';
        }
        else{
            $params['type']=$type;
            $html='<li><a href="'.$this->getUrlByParams($params).'">'.$name.$icon.'</a></li>';
        }
        return $html;
    }
    /**
     * 根据传递的params参数数组生成url
     * @param $params
     * @return  string
     */
    private function getUrlByParams($params){
        $url=route('list',$params);
        return $url;
    }
}