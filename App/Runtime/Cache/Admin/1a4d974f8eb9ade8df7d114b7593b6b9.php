<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en-US">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title><?php echo ($title); ?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width">
    <meta name="viewport" content="initial-scale=1">
    <link rel="stylesheet" href="__PUBLIC__/Admin_v3/css/static/baguetteBox.css">
    <link rel="stylesheet" href="__PUBLIC__/Admin_v3/css/static/swiper.min.4.6.css">
    <link rel="stylesheet" href="__PUBLIC__/Admin_v3/css/static/style.css">
	<meta name="msapplication-TileColor">
    <meta name="theme-color">
</head>
    <body class="near-bottom clippings-mobile-no-edit site-loaded clippings-instruction-on-hover" id="warp">
        <div class="warp">
            <div class="page-context home outgoing" id="home">
                <!-- banner图 star-->
                <div class="home-cover-image">
                    <!-- 轮播实现--介绍 -->
                    <div class="cover-images mod-slideshow swiper-container" id="swiperIndexImage">
                        <div class="swiper-wrapper">
                            <!-- 单独首页轮播图 item star-->
                            <div class="swiper-slide">
                                <img class="mod-slideshow__image_1 lazy-load" src="__PUBLIC__/Admin_v3/image/index-001-sd.jpg">
                            </div>
                            <!-- 单独首页轮播图 item end-->
                            <div class="swiper-slide">
                                <img class="mod-slideshow__image_1 lazy-load" src="__PUBLIC__/Admin_v3/image/index-002-sd.jpg">
                            </div>
                            <div class="swiper-slide">
                                <img class="mod-slideshow__image_1 lazy-load" src="__PUBLIC__/Admin_v3/image/index-003-sd.jpg">
                            </div>
                        </div>
                    </div>
                    <!-- 轮播实现--介绍 -->

                    <!-- pc状态下的图片显示 -->
                    <img src="__PUBLIC__/Admin_v3/image/index-001-pc.jpg" class="cover-image spacer">
                    <img src="__PUBLIC__/Admin_v3/image/index-001-pc.jpg" class="cover-image transformer lazy-load landscape ready">
                    <!-- pc状态下的图片显示 -->
                    <img class="oka-wordmark" src="__PUBLIC__/Admin_v3/image/ok-wordmark-white-med.png">
                </div>
                <!-- banner图 end-->
                
                <!-- 介绍--TOPOS -->
                <div class="content-wrap">
                    <div class="site-strapline">
                        <!-- 介绍公司 -->
                        <p>TOPOS景观建筑师事务所于2003年在加利福尼亚州圣迭戈成立，是美国西海岸最主要的景观设计实践者之一。设计服务内容从景观规划到细节设计，包括施工图和施工现场管理直至建成。在近十年的实践中，我们在美国及亚洲范围内完成了一系列充满挑战的景观设计和景观规划项目，包括居住区及别墅，旅游度假及酒店，商业及城市景观，办公研究园区，公园及滨水开放空间。在每个项目中，我们都在探索纯粹，清晰的美学原则，着重对整体环境和意境的塑造。我们致力于把握参与者的体验，从文化与当地生活中挖掘意境，给与每一个场地独特的生命力和新的体验，促进人与场所的感性对话，创造高品质生活方式。在每个项目中，客户诉求与设计想法之间的关系是我们最热衷的方面：帮助一位仅具初期想法或未有固定想法的客户，一起营造能够启发使用者的高度艺术的景观，创造及提升持续的价值。我们永远在寻求一个问题的答案:
                            什么是每一个项目应有的美学以及如何创造性的建成实现？此过程产生了 TOPOS 每个项目独一无二的景观品质。</p>
                        <!-- 介绍公司 -->
                        <div class="section-anchor-links">
                            <!-- 项目btn 需要中英文标注一下-->
                            <div class="projects-section-anchor homepage-section-link" onclick="handleProject()" data-section="featured-collections">
                                项目<span class="down-arrow">&or;</span>
                            </div>
                            <div class="news-section-anchor homepage-section-link" onclick="handleNew()" data-section="news">
                                新闻<span class="down-arrow">&or;</span>
                            </div>
                            <!-- 项目btn -->
                        </div>
                        <div class="olson-kundig-monogram"></div>
                    </div>
        
                    <div class="featured-collections" id="featured-collections">
                        <!-- 项目分类 -->
                        <div class="slider-wrap collection-">
                            <!-- <div class="slider-title-wrap">
                                <h3>酒店及度假休闲</h3>
                            </div> -->
                            <h2>酒店及度假休闲</h2>
                            <div class="slider collection- swiper-container project-collections-warp pageContent-ui" style="overflow:visible;">
                                <div class="swiper-wrapper swiper-wrapper-project">
                                    <!-- 项目中的列子 item -->
                                    <div class="tile type-project swiper-slide">
                                        <a href="" class="history-link "
                                         data-collection-id="">
                                            <div class="tile-inner-wrap preload-image">
                                                <div class="accent-colour" style="background-color: rgb(102, 10, 10);"></div>
                                                <img src="__PUBLIC__/Admin_v3/image/hotel-yishan-450x270.jpg">
                                                <div class="type-icon">
                                                    <div class="icon-wrap"></div>
                                                </div>
                                            </div>
                                            <div class="text">
                                                <h4 class="head">驿山高尔夫度假酒店别墅区</h4>
                                                <h4 class="subhead">中国武汉</h4>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="tile type-project swiper-slide">
                                        <a href="" class="history-link "
                                         data-collection-id="">
                                            <div class="tile-inner-wrap preload-image">
                                                <div class="accent-colour" style="background-color: rgb(102, 10, 10);"></div>
                                                <img src="__PUBLIC__/Admin_v3/image/hotel-yishan-450x270.jpg">
                                                <div class="type-icon">
                                                    <div class="icon-wrap"></div>
                                                </div>
                                            </div>
                                            <div class="text">
                                                <h4 class="head">驿山高尔夫度假酒店别墅区</h4>
                                                <h4 class="subhead">中国武汉</h4>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="tile type-project swiper-slide">
                                        <a href="" class="history-link "
                                         data-collection-id="">
                                            <div class="tile-inner-wrap preload-image">
                                                <div class="accent-colour" style="background-color: rgb(102, 10, 10);"></div>
                                                <img src="__PUBLIC__/Admin_v3/image/hotel-yishan-450x270.jpg">
                                                <div class="type-icon">
                                                    <div class="icon-wrap"></div>
                                                </div>
                                            </div>
                                            <div class="text">
                                                <h4 class="head">驿山高尔夫度假酒店别墅区</h4>
                                                <h4 class="subhead">中国武汉</h4>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="tile type-project swiper-slide">
                                        <a href="" class="history-link "
                                         data-collection-id="">
                                            <div class="tile-inner-wrap preload-image">
                                                <div class="accent-colour" style="background-color: rgb(102, 10, 10);"></div>
                                                <img src="__PUBLIC__/Admin_v3/image/hotel-yishan-450x270.jpg">
                                                <div class="type-icon">
                                                    <div class="icon-wrap"></div>
                                                </div>
                                            </div>
                                            <div class="text">
                                                <h4 class="head">驿山高尔夫度假酒店别墅区</h4>
                                                <h4 class="subhead">中国武汉</h4>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="tile type-project swiper-slide">
                                        <a href="" class="history-link "
                                         data-collection-id="">
                                            <div class="tile-inner-wrap preload-image">
                                                <div class="accent-colour" style="background-color: rgb(102, 10, 10);"></div>
                                                <img src="__PUBLIC__/Admin_v3/image/hotel-yishan-450x270.jpg">
                                                <div class="type-icon">
                                                    <div class="icon-wrap"></div>
                                                </div>
                                            </div>
                                            <div class="text">
                                                <h4 class="head">驿山高尔夫度假酒店别墅区</h4>
                                                <h4 class="subhead">中国武汉</h4>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- 项目中的列子 -->
                                </div>
                                <!-- <div class="slider-more-arrow"></div>
                                <div class="slider-less-arrow"></div> -->
                                 <!-- 如果需要导航按钮 -->
                                <div class="swiper-button-prev">
                                    <div class="prevBtn"></div>
                                </div>
                                <div class="swiper-button-next">
                                    <div class="nextBtn"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 项目 -->
                    
                    <!-- 新闻 -->
                    <div class="news" id="featured-new">
                        <h2>新闻</h2>
                        <div class="slider swiper-container project-collections-warp homepage-news__slider" style="overflow:visible">
                            <div class="swiper-wrapper">
                                <ul>
                                    <!-- 新闻文章 -->
                                    <li class="homepage-news__tile homepage-news__tile--internal swiper-slide homepage-news__tile--portrait">
                                        <a href="">
                                            <img class="homepage-news__image" src="__PUBLIC__/Admin_v3/image/wuhanguanggu.jpg" ?="">
                                            <div class="homepage-news__text-wrap">
                                                <span class="homepage-news__date">2017-11-08</span>
                                                <p class="homepage-news__title">大光谷终于出纯新盘</p>
                                            </div>
                                        </a>
                                    </li>
                                        <!-- 新闻文章 -->
                                </ul>
                            </div>
                            <!-- <div class="slider-more-arrow"></div>
                            <div class="slider-less-arrow"></div> -->
                             <!-- 如果需要导航按钮 -->
                             <div class="swiper-button-prev" style="left: 0vw;">
                                <div class="prevBtn"></div>
                            </div>
                            <div class="swiper-button-next" style="right: 0vw;">
                                <div class="nextBtn"></div>
                            </div>
                        </div>
                    </div>
                     <!-- 新闻 end-->
                    <div class="instagram">
                        <h2>招聘</h2>
                        <!-- 招聘 -->
                        <div class="slider instagram-slider at-end at-start">
                            <ul style="transform: translate(0px, 0px) translateZ(0px);">
                                <li class="instagram-tile ">
                                    <!-- <img width="450" height="450" src="http://www.toposla.com/rsc/images/1515202805-450x450.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt=""  sizes="(max-width: 450px) 100vw, 450px">  -->
                                    <div class="instagram-text">
                                        <span class="news-date">2018-2-1</span>
                                        <p>初级/中级景观设计师3名（3-5年以上知名设计事务所工作经验）</p>
                                    </div>
                                </li>
        
                                <li class="instagram-tile ">
                                    <!-- <img width="450" height="450" src="http://www.toposla.com/rsc/images/1515202805-450x450.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt=""  sizes="(max-width: 450px) 100vw, 450px">   -->
                                    <div class="instagram-text">
                                        <span class="news-date">2018-2-1</span>
                                        <p>景观实习生</p>
                                    </div>
                                </li>
                            </ul>
                            <div class="slider-more-arrow"></div>
                            <div class="slider-less-arrow"></div>
                        </div>
                    </div>
                    <div class="footer">
                        <div class="col one">
                            <ul>
                                <li>
                                    <a href="mailto:info@toposla.com" target="blank">
                                        邮箱 </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col two">
                            <ul>
                                <!-- <li><a href="http://www.facebook.com" target='blank'>Facebook</a></li> -->
                                <li><a href="https://www.facebook.com/Topos-Landscape-Architects-144788566223632/?modal=admin_todo_tour" target="blank">Facebook</a></li>
                                <li><a href="https://www.instagram.com/toposlandscapearchitects/" target="blank">Instagram</a></li>
                            </ul>
                        </div>
                        <div class="col three">
                            <p>
                                中国深圳市福田中心区<br>
                                皇达东方雅苑写字楼1A<br>
                            </p>
                            <p>tel:+86 755 8616 9093</p>
                            <p>info@toposla.com</p>
                        </div>
                        <div class="col four">
                            <span>
                                美国加利福尼亚州圣迭戈格莱尼特山道9655
                            </span>
                            <span>
                                tel: +1 619 272 9669
                            </span><span>info@toposla.com</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="darken-shim" id="darken-shim"></div>

        <!-- logo -->
        <div class="page-nav no-anchors" id="page-nav">
            <ul class="desktop-nav">
                <a href="/" class="">
                    <li class="olson-kundig-wordmark"></li>
                </a>
            </ul>
            <div class="mobile-nav">
                <span class="jump-to-section">Jump to Section<span class="down-arrow">▼</span></span>
                <select class="mobile-nav-select">
                </select>
            </div>
        </div>

        <!-- 侧边栏菜单 可共用-->
        <div class="left-context site-loaded" style="display:block;">
            <div class="cant-touch-this"></div>
            <div id="open-menu-button" class="open-menu-button"></div>
            <!-- 切换英文按钮 -->
            <div class="open2-menu2-button2"></div>
            <!-- 切换英文按钮 -->
            <div class="go-back-button"></div>
            <div class="god-mode-button" style="display: none;"></div>
    
            <div class="clippings-here-instruction">
                View, edit and share your clippings here
            </div>
            <div class="clippings-context-toggle hidden">
                <div class="outline"></div>
    
                <span class="clippings-count current">0</span>
            </div>
            <div class="main-menu" id="main-menu" style="transform: translate3d(0px, 0px, 0px);">
                <div class="top">
                    <!-- 改成首页的链接 -->
                    <a href="http://www.toposla.com/">
                        <img class="oka-wordmark" src="__PUBLIC__/Admin_v3/image/toposla_black.png">
                    </a>
                    <div class="show-search-button">
                    </div>
                </div>
                <div class="right">
                    <!-- 地址 -->
                    <div class="menu-section">
                        <div class="contact-section address">
                            <p>圣迭戈</p>
                            <p>
                                美国加利福尼亚州圣迭戈格莱尼特山道9655<br> </p>
                            <p>
                                tel: +1 619 272 9669<br> </p>
                            <p>
                                info@toposla.com<br> </p>
                        </div>
    
                        <div class="contact-section address">
                            <p>深圳</p>
                            <p>
                                中国深圳市福田中心区皇达东方雅苑写字楼1A<br> </p>
                            <p>
                                tel:+86 755 8616 9093<br> </p>
                            <p>
                                info@toposla.com<br> </p>
                        </div>
    
                        <nav class="contact-section">
                            <ul class="social-links">
                                <li class="facebook"><a href="https://www.facebook.com/Topos-Landscape-Architects-144788566223632/?modal=admin_todo_tour" target="blank"></a></li>
                                <li class="instagram"><a href="https://www.instagram.com/toposlandscapearchitects/" target="blank"></a></li>
                            </ul>
                        </nav>
                        <a href="http://www.toposla.com/#" class="toggle-contact"><span class="see-more">More Contact Details</span><span class="see-less">Hide</span></a>
                    </div>
                </div>
                <div class="left">
                    <nav class="menu-section">
                        <h1>项目</h1>
                        <!-- 项目 -->
                        <ul>
                            <li>
                                <a class="menu-link" href="http://www.toposla.com/zh-hans/collection/hotels-and-holidays/index.php">
                                    &nbsp;&nbsp;酒店及度假休闲 </a>
                                <ul></ul>
                            </li>
                            <li>
                                <a class="menu-link" href="http://www.toposla.com/zh-hans/collection/publicspace-and-parks/index.php">
                                    &nbsp;&nbsp;公共空间及园区 </a>
                                <ul></ul>
                            </li>
                            <li>
                                <a class="menu-link" href="http://www.toposla.com/zh-hans/collection/villa-and-highhouses/index.php">
                                    &nbsp;&nbsp;别墅及高端居住 </a>
                                <ul>
                                </ul>
                            </li>
                            <li>
                                <a class="menu-link" href="http://www.toposla.com/zh-hans/collection/holiday-and-travel/index.php">
                                    &nbsp;&nbsp;度假旅游规划 </a>
                                <ul>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <!-- 事务所介绍 -->
                    <nav class="menu-section">
                        <h1>事务所介绍</h1>
                        <ul>
                            <li>
                                <a class="menu-link" href="http://www.toposla.com/#">
                                    &nbsp;&nbsp;新闻 </a>
                                <ul>
                                </ul>
                            </li>
                            <li>
                                <a class="menu-link" href="http://www.toposla.com/#">
                                    &nbsp;&nbsp;设计师 </a>
                                <ul>
                                </ul>
                            </li>
                            <li>
                                <a class="menu-link" href="http://www.toposla.com/#">
                                    &nbsp;&nbsp;出版书 </a>
                                <ul>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <!-- 联系方式 -->
                    <nav class="menu-section">
                        <h1>联系</h1>
                        <ul>
                            <li>
                                <a class="menu-link" href="http://www.toposla.com/#">
                                    &nbsp;&nbsp;邮箱 </a>
                                <ul>
                                </ul>
                            </li>
                            <li>
                                <a class="menu-link" href="http://www.toposla.com/#">
                                    &nbsp;&nbsp;招聘 </a>
                                <ul>
                                </ul>
                            </li>
                            <li>
                                <a class="menu-link" href="http://www.toposla.com/#">
                                    &nbsp;&nbsp;地图 </a>
                                <ul>
                                </ul>
    
                            </li>
                        </ul>
    
                    </nav>
                </div>
    
            </div>
    
        </div>
        <script type='text/javascript' src='__PUBLIC__/Admin_v3/js/jquery-2.1.1.min.js' charset='utf-8'></script>
        <script src="__PUBLIC__/Admin_v3/js/static/swiper.min.4.6.js"></script>
        <script src="__PUBLIC__/Admin_v3/js/static/baguetteBox.js"></script>
        <script src="__PUBLIC__/Admin_v3/js/static/main.js"></script>
    </body>
</html>