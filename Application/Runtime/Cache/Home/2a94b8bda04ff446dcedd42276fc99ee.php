<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if IE 7 ]>
<html class="ie ie7 lte9 lte8 lte7" lang="en-US"><![endif]-->
<!--[if IE 8]>
<html class="ie ie8 lte9 lte8" lang="en-US">    <![endif]-->
<!--[if IE 9]>
<html class="ie ie9 lte9" lang="en-US"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="noIE" lang="en-US">
<!--<![endif]-->
<head>
    <title>七七的个人主页</title>

    <!-- meta -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no"/>

    <!-- google fonts -->
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=PT+Sans'>
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Droid+Serif:regular,bold"/>
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Alegreya+Sans:regular,italic,bold,bolditalic"/>
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Nixie+One:regular,italic,bold,bolditalic"/>
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Alegreya+SC:regular,italic,bold,bolditalic"/>

    <!-- css -->
    <link rel="stylesheet" href="/sevenBlog/Public/Home/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="/sevenBlog/Public/Home/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="/sevenBlog/Public/Home/css/style.css" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="/sevenBlog/Public/Home/js/respond.js"></script>
    <![endif]-->

    <!--[if IE 8]>
    <script src="/sevenBlog/Public/Home/js/selectivizr.js"></script>
    <![endif]-->
</head>

<body>
<div id="drawer-right">
    <div class="cross text-right">
        <a class="toggleDrawer" href="#"><i class="fa fa-times-circle fa-2x"></i></a>
    </div>
    <h2>导航</h2>
    <nav>
        <ul class="nav nav-pills nav-stacked">
            <li>
                <a href="#wrapper"><i class="fa fa-home"></i> 首页</a>
            </li>
            <li>
                <a href="#portfolio"><i class="fa fa-bookmark"></i> 随笔</a>
            </li>
            <li>
                <a href="#services"><i class="fa fa-tasks"></i> 关于我</a>
            </li>
            <li>
                <a href="#blog"><i class="fa fa-wordpress"></i> 博客</a>
            </li>
            <!--<li>-->
            <!--<a href="#parallax"><i class="fa fa-heart"></i> Parallax</a>-->
            <!--</li>-->
            <!--<li>-->
            <!--<a href="#testimonials"><i class="fa fa-thumbs-up"></i> Testimonials</a>-->
            <!--</li>-->
            <li>
                <a href="#contact"><i class="fa fa-phone-square"></i> 联系我</a>
            </li>
        </ul>
    </nav>
    <div class="social">
        <ul>
            <li><a href=""><i class="fa fa-facebook-square fa-3x"></i></a></li>
            <li><a href=""><i class="fa fa-twitter-square fa-3x"></i></a></li>
            <li><a href=""><i class="fa fa-tumblr-square fa-3x"></i></a></li>
            <li><a href=""><i class="fa fa-google-plus-square fa-3x"></i></a></li>
        </ul>
    </div>
</div><!--头部与右部导航-->

