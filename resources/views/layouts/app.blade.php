<html lang="zh-CN">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta charset="UTF-8">
    @yield('title')
    <meta name="viewport" content="width=1226">
    <link rel="shortcut icon" href="//s01.mifile.cn/favicon.ico" type="image/x-icon">
    <link rel="icon" href="//s01.mifile.cn/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="{{url('css/base.min.css')}}" />
    @yield('header')
</head>

<body>
@inject('homePresenter', 'App\Presenters\BasePresenter')
<div class="site-topbar">
    <div class="container">
        <div class="topbar-nav">
            <a rel="nofollow" href="">小米网</a>
            <span class="sep">|</span>
            <a rel="nofollow" href="" target="_blank">MIUI</a>
            <span class="sep">|</span>
            <a rel="nofollow" href="" target="_blank">米聊</a>
            <span class="sep">|</span>
            <a rel="nofollow" href="" target="_blank">游戏</a>
            <span class="sep">|</span>
            <a rel="nofollow" href="" target="_blank">多看阅读</a>
            <span class="sep">|</span>
            <a rel="nofollow" href="" target="_blank">云服务</a>
            <span class="sep">|</span>
            <a rel="nofollow" href="" target="_blank">小米网移动版</a>
            <span class="sep">|</span>
            <a rel="nofollow" href="" target="_blank">问题反馈</a>
        </div>
        <div class="topbar-cart topbar-cart-filled" id="J_miniCartTrigger">
            <a rel="nofollow" class="cart-mini" id="J_miniCartBtn" href="">
                <i class="iconfont">  </i> 购物车<span class="cart-mini-num J_cartNum">（1）</span></a>
            <div class="cart-menu" id="J_miniCartMenu" style="display: none;">
                <div class="loading">
                    <div class="loader"></div>
                </div>
            </div>
        </div>
        <div class="topbar-info" id="J_userInfo">
            <a rel="nofollow" class="link" href="">登录</a>
            <span class="sep">|</span><a rel="nofollow" class="link" href="">注册</a>
        </div>
    </div>
</div>
<div class="site-header">
    <div class="container">
        <div class="header-logo">
            <a class="logo ir" href="" title="小米官网">小米官网</a>
            <div class="doodle doodle-20160517" style="display: block;">
                <a class="link-block" href="" target="_blank">看直播</a>
            </div>
        </div>
        <div class="header-nav">
            <ul class="nav-list J_navMainList clearfix">
                {{--顶部侧边栏菜单--}}
                {!! $homePresenter->getNavHtml($navs)!!}
                {{--顶部导航菜单--}}
                {!! $homePresenter->getMenusHtml($menus)!!}
            </ul>
        </div>
        <div class="header-search">
            <form id="J_searchForm" class="search-form clearfix" action="//search.mi.com/search" method="get">
                <label for="search" class="hide">站内搜索</label>
                <input class="search-text" type="search" id="search" name="keyword" autocomplete="off" data-search-config="{'defaultWords':[{'Key':'小米手机5','Rst':8},{'Key':'空气净化器2','Rst':1},{'Key':'活塞耳机','Rst':3},{'Key':'小米路由器','Rst':8},{'Key':'移动电源','Rst':26},{'Key':'运动相机','Rst':1},{'Key':'小蚁摄像机','Rst':2},{'Key':'小米体重秤','Rst':1},{'Key':'小米插线板','Rst':13},{'Key':'配件优惠套装','Rst':31}]}">
                <input type="submit" class="search-btn iconfont" value="">
                <div class="search-hot-words">
                    <a href="">小米手机4c</a>
                    <a href="">平衡车</a>
                </div>
                <div id="J_keywordList" class="keyword-list hide">
                    <ul class="result-list"></ul>
                </div>
            </form>
        </div>
    </div>
</div>
{{--主体内容--}}
@yield('content')

