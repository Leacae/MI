@extends('layouts.app')
@section('title')
    <title>小米官网——小米手机、红米手机、小米电视官方正品专卖网站11111</title>
    <meta name="description" content="小米官方网站包含小米手机系列小米NOTE、小米4，红米手机系列红米Note、红米2/2A还有小米电视40/49/55英寸、手环、移动电源、运动相机,小米智能家居系列路由器、空气净化器、体重秤、插线板等小米商城均有售。">
    <meta name="keywords" content="小米,小米手机,小米官网,红米手机,小米商城,小米电视">
@endsection
@section('header')
    <link rel="stylesheet" href="{{url('css/index.min.css')}}" />
@endsection

@section('content')
    @inject('homePresenter', 'App\Presenters\HomePresenter')
    <div class="home-hero-container container">
        <div class="home-hero">
            <div class="home-hero-slider">
                    {!! $homePresenter->getSliderHtml($sliders)!!}
            </div>

            <div class="home-hero-sub row">
                <div class="span4">
                    <ul class="home-channel-list clearfix">
                        <li class="top left">
                            <a href="" target="_blank"  ><i class="iconfont"></i>电信专场</a>
                        </li>
                        <li class="top">
                            <a href="" target="_blank"><i class="iconfont"></i>企业团购</a>
                        </li>
                        <li class="top">
                            <a href="" target="_blank"><i class="iconfont"></i>官翻产品</a>
                        </li>
                        <li class="left">
                            <a href="" target="_blank"><i class="iconfont"></i>小米移动</a>
                        </li>
                        <li class="">
                            <a href="" target="_blank"><i class="iconfont"></i>以旧换新</a>
                        </li>
                        <li class="">
                            <a href="" target="_blank"><i class="iconfont"></i>话费充值</a>
                        </li>
                    </ul>
                </div>
                <div class="span16" id="J_homePromo" data-stat-title="焦点图下方小图">
                    {!! $homePresenter->getPromoHtml($promos)!!}
                </div>
            </div>
        </div>

        <div class="home-star-goods xm-carousel-container" id="J_homeStar">
            <div class="xm-plain-box">
                <div class="box-hd">
                    <h2 class="title">小米明星单品</h2>
                    <div class="more">
                        <div class="xm-controls xm-controls-line-small xm-carousel-controls">
                            <a class="control control-prev iconfont control-disabled" href="" data-action="prev"></a>
                            <a class="control control-next iconfont" href="" data-action="next"></a>
                        </div>
                    </div>
                </div>
                <div class="box-bd">
                    {!! $homePresenter->getStarGoodsHtml($starGoods) !!}
                </div>
            </div>
        </div>
    </div>
    <div class="page-main home-main">
        <div class="container">
            <div id="smart" class="home-brick-box home-brick-row-2-box xm-plain-box J_itemBox J_brickBox is-visible loaded" data-from-stat="false">
                <div class="box-hd">
                    <h2 class="title">智能硬件</h2>
                    <div class="more J_brickNav"><a class="more-link" href="" target="_blank">查看全部<i class="iconfont"></i></a></div>
                </div>
                <div class="box-bd J_brickBd">
                    <div class="row">
                        <div class="span4 span-first">
                            <ul class="brick-promo-list clearfix">
                                <li class="brick-item brick-item-l">
                                    <a href=""  target="_blank"  ><img src="img/T1RHJgBmJv1RXrhCrK.jpg" width="160" height="160" alt=""></a>
                                </li>
                            </ul>
                        </div>
                        <div class="span16">
                            <ul class="brick-list clearfix">
                                <li class="brick-item brick-item-m brick-item-m-2" data-gid="2161200066">
                                    <div class="figure figure-img">
                                        <a href=""     target="_blank">
                                            <img src="img/T1OVC_ByY_1RXrhCrK!220x220.jpg" width="160" height="160" alt="米家压力IH电饭煲"> </a>
                                    </div>
                                    <h3 class="title"><a href="" target="_blank"    >米家压力IH电饭煲</a></h3>
                                    <p class="desc">智能烹饪，5月24日早10点现货</p>
                                    <p class="price"> <span class="num">999</span>元 </p>
                                    <div class="flag flag-new">新品</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div id="match" class="home-brick-box home-brick-row-2-box xm-plain-box J_itemBox J_brickBox is-visible loaded" data-from-stat="true" data-region-stat="1">
                <div class="box-hd">
                    <h2 class="title">搭配</h2>
                    <div class="more J_brickNav">
                        <ul class="tab-list J_brickTabSwitch" data-tab-target="match-content">
                            <li class="tab-active">热门</li>
                            <li>耳机音箱</li>
                            <li>电源</li>
                            <li>电池存储卡</li>
                        </ul>
                    </div>
                </div>
                <div class="box-bd J_brickBd">
                    <div class="row">
                        <div class="span4 span-first">
                            <ul class="brick-promo-list clearfix">
                                <li class="brick-item brick-item-m">
                                    <a href=""     target="_blank"  ><img src="img/T1qpJjBCZv1RXrhCrK.jpg" width="160" height="160" alt=""></a>
                                </li>
                                <li class="brick-item brick-item-m">
                                    <a href=""     target="_blank"  ><img src="img/T1A5EjB4Cv1RXrhCrK.jpg" width="160" height="160" alt=""></a>
                                </li>
                            </ul>
                        </div>
                        <div class="span16">
                            <div id="match-content" class="tab-container">
                                <ul class="brick-list tab-content clearfix tab-content-active J_recommendActive">
                                    <li class="brick-item brick-item-m" data-gid="2151900016">
                                        <div class="figure figure-img">
                                            <a href=""     data-stat-text="小米移动电源10000mAh" target="_blank"      ><img src="img/T12HJvByEv1RXrhCrK.jpg?width=150&amp;height=150" width="150" height="150" alt="小米移动电源10000mAh"></a>
                                        </div>
                                        <h3 class="title"> <a href=""     data-stat-text="小米移动电源10000mAh" target="_blank"        >  小米移动电源10000mAh  </a></h3>
                                        <p class="price"> <span class="num">79</span>元 </p>
                                        <p class="rank">17万人评价</p>
                                        <div class="review-wrapper">
                                            <a href=""     data-stat-text="小米移动电源10000mAh" target="_blank"      >
                                                <span class="review">小米移动电源10400我也买了.比这款大.重,还是喜...</span> <span class="author"> 来自于 笑致天下 的评价 <span class="date"></span> </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2161200004">
                                        <div class="figure figure-img">
                                            <a href=""     data-stat-text="小米活塞耳机 基础版" target="_blank"      ><img src="img/T1WxYvB_xv1RXrhCrK.jpg?width=150&amp;height=150" width="150" height="150" alt="小米活塞耳机 基础版"></a>
                                        </div>
                                        <h3 class="title"> <a href=""     data-stat-text="小米活塞耳机 基础版" target="_blank"        >  小米活塞耳机 基础版  </a></h3>
                                        <p class="price"> <span class="num">29</span>元 </p>
                                        <p class="rank">2.1万人评价</p>
                                        <div class="review-wrapper">
                                            <a href=""     data-stat-text="小米活塞耳机 基础版" target="_blank"      >
                                                <span class="review">价钱优惠，音质好。值得推荐</span> <span class="author"> 来自于 1006768313 的评价 <span class="date"></span> </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2152400008">
                                        <div class="figure figure-img">
                                            <a href=""     data-stat-text="小米蓝牙耳机" target="_blank"      ><img src="img/T190DvB4dv1RXrhCrK.jpg?width=150&amp;height=150" width="150" height="150" alt="小米蓝牙耳机"></a>
                                        </div>
                                        <h3 class="title"> <a href=""     data-stat-text="小米蓝牙耳机" target="_blank"        >  小米蓝牙耳机  </a></h3>
                                        <p class="price"> <span class="num">79</span>元 </p>
                                        <p class="rank">7.4万人评价</p>
                                        <div class="review-wrapper">
                                            <a href=""     data-stat-text="小米蓝牙耳机" target="_blank"      >
                                                <span class="review">小米的产品值得信赖，用了一段时间，无论是听歌，打电话...</span> <span class="author"> 来自于 气功流 的评价 <span class="date"></span> </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2160900011">
                                        <div class="figure figure-img">
                                            <a href=""     data-stat-text="小米移动电源10000mAh 高配版" target="_blank"      ><img src="img/T1eSZgBjVT1RXrhCrK.jpg?width=150&amp;height=150" width="150" height="150" alt="小米移动电源10000mAh 高配版"></a>
                                        </div>
                                        <h3 class="title"> <a href=""     data-stat-text="小米移动电源10000mAh 高配版" target="_blank"        >  小米移动电源10000mAh 高配版  </a></h3>
                                        <p class="price"> <span class="num">149</span>元 </p>
                                        <p class="rank">8034人评价</p>
                                        <div class="review-wrapper">
                                            <a href=""     data-stat-text="小米移动电源10000mAh 高配版" target="_blank"      >
                                                <span class="review">手感超舒服，有USB C输入充电，以后不用到处换插头了</span> <span class="author"> 来自于 玻璃樽81 的评价 <span class="date"></span> </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2154500016">
                                        <div class="figure figure-img">
                                            <a href=""     data-stat-text="小米圈铁耳机" target="_blank"      ><img src="img/T1HWEjBvDT1RXrhCrK.jpg?width=150&amp;height=150" width="150" height="150" alt="小米圈铁耳机"></a>
                                        </div>
                                        <h3 class="title"> <a href=""     data-stat-text="小米圈铁耳机" target="_blank"        >  小米圈铁耳机  </a></h3>
                                        <p class="price"> <span class="num">99</span>元 </p>
                                        <p class="rank">3.4万人评价</p>
                                        <div class="review-wrapper">
                                            <a href=""     data-stat-text="小米圈铁耳机" target="_blank"      >
                                                <span class="review">音质太棒了。每天跑步时候带着它，带着音乐，真舒服。身...</span> <span class="author"> 来自于 248415831 的评价 <span class="date"></span> </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2151400001">
                                        <div class="figure figure-img">
                                            <a href=""     data-stat-text="小米插线板" target="_blank"      ><img src="img/pms_1463579883.27084326.jpg?width=150&amp;height=150" width="150" height="150" alt="小米插线板"></a>
                                        </div>
                                        <h3 class="title"> <a href=""     data-stat-text="小米插线板" target="_blank"        >  小米插线板  </a></h3>
                                        <p class="price"> <span class="num">49</span>元 </p>
                                        <p class="rank">22.1万人评价</p>
                                        <div class="review-wrapper">
                                            <a href=""     data-stat-text="小米插线板" target="_blank"      >
                                                <span class="review">里面的做工也就是看看工程图介绍，没打开看过。外表的近...</span> <span class="author"> 来自于 江南晴天 的评价 <span class="date"></span> </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2154300022">
                                        <div class="figure figure-img">
                                            <a href=""     data-stat-text="小米小钢炮蓝牙音箱2" target="_blank"      ><img src="img/T1F5K_BjVv1RXrhCrK.jpg?width=150&amp;height=150" width="150" height="150" alt="小米小钢炮蓝牙音箱2"></a>
                                        </div>
                                        <h3 class="title"> <a href=""     data-stat-text="小米小钢炮蓝牙音箱2" target="_blank"        >  小米小钢炮蓝牙音箱2  </a></h3>
                                        <p class="price"> <span class="num">129</span>元 </p>
                                        <p class="rank">4932人评价</p>
                                        <div class="flag flag-new">新品</div>
                                        <div class="review-wrapper">
                                            <a href=""     data-stat-text="小米小钢炮蓝牙音箱2" target="_blank"      >
                                                <span class="review">很精致，小巧可爱，连接成功是女声说话提示。音质很纯很...</span> <span class="author"> 来自于 Cc大坏 的评价 <span class="date"></span> </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-s" data-gid="2161200010">
                                        <div class="figure figure-img">
                                            <a href=""     data-stat-text="小米圈铁耳机 金色" target="_blank"      >
                                                <img src="img/T1ycK_BjYv1RXrhCrK.jpg?width=80&amp;height=80" width="80" height="80" alt="小米圈铁耳机 金色"> </a>
                                        </div>
                                        <h3 class="title"><a href=""     data-stat-text="小米圈铁耳机 金色" target="_blank"        >小米圈铁耳机 金色</a></h3>
                                        <p class="price"><span class="num">99</span>元</p>
                                    </li>
                                    <li class="brick-item brick-item-s">
                                        <div class="figure figure-more">
                                            <a href="" target="_blank"    ><i class="iconfont"></i></a>
                                        </div> <a class="more" href="" target="_blank"    >浏览更多<small>热门</small></a> </li>
                                </ul>
                                <ul class="brick-list tab-content clearfix tab-content-hide">
                                    <li class="brick-item brick-item-m" data-gid="2161200010">
                                        <div class="figure figure-img">
                                            <a href=""     target="_blank"  ><img src="img/T1ycK_BjYv1RXrhCrK!220x220.jpg" width="150" height="150" alt="小米圈铁耳机"></a>
                                        </div>
                                        <h3 class="title"> <a href=""     target="_blank"    >小米圈铁耳机</a></h3>
                                        <p class="price"> <span class="num">99</span>元 </p>
                                        <p class="rank">3791人评价</p>
                                        <div class="review-wrapper">
                                            <a href=""     target="_blank"  >
                                                <span class="review">客服妹子实话说吧！永远支持国产，永远支持小米。这圈铁...</span> <span class="author"> 来自于 894039435 的评价 <span class="date" data-date="1459507440"></span> </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2152400008">
                                        <div class="figure figure-img">
                                            <a href=""     target="_blank"  ><img src="img/T190DvB4dv1RXrhCrK!220x220.jpg" width="150" height="150" alt="小米蓝牙耳机"></a>
                                        </div>
                                        <h3 class="title"> <a href=""     target="_blank"    >小米蓝牙耳机</a></h3>
                                        <p class="price"> <span class="num">79</span>元 </p>
                                        <p class="rank">7.3万人评价</p>
                                        <div class="review-wrapper">
                                            <a href=""     target="_blank"  >
                                                <span class="review">东西不错，特别轻，以前买过别的蓝牙耳机，带几天就不带...</span> <span class="author"> 来自于 A@然 的评价 <span class="date" data-date="1438603200"></span> </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2144900032">
                                        <div class="figure figure-img">
                                            <a href=""     target="_blank"  ><img src="img/T1jEdgBTDT1RXrhCrK!220x220.jpg" width="150" height="150" alt="1MORE金澈耳机"></a>
                                        </div>
                                        <h3 class="title"> <a href=""     target="_blank"    >1MORE金澈耳机</a></h3>
                                        <p class="price"> <span class="num">99</span>元 </p>
                                        <p class="rank">6450人评价</p>
                                        <div class="review-wrapper">
                                            <a href=""     target="_blank"  >
                                                <span class="review">昨天下单，今天就到了，很是喜欢~买的时候还以为线材和...</span> <span class="author"> 来自于 popchenk 的评价 <span class="date" data-date="1425447960"></span> </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2140400012">
                                        <div class="figure figure-img">
                                            <a href=""     target="_blank"  ><img src="img/T12aWTBy_T1RXrhCrK!220x220.jpg" width="150" height="150" alt="铁三角J100耳机"></a>
                                        </div>
                                        <h3 class="title"> <a href=""     target="_blank"    >铁三角J100耳机</a></h3>
                                        <p class="price"> <span class="num">79</span>元 </p>
                                        <p class="rank">5389人评价</p>
                                        <div class="review-wrapper">
                                            <a href=""     target="_blank"  >
                                                <span class="review">配合viper4fx轻松发挥它的低音和给力的人声，尤...</span> <span class="author"> 来自于 Feson谢增光 的评价 <span class="date" data-date="1405084020"></span> </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2154300023">
                                        <div class="figure figure-img">
                                            <a href=""     target="_blank"  ><img src="img/T1Tfd_BjAv1RXrhCrK!220x220.jpg" width="150" height="150" alt="小米小钢炮蓝牙音箱2"></a>
                                        </div>
                                        <h3 class="title"> <a href=""     target="_blank"    >小米小钢炮蓝牙音箱2</a></h3>
                                        <p class="price"> <span class="num">129</span>元 </p>
                                        <p class="rank">4932人评价</p>
                                        <div class="review-wrapper">
                                            <a href=""     target="_blank"  >
                                                <span class="review">小米节礼券立减50，千值万值啊！物流很快，第二天就到...</span> <span class="author"> 来自于 潇逸云 的评价 <span class="date" data-date="1459536120"></span> </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2154400001">
                                        <div class="figure figure-img">
                                            <a href=""     target="_blank"  ><img src="img/T1d0KQBTxT1RXrhCrK!220x220.jpg" width="150" height="150" alt="小米方盒子蓝牙音箱"></a>
                                        </div>
                                        <h3 class="title"> <a href=""     target="_blank"    >小米方盒子蓝牙音箱</a></h3>
                                        <p class="price"> <span class="num">99</span>元 </p>
                                        <p class="rank">1.3万人评价</p>
                                        <div class="review-wrapper">
                                            <a href=""     target="_blank"  >
                                                <span class="review">声音可以小到只有自己心里能听见，声音可以大到让大家听...</span> <span class="author"> 来自于 243235061 的评价 <span class="date" data-date="1431390120"></span> </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2161800002">
                                        <div class="figure figure-img">
                                            <a href=""     target="_blank"  ><img src="img/T15hZ_BsDv1RXrhCrK!220x220.jpg" width="150" height="150" alt="小米小钢炮蓝牙音箱 青春版"></a>
                                        </div>
                                        <h3 class="title"> <a href=""     target="_blank"    >小米小钢炮蓝牙音箱 青春版</a></h3>
                                        <p class="price"> <span class="num">99</span>元 </p>
                                        <p class="rank">244人评价</p>
                                        <div class="flag flag-new">新品</div>
                                        <div class="review-wrapper">
                                            <a href=""     target="_blank"  >
                                                <span class="review">体积确实小，低音有加强，叮叮当当，我喜欢</span> <span class="author"> 来自于 兆叡 的评价 <span class="date" data-date="1462428180"></span> </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-s" data-gid="2153800022">
                                        <div class="figure figure-img">
                                            <a href=""     target="_blank"  >
                                                <img src="img/T1ajbvB7Kv1RXrhCrK!220x220.jpg" width="80" height="80" alt="睿米车载蓝牙播放器"> </a>
                                        </div>
                                        <h3 class="title"><a href=""     target="_blank"    >睿米车载蓝牙播放器</a></h3>
                                        <p class="price"><span class="num">69</span>元</p>
                                    </li>
                                    <li class="brick-item brick-item-s">
                                        <div class="figure figure-more"><a href="" target="_blank"><i class="iconfont"></i></a></div><a class="more" href="" target="_blank">浏览更多<small>耳机音箱</small></a></li>
                                </ul>
                                <ul class="brick-list tab-content clearfix tab-content-hide">
                                    <li class="brick-item brick-item-m" data-gid="2144800001">
                                        <div class="figure figure-img">
                                            <a href=""     target="_blank"  ><img src="img/T1AcE_Bghv1RXrhCrK.jpg" width="150" height="150" alt="移动电源5000mAh"></a>
                                        </div>
                                        <h3 class="title"> <a href=""     target="_blank"    >移动电源5000mAh</a></h3>
                                        <p class="price"> <span class="num">49</span>元 </p>
                                        <p class="rank">8.1万人评价</p>
                                        <div class="review-wrapper">
                                            <a href=""     target="_blank"  >
                                                <span class="review">之前都不知道，还以为是18650电芯的。拿到手一看这...</span> <span class="author"> 来自于 ywtdzh 的评价 <span class="date" data-date="1428700440"></span> </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2151900018">
                                        <div class="figure figure-img">
                                            <a href=""     target="_blank"  ><img src="img/T1yvV_Bgbv1RXrhCrK.jpg" width="150" height="150" alt="移动电源10000mAh"></a>
                                        </div>
                                        <h3 class="title"> <a href=""     target="_blank"    >移动电源10000mAh</a></h3>
                                        <p class="price"> <span class="num">69</span>元 </p>
                                        <p class="rank">17万人评价</p>
                                        <div class="review-wrapper">
                                            <a href=""     target="_blank"  >
                                                <span class="review">这个小巧玲珑啊，比10400安的小了好多，感觉不错，...</span> <span class="author"> 来自于 LIN翼 的评价 <span class="date" data-date="1435328820"></span> </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2160900011">
                                        <div class="figure figure-img">
                                            <a href=""     target="_blank"  ><img src="img/T1eSZgBjVT1RXrhCrK!220x220.jpg" width="150" height="150" alt="移动电源10000mAh 高配版"></a>
                                        </div>
                                        <h3 class="title"> <a href=""     target="_blank"    >移动电源10000mAh 高配版</a></h3>
                                        <p class="price"> <span class="num">149</span>元 </p>
                                        <p class="rank">8034人评价</p>
                                        <div class="review-wrapper">
                                            <a href=""     target="_blank"  >
                                                <span class="review">很薄，充电快，方便携带</span> <span class="author"> 来自于 CURGT丶FaKer 的评价 <span class="date" data-date="1457352720"></span> </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2154400015">
                                        <div class="figure figure-img">
                                            <a href=""     target="_blank"  ><img src="img/T1x8J_BgEv1RXrhCrK.jpg" width="150" height="150" alt="移动电源20000mAh"></a>
                                        </div>
                                        <h3 class="title"> <a href=""     target="_blank"    >移动电源20000mAh</a></h3>
                                        <p class="price"> <span class="num">149</span>元 </p>
                                        <p class="rank">3万人评价</p>
                                        <div class="review-wrapper">
                                            <a href=""     target="_blank"  >
                                                <span class="review">以前一直使用10400的版本，买了这个之后，才知道有...</span> <span class="author"> 来自于 呈现逐步 的评价 <span class="date" data-date="1448699280"></span> </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2153300002">
                                        <div class="figure figure-img">
                                            <a href=""     target="_blank"  ><img src="img/T1N0Z_ByCv1RXrhCrK!220x220.jpg" width="150" height="150" alt="ZMI智能移动电源 10000mAh"></a>
                                        </div>
                                        <h3 class="title"> <a href=""     target="_blank"    >ZMI智能移动电源 10000mAh</a></h3>
                                        <p class="price"> <span class="num">129</span>元 </p>
                                        <p class="rank">680人评价</p>
                                        <div class="review-wrapper">
                                            <a href=""     target="_blank"  >
                                                <span class="review">不错，款式新颖，手感好，质量好</span> <span class="author"> 来自于 我带进去 的评价 <span class="date" data-date="1457416260"></span> </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2151400001">
                                        <div class="figure figure-img">
                                            <a href=""     target="_blank"  ><img src="img/T1jMbjB5Jv1RXrhCrK.jpg" width="150" height="150" alt="小米插线板（3孔位+USB）"></a>
                                        </div>
                                        <h3 class="title"> <a href=""     target="_blank"    >小米插线板（3孔位+USB）</a></h3>
                                        <p class="price"> <span class="num">49</span>元 </p>
                                        <p class="rank">22.1万人评价</p>
                                        <div class="flag flag-postfree">2件包邮</div>
                                        <div class="review-wrapper">
                                            <a href=""     target="_blank"  >
                                                <span class="review">东西真心不错，用过最好用的插线板，做工外观没得挑剔，...</span> <span class="author"> 来自于 yinyin19891117 的评价 <span class="date" data-date="1432613940"></span> </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2155200004">
                                        <div class="figure figure-img">
                                            <a href=""     target="_blank"  ><img src="img/T13mDQBjCT1RXrhCrK.jpg" width="150" height="150" alt="小米智能插线板"></a>
                                        </div>
                                        <h3 class="title"> <a href=""     target="_blank"    >小米智能插线板</a></h3>
                                        <p class="price"> <span class="num">69</span>元 </p>
                                        <p class="rank">3444人评价</p>
                                        <div class="flag flag-new">新品</div>
                                        <div class="review-wrapper">
                                            <a href=""     target="_blank"  >
                                                <span class="review">该插排要比插座好多了，无网络可定时开关，可查看负载电...</span> <span class="author"> 来自于 SXWNXP 的评价 <span class="date" data-date="1454107140"></span> </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-s" data-gid="2154500009">
                                        <div class="figure figure-img">
                                            <a href=""     target="_blank"  >
                                                <img src="img/T1Ihd_BTCv1RXrhCrK.jpg" width="80" height="80" alt="小米插线板 5孔位"> </a>
                                        </div>
                                        <h3 class="title"><a href=""     target="_blank"    >小米插线板 5孔位</a></h3>
                                        <p class="price"><span class="num">39</span>元</p>
                                    </li>
                                    <li class="brick-item brick-item-s">
                                        <div class="figure figure-more"><a href="" target="_blank"><i class="iconfont"></i></a></div><a class="more" href="" target="_blank">浏览更多<small>电源</small></a></li>
                                </ul>
                                <ul class="brick-list tab-content clearfix tab-content-hide">
                                    <li class="brick-item brick-item-m" data-gid="2134900578">
                                        <div class="figure figure-img">
                                            <a href=""     target="_blank"  ><img src="img/T1tRJTBjAv1RXrhCrK!220x220.jpg" width="150" height="150" alt="SanDisk 8GB存储卡"></a>
                                        </div>
                                        <h3 class="title"> <a href=""     target="_blank"    >SanDisk 8GB存储卡</a></h3>
                                        <p class="price"> <span class="num">17.9</span>元 <del><span class="num">24.9</span>元</del> </p>
                                        <p class="rank">30.9万人评价</p>
                                        <div class="flag flag-saleoff"> 享8折 </div>
                                        <div class="review-wrapper">
                                            <a href=""     target="_blank"  >
                                                <span class="review">挺好的 用着呢，在这上面买东西好像不需要担心什么</span> <span class="author"> 来自于 米粉_阿达 的评价 <span class="date" data-date="1426957620"></span> </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="1161500023">
                                        <div class="figure figure-img">
                                            <a href=""     target="_blank"  ><img src="img/T1gVCgBjDv1RXrhCrK.jpg" width="150" height="150" alt="紫5镍氢充电电池"></a>
                                        </div>
                                        <h3 class="title"> <a href=""     target="_blank"    >紫5镍氢充电电池</a></h3>
                                        <p class="price"> <span class="num">49</span>元 </p>
                                        <p class="rank">473人评价</p>
                                        <div class="flag flag-new">新品</div>
                                        <div class="review-wrapper">
                                            <a href=""     target="_blank"  >
                                                <span class="review">循环再利用，再也不用担心电池消耗快的问题了，想用就用...</span> <span class="author"> 来自于 比较低调的米粉 的评价 <span class="date" data-date="1462280100"></span> </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2154300020">
                                        <div class="figure figure-img">
                                            <a href=""     target="_blank"  ><img src="img/T1xxVTBghv1RXrhCrK!220x220.jpg" width="150" height="150" alt="彩虹5号电池（10粒装）"></a>
                                        </div>
                                        <h3 class="title"> <a href=""     target="_blank"    >彩虹5号电池（10粒装）</a></h3>
                                        <p class="price"> <span class="num">9.9</span>元 </p>
                                        <p class="rank">5.1万人评价</p>
                                        <div class="review-wrapper">
                                            <a href=""     target="_blank"  >
                                                <span class="review">彩虹的电量，彩虹的心情，彩虹的每一天</span> <span class="author"> 来自于 醉爱你HYA 的评价 <span class="date" data-date="1446808560"></span> </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2155000004">
                                        <div class="figure figure-img">
                                            <a href=""     target="_blank"  ><img src="img/T178EjBjVT1RXrhCrK!220x220.jpg" width="150" height="150" alt="彩虹7号电池（10粒装）"></a>
                                        </div>
                                        <h3 class="title"> <a href=""     target="_blank"    >彩虹7号电池（10粒装）</a></h3>
                                        <p class="price"> <span class="num">9.9</span>元 </p>
                                        <p class="rank">2.5万人评价</p>
                                        <div class="review-wrapper">
                                            <a href=""     target="_blank"  >
                                                <span class="review">很便宜，很实惠，很实用。性价比高。</span> <span class="author"> 来自于 云天^0^ 的评价 <span class="date" data-date="1450624440"></span> </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2151400210">
                                        <div class="figure figure-img">
                                            <a href=""     target="_blank"  ><img src="img/T16XAgB5dT1RXrhCrK!220x220.jpg" width="150" height="150" alt="CR2032纽扣电池"></a>
                                        </div>
                                        <h3 class="title"> <a href=""     target="_blank"    >CR2032纽扣电池</a></h3>
                                        <p class="price"> <span class="num">9</span>元 </p>
                                        <p class="rank">1.1万人评价</p>
                                        <div class="review-wrapper">
                                            <a href=""     target="_blank"  >
                                                <span class="review">商城就可以买到，不用特意出去找了，很方便</span> <span class="author"> 来自于 892726356 的评价 <span class="date" data-date="1438573140"></span> </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2161200012">
                                        <div class="figure figure-img">
                                            <a href=""     target="_blank"  ><img src="img/T1vFEjBbWT1RXrhCrK!220x220.jpg" width="150" height="150" alt="小米USB充电器（4口）"></a>
                                        </div>
                                        <h3 class="title"> <a href=""     target="_blank"    >小米USB充电器（4口）</a></h3>
                                        <p class="price"> <span class="num">69</span>元 </p>
                                        <p class="rank">2327人评价</p>
                                        <div class="review-wrapper">
                                            <a href=""     target="_blank"  >
                                                <span class="review">做工太好了，现在在试用。这精致的作工，真舍不得用。</span> <span class="author"> 来自于 888698906 的评价 <span class="date" data-date="1459600080"></span> </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2154400016">
                                        <div class="figure figure-img">
                                            <a href=""     target="_blank"  ><img src="img/T142A_BXEv1RXrhCrK!220x220.jpg" width="150" height="150" alt="小米车载充电器"></a>
                                        </div>
                                        <h3 class="title"> <a href=""     target="_blank"    >小米车载充电器</a></h3>
                                        <p class="price"> <span class="num">49</span>元 </p>
                                        <p class="rank">1.8万人评价</p>
                                        <div class="review-wrapper">
                                            <a href=""     target="_blank"  >
                                                <span class="review">精致漂亮非常喜欢，充电很快！</span> <span class="author"> 来自于 灰心的人 的评价 <span class="date" data-date="1450188180"></span> </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-s" data-gid="1152400014">
                                        <div class="figure figure-img">
                                            <a href=""     target="_blank"  >
                                                <img src="img/T1_lKvBKZT1RXrhCrK!220x220.jpg" width="80" height="80" alt="红米2/红米2A能量套装"> </a>
                                        </div>
                                        <h3 class="title"><a href=""     target="_blank"    >红米2/红米2A能量套装</a></h3>
                                        <p class="price"><span class="num">69</span>元</p>
                                    </li>
                                    <li class="brick-item brick-item-s">
                                        <div class="figure figure-more"><a href="" target="_blank"><i class="iconfont"></i></a></div><a class="more" href="" target="_blank">浏览更多<small>电池存储卡</small></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="accessories" class="home-brick-box home-brick-row-2-box xm-plain-box J_itemBox J_brickBox is-visible loaded" data-from-stat="true" data-region-stat="1">
                <div class="box-hd">
                    <h2 class="title">配件</h2>
                    <div class="more J_brickNav">
                        <ul class="tab-list J_brickTabSwitch" data-tab-target="accessories-content">
                            <li class="tab-active">热门</li>
                            <li>保护套</li>
                            <li>后盖</li>
                            <li>贴膜</li>
                            <li>其他配件</li>
                        </ul>
                    </div>
                </div>
                <div class="box-bd J_brickBd">
                    <div class="row">
                        <div class="span4 span-first">
                            <ul class="brick-promo-list clearfix">
                                <li class="brick-item brick-item-m">
                                    <a href=""     target="_blank"  ><img src="img/T18yZjB5Zv1RXrhCrK.jpg" width="160" height="160" alt=""></a>
                                </li>
                                <li class="brick-item brick-item-m">
                                    <a href=""     target="_blank"  ><img src="img/T1X5D_ByA_1RXrhCrK.jpg" width="160" height="160" alt=""></a>
                                </li>
                            </ul>
                        </div>
                        <div class="span16">
                            <div id="accessories-content" class="tab-container">
                                <ul class="brick-list tab-content clearfix tab-content-active J_recommendActive">
                                    <li class="brick-item brick-item-m" data-gid="2151500011">
                                        <div class="figure figure-img">
                                            <a href=""     data-stat-text="小米自拍杆" target="_blank"      ><img src="img/T1_SDgB4KT1RXrhCrK.jpg?width=150&amp;height=150" width="150" height="150" alt="小米自拍杆"></a>
                                        </div>
                                        <h3 class="title"> <a href=""     data-stat-text="小米自拍杆" target="_blank"        >  小米自拍杆  </a></h3>
                                        <p class="price"> <span class="num">49</span>元 </p>
                                        <p class="rank">6.7万人评价</p>
                                        <div class="review-wrapper">
                                            <a href=""     data-stat-text="小米自拍杆" target="_blank"      >
                                                <span class="review">自拍神器，买了两个了，上个是在小米之家买的，可惜两个...</span> <span class="author"> 来自于 ㄣ蛐蛐 的评价 <span class="date"></span> </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2153000001">
                                        <div class="figure figure-img">
                                            <a href=""     data-stat-text="多彩便携USB线 120cm" target="_blank"      ><img src="img/T1b.K_Bj_T1RXrhCrK.jpg?width=150&amp;height=150" width="150" height="150" alt="多彩便携USB线 120cm"></a>
                                        </div>
                                        <h3 class="title"> <a href=""     data-stat-text="多彩便携USB线 120cm" target="_blank"        >  多彩便携USB线 120cm  </a></h3>
                                        <p class="price"> <span class="num">19</span>元 </p>
                                        <p class="rank">6.5万人评价</p>
                                        <div class="review-wrapper">
                                            <a href=""     data-stat-text="多彩便携USB线 120cm" target="_blank"      >
                                                <span class="review">拿到数据线，打开包装一看，惊奇地发现，原来这面条线是...</span> <span class="author"> 来自于 末忆▽ 的评价 <span class="date"></span> </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2144900003">
                                        <div class="figure figure-img">
                                            <a href=""     data-stat-text="功夫米兔手机支架" target="_blank"      ><img src="img/T1_8YvBKJT1RXrhCrK.jpg?width=150&amp;height=150" width="150" height="150" alt="功夫米兔手机支架"></a>
                                        </div>
                                        <h3 class="title"> <a href=""     data-stat-text="功夫米兔手机支架" target="_blank"        >  功夫米兔手机支架  </a></h3>
                                        <p class="price"> <span class="num">19</span>元 </p>
                                        <p class="rank">1.6万人评价</p>
                                        <div class="review-wrapper">
                                            <a href=""     data-stat-text="功夫米兔手机支架" target="_blank"      >
                                                <span class="review">有了它，每当自己失意的时候看看它就有斗志啦，那眼神真...</span> <span class="author"> 来自于 辰锡酷 的评价 <span class="date"></span> </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2154900023">
                                        <div class="figure figure-img">
                                            <a href=""     data-stat-text="青米USB快速充电数据线" target="_blank"      ><img src="img/T1l9WjBTbT1RXrhCrK.jpg?width=150&amp;height=150" width="150" height="150" alt="青米USB快速充电数据线"></a>
                                        </div>
                                        <h3 class="title"> <a href=""     data-stat-text="青米USB快速充电数据线" target="_blank"        >  青米USB快速充电数据线  </a></h3>
                                        <p class="price"> <span class="num">14.9</span>元 </p>
                                        <p class="rank">9281人评价</p>
                                        <div class="review-wrapper">
                                            <a href=""     data-stat-text="青米USB快速充电数据线" target="_blank"      >
                                                <span class="review">很喜欢，很精致，很好用！</span> <span class="author"> 来自于 334530729 的评价 <span class="date"></span> </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2135200033">
                                        <div class="figure figure-img">
                                            <a href=""     data-stat-text="小米随身WIFI" target="_blank"      ><img src="img/T1zL_vByCT1RXrhCrK.jpg?width=150&amp;height=150" width="150" height="150" alt="小米随身WIFI"></a>
                                        </div>
                                        <h3 class="title"> <a href=""     data-stat-text="小米随身WIFI" target="_blank"        >  小米随身WIFI  </a></h3>
                                        <p class="price"> <span class="num">19.9</span>元 </p>
                                        <p class="rank">29.4万人评价</p>
                                        <div class="review-wrapper">
                                            <a href=""     data-stat-text="小米随身WIFI" target="_blank"      >
                                                <span class="review">好好用哦，没想到这么个小东西就可以去蹭网了！</span> <span class="author"> 来自于 蔡剑文 的评价 <span class="date"></span> </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2154900055">
                                        <div class="figure figure-img">
                                            <a href=""     data-stat-text="苹果Lightning to USB数据线" target="_blank"      ><img src="img/T1AmJgBsKT1RXrhCrK.jpg?width=150&amp;height=150" width="150" height="150" alt="苹果Lightning to USB数据线"></a>
                                        </div>
                                        <h3 class="title"> <a href=""     data-stat-text="苹果Lightning to USB数据线" target="_blank"        >  苹果Lightning to USB数据线  </a></h3>
                                        <p class="price"> <span class="num">39</span>元 </p>
                                        <p class="rank">9579人评价</p>
                                        <div class="review-wrapper">
                                            <a href=""     data-stat-text="苹果Lightning to USB数据线" target="_blank"      >
                                                <span class="review">价格公道，质量不错，爱不释手。</span> <span class="author"> 来自于 veghost 的评价 <span class="date"></span> </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2154100012">
                                        <div class="figure figure-img">
                                            <a href=""     data-stat-text="ZMI无限拓展数据线 120cm" target="_blank"      ><img src="img/T1Zp__B5Ev1RXrhCrK.jpg?width=150&amp;height=150" width="150" height="150" alt="ZMI无限拓展数据线 120cm"></a>
                                        </div>
                                        <h3 class="title"> <a href=""     data-stat-text="ZMI无限拓展数据线 120cm" target="_blank"        >  ZMI无限拓展数据线 120cm  </a></h3>
                                        <p class="price"> <span class="num">29</span>元 </p>
                                        <p class="rank">3383人评价</p>
                                        <div class="review-wrapper">
                                            <a href=""     data-stat-text="ZMI无限拓展数据线 120cm" target="_blank"      >
                                                <span class="review">线材不错，做工好，使用方便</span> <span class="author"> 来自于 kanli3000 的评价 <span class="date"></span> </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-s" data-gid="2153300067">
                                        <div class="figure figure-img">
                                            <a href=""     data-stat-text="指环式防滑手机支架 粉色" target="_blank"      >
                                                <img src="img/T1COAjB7WT1RXrhCrK.jpg?width=80&amp;height=80" width="80" height="80" alt="指环式防滑手机支架 粉色"> </a>
                                        </div>
                                        <h3 class="title"><a href=""     data-stat-text="指环式防滑手机支架 粉色" target="_blank"        >指环式防滑手机支架 粉色</a></h3>
                                        <p class="price"><span class="num">12.5</span>元</p>
                                    </li>
                                    <li class="brick-item brick-item-s">
                                        <div class="figure figure-more">
                                            <a href="" target="_blank"    ><i class="iconfont"></i></a>
                                        </div> <a class="more" href="" target="_blank"    >浏览更多<small>热门</small></a> </li>
                                </ul>
                                <ul class="brick-list tab-content clearfix tab-content-hide">
                                    <li class="brick-item brick-item-m" data-gid="2160800014">
                                        <div class="figure figure-img">
                                            <a href=""     target="_blank"  ><img src="img/T12AWgB5Vv1RXrhCrK!220x220.jpg" width="150" height="150" alt="小米手机5 智能翻盖保护套"></a>
                                        </div>
                                        <h3 class="title"> <a href=""     target="_blank"    >小米手机5 智能翻盖保护套</a></h3>
                                        <p class="price"> <span class="num">49</span>元 </p>
                                        <p class="rank">6257人评价</p>
                                        <div class="flag flag-new">新品</div>
                                        <div class="review-wrapper">
                                            <a href=""     target="_blank"  >
                                                <span class="review">c超级喜欢，特别的棒，设计，选料，做工，细节都处理的...</span> <span class="author"> 来自于 lisongkui 的评价 <span class="date" data-date="1456620660"></span> </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2161600006">
                                        <div class="figure figure-img">
                                            <a href=""     target="_blank"  ><img src="img/T1XVWjBCYv1RXrhCrK!220x220.jpg" width="150" height="150" alt="小米Max 智能显示保护套"></a>
                                        </div>
                                        <h3 class="title"> <a href=""     target="_blank"    >小米Max 智能显示保护套</a></h3>
                                        <p class="price"> <span class="num">59</span>元 </p>
                                        <p class="rank">59人评价</p>
                                        <div class="flag flag-new">新品</div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="1142900051">
                                        <div class="figure figure-img">
                                            <a href=""     target="_blank"  ><img src="img/T1HWbgB7dv1RXrhCrK.jpg" width="150" height="150" alt=" 小米手机4 智能唤醒翻盖保护套"></a>
                                        </div>
                                        <h3 class="title"> <a href=""     target="_blank"    > 小米手机4 智能唤醒翻盖保护套</a></h3>
                                        <p class="price"> <span class="num">29</span>元 </p>
                                        <p class="rank">11.3万人评价</p>
                                        <div class="review-wrapper">
                                            <a href=""     target="_blank"  >
                                                <span class="review">手感不错  灵敏度也很高。   100%吻合小米4 ...</span> <span class="author"> 来自于 烟台小懒人 的评价 <span class="date" data-date="1406914740"></span> </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="1153900007">
                                        <div class="figure figure-img">
                                            <a href=""     target="_blank"  ><img src="img/T1fHYQBbxT1RXrhCrK.jpg" width="150" height="150" alt="小米手机4c 智能唤醒翻盖保护套"></a>
                                        </div>
                                        <h3 class="title"> <a href=""     target="_blank"    >小米手机4c 智能唤醒翻盖保护套</a></h3>
                                        <p class="price"> <span class="num">49</span>元 </p>
                                        <p class="rank">2万人评价</p>
                                        <div class="review-wrapper">
                                            <a href=""     target="_blank"  >
                                                <span class="review">速度很快，收到后很满意，的确具有手机唤醒功能，不错。...</span> <span class="author"> 来自于 宇哥爱小敏 的评价 <span class="date" data-date="1445848560"></span> </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2154800014">
                                        <div class="figure figure-img">
                                            <a href=""     target="_blank"  ><img src="img/T1TFxgB7Lv1RXrhCrK.jpg" width="150" height="150" alt="红米Note3 炫彩翻页保护套"></a>
                                        </div>
                                        <h3 class="title"> <a href=""     target="_blank"    >红米Note3 炫彩翻页保护套</a></h3>
                                        <p class="price"> <span class="num">39</span>元 </p>
                                        <p class="rank">1.6万人评价</p>
                                        <div class="review-wrapper">
                                            <a href=""     target="_blank"  >
                                                <span class="review">挺不错的。手感和做工都满意！支持一下……</span> <span class="author"> 来自于 846245880 的评价 <span class="date" data-date="1450119660"></span> </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="1160100013">
                                        <div class="figure figure-img">
                                            <a href=""     target="_blank"  ><img src="img/T1WLx_BgVv1RXrhCrK.jpg" width="150" height="150" alt="红米3标准版 炫彩翻盖保护套"></a>
                                        </div>
                                        <h3 class="title"> <a href=""     target="_blank"    >红米3标准版 炫彩翻盖保护套</a></h3>
                                        <p class="price"> <span class="num">39</span>元 </p>
                                        <p class="rank">4801人评价</p>
                                        <div class="review-wrapper">
                                            <a href=""     target="_blank"  >
                                                <span class="review">很好的手机保护套，质量ok</span> <span class="author"> 来自于 binarystar1989 的评价 <span class="date" data-date="1455104220"></span> </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="1153000016">
                                        <div class="figure figure-img">
                                            <a href=""     target="_blank"  ><img src="img/T17PDjBbbT1RXrhCrK.jpg" width="150" height="150" alt="红米Note2 炫彩翻盖保护套"></a>
                                        </div>
                                        <h3 class="title"> <a href=""     target="_blank"    >红米Note2 炫彩翻盖保护套</a></h3>
                                        <p class="price"> <span class="num">29</span>元 <del><span class="num">39</span>元</del> </p>
                                        <p class="rank">2.1万人评价</p>
                                        <div class="flag flag-saleoff"> 享8折 </div>
                                        <div class="review-wrapper">
                                            <a href=""     target="_blank"  >
                                                <span class="review">手感不错，大小正合适，外观也挺漂亮</span> <span class="author"> 来自于 2012-11-25 的评价 <span class="date" data-date="1439856600"></span> </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-s" data-gid="2155100017">
                                        <div class="figure figure-img">
                                            <a href=""     target="_blank"  >
                                                <img src="img/T1QKJ_BvLv1RXrhCrK!220x220.jpg" width="80" height="80" alt="平板2保护套"> </a>
                                        </div>
                                        <h3 class="title"><a href=""     target="_blank"    >平板2保护套</a></h3>
                                        <p class="price"><span class="num">69</span>元</p>
                                    </li>
                                    <li class="brick-item brick-item-s">
                                        <div class="figure figure-more"><a href="" target="_blank"><i class="iconfont"></i></a></div><a class="more" href="" target="_blank">浏览更多<small>保护套</small></a></li>
                                </ul>
                                <ul class="brick-list tab-content clearfix tab-content-hide">
                                    <li class="brick-item brick-item-m" data-gid="1160400014">
                                        <div class="figure figure-img">
                                            <a href=""     target="_blank"  ><img src="img/T14AWQByJv1RXrhCrK.jpg" width="150" height="150" alt="小米手机5 多彩半透保护壳"></a>
                                        </div>
                                        <h3 class="title"> <a href=""     target="_blank"    >小米手机5 多彩半透保护壳</a></h3>
                                        <p class="price"> <span class="num">29</span>元 </p>
                                        <p class="rank">1711人评价</p>
                                        <div class="flag flag-new">新品</div>
                                        <div class="review-wrapper">
                                            <a href=""     target="_blank"  >
                                                <span class="review">不错，外形刚刚好快递快</span> <span class="author"> 来自于 395644839 的评价 <span class="date" data-date="1457651160"></span> </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2153300097">
                                        <div class="figure figure-img">
                                            <a href=""     target="_blank"  ><img src="img/T1uQAgB5Av1RXrhCrK.jpg" width="150" height="150" alt="红米Note 2 冰淇淋炫彩后盖"></a>
                                        </div>
                                        <h3 class="title"> <a href=""     target="_blank"    >红米Note 2 冰淇淋炫彩后盖</a></h3>
                                        <p class="price"> <span class="num">25</span>元 <del><span class="num">29</span>元</del> </p>
                                        <p class="rank">5871人评价</p>
                                        <div class="flag flag-saleoff"> 享9折 </div>
                                        <div class="review-wrapper">
                                            <a href=""     target="_blank"  >
                                                <span class="review">很清新，很漂亮，喜欢。</span> <span class="author"> 来自于 148982221 的评价 <span class="date" data-date="1449989040"></span> </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2154900028">
                                        <div class="figure figure-img">
                                            <a href=""     target="_blank"  ><img src="img/T1eWL_B4Kv1RXrhCrK!220x220.jpg" width="150" height="150" alt="红米Note 2 小清新系列背贴"></a>
                                        </div>
                                        <h3 class="title"> <a href=""     target="_blank"    >红米Note 2 小清新系列背贴</a></h3>
                                        <p class="price"> <span class="num">19</span>元 <del><span class="num">29</span>元</del> </p>
                                        <p class="rank">115人评价</p>
                                        <div class="flag flag-saleoff"> 享7折 </div>
                                        <div class="review-wrapper">
                                            <a href=""     target="_blank"  >
                                                <span class="review">送给女朋友的，她很喜欢。</span> <span class="author"> 来自于 欢dd 的评价 <span class="date" data-date="1451842320"></span> </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="1153900006">
                                        <div class="figure figure-img">
                                            <a href=""     target="_blank"  ><img src="img/T1Z0DjBshT1RXrhCrK.jpg" width="150" height="150" alt="小米手机4c 透明超薄软胶保护套"></a>
                                        </div>
                                        <h3 class="title"> <a href=""     target="_blank"    >小米手机4c 透明超薄软胶保护套</a></h3>
                                        <p class="price"> <span class="num">19</span>元 </p>
                                        <p class="rank">1.2万人评价</p>
                                        <div class="review-wrapper">
                                            <a href=""     target="_blank"  >
                                                <span class="review">很好的产品，一直信赖小米。</span> <span class="author"> 来自于 少爷爱喝普洱茶 的评价 <span class="date" data-date="1448939520"></span> </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="1160100016">
                                        <div class="figure figure-img">
                                            <a href=""     target="_blank"  ><img src="img/T1s9xgB7Ev1RXrhCrK.jpg" width="150" height="150" alt="红米3标准版 透明软胶保护套"></a>
                                        </div>
                                        <h3 class="title"> <a href=""     target="_blank"    >红米3标准版 透明软胶保护套</a></h3>
                                        <p class="price"> <span class="num">19</span>元 </p>
                                        <p class="rank">3467人评价</p>
                                        <div class="review-wrapper">
                                            <a href=""     target="_blank"  >
                                                <span class="review">用着很舒服，物流非常快，很满意。</span> <span class="author"> 来自于 1003055798 的评价 <span class="date" data-date="1457417580"></span> </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2152000013">
                                        <div class="figure figure-img">
                                            <a href=""     target="_blank"  ><img src="img/T1suYgB5Jv1RXrhCrK.jpg" width="150" height="150" alt="红米手机2 极简原色后盖"></a>
                                        </div>
                                        <h3 class="title"> <a href=""     target="_blank"    >红米手机2 极简原色后盖</a></h3>
                                        <p class="price"> <span class="num">19</span>元 <del><span class="num">29</span>元</del> </p>
                                        <p class="rank">3642人评价</p>
                                        <div class="flag flag-saleoff"> 享7折 </div>
                                        <div class="review-wrapper">
                                            <a href=""     target="_blank"  >
                                                <span class="review">很相配，质量也不错，性价比挺高的！</span> <span class="author"> 来自于 458840720 的评价 <span class="date" data-date="1438605600"></span> </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2144400006">
                                        <div class="figure figure-img">
                                            <a href=""     target="_blank"  ><img src="img/T10JAgBv_T1RXrhCrK!220x220.jpg" width="150" height="150" alt="小米手机4 仿真纹理后盖背贴"></a>
                                        </div>
                                        <h3 class="title"> <a href=""     target="_blank"    >小米手机4 仿真纹理后盖背贴</a></h3>
                                        <p class="price"> <span class="num">29</span>元 </p>
                                        <p class="rank">3050人评价</p>
                                        <div class="review-wrapper">
                                            <a href=""     target="_blank"  >
                                                <span class="review">贴纸不错有质感，防滑耐磨。</span> <span class="author"> 来自于 XS丨丶漂泊 的评价 <span class="date" data-date="1428898380"></span> </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-s" data-gid="1154800065">
                                        <div class="figure figure-img">
                                            <a href=""     target="_blank"  >
                                                <img src="img/T1LUh_BQWv1RXrhCrK.jpg" width="80" height="80" alt="平板2 保护壳"> </a>
                                        </div>
                                        <h3 class="title"><a href=""     target="_blank"    >平板2 保护壳</a></h3>
                                        <p class="price"><span class="num">49</span>元</p>
                                    </li>
                                    <li class="brick-item brick-item-s">
                                        <div class="figure figure-more"><a href="" target="_blank"><i class="iconfont"></i></a></div><a class="more" href="" target="_blank">浏览更多<small>后盖</small></a></li>
                                </ul>
                                <ul class="brick-list tab-content clearfix tab-content-hide">
                                    <li class="brick-item brick-item-m" data-gid="2160800004">
                                        <div class="figure figure-img">
                                            <a href=""     target="_blank"  ><img src="img/T1cVLjBX_v1RXrhCrK.jpg" width="150" height="150" alt="小米手机5 极薄防蓝光贴膜"></a>
                                        </div>
                                        <h3 class="title"> <a href=""     target="_blank"    >小米手机5 极薄防蓝光贴膜</a></h3>
                                        <p class="price"> <span class="num">49</span>元 </p>
                                        <p class="rank">3312人评价</p>
                                        <div class="flag flag-new">新品</div>
                                        <div class="review-wrapper">
                                            <a href=""     target="_blank"  >
                                                <span class="review">超级棒的贴膜，手感一级棒！</span> <span class="author"> 来自于 萍踪浪影 的评价 <span class="date" data-date="1457574720"></span> </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2161600026">
                                        <div class="figure figure-img">
                                            <a href=""     target="_blank"  ><img src="img/T1y7JQBbCT1RXrhCrK!220x220.jpg" width="150" height="150" alt="小米Max 标准高透贴膜"></a>
                                        </div>
                                        <h3 class="title"> <a href=""     target="_blank"    >小米Max 标准高透贴膜</a></h3>
                                        <p class="price"> <span class="num">19</span>元 </p>
                                        <p class="rank">133人评价</p>
                                        <div class="flag flag-new">新品</div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2150300012">
                                        <div class="figure figure-img">
                                            <a href=""     target="_blank"  ><img src="img/T1fdWgBgJv1RXrhCrK!220x220.jpg" width="150" height="150" alt="小米Note 标准高透贴膜"></a>
                                        </div>
                                        <h3 class="title"> <a href=""     target="_blank"    >小米Note 标准高透贴膜</a></h3>
                                        <p class="price"> <span class="num">19</span>元 </p>
                                        <p class="rank">7万人评价</p>
                                        <div class="review-wrapper">
                                            <a href=""     target="_blank"  >
                                                <span class="review">还是不错哦，关键是实惠，被刮花了又可以换阿，嘻嘻</span> <span class="author"> 来自于 A一吻天荒 的评价 <span class="date" data-date="1437216480"></span> </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="1154800026">
                                        <div class="figure figure-img">
                                            <a href=""     target="_blank"  ><img src="img/T1qdEgBKKv1RXrhCrK.jpg" width="150" height="150" alt="红米Note3 钢化玻璃膜"></a>
                                        </div>
                                        <h3 class="title"> <a href=""     target="_blank"    >红米Note3 钢化玻璃膜</a></h3>
                                        <p class="price"> <span class="num">19</span>元 </p>
                                        <p class="rank">2.3万人评价</p>
                                        <div class="review-wrapper">
                                            <a href=""     target="_blank"  >
                                                <span class="review">钢化膜表面很光滑，和手机屏幕玻璃一样，很好</span> <span class="author"> 来自于 Pioneer77 的评价 <span class="date" data-date="1449011760"></span> </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2160100021">
                                        <div class="figure figure-img">
                                            <a href=""     target="_blank"  ><img src="img/T1wGL_BbDv1RXrhCrK.jpg" width="150" height="150" alt="红米手机3 钢化玻璃贴膜"></a>
                                        </div>
                                        <h3 class="title"> <a href=""     target="_blank"    >红米手机3 钢化玻璃贴膜</a></h3>
                                        <p class="price"> <span class="num">19</span>元 </p>
                                        <p class="rank">4392人评价</p>
                                        <div class="review-wrapper">
                                            <a href=""     target="_blank"  >
                                                <span class="review">小米一直用心做每一样事情 。我一直支持小米</span> <span class="author"> 来自于 石游子 的评价 <span class="date" data-date="1454051100"></span> </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2141200045">
                                        <div class="figure figure-img">
                                            <a href=""     target="_blank"  ><img src="img/T1KcKTBTWT1RXrhCrK!220x220.jpg" width="150" height="150" alt="红米Note 极清高透贴膜"></a>
                                        </div>
                                        <h3 class="title"> <a href=""     target="_blank"    >红米Note 极清高透贴膜</a></h3>
                                        <p class="price"> <span class="num">30</span>元 </p>
                                        <p class="rank">3.3万人评价</p>
                                        <div class="review-wrapper">
                                            <a href=""     target="_blank"  >
                                                <span class="review">确实极清高透，屏幕细腻，手感不错还可以当镜子用</span> <span class="author"> 来自于 广东小伙子 的评价 <span class="date" data-date="1401088080"></span> </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2153300022">
                                        <div class="figure figure-img">
                                            <a href=""     target="_blank"  ><img src="img/T1RxA_BgEv1RXrhCrK!220x220.jpg" width="150" height="150" alt="红米Note2 标准高透贴膜"></a>
                                        </div>
                                        <h3 class="title"> <a href=""     target="_blank"    >红米Note2 标准高透贴膜</a></h3>
                                        <p class="price"> <span class="num">9.9</span>元 <del><span class="num">19</span>元</del> </p>
                                        <p class="rank">1.6万人评价</p>
                                        <div class="flag flag-saleoff"> 享6折 </div>
                                        <div class="review-wrapper">
                                            <a href=""     target="_blank"  >
                                                <span class="review">可以，还是两张，备用比较实惠。</span> <span class="author"> 来自于 818619863 的评价 <span class="date" data-date="1439852220"></span> </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-s" data-gid="2154800024">
                                        <div class="figure figure-img">
                                            <a href=""     target="_blank"  >
                                                <img src="img/T17mL_ByA_1RXrhCrK.jpg" width="80" height="80" alt="小米平板2 极清高透贴膜"> </a>
                                        </div>
                                        <h3 class="title"><a href=""     target="_blank"    >小米平板2 极清高透贴膜</a></h3>
                                        <p class="price"><span class="num">39</span>元</p>
                                    </li>
                                    <li class="brick-item brick-item-s">
                                        <div class="figure figure-more"><a href="" target="_blank"><i class="iconfont"></i></a></div><a class="more" href="" target="_blank">浏览更多<small>贴膜</small></a></li>
                                </ul>
                                <ul class="brick-list tab-content clearfix tab-content-hide">
                                    <li class="brick-item brick-item-m" data-gid="2152500009">
                                        <div class="figure figure-img">
                                            <a href=""     target="_blank"  ><img src="img/T1xXxQBCVT1RXrhCrK!220x220.jpg" width="150" height="150" alt="小蚁蓝牙遥控器"></a>
                                        </div>
                                        <h3 class="title"> <a href=""     target="_blank"    >小蚁蓝牙遥控器</a></h3>
                                        <p class="price"> <span class="num">39</span>元 </p>
                                        <p class="rank">2620人评价</p>
                                        <div class="review-wrapper">
                                            <a href=""     target="_blank"  >
                                                <span class="review">终于抢到了，配对还简单，可以有，对于旅行版用户来说，...</span> <span class="author"> 来自于 oangle 的评价 <span class="date" data-date="1435186200"></span> </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2153300069">
                                        <div class="figure figure-img">
                                            <a href=""     target="_blank"  ><img src="img/T1j_D_BQWT1RXrhCrK!220x220.jpg" width="150" height="150" alt="指环式防滑手机支架"></a>
                                        </div>
                                        <h3 class="title"> <a href=""     target="_blank"    >指环式防滑手机支架</a></h3>
                                        <p class="price"> <span class="num">12.5</span>元 </p>
                                        <p class="rank">4941人评价</p>
                                        <div class="review-wrapper">
                                            <a href=""     target="_blank"  >
                                                <span class="review">很好的设计，太实用了，更方便单手操作了，不用担心手机...</span> <span class="author"> 来自于 疯流涕淌王 的评价 <span class="date" data-date="1448979480"></span> </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2145000002">
                                        <div class="figure figure-img">
                                            <a href=""     target="_blank"  ><img src="img/T1WTEvBmKT1RXrhCrK!220x220.jpg" width="150" height="150" alt="小米蓝牙手柄"></a>
                                        </div>
                                        <h3 class="title"> <a href=""     target="_blank"    >小米蓝牙手柄</a></h3>
                                        <p class="price"> <span class="num">99</span>元 </p>
                                        <p class="rank">2.4万人评价</p>
                                        <div class="review-wrapper">
                                            <a href=""     target="_blank"  > <span class="review">居家旅行必备神器，完美配对盒子，手机，平板，电视。小...</span> <span class="author"> 来自于 赫赤赤有名 的评价 <span class="date" data-date="1422239100"></span> </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2154200017">
                                        <div class="figure figure-img">
                                            <a href=""     target="_blank"  ><img src="img/T11oW_B4dv1RXrhCrK!220x220.jpg" width="150" height="150" alt="蓝牙语音体感遥控器"></a>
                                        </div>
                                        <h3 class="title"> <a href=""     target="_blank"    >蓝牙语音体感遥控器</a></h3>
                                        <p class="price"> <span class="num">99</span>元 </p>
                                        <p class="rank">1691人评价</p>
                                        <div class="review-wrapper">
                                            <a href=""     target="_blank"  >
                                                <span class="review">语音识别很高，蓝牙遥控方便！</span> <span class="author"> 来自于 笛哥520 的评价 <span class="date" data-date="1451031600"></span> </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2153900018">
                                        <div class="figure figure-img">
                                            <a href=""     target="_blank"  ><img src="img/T1juCgBgxT1RXrhCrK!220x220.jpg" width="150" height="150" alt="手机USB Type-C数据线"></a>
                                        </div>
                                        <h3 class="title"> <a href=""     target="_blank"    >手机USB Type-C数据线</a></h3>
                                        <p class="price"> <span class="num">39</span>元 </p>
                                        <p class="rank">9631人评价</p>
                                        <div class="review-wrapper">
                                            <a href=""     target="_blank"  >
                                                <span class="review">绝对正品，质量可靠，实用性高</span> <span class="author"> 来自于 chenbo1011 的评价 <span class="date" data-date="1449272940"></span> </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2150500004">
                                        <div class="figure figure-img">
                                            <a href=""     target="_blank"  ><img src="img/T13y_vBgJT1RXrhCrK!220x220.jpg" width="150" height="150" alt="小米千兆网线"></a>
                                        </div>
                                        <h3 class="title"> <a href=""     target="_blank"    >小米千兆网线</a></h3>
                                        <p class="price"> <span class="num">12.9</span>元 <del><span class="num">14.9</span>元</del> </p>
                                        <p class="rank">2.7万人评价</p>
                                        <div class="flag flag-saleoff"> 享9折 </div>
                                        <div class="review-wrapper">
                                            <a href=""     target="_blank"  >
                                                <span class="review">早点出多好啊！盒子不卡了！电脑下载不卡顿了！神药啊！...</span> <span class="author"> 来自于 水云间789 的评价 <span class="date" data-date="1422662700"></span> </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2154100012">
                                        <div class="figure figure-img">
                                            <a href=""     target="_blank"  ><img src="img/T1Zp__B5Ev1RXrhCrK!220x220.jpg" width="150" height="150" alt="ZMI无限拓展数据线"></a>
                                        </div>
                                        <h3 class="title"> <a href=""     target="_blank"    >ZMI无限拓展数据线</a></h3>
                                        <p class="price"> <span class="num">29</span>元 </p>
                                        <p class="rank">3383人评价</p>
                                        <div class="review-wrapper">
                                            <a href=""     target="_blank"  >
                                                <span class="review">宝贝很好！性价比高！我喜欢！</span> <span class="author"> 来自于 塞北冰川 的评价 <span class="date" data-date="1451431200"></span> </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-s" data-gid="2153000001">
                                        <div class="figure figure-img">
                                            <a href=""     target="_blank"  >
                                                <img src="img/T1b.K_Bj_T1RXrhCrK!220x220.jpg" width="80" height="80" alt="多彩USB线"> </a>
                                        </div>
                                        <h3 class="title"><a href=""     target="_blank"    >多彩USB线</a></h3>
                                        <p class="price"><span class="num">19</span>元</p>
                                    </li>
                                    <li class="brick-item brick-item-s">
                                        <div class="figure figure-more"><a href="" target="_blank"><i class="iconfont"></i></a></div><a class="more" href="" target="_blank">浏览更多<small>其他配件</small></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="around" class="home-brick-box home-brick-row-2-box xm-plain-box J_itemBox J_brickBox is-visible loaded">
                <div class="box-hd">
                    <h2 class="title">周边</h2>
                    <div class="more J_brickNav">
                        <ul class="tab-list J_brickTabSwitch" data-tab-target="around-content">
                            <li class="tab-active">热门</li>
                            <li>服装</li>
                            <li>米兔</li>
                            <li>生活周边</li>
                            <li>箱包</li>
                        </ul>
                    </div>
                </div>
                <div class="box-bd J_brickBd">
                    <div class="row">
                        <div class="span4 span-first">
                            <ul class="brick-promo-list clearfix">
                                <li class="brick-item brick-item-m">
                                    <a href=""     target="_blank"  ><img src="img/73636ac0-18bc-42d4-8332-82032b277eba" width="160" height="160" alt=""></a>
                                </li>
                                <li class="brick-item brick-item-m">
                                    <a href=""     target="_blank"  ><img src="img/T16_bjBXKv1RXrhCrK.jpg" width="160" height="160" alt=""></a>
                                </li>
                            </ul>
                        </div>
                        <div class="span16">
                            <div id="around-content" class="tab-container">
                                <ul class="brick-list tab-content clearfix tab-content-active J_recommendActive">
                                    <li class="brick-item brick-item-m" data-gid="2161000126">
                                        <div class="figure figure-img">
                                            <a href=""     target="_blank"  ><img src="img/T1dVhgBgDv1RXrhCrK.jpg" width="150" height="150" alt="小米短袖T恤 米兔大游行"></a>
                                        </div>
                                        <h3 class="title"> <a href=""     target="_blank"    >小米短袖T恤 米兔大游行</a></h3>
                                        <p class="price"> <span class="num">39</span>元 </p>
                                        <p class="rank">1231人评价</p>
                                        <div class="flag flag-postfree">2件包邮</div>
                                        <div class="review-wrapper">
                                            <a href=""     target="_blank"  >
                                                <span class="review">东西还是很好，买了很多件了～</span> <span class="author"> 来自于 尕懒瀦 的评价 <span class="date" data-date="1458866760"></span> </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2161000114">
                                        <div class="figure figure-img">
                                            <a href=""     target="_blank"  ><img src="img/T1m3CgBXJv1RXrhCrK.jpg" width="150" height="150" alt="小米短袖T恤 摇滚星球"></a>
                                        </div>
                                        <h3 class="title"> <a href=""     target="_blank"    >小米短袖T恤 摇滚星球</a></h3>
                                        <p class="price"> <span class="num">39</span>元 </p>
                                        <p class="rank">1292人评价</p>
                                        <div class="flag flag-postfree">2件包邮</div>
                                        <div class="review-wrapper">
                                            <a href=""     target="_blank"  >
                                                <span class="review">不错哦，米粉节好礼，做工料子都可以</span> <span class="author"> 来自于 653305036 的评价 <span class="date" data-date="1459604760"></span> </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="1161000032">
                                        <div class="figure figure-img">
                                            <a href=""     target="_blank"  ><img src="img/T1GXYgBgJv1RXrhCrK.jpg" width="150" height="150" alt="小米短袖POLO衫 女款"></a>
                                        </div>
                                        <h3 class="title"> <a href=""     target="_blank"    >小米短袖POLO衫 女款</a></h3>
                                        <p class="price"> <span class="num">59</span>元 </p>
                                        <p class="rank">504人评价</p>
                                        <div class="flag flag-postfree">2件包邮</div>
                                        <div class="review-wrapper">
                                            <a href=""     target="_blank"  >
                                                <span class="review">超好的衣服 这价格淘宝绝对卖不了这样的品质。</span> <span class="author"> 来自于 午夜瘋狂 的评价 <span class="date" data-date="1459593360"></span> </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="1161000026">
                                        <div class="figure figure-img">
                                            <a href=""     target="_blank"  ><img src="img/T17oCgB7Kv1RXrhCrK.jpg" width="150" height="150" alt="小米V领短袖T恤 女款"></a>
                                        </div>
                                        <h3 class="title"> <a href=""     target="_blank"    >小米V领短袖T恤 女款</a></h3>
                                        <p class="price"> <span class="num">39</span>元 </p>
                                        <p class="rank">1052人评价</p>
                                        <div class="flag flag-postfree">2件包邮</div>
                                        <div class="review-wrapper">
                                            <a href=""     target="_blank"  >
                                                <span class="review">质量非常好，滑滑的穿着舒适，推荐给大家值得购买。</span> <span class="author"> 来自于 697282835 的评价 <span class="date" data-date="1458911040"></span> </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2161100001">
                                        <div class="figure figure-img">
                                            <a href=""     target="_blank"  ><img src="img/T1P1DvB_Wv1RXrhCrK!220x220.jpg" width="150" height="150" alt="小米经典商务双肩包"></a>
                                        </div>
                                        <h3 class="title"> <a href=""     target="_blank"    >小米经典商务双肩包</a></h3>
                                        <p class="price"> <span class="num">99</span>元 </p>
                                        <p class="rank">862人评价</p>
                                        <div class="flag flag-new">新品</div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2153300058">
                                        <div class="figure figure-img">
                                            <a href=""     target="_blank"  ><img src="img/T1tzL_BjYT1RXrhCrK!220x220.jpg" width="150" height="150" alt="学院风简约双肩包"></a>
                                        </div>
                                        <h3 class="title"> <a href=""     target="_blank"    >学院风简约双肩包</a></h3>
                                        <p class="price"> <span class="num">59</span>元 </p>
                                        <p class="rank">1.3万人评价</p>
                                        <div class="flag flag-postfree">2件包邮</div>
                                        <div class="review-wrapper">
                                            <a href=""     target="_blank"  >
                                                <span class="review">包不错，简约大方，好评</span> <span class="author"> 来自于 wcswly 的评价 <span class="date" data-date="1439856540"></span> </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2161000004">
                                        <div class="figure figure-img">
                                            <a href=""     target="_blank"  ><img src="img/T1XqVgBCJv1RXrhCrK.jpg" width="150" height="150" alt="经典米兔钥匙扣"></a>
                                        </div>
                                        <h3 class="title"> <a href=""     target="_blank"    >经典米兔钥匙扣</a></h3>
                                        <p class="price"> <span class="num">39</span>元 </p>
                                        <p class="rank">337人评价</p>
                                        <div class="flag flag-postfree">2件包邮</div>
                                        <div class="review-wrapper">
                                            <a href=""     target="_blank"  >
                                                <span class="review">不错啊，不过没有买一对   只是买了一个，等待那个她</span> <span class="author"> 来自于 天倥 的评价 <span class="date" data-date="1459528560"></span> </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-s" data-gid="1144600004">
                                        <div class="figure figure-img">
                                            <a href=""     target="_blank"  >
                                                <img src="img/T1yo_gBm_v1RXrhCrK.jpg" width="80" height="80" alt="金属鼠标垫 小号"> </a>
                                        </div>
                                        <h3 class="title"><a href=""     target="_blank"    >金属鼠标垫 小号</a></h3>
                                        <p class="price"><span class="num">49</span>元</p>
                                    </li>
                                    <li class="brick-item brick-item-s">
                                        <div class="figure figure-more"><a href="" target="_blank"><i class="iconfont"></i></a></div><a class="more" href="" target="_blank">浏览更多<small>热门</small></a></li>
                                </ul>
                                <ul class="brick-list tab-content clearfix tab-content-hide">
                                    <li class="brick-item brick-item-m" data-gid="1151400027">
                                        <div class="figure figure-img">
                                            <a href=""     target="_blank"  ><img src="img/T1IDC_B_Kv1RXrhCrK.jpg" width="150" height="150" alt="小米V领短袖T恤 男款"></a>
                                        </div>
                                        <h3 class="title"> <a href=""     target="_blank"    >小米V领短袖T恤 男款</a></h3>
                                        <p class="price"> <span class="num">39</span>元 </p>
                                        <p class="rank">6474人评价</p>
                                        <div class="flag flag-postfree">2件包邮</div>
                                        <div class="review-wrapper">
                                            <a href=""     target="_blank"  >
                                                <span class="review">贴近肌肤，手质感型号合适，做工惊喜，米粉节特价</span> <span class="author"> 来自于 455826402 的评价 <span class="date" data-date="1428632100"></span> </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="1161000021">
                                        <div class="figure figure-img">
                                            <a href=""     target="_blank"  ><img src="img/T1MIC_BTLv1RXrhCrK.jpg" width="150" height="150" alt="小米短袖T恤 轻松米兔"></a>
                                        </div>
                                        <h3 class="title"> <a href=""     target="_blank"    >小米短袖T恤 轻松米兔</a></h3>
                                        <p class="price"> <span class="num">39</span>元 </p>
                                        <p class="rank">2351人评价</p>
                                        <div class="flag flag-postfree">2件包邮</div>
                                        <div class="review-wrapper">
                                            <a href=""     target="_blank"  >
                                                <span class="review">不错，纯棉的，穿着舒服，大小也刚刚好</span> <span class="author"> 来自于 胖墩儿001 的评价 <span class="date" data-date="1459587720"></span> </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="1161000018">
                                        <div class="figure figure-img">
                                            <a href=""     target="_blank"  ><img src="img/T1ReJ_B_Kv1RXrhCrK.jpg" width="150" height="150" alt="小米短袖T恤 小熊米兔"></a>
                                        </div>
                                        <h3 class="title"> <a href=""     target="_blank"    >小米短袖T恤 小熊米兔</a></h3>
                                        <p class="price"> <span class="num">39</span>元 </p>
                                        <p class="rank">2293人评价</p>
                                        <div class="flag flag-postfree">2件包邮</div>
                                        <div class="review-wrapper">
                                            <a href=""     target="_blank"  >
                                                <span class="review">女朋友说了，衣服不错就是人丑了点。</span> <span class="author"> 来自于 Mi_940790865 的评价 <span class="date" data-date="1459603860"></span> </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="1161000019">
                                        <div class="figure figure-img">
                                            <a href=""     target="_blank"  ><img src="img/T1kIV_BjDv1RXrhCrK.jpg" width="150" height="150" alt="小米短袖T恤 水管工米兔"></a>
                                        </div>
                                        <h3 class="title"> <a href=""     target="_blank"    >小米短袖T恤 水管工米兔</a></h3>
                                        <p class="price"> <span class="num">39</span>元 </p>
                                        <p class="rank">1567人评价</p>
                                        <div class="flag flag-postfree">2件包邮</div>
                                        <div class="review-wrapper">
                                            <a href=""     target="_blank"  >
                                                <span class="review">很不错的衣服，这件是帮同学买的，很不错</span> <span class="author"> 来自于 90后土豆 的评价 <span class="date" data-date="1459056900"></span> </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2140300021">
                                        <div class="figure figure-img">
                                            <a href=""     target="_blank"  ><img src="img/T1onWjBbAT1RXrhCrK.jpg" width="150" height="150" alt="雷锋米兔连帽套头卫衣"></a>
                                        </div>
                                        <h3 class="title"> <a href=""     target="_blank"    >雷锋米兔连帽套头卫衣</a></h3>
                                        <p class="price"> <span class="num">89</span>元 <del><span class="num">129</span>元</del> </p>
                                        <p class="rank">1721人评价</p>
                                        <div class="flag flag-postfree">2件包邮</div>
                                        <div class="review-wrapper">
                                            <a href=""     target="_blank"  >
                                                <span class="review">儿子非常喜欢，穿上超酷！</span> <span class="author"> 来自于 菠萝娃娃 的评价 <span class="date" data-date="1414145040"></span> </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2153300076">
                                        <div class="figure figure-img">
                                            <a href=""     target="_blank"  ><img src="img/T1qLZ_BKYv1RXrhCrK.jpg" width="150" height="150" alt="纯色开衫卫衣 女款"></a>
                                        </div>
                                        <h3 class="title"> <a href=""     target="_blank"    >纯色开衫卫衣 女款</a></h3>
                                        <p class="price"> <span class="num">89</span>元 <del><span class="num">129</span>元</del> </p>
                                        <p class="rank">772人评价</p>
                                        <div class="flag flag-postfree">2件包邮</div>
                                        <div class="review-wrapper">
                                            <a href=""     target="_blank"  >
                                                <span class="review">非常不错，大小样式都很喜欢，料子也很舒服</span> <span class="author"> 来自于 无尽沙 的评价 <span class="date" data-date="1442330340"></span> </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2153300091">
                                        <div class="figure figure-img">
                                            <a href=""     target="_blank"  ><img src="img/T1G9h_BKLv1RXrhCrK.jpg" width="150" height="150" alt="纯色连帽套头卫衣 男款"></a>
                                        </div>
                                        <h3 class="title"> <a href=""     target="_blank"    >纯色连帽套头卫衣 男款</a></h3>
                                        <p class="price"> <span class="num">79</span>元 <del><span class="num">109</span>元</del> </p>
                                        <p class="rank">1975人评价</p>
                                        <div class="flag flag-postfree">2件包邮</div>
                                        <div class="review-wrapper">
                                            <a href=""     target="_blank"  >
                                                <span class="review">简约的设计，特别的是两个口袋是联通的</span> <span class="author"> 来自于 QQ1098591460 的评价 <span class="date" data-date="1439762640"></span> </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-s" data-gid="2134900013">
                                        <div class="figure figure-img">
                                            <a href=""     target="_blank"  >
                                                <img src="img/T1RuJTByJv1RXrhCrK!220x220.jpg" width="80" height="80" alt="米兔连帽套头卫衣"> </a>
                                        </div>
                                        <h3 class="title"><a href=""     target="_blank"    >米兔连帽套头卫衣</a></h3>
                                        <p class="price"><span class="num">89</span>元</p>
                                    </li>
                                    <li class="brick-item brick-item-s">
                                        <div class="figure figure-more"><a href="" target="_blank"><i class="iconfont"></i></a></div><a class="more" href="" target="_blank">浏览更多<small>服装</small></a></li>
                                </ul>
                                <ul class="brick-list tab-content clearfix tab-content-hide">
                                    <li class="brick-item brick-item-m" data-gid="1161100003">
                                        <div class="figure figure-img">
                                            <a href=""     target="_blank"  ><img src="img/T1TOAjByJv1RXrhCrK.jpg" width="150" height="150" alt="米兔明信片"></a>
                                        </div>
                                        <h3 class="title"> <a href=""     target="_blank"    >米兔明信片</a></h3>
                                        <p class="price"> <span class="num">9.9</span>元 </p>
                                        <p class="rank">155人评价</p>
                                        <div class="flag flag-new">新品</div>
                                        <div class="review-wrapper">
                                            <a href=""     target="_blank"  >
                                                <span class="review">非常好看，实物比照片更好看。可以做收藏品。</span> <span class="author"> 来自于 真·迪亚斯 的评价 <span class="date" data-date="1460452080"></span> </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2160300001">
                                        <div class="figure figure-img">
                                            <a href=""     target="_blank"  ><img src="img/T160ZQBbZT1RXrhCrK!220x220.jpg" width="150" height="150" alt="魔力红米兔钥匙扣"></a>
                                        </div>
                                        <h3 class="title"> <a href=""     target="_blank"    >魔力红米兔钥匙扣</a></h3>
                                        <p class="price"> <span class="num">19.9</span>元 </p>
                                        <p class="rank">549人评价</p>
                                        <div class="review-wrapper">
                                            <a href=""     target="_blank"  >
                                                <span class="review">收到了！很可爱！很喜欢！</span> <span class="author"> 来自于 徐涛 的评价 <span class="date" data-date="1455065340"></span> </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2154600015">
                                        <div class="figure figure-img">
                                            <a href=""     target="_blank"  ><img src="img/T1xDbgBC_v1RXrhCrK!220x220.jpg" width="150" height="150" alt="背带裤米兔"></a>
                                        </div>
                                        <h3 class="title"> <a href=""     target="_blank"    >背带裤米兔</a></h3>
                                        <p class="price"> <span class="num">49</span>元 </p>
                                        <p class="rank">509人评价</p>
                                        <div class="review-wrapper">
                                            <a href=""     target="_blank"  >
                                                <span class="review">材料不错，莫起来挺好的，好评</span> <span class="author"> 来自于 暗淡de回忆 的评价 <span class="date" data-date="1448245080"></span> </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2154600014">
                                        <div class="figure figure-img">
                                            <a href=""     target="_blank"  ><img src="img/T1xrx_BX_v1RXrhCrK!220x220.jpg" width="150" height="150" alt="帆布鞋米兔"></a>
                                        </div>
                                        <h3 class="title"> <a href=""     target="_blank"    >帆布鞋米兔</a></h3>
                                        <p class="price"> <span class="num">49</span>元 </p>
                                        <p class="rank">436人评价</p>
                                        <div class="review-wrapper">
                                            <a href=""     target="_blank"  >
                                                <span class="review">非常棒，手感很好，很好看，非常喜欢</span> <span class="author"> 来自于 枫影渐随 的评价 <span class="date" data-date="1450275240"></span> </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2134900342">
                                        <div class="figure figure-img">
                                            <a href=""     target="_blank"  ><img src="img/T1dRZTB_xT1RXrhCrK!220x220.jpg" width="150" height="150" alt="经典版米兔"></a>
                                        </div>
                                        <h3 class="title"> <a href=""     target="_blank"    >经典版米兔</a></h3>
                                        <p class="price"> <span class="num">29</span>元 </p>
                                        <p class="rank">3.8万人评价</p>
                                        <div class="flag flag-postfree">免邮费</div>
                                        <div class="review-wrapper">
                                            <a href=""     target="_blank"  >
                                                <span class="review">媳妇儿很喜欢，兔子做工很好？手感也不错，但是脱了脑子...</span> <span class="author"> 来自于 15288871870 的评价 <span class="date" data-date="1435482060"></span> </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2161200072">
                                        <div class="figure figure-img">
                                            <a href=""     target="_blank"  ><img src="img/T1zVZjBmJv1RXrhCrK.jpg" width="150" height="150" alt="文艺版米兔"></a>
                                        </div>
                                        <h3 class="title"> <a href=""     target="_blank"    >文艺版米兔</a></h3>
                                        <p class="price"> <span class="num">49</span>元 </p>
                                        <p class="rank">126人评价</p>
                                        <div class="flag flag-new">新品</div>
                                        <div class="review-wrapper">
                                            <a href=""     target="_blank"  >
                                                <span class="review">很有文艺派，还穿着马甲，哈哈，小样，有本事把马甲脱了...</span> <span class="author"> 来自于 辛京北 的评价 <span class="date" data-date="1460855700"></span> </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="1141500018">
                                        <div class="figure figure-img">
                                            <a href=""     target="_blank"  ><img src="img/T1qvEgBKKv1RXrhCrK.jpg" width="150" height="150" alt="30cm坐姿米兔"></a>
                                        </div>
                                        <h3 class="title"> <a href=""     target="_blank"    >30cm坐姿米兔</a></h3>
                                        <p class="price"> <span class="num">49</span>元 </p>
                                        <p class="rank">919人评价</p>
                                        <div class="review-wrapper">
                                            <a href=""     target="_blank"  >
                                                <span class="review">货真价实手感很好材质很好</span> <span class="author"> 来自于 林子1320 的评价 <span class="date" data-date="1405003140"></span> </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-s" data-gid="2144400040">
                                        <div class="figure figure-img">
                                            <a href=""     target="_blank"  >
                                                <img src="img/T1MBhvBm_T1RXrhCrK!220x220.jpg" width="80" height="80" alt="黑猫米兔"> </a>
                                        </div>
                                        <h3 class="title"><a href=""     target="_blank"    >黑猫米兔</a></h3>
                                        <p class="price"><span class="num">39</span>元</p>
                                    </li>
                                    <li class="brick-item brick-item-s">
                                        <div class="figure figure-more"><a href="" target="_blank"><i class="iconfont"></i></a></div><a class="more" href="" target="_blank">浏览更多<small>米兔</small></a></li>
                                </ul>
                                <ul class="brick-list tab-content clearfix tab-content-hide">
                                    <li class="brick-item brick-item-m" data-gid="1144600004">
                                        <div class="figure figure-img">
                                            <a href=""     target="_blank"  ><img src="img/T1yo_gBm_v1RXrhCrK.jpg" width="150" height="150" alt="金属鼠标垫 小号"></a>
                                        </div>
                                        <h3 class="title"> <a href=""     target="_blank"    >金属鼠标垫 小号</a></h3>
                                        <p class="price"> <span class="num">49</span>元 </p>
                                        <p class="rank">6652人评价</p>
                                        <div class="review-wrapper">
                                            <a href=""     target="_blank"  >
                                                <span class="review">高冷～～大气～～视觉冲击感感强烈！～～非常吸引眼球！...</span> <span class="author"> 来自于 沉甸甸的雪花 的评价 <span class="date" data-date="1425283140"></span> </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2153700037">
                                        <div class="figure figure-img">
                                            <a href=""     target="_blank"  ><img src="img/T1fADvByVv1RXrhCrK!220x220.jpg" width="150" height="150" alt="小米皮质记事本"></a>
                                        </div>
                                        <h3 class="title"> <a href=""     target="_blank"    >小米皮质记事本</a></h3>
                                        <p class="price"> <span class="num">19</span>元 </p>
                                        <p class="rank">3371人评价</p>
                                        <div class="review-wrapper">
                                            <a href=""     target="_blank"  >
                                                <span class="review">纸质好，手感不错，大小适宜</span> <span class="author"> 来自于 戰勳 的评价 <span class="date" data-date="1442361420"></span> </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2155000002">
                                        <div class="figure figure-img">
                                            <a href=""     target="_blank"  ><img src="img/T10fdgB__T1RXrhCrK!220x220.jpg" width="150" height="150" alt="小米LED随身灯 增强版"></a>
                                        </div>
                                        <h3 class="title"> <a href=""     target="_blank"    >小米LED随身灯 增强版</a></h3>
                                        <p class="price"> <span class="num">19.9</span>元 </p>
                                        <p class="rank">2.3万人评价</p>
                                        <div class="review-wrapper">
                                            <a href=""     target="_blank"  >
                                                <span class="review">很好，很实用，大而亮，是好产品</span> <span class="author"> 来自于 酒帅2012 的评价 <span class="date" data-date="1451344260"></span> </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2134900203">
                                        <div class="figure figure-img">
                                            <a href=""     target="_blank"  ><img src="img/T1UmxTBQhv1RXrhCrK!220x220.jpg" width="150" height="150" alt="手机支架 小蜜蜂"></a>
                                        </div>
                                        <h3 class="title"> <a href=""     target="_blank"    >手机支架 小蜜蜂</a></h3>
                                        <p class="price"> <span class="num">19</span>元 </p>
                                        <p class="rank">6.9万人评价</p>
                                        <div class="review-wrapper">
                                            <a href=""     target="_blank"  >
                                                <span class="review">小米的产品经理下了功夫的作品</span> <span class="author"> 来自于 LOVELOVE 的评价 <span class="date" data-date="1436404260"></span> </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2134900196">
                                        <div class="figure figure-img">
                                            <a href=""     target="_blank"  ><img src="img/T19UxTBQEv1RXrhCrK!220x220.jpg" width="150" height="150" alt="趣味防尘塞 MI标"></a>
                                        </div>
                                        <h3 class="title"> <a href=""     target="_blank"    >趣味防尘塞 MI标</a></h3>
                                        <p class="price"> <span class="num">3.9</span>元 </p>
                                        <p class="rank">5.6万人评价</p>
                                        <div class="review-wrapper">
                                            <a href=""     target="_blank"  >
                                                <span class="review">小小防尘塞，装上手机上个性，别致，实用。和我手机外壳...</span> <span class="author"> 来自于 875826057 的评价 <span class="date" data-date="1437705300"></span> </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2134900297">
                                        <div class="figure figure-img">
                                            <a href=""     target="_blank"  ><img src="img/T198bTBbAv1RXrhCrK!220x220.jpg" width="150" height="150" alt="小米百变随身杯"></a>
                                        </div>
                                        <h3 class="title"> <a href=""     target="_blank"    >小米百变随身杯</a></h3>
                                        <p class="price"> <span class="num">39</span>元 </p>
                                        <p class="rank">1.2万人评价</p>
                                        <div class="review-wrapper">
                                            <a href=""     target="_blank"  >
                                                <span class="review">轻便易携，以前并不爱喝水，有了它，好像整个人都滋润了！</span> <span class="author"> 来自于 692948640 的评价 <span class="date" data-date="1437524040"></span> </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2154900068">
                                        <div class="figure figure-img">
                                            <a href=""     target="_blank"  ><img src="img/T1eKdgB4xv1RXrhCrK!220x220.jpg" width="150" height="150" alt="小米电源线收纳盒"></a>
                                        </div>
                                        <h3 class="title"> <a href=""     target="_blank"    >小米电源线收纳盒</a></h3>
                                        <p class="price"> <span class="num">49</span>元 </p>
                                        <p class="rank">1187人评价</p>
                                        <div class="review-wrapper">
                                            <a href=""     target="_blank"  >
                                                <span class="review">简洁大方，支持小米。</span> <span class="author"> 来自于 古国龙 的评价 <span class="date" data-date="1452333120"></span> </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-s" data-gid="2161000034">
                                        <div class="figure figure-img">
                                            <a href=""     target="_blank"  >
                                                <img src="img/T15AxgByEv1RXrhCrK.jpg" width="80" height="80" alt="小米鼠标垫"> </a>
                                        </div>
                                        <h3 class="title"><a href=""     target="_blank"    >小米鼠标垫</a></h3>
                                        <p class="price"><span class="num">4.9</span>元</p>
                                    </li>
                                    <li class="brick-item brick-item-s">
                                        <div class="figure figure-more"><a href="" target="_blank"><i class="iconfont"></i></a></div><a class="more" href="" target="_blank">浏览更多<small>生活周边</small></a></li>
                                </ul>
                                <ul class="brick-list tab-content clearfix tab-content-hide">
                                    <li class="brick-item brick-item-m" data-gid="1153700020">
                                        <div class="figure figure-img">
                                            <a href=""     target="_blank"  ><img src="img/T1RRCjBKJv1RXrhCrK.jpg" width="150" height="150" alt="90分旅行箱 20寸"></a>
                                        </div>
                                        <h3 class="title"> <a href=""     target="_blank"    >90分旅行箱 20寸</a></h3>
                                        <p class="price"> <span class="num">299</span>元 </p>
                                        <p class="rank">1万人评价</p>
                                        <div class="flag flag-postfree">免邮费</div>
                                        <div class="review-wrapper">
                                            <a href=""     target="_blank"  >
                                                <span class="review">漂亮，轮子和拉杆都很不错，总的来说非常值得买</span> <span class="author"> 来自于 豆筋子 的评价 <span class="date" data-date="1443357780"></span> </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="1155100013">
                                        <div class="figure figure-img">
                                            <a href=""     target="_blank"  ><img src="img/T1TvJ_B_Kv1RXrhCrK.jpg" width="150" height="150" alt="90分旅行箱 24寸"></a>
                                        </div>
                                        <h3 class="title"> <a href=""     target="_blank"    >90分旅行箱 24寸</a></h3>
                                        <p class="price"> <span class="num">349</span>元 </p>
                                        <p class="rank">6490人评价</p>
                                        <div class="flag flag-postfree">免邮费</div>
                                        <div class="review-wrapper">
                                            <a href=""     target="_blank"  >
                                                <span class="review">材质做工都相当好，尺寸正合适</span> <span class="author"> 来自于 米粉0219 的评价 <span class="date" data-date="1451433660"></span> </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2153800015">
                                        <div class="figure figure-img">
                                            <a href=""     target="_blank"  ><img src="img/T1hsKvBsWv1RXrhCrK.jpg" width="150" height="150" alt="90分旅行洗漱包"></a>
                                        </div>
                                        <h3 class="title"> <a href=""     target="_blank"    >90分旅行洗漱包</a></h3>
                                        <p class="price"> <span class="num">39</span>元 </p>
                                        <p class="rank">4635人评价</p>
                                        <div class="review-wrapper">
                                            <a href=""     target="_blank"  >
                                                <span class="review">这个包包不错，以后出门洗漱用品有了专业的新家了！</span> <span class="author"> 来自于 louwujie 的评价 <span class="date" data-date="1443354720"></span> </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2153800017">
                                        <div class="figure figure-img">
                                            <a href=""     target="_blank"  ><img src="img/T1G9Y_BmCv1RXrhCrK.jpg" width="150" height="150" alt="90分便携收纳袋"></a>
                                        </div>
                                        <h3 class="title"> <a href=""     target="_blank"    >90分便携收纳袋</a></h3>
                                        <p class="price"> <span class="num">29</span>元 </p>
                                        <p class="rank">1742人评价</p>
                                        <div class="review-wrapper">
                                            <a href=""     target="_blank"  >
                                                <span class="review">携带方便～小巧实用～</span> <span class="author"> 来自于 宋强小童鞋 的评价 <span class="date" data-date="1443297420"></span> </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2154400010">
                                        <div class="figure figure-img">
                                            <a href=""     target="_blank"  ><img src="img/T1OMV_B7Ev1RXrhCrK.jpg" width="150" height="150" alt="学院风简约双肩包"></a>
                                        </div>
                                        <h3 class="title"> <a href=""     target="_blank"    >学院风简约双肩包</a></h3>
                                        <p class="price"> <span class="num">59</span>元 </p>
                                        <p class="rank">1.3万人评价</p>
                                        <div class="review-wrapper">
                                            <a href=""     target="_blank"  >
                                                <span class="review">包不错，简约大方，好评</span> <span class="author"> 来自于 wcswly 的评价 <span class="date" data-date="1439856540"></span> </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2154400012">
                                        <div class="figure figure-img">
                                            <a href=""     target="_blank"  ><img src="img/T1a3DvB7hv1RXrhCrK!220x220.jpg" width="150" height="150" alt="小米极简都市双肩包"></a>
                                        </div>
                                        <h3 class="title"> <a href=""     target="_blank"    >小米极简都市双肩包</a></h3>
                                        <p class="price"> <span class="num">149</span>元 </p>
                                        <p class="rank">8522人评价</p>
                                        <div class="review-wrapper">
                                            <a href=""     target="_blank"  >
                                                <span class="review">设计简洁，功能划分明确，实在是商务之选</span> <span class="author"> 来自于 超级金丝猴 的评价 <span class="date" data-date="1448316480"></span> </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2154400011">
                                        <div class="figure figure-img">
                                            <a href=""     target="_blank"  ><img src="img/T1jZD_BmAv1RXrhCrK!220x220.jpg" width="150" height="150" alt="小米多功能电脑包"></a>
                                        </div>
                                        <h3 class="title"> <a href=""     target="_blank"    >小米多功能电脑包</a></h3>
                                        <p class="price"> <span class="num">199</span>元 </p>
                                        <p class="rank">1227人评价</p>
                                        <div class="review-wrapper">
                                            <a href=""     target="_blank"  >
                                                <span class="review">设计很用心，很适合商务出差，超值！</span> <span class="author"> 来自于 681407737 的评价 <span class="date" data-date="1448580060"></span> </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-s" data-gid="2134900289">
                                        <div class="figure figure-img">
                                            <a href=""     target="_blank"  >
                                                <img src="img/T1nmhTBTKT1RXrhCrK!220x220.jpg" width="80" height="80" alt="小米商务真皮钱包"> </a>
                                        </div>
                                        <h3 class="title"><a href=""     target="_blank"    >小米商务真皮钱包</a></h3>
                                        <p class="price"><span class="num">149</span>元</p>
                                    </li>
                                    <li class="brick-item brick-item-s">
                                        <div class="figure figure-more"><a href="" target="_blank"><i class="iconfont"></i></a></div><a class="more" href="" target="_blank">浏览更多<small>箱包</small></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="recommend" class="home-recm-box home-brick-box home-brick-row-1-box xm-plain-box J_itemBox J_recommendBox is-visible" data-region-stat="1">
                <div class="box-hd">
                    <h2 class="title">为你推荐</h2>
                    <div class="more J_brickNav">
                        <div class="xm-controls xm-controls-line-small xm-carousel-controls"><a class="control control-prev iconfont control-disabled" href=""    ></a>
                            <a class="control control-next iconfont" href=""    ></a>
                        </div>
                    </div>
                </div>
                <div id="recommend-bd" class="box-bd J_brickBd J_recommend-like container xm-carousel-container">
                    <div class="xm-recommend">
                        <div class="xm-carousel-wrapper" style="height: 330px; overflow: hidden;">
                            <ul class="xm-carousel-col-5-list xm-carousel-list clearfix" data-carousel-list="true" style="width: 4960px; margin-left: 0px; transition: margin-left 0.5s ease; -webkit-transition: margin-left 0.5s ease;">
                                <li class="J_xm-recommend-list">
                                    <dl> <dt> <a href=""     data-stat-text="小米移动电源10000mAh" target="_blank"        > <img src="img/T12HJvByEv1RXrhCrK.jpg "   alt="小米移动电源10000mAh"> </a> </dt>
                                        <dd class="xm-recommend-name"> <a href=""     data-stat-text="小米移动电源10000mAh" target="_blank"      > 小米移动电源10000mAh </a>												</dd>
                                        <dd class="xm-recommend-price">79元</dd>
                                        <dd class="xm-recommend-tips"> 17万人好评 </dd>
                                    </dl>
                                </li>
                                <li class="J_xm-recommend-list">
                                    <dl> <dt> <a href=""     data-stat-text="小米手环" target="_blank"        > <img src="img/T1LrdvBbAT1RXrhCrK.jpg "   alt="小米手环"> </a> </dt>
                                        <dd class="xm-recommend-name"> <a href=""     data-stat-text="小米手环" target="_blank"      > 小米手环 </a> </dd>
                                        <dd class="xm-recommend-price">69元</dd>
                                        <dd class="xm-recommend-tips"> 10.9万人好评 </dd>
                                    </dl>
                                </li>
                                <li class="J_xm-recommend-list">
                                    <dl> <dt> <a href=""     data-stat-text="小米活塞耳机 基础版" target="_blank"        > <img src="img/T1WxYvB_xv1RXrhCrK.jpg "   alt="小米活塞耳机 基础版"> </a> </dt>
                                        <dd class="xm-recommend-name"> <a href=""     data-stat-text="小米活塞耳机 基础版" target="_blank"      > 小米活塞耳机 基础版 </a>												</dd>
                                        <dd class="xm-recommend-price">29元</dd>
                                        <dd class="xm-recommend-tips"> 2.1万人好评 </dd>
                                    </dl>
                                </li>
                                <li class="J_xm-recommend-list">
                                    <dl> <dt> <a href=""     data-stat-text="小米圈铁耳机" target="_blank"        > <img src="img/T1HWEjBvDT1RXrhCrK.jpg "   alt="小米圈铁耳机"> </a> </dt>
                                        <dd class="xm-recommend-name"> <a href=""     data-stat-text="小米圈铁耳机" target="_blank"      > 小米圈铁耳机 </a> </dd>
                                        <dd class="xm-recommend-price">99元</dd>
                                        <dd class="xm-recommend-tips"> 3.4万人好评 </dd>
                                    </dl>
                                </li>
                                <li class="J_xm-recommend-list">
                                    <dl> <dt> <a href=""     data-stat-text="小米小钢炮蓝牙音箱2" target="_blank"        > <img src="img/T1F5K_BjVv1RXrhCrK.jpg "   alt="小米小钢炮蓝牙音箱2"> </a> </dt>
                                        <dd class="xm-recommend-name"> <a href=""     data-stat-text="小米小钢炮蓝牙音箱2" target="_blank"      > 小米小钢炮蓝牙音箱2 </a>												</dd>
                                        <dd class="xm-recommend-price">129元</dd>
                                        <dd class="xm-recommend-tips"> 4932人好评 </dd>
                                    </dl>
                                </li>
                                <li class="J_xm-recommend-list">
                                    <dl> <dt> <a href=""     data-stat-text="小米胶囊耳机" target="_blank"        > <img src="img/T1SkV_BCd_1RXrhCrK.jpg "   alt="小米胶囊耳机"> </a> </dt>
                                        <dd class="xm-recommend-name"> <a href=""     data-stat-text="小米胶囊耳机" target="_blank"      > 小米胶囊耳机 </a> </dd>
                                        <dd class="xm-recommend-price">69元</dd>
                                        <dd class="xm-recommend-tips"> 206人好评 </dd>
                                    </dl>
                                </li>
                                <li class="J_xm-recommend-list">
                                    <dl> <dt> <a href=""     data-stat-text="小米净化器 除甲醛增强版滤芯" target="_blank"        > <img src="img/T1YbD_BCJv1RXrhCrK.jpg "   alt="小米净化器 除甲醛增强版滤芯"> </a> </dt>
                                        <dd class="xm-recommend-name"> <a href=""     data-stat-text="小米净化器 除甲醛增强版滤芯" target="_blank"      > 小米净化器 除甲醛增强版滤芯 </a>												</dd>
                                        <dd class="xm-recommend-price">169元</dd>
                                        <dd class="xm-recommend-tips"> 5693人好评 </dd>
                                    </dl>
                                </li>
                                <li class="J_xm-recommend-list">
                                    <dl> <dt> <a href=""     data-stat-text="小米蓝牙音箱" target="_blank"        > <img src="img/T1MDK_B_YT1RXrhCrK.jpg "   alt="小米蓝牙音箱"> </a> </dt>
                                        <dd class="xm-recommend-name"> <a href=""     data-stat-text="小米蓝牙音箱" target="_blank"      > 小米蓝牙音箱 </a> </dd>
                                        <dd class="xm-recommend-price">199元</dd>
                                        <dd class="xm-recommend-tips"> 1.4万人好评 </dd>
                                    </dl>
                                </li>
                                <li class="J_xm-recommend-list">
                                    <dl> <dt> <a href=""     data-stat-text="90分旅行箱 24寸" target="_blank"        > <img src="img/T1CDbjBgAT1RXrhCrK.jpg "   alt="90分旅行箱 24寸"> </a> </dt>
                                        <dd class="xm-recommend-name"> <a href=""     data-stat-text="90分旅行箱 24寸" target="_blank"      > 90分旅行箱 24寸 </a>												</dd>
                                        <dd class="xm-recommend-price">349元</dd>
                                        <dd class="xm-recommend-tips"> 6490人好评 </dd>
                                    </dl>
                                </li>
                                <li class="J_xm-recommend-list">
                                    <dl> <dt> <a href=""     data-stat-text="光感手环多彩套装" target="_blank"        > <img src="img/T1.NC_BsVv1RXrhCrK.jpg "   alt="光感手环多彩套装"> </a> </dt>
                                        <dd class="xm-recommend-name"> <a href=""     data-stat-text="光感手环多彩套装" target="_blank"      > 光感手环多彩套装 </a>												</dd>
                                        <dd class="xm-recommend-price">109元</dd>
                                        <dd class="xm-recommend-tips"> 0人好评 </dd>
                                    </dl>
                                </li>
                                <li class="J_xm-recommend-list">
                                    <dl> <dt> <a href=""     data-stat-text="90分旅行箱 20寸" target="_blank"        > <img src="img/T1Ay_gBKKv1RXrhCrK.jpg "   alt="90分旅行箱 20寸"> </a> </dt>
                                        <dd class="xm-recommend-name"> <a href=""     data-stat-text="90分旅行箱 20寸" target="_blank"      > 90分旅行箱 20寸 </a>												</dd>
                                        <dd class="xm-recommend-price">299元</dd>
                                        <dd class="xm-recommend-tips"> 1.1万人好评 </dd>
                                    </dl>
                                </li>
                                <li class="J_xm-recommend-list">
                                    <dl> <dt> <a href=""     data-stat-text="小米家庭音响 金属版" target="_blank"        > <img src="img/T1N5KjB_dT1RXrhCrK.jpg "   alt="小米家庭音响 金属版"> </a> </dt>
                                        <dd class="xm-recommend-name"> <a href=""     data-stat-text="小米家庭音响 金属版" target="_blank"      > 小米家庭音响 金属版 </a>												</dd>
                                        <dd class="xm-recommend-price">899元</dd>
                                        <dd class="xm-recommend-tips"> 0人好评 </dd>
                                    </dl>
                                </li>
                                <li class="J_xm-recommend-list">
                                    <dl> <dt> <a href="" data-stat-text="小米自拍杆" target="_blank"        > <img src="img/T1_SDgB4KT1RXrhCrK.jpg "   alt="小米自拍杆"> </a> </dt>
                                        <dd class="xm-recommend-name"> <a href=""     data-stat-text="小米自拍杆" target="_blank"      > 小米自拍杆 </a> </dd>
                                        <dd class="xm-recommend-price">49元</dd>
                                        <dd class="xm-recommend-tips"> 6.7万人好评 </dd>
                                    </dl>
                                </li>
                                <li class="J_xm-recommend-list">
                                    <dl> <dt> <a href=""     data-stat-text="小米随身蓝牙音箱" target="_blank"        > <img src="img/T1IdZgB5hv1RXrhCrK.jpg "   alt="小米随身蓝牙音箱"> </a> </dt>
                                        <dd class="xm-recommend-name"> <a href=""     data-stat-text="小米随身蓝牙音箱" target="_blank"      > 小米随身蓝牙音箱 </a>												</dd>
                                        <dd class="xm-recommend-price">69元</dd>
                                        <dd class="xm-recommend-tips"> 2532人好评 </dd>
                                    </dl>
                                </li>
                                <li class="J_xm-recommend-list">
                                    <dl> <dt> <a href=""     data-stat-text="SanDisk 32GB高速存储卡（TF Class10）" target="_blank"        > <img src="img/T1PQWvBvAv1RXrhCrK.jpg "   alt="SanDisk 32GB高速存储卡（TF Class10）"> </a> </dt>
                                        <dd class="xm-recommend-name"> <a href=""     data-stat-text="SanDisk 32GB高速存储卡（TF Class10）" target="_blank"      > SanDisk 32GB高速存储卡（TF Class10） </a>												</dd>
                                        <dd class="xm-recommend-price">49.9元</dd>
                                        <dd class="xm-recommend-tips"> 4619人好评 </dd>
                                    </dl>
                                </li>
                                <li class="J_xm-recommend-list">
                                    <dl> <dt> <a href=""     data-stat-text="小米V领短袖T恤 男款" target="_blank"        > <img src="img/T10WDvBQ_v1RXrhCrK.jpg "   alt="小米V领短袖T恤 男款"> </a> </dt>
                                        <dd class="xm-recommend-name"> <a href=""     data-stat-text="小米V领短袖T恤 男款" target="_blank"      > 小米V领短袖T恤 男款 </a>												</dd>
                                        <dd class="xm-recommend-price">39元</dd>
                                        <dd class="xm-recommend-tips"> 6474人好评 </dd>
                                    </dl>
                                </li>
                                <li class="J_xm-recommend-list">
                                    <dl> <dt> <a href=""     data-stat-text="小米多功能网关" target="_blank"        > <img src="img/T19eL_Bvhv1RXrhCrK.jpg "   alt="小米多功能网关"> </a> </dt>
                                        <dd class="xm-recommend-name"> <a href=""     data-stat-text="小米多功能网关" target="_blank"      > 小米多功能网关 </a>												</dd>
                                        <dd class="xm-recommend-price">149元</dd>
                                        <dd class="xm-recommend-tips"> 1595人好评 </dd>
                                    </dl>
                                </li>
                                <li class="J_xm-recommend-list">
                                    <dl> <dt> <a href=""     data-stat-text="Yeelight LED智能灯泡" target="_blank"        > <img src="img/T159dgBjDT1RXrhCrK.jpg "   alt="Yeelight LED智能灯泡"> </a> </dt>
                                        <dd class="xm-recommend-name"> <a href=""     data-stat-text="Yeelight LED智能灯泡" target="_blank"      > Yeelight LED智能灯泡 </a>												</dd>
                                        <dd class="xm-recommend-price">59元</dd>
                                        <dd class="xm-recommend-tips"> 8271人好评 </dd>
                                    </dl>
                                </li>
                                <li class="J_xm-recommend-list">
                                    <dl> <dt> <a href=""     data-stat-text="苹果Lightning to USB数据线" target="_blank"        > <img src="img/T1AmJgBsKT1RXrhCrK.jpg "   alt="苹果Lightning to USB数据线"> </a> </dt>
                                        <dd class="xm-recommend-name"> <a href=""     data-stat-text="苹果Lightning to USB数据线" target="_blank"      > 苹果Lightning to USB数据线 </a>												</dd>
                                        <dd class="xm-recommend-price">39元</dd>
                                        <dd class="xm-recommend-tips"> 9579人好评 </dd>
                                    </dl>
                                </li>
                                <li class="J_xm-recommend-list">
                                    <dl> <dt> <a href=""     data-stat-text="小米短袖T恤 西游记" target="_blank"        > <img src="img/T1Mph_BgKv1RXrhCrK.jpg "   alt="小米短袖T恤 西游记"> </a> </dt>
                                        <dd class="xm-recommend-name"> <a href=""     data-stat-text="小米短袖T恤 西游记" target="_blank"      > 小米短袖T恤 西游记 </a>												</dd>
                                        <dd class="xm-recommend-price">39元</dd>
                                        <dd class="xm-recommend-tips"> 1581人好评 </dd>
                                    </dl>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
<script type="text/javascript" src="{{url('js/index.js')}}"></script>
@endsection