<div id="wrapper">

    <div id="header" class="content-block header-wrapper">
        <div class="header-wrapper-inner">
            <section class="top clearfix">
                <div class="pull-left">
                    <h1><a class="logo" href="">七七丷</a></h1>
                </div>
                <div class="pull-right">
                    <a class="toggleDrawer" href="#"><i class="fa fa-bars fa-2x"></i></a>
                </div>
            </section>
            <section class="center">
                <div class="slogan">
                    oh dear you look so lost
                </div>
                <div class="secondary-slogan">
                    i thik i need a sunrise i'm tired of sunset
                </div>
            </section>
            <section class="bottom">
                <a id="scrollToContent" href="#">
                    <img src="/sevenBlog/Public/Home/images/arrow_down.png">
                </a>
            </section>
        </div>
    </div><!-- 首页 -->


    <div class="content-block" id="portfolio">
        <div class="container">
            <header class="block-heading cleafix">
                <a href="#" class="btn btn-o btn-lg pull-right">回到顶部</a>
                <h1>随笔</h1>
                <p>I have done some things</p>
            </header>
            <section class="block-body">
                <div class="row">
                    <div class="col-sm-4">
                        <a href="http://wangjiaqi.applinzi.com" class="recent-work" target="_blank"
                           style="background-image:url(/sevenBlog/Public/Home/images/pc.png)">
                            <span class="btn btn-o-white">点击查看网页</span>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="http://demo.bigbug.tech/shop/index.html" class="recent-work" target="_blank"
                           style="background-image:url(/sevenBlog/Public/Home/images/shopping.png)">
                            <span class="btn btn-o-white">点击查看网页</span>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="#" class="recent-work"
                           style="background-image:url(/sevenBlog/Public/Home/images/pc.png)">
                            <span class="btn btn-o-white">点击查看视频</span>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <a href="#" class="recent-work" style="background-image:url(/sevenBlog/Public/Home/images/pc.png)">
                            <span class="btn btn-o-white">点击查看</span>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="#" class="recent-work" style="background-image:url(/sevenBlog/Public/Home/images/pc.png)">
                            <span class="btn btn-o-white">点击查看</span>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="#" class="recent-work" style="background-image:url(/sevenBlog/Public/Home/images/pc.png)">
                            <span class="btn btn-o-white">点击查看</span>
                        </a>
                    </div>
                </div>
            </section>
        </div>
    </div><!-- 随笔 -->

    <div class="content-block parallax" id="services">
        <div class="container text-center">
            <header class="block-heading cleafix">
                <h1>About me</h1>
                <p>一些我所掌握的技术</p>
            </header>
            <section class="block-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="service">
                            <i class="fa fa-send-o"></i>
                            <h2>Web</h2>
                            <p>从事web前端开发，掌握HTML5、css3、JavaScript语言，熟练使用jQueryJS、angularJS等前端框架进行网页开发制作。</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service">
                            <i class="fa fa-heart-o"></i>
                            <h2>APP</h2>
                            <p>掌握Ionic、React、React-Native等前端框架，进行原生混合式应用开发，适应iOS、Android以及Windows Phone多平台使用。</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service">
                            <i class="fa fa-camera-retro"></i>
                            <h2>Adobe</h2>
                            <p>熟练使用Photoshop、Premiere Pro等视频，照片编辑工具。完成切图、美化、视频剪辑创作、视频转码等……</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div><!-- 关于我 -->


    <div class="content-block" id="blog">
        <div class="container">
            <header class="block-heading cleafix">
                <a href="#" class="btn btn-o btn-lg pull-right">回到顶部</a>
                <h1>我的博客</h1>
                <p>然而。。。。。目前并没有博客.</p>
            </header>
            <!--<section class="block-body">-->
            <!--<div class="row">-->
            <!--<div class="col-sm-4 blog-post">-->
            <!--<img src="/sevenBlog/Public/Home/images/bike_water1-1000x600.jpg">-->
            <!--<a href="#"><h2>Design Your Mind</h2></a>-->
            <!--<div class="date">3 Nov, 2014</div>-->
            <!--<p>In at accumsan risus. Nam id volutpat ante. Etiam vel mi mattis, vulputate nunc nec, sodales-->
            <!--nibh. Etiam nulla magna, gravida eget ultricies sit amet, hendrerit in lorem.</p>-->
            <!--<a href="">Read More</a>-->
            <!--</div>-->
            <!--<div class="col-sm-4 blog-post">-->
            <!--<img src="/sevenBlog/Public/Home/images/mac_glasses1-1000x600.jpg">-->
            <!--<a href="#"><h2>Winter Is Comming</h2></a>-->
            <!--<div class="date">3 Nov, 2014</div>-->
            <!--<p>In at accumsan risus. Nam id volutpat ante. Etiam vel mi mattis, vulputate nunc nec, sodales-->
            <!--nibh. Etiam nulla magna, gravida eget ultricies sit amet, hendrerit in lorem.</p>-->
            <!--<a href="">Read More</a>-->
            <!--</div>-->
            <!--<div class="col-sm-4 blog-post">-->
            <!--<img src="/sevenBlog/Public/Home/images/road-1000x600.jpg">-->
            <!--<a href="#"><h2>The Illustration</h2></a>-->
            <!--<div class="date">3 Nov, 2014</div>-->
            <!--<p>In at accumsan risus. Nam id volutpat ante. Etiam vel mi mattis, vulputate nunc nec, sodales-->
            <!--nibh. Etiam nulla magna, gravida eget ultricies sit amet, hendrerit in lorem.</p>-->
            <!--<a href="">Read More</a>-->
            <!--</div>-->
            <!--</div>-->
            <!--</section>-->
        </div>
    </div><!-- 我的博客 -->

    <div class="content-block" id="contact">
        <div class="container text-center">
            <header class="block-heading cleafix">
                <h1>联系我</h1>
                <p>Feel free to drop us a line.</p>
            </header>
            <section class="block-body">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <form class="" role="form">
                            <div class="form-group">
                                <input type="email" class="form-control form-control-white" id="subject"
                                       placeholder="Your Name" required>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control form-control-white" id="exampleInputEmail2"
                                       placeholder="Enter email" required>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control form-control-white" placeholder="Write Something"
                                          required></textarea>
                            </div>
                            <input type="submit" class="btn btn-o-white" value="Say Hello">
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div><!-- 联系我 -->

    <div class="content-block" id="footer">
        <div class="container">
            <div class="row">
                <div class="col-xs-6">&copy; 2017</div>
                <div class="col-xs-6 text-right"> by <a href="https://themewagon.com/"
                                                        target="_blank">七七丷</a></div>
            </div>
        </div>
    </div><!-- 底部 -->


</div><!--/#wrapper-->


<script src="/sevenBlog/Public/Home/js/jquery-2.1.3.min.js"></script>
<script src="/sevenBlog/Public/Home/js/jquery-migrate-1.2.1.min.js"></script>
<script src="/sevenBlog/Public/Home/js/bootstrap.min.js"></script>
<script src="/sevenBlog/Public/Home/js/jquery.actual.min.js"></script>
<script src="/sevenBlog/Public/Home/js/jquery.scrollTo.min.js"></script>
<script src="/sevenBlog/Public/Home/js/script.js"></script>

</body>
</html>