<div class="site-footer">
    <div class="container">
        <div class="footer-service">
            <ul class="list-service clearfix">
                <li><a rel="nofollow" href="" target="_blank"><i class="iconfont"></i>1小时快修服务</a></li>
                <li><a rel="nofollow" href="" target="_blank"><i class="iconfont"></i>7天无理由退货</a></li>
                <li><a rel="nofollow" href="" target="_blank"><i class="iconfont"></i>15天免费换货</a></li>
                <li><a rel="nofollow" href="" target="_blank"><i class="iconfont"></i>满150元包邮</a></li>
                <li><a rel="nofollow" href="" target="_blank"><i class="iconfont"></i>520余家售后网点</a></li>
            </ul>
        </div>
        <div class="footer-links clearfix">

            <dl class="col-links col-links-first">
                <dt>帮助中心</dt>

                <dd><a rel="nofollow" href="" target="_blank">购物指南</a></dd>

                <dd><a rel="nofollow" href="" target="_blank">支付方式</a></dd>

                <dd><a rel="nofollow" href="" target="_blank">配送方式</a></dd>

            </dl>

            <dl class="col-links ">
                <dt>服务支持</dt>

                <dd><a rel="nofollow" href="" target="_blank">售后政策</a></dd>

                <dd><a rel="nofollow" href="" target="_blank">自助服务</a></dd>

                <dd><a rel="nofollow" href="" target="_blank">相关下载</a></dd>

            </dl>

            <dl class="col-links ">
                <dt>线下门店</dt>

                <dd><a rel="nofollow" href="" target="_blank">小米之家</a></dd>

                <dd><a rel="nofollow" href="" target="_blank">服务网点</a></dd>

                <dd><a rel="nofollow" href="" target="_blank">零售网点</a></dd>

            </dl>

            <dl class="col-links ">
                <dt>关于小米</dt>

                <dd><a rel="nofollow" href="" target="_blank">了解小米</a></dd>

                <dd><a rel="nofollow" href="" target="_blank">加入小米</a></dd>

                <dd><a rel="nofollow" href="" target="_blank">联系我们</a></dd>

            </dl>

            <dl class="col-links ">
                <dt>关注我们</dt>

                <dd><a rel="nofollow" href="" target="_blank">新浪微博</a></dd>

                <dd><a rel="nofollow" href=""
                       target="_blank">小米部落</a></dd>

                <dd><a rel="nofollow" href="" data-toggle="modal">官方微信</a></dd>

            </dl>

            <dl class="col-links ">
                <dt>特色服务</dt>

                <dd><a rel="nofollow" href="" target="_blank">F 码通道</a></dd>

                <dd><a rel="nofollow" href="" target="_blank">小米移动</a></dd>

                <dd><a rel="nofollow" href="" target="_blank">防伪查询</a></dd>

            </dl>

            <div class="col-contact">
                <p class="phone">400-100-5678</p>
                <p><span class="J_serviceTime-normal" style="">周一至周日 8:00-18:00</span>
                    <span class="J_serviceTime-holiday" style="display:none;">2月7日至13日服务时间 9:00-18:00</span>
                    <br>（仅收市话费）</p>
                <a rel="nofollow" class="btn btn-line-primary btn-small" href="" target="_blank"><i class="iconfont"></i> 24小时在线客服</a>
            </div>
        </div>
    </div>
</div>
<div class="site-info">
    <div class="container">
        <div class="logo ir">小米官网</div>
        <div class="info-text">
            <p class="sites">
                <a rel="nofollow" href="" target="_blank">小米网</a><span class="sep">|</span>
                <a rel="nofollow" href="" target="_blank">MIUI</a><span class="sep">|</span>
                <a rel="nofollow" href="" target="_blank">米聊</a><span class="sep">|</span>
                <a rel="nofollow" href="" target="_blank">多看书城</a><span class="sep">|</span>
                <a rel="nofollow" href="" target="_blank">小米路由器</a><span class="sep">|</span>
                <a rel="nofollow" href=""  target="_blank">视频电话</a><span class="sep">|</span>
                <a rel="nofollow" href="" target="_blank">小米后院</a><span class="sep">|</span>
                <a rel="nofollow" href="" target="_blank">小米天猫店</a><span class="sep">|</span>
                <a rel="nofollow" href="" target="_blank">小米淘宝直营店</a><span class="sep">|</span>
                <a rel="nofollow" href="" target="_blank">小米网盟</a><span class="sep">|</span>
                <a rel="nofollow" href="" target="_blank">问题反馈</a><span class="sep">|</span>
            </p>
            <p>©<a href="" target="_blank" title="mi.com">mi.com</a> 京ICP证110507号 京ICP备10046444号 <a rel="nofollow" href="" target="_blank">京公网安备11010802020134号 </a><a rel="nofollow"
                                                                                                                                                                       href="" target="_blank">京网文[2014]0059-0009号</a>

                <br> 违法和不良信息举报电话：185-0130-1238, 本网站所列数据，除特殊说明，所有数据均出自我司实验室测试</p>
        </div>
        <div class="info-links">
            <a rel="nofollow" href="" target="_blank"><img rel="nofollow" src="{{url('img/seal.png')}}" alt="TRUSTe Privacy Certification"></a>
            <a rel="nofollow" href="" target="_blank"><img rel="nofollow" src="{{url('img/v-logo-2.png')}}" alt="诚信网站"></a>
            <a rel="nofollow" href="" target="_blank"><img rel="nofollow" src="{{url('img/v-logo-1.png')}}" alt="可信网站"></a>
            <a rel="nofollow" href="" target="_blank"><img rel="nofollow" src="{{url('img/v-logo-3.png')}}" alt="网上交易保障中心"></a>
        </div>
    </div>
    <div class="slogan ir">探索黑科技，小米为发烧而生</div>
</div>
<script type="text/javascript" src="{{url('js/base.min.js')}}" ></script>
<script type="text/javascript" src="{{url('js/echo.js')}}"></script>
<script>
    $(function(){
        echo.init({
            offset: 100,
            throttle: 250,
            unload: false
        });
    });
</script>
@yield('script')
</body>
</html>