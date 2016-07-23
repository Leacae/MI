@extends('layouts.app')

@section('title')
    <title>{{$goods->name}}</title>
    <meta name="description" content="{{$goods->describe}}">
    <meta name="keywords" content="{{$goods->keyword}}">
@endsection
@section('header')
    <link rel="stylesheet" type="text/css" href="{{url('css/goods-detail.min.css')}}">
@endsection
@section('content')
    @inject('GoodsPresenter', 'App\Presenters\GoodsPresenter')
    <div class="breadcrumbs">
        <div class="container ">
            {!! $GoodsPresenter->getCategorys($goods->categorys,$goods->name)!!}
        </div>
    </div>
    <div class="goods-detail">
        <div class="goods-detail-info  clearfix J_goodsDetail">
            <div class="container">
                <div class="row">
                    <div class="span13  J_mi_goodsPic_block goods-detail-left-info">
                        <div class="goods-pic-box  " id="J_mi_goodsPicBox">
                            <div class="goods-big-pic J_bigPicBlock">
                                <img src="{{$goods->gallerys[0]->img_url}}" class="J_goodsBigPic" id="J_BigPic">
                            </div>
                            <div class="goods-pic-loading">
                                <div class="loader loader-gray"></div>
                            </div>
                            <div class="goods-small-pic clearfix">
                                <ul id="goodsPicList">
                                    {!!$GoodsPresenter->getGallerys($goods->gallerys)!!}
                                </ul>
                            </div>

                        </div>
                        <div class="span11 goods-batch-img-list-block J_goodsBatchImg">

                        </div>
                    </div>
                    <div class="span7 goods-info-rightbox">
                        <div class="goods-info-leftborder"></div>
                        <dl class="goods-info-box ">
                            <dt class="goods-info-head">
                                <dl id="J_goodsInfoBlock">
                            <dt id="goodsName" class="goods-name"> {{$goods->name}}</dt>
                            <dd class="goods-subtitle">
                                <p> {{$goods->suggest}}</p>
                            </dd>
                            <dd class="goods-info-head-tip">
                                <ul>
                                    <li class="others"> <i>{{$goods->slogan}}</i>{{$goods->depict}}</li>
                                </ul>
                            </dd>
                            <dd class="goods-info-head-price clearfix">
                                <b class="J_mi_goodsPrice">{{$goods->discount_price}}</b>
                                <i>&nbsp;元</i>
                                <del> <span class="J_mi_marketPrice">{{$goods->cost_price}}元</span> </del>
                            </dd>
                            {{--销售属性--}}
                            {!! $GoodsPresenter->getMarketAttribute($goods->attributes['marketAttribute'])!!}

                            <dd class="goods-info-head-cart" id="goodsDetailBtnBox">
                                <a href="" id="goodsDetailAddCartBtn" class="btn  btn-primary goods-add-cart-btn" data-disabled="true" data-gid="0" data-package="0">
                                    <i class="iconfont"></i>加入购物车
                                </a>
                                <a id="goodsDetailCollectBtn" data-isfavorite="false" class=" btn btn-gray  goods-collect-btn ">
                                    <i class="iconfont default"></i>
                                    <i class="iconfont red"></i>
                                    <i class="iconfont red J_redCopy"></i>喜欢
                                </a>
                            </dd>
                            <dd class="goods-info-head-userfaq">
                                <ul>
                                    <li class="J_scrollHref" data-href="#goodsComment" data-index="2">
                                        <i class="iconfont"></i> 评价<b>{{$goods->comments}}</b>
                                    </li>
                                    <li class="J_scrollHref mid" data-href="#goodsFaq" data-index="3">
                                        <i class="iconfont"></i> 提问<b>{{$goods->questions}}</b>
                                    </li>
                                    <li class="J_scrollHref " data-href="#goodsComment" data-index="2">
                                        <i class="iconfont"></i> 满意度<b>99.1%</b>
                                    </li>
                                </ul>
                            </dd>
                        </dl>
                        </dt>
                        <dd class="goods-info-foot">
                            <a href="">
                                <span class="iconfont"></span>
                                查看更多
                            </a>
                        </dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
        <div class="full-screen-border"></div>
        <div class="goods-detail-nav" id="goodsDetail">
            <div class="container">
                <ul class="detail-list J_detailNav J_originNav">
                    <li class="current detail-nav">
                        <a data-href="#goodsDesc" data-index="0" class="J_scrollHref" >详情描述</a>
                    </li>
                    <li class="detail-nav">
                        <a data-href="#goodsParam" data-index="1" class="J_scrollHref" >规格参数</a>
                    </li>

                    <li class="detail-nav">
                        <a data-href="#goodsComment" data-index="2" class="J_scrollHref" >评价晒单 <i>({{$goods->comments}})</i></a>
                    </li>

                    <li class="last detail-nav">
                        <a data-href="#goodsFaq" data-index="3" class="J_scrollHref" >商品提问 <i>({{$goods->questions}})</i></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="goods-detail-desc J_itemBox" id="goodsDesc">
            <div class="container">
                <div class="shape-container">
                    {!!$goods->desc!!}
                </div>
            </div>
        </div>
        <div class="goods-detail-nav-name-block J_itemBox" id="goodsParam">
            <div class="container main-block">
                <div class="border-line"></div>
                <h2 class="nav-name">规格参数</h2>
            </div>
        </div>
        <!--规格-->
        <div class="goods-detail-param  J_itemBox">
            <div class="container">
                <ul class="param-list">
                    <li class="goods-img">
                        <img src="{{$goods->gallerys[0]->img_url}}" alt="">
                    </li>
                    <li class="goods-tech-spec">
                        <dl>
                            <dd>
                                <ul>
                                    {!! $GoodsPresenter->getSimpleAttribute($goods->attributes['simpleAttribute'])!!}
                                </ul>
                            </dd>
                        </dl>
                    </li>
                </ul>
            </div>
        </div>
        <!--规格-->

        <!--售后服务与退换货流程-->
        <div class="goods-detail-service-block">
            <div class="container">
                <div class="row">
                    <div class="span8 service-day-img">
                        <img src="//s01.mifile.cn/i/item/service.jpg" alt="">

                    </div>
                    <div class="span11 service-detail-block">
                        <div class="service-detail-content" id="J_serviceCon">
                            <h3 class="title"></h3>
                            <h4 class="sub-title">  </h4>
                            <p class="content">
                                1）自签收之日起，在不影响二次销售的情况下(保证洗水标、吊牌完整，无穿着与水洗痕迹等)，小米承担七天无理由退货，十五天换货。<br>
                                2）退换凭证：
                                用户提供发货票或三包凭证，以及发货票底联或者发货票（底联）复印件等有效证据。<br>
                                3）质量问题的退换，用户在线咨询，上传凭证，经确认后寄回检测，然后进入相关流程。<br>
                                4）服装类为特殊商品，暂不支持上门取货服务，给您带来的不便请谅解；<br>
                                5）小米之家暂不办理自提和退换货业务，现阶段仅提供网上办理及电话办理两种方式；
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--售后服务与退换货流程-->
        <div id="J_recentGoods" style="margin-top:100px;padding-bottom:10px;"></div>
    </div>
    <div class="goods-sub-bar" id="goodsSubBar" style="top:0px;">

        <div class="container">
            <div class="row">
                <div class="span4">
                    <dl class="goods-sub-bar-info clearfix">
                        <dt>
                            <img src="{{$goods->gallerys[0]->thumb_url}}">
                        </dt>
                        <dd>
                            <strong>{{$goods->name}}</strong>
                            <p>
                                <em><span class="J_mi_goodsPrice">{{$goods->discount_price}}</span>元</em>
                                <del><span class="J_mi_marketPrice">{{$goods->cost_price}}元</span></del>
                            </p>
                        </dd>
                    </dl>
                </div>
                <div class="span12">
                    <div class="goods-desc-menu" id="goodsSubMenu">
                        <ul class="detail-list J_pro_related_btns  J_detailNav">
                            <li class="current">
                                <a data-href="#goodsDesc" data-index="0" class="J_scrollHref" >详情描述</a>
                            </li>
                            <li>
                                <a data-href="#goodsParam" data-index="1" class="J_scrollHref">规格参数</a>
                            </li>
                            <li>
                                <a data-href="#goodsComment" data-index="2" class="J_scrollHref" >评价晒单 <i>({{$goods->comments}})</i></a>
                            </li>
                            <li>
                                <a data-href="#goodsFaq" data-index="3" class="J_scrollHref">商品提问 <i>({{$goods->questions}})</i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="span4">
                    <div class="fr" id="goodsSubBarBtnBox">
                        <a href="" class="btn btn-primary goods-add-cart-btn" id="goodsSubBarAddCartBtn" data-disabled="true" data-gid="0" data-package="0">
                            <i class="iconfont"></i>加入购物车
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="{{url('js/goodsDetail.min.js')}}"></script>
@endsection