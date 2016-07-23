@extends('layouts.app')

@section('title')
    <title>小米手机原装配件——小米手机官网(耳机_保护套_移动电源_手机贴膜_蓝牙设备) 在线购买</title>
    <meta name="description" content="小米手机原装配件官方正品包含小米手机个性后盖、小米手机耳机、手机保护壳、小米手机屏幕贴膜、蓝牙设备等品质保障，服务一流。" />
    <meta name="keywords" content="小米手机,原装配件,耳机,移动电源,电池,后盖,米兔,贴膜" />
@endsection
@section('header')
    <link rel="stylesheet" type="text/css" href="{{url('css/list.min.css')}}">
@endsection
@section('content')
    @inject('categoryPresenter', 'App\Presenters\CategoryPresenter')
    <div class="breadcrumbs">
        <div class="container">
            {!! $categoryPresenter->getCategoryPathHtml($category['path']) !!}
        </div>
    </div>
    <div class="container">
        <div class="filter-box">
            {{--分类--}}
            {!!$categoryPresenter->getCategoryHtml($category['cates'],$category['params'])!!}
            {{--机型--}}
            {!!$categoryPresenter->getMachinesHtml($category['machines'],$category['params']) !!}
            {{--品牌--}}
            {!!$categoryPresenter->getBrandHtml($category['brands'],$category['params']) !!}

        </div>
    </div>
    <div class="content">
        <div class="container">
            <div class="order-list-box clearfix">
                <ul class="order-list">
                    {!!$categoryPresenter->getCategoryTypeHtml($category['params'],0,'推荐') !!}
                    {!!$categoryPresenter->getCategoryTypeHtml($category['params'],1,'新品') !!}
                    {!!$categoryPresenter->getCategoryTypeHtml($category['params'],2,'价格') !!}
                    {!!$categoryPresenter->getCategoryTypeHtml($category['params'],3,'评论最多') !!}
                </ul>
            </div>
            <div class="goods-list-box">
                <div class="goods-list clearfix">
                    @foreach ($category['goods'] as $goods)
                    <div class="goods-item">
                        <div class="figure figure-img">
                            <a href="{{route('info',$goods->id)}}">
                                <img src="{{$goods->image}}" width="200" height="200" alt="" />
                            </a>
                        </div>
                        <p class="desc"></p>
                        <h2 class="title"><a href="">{{$goods->name}}</a></h2>
                        <p class="price">{{$goods->discount_price}}元</p>
                        <div class="actions clearfix">
                            <a class="btn-like J_likeGoods" data-cid="1155000011" href="javascript: void(0);">
                                <i class="iconfont">&#xe62d;</i>
                                <span>喜欢</span>
                            </a>
                            <a class="btn-buy J_buyGoods" data-gid="2155000005" href="">
                                <span>加入购物车</span> <i class="iconfont">&#xe60a;</i>
                            </a>
                        </div>
                        <div class="flags">
                        </div>
                        <div class="notice"></div>
                    </div>
                    @endforeach
                </div>
                {!!$category['goods']->links()!!}

            </div>
        </div>
        <div id="J_renovateWrap" class="xm-recommend-container"></div>
    </div>
@endsection
@section('script')
    <script src="{{url('js/goodsList.min.js')}}"></script>
@endsection