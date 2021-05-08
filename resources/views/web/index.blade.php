<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>个人主页</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta name="apple-mobile-app-capable" content="yes">
    <meta name="apple-mobile-app-status-bar-style" content="black">

    <meta name="description" content="cx">
    <meta name="keywords" content="cx">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="cononico">
    <meta name="application-name" content="Cononico">
    <link rel="stylesheet" type="text/css" href="{{ asset('index/cx/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('index/cx/process.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('index/cx/main.css') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('index/cx/favicon.ico') }}">

    <script type="text/javascript">
        //设定rem值
        document.getElementsByTagName("html")[0].style.fontSize = document.documentElement.clientWidth / 20 + 'px';
    </script>
    <!--[if lt IE 8]>
    <h5 class="text-center">你的浏览器弱渣了，为了更好的浏览体验，赶快升级浏览器吧！！</h5><![endif]-->
</head>

<body>
<header class="head">
    <div class="head_logo_div">
        <a href="/admin"><img class="logo_img" src="{{ asset('index/cx/head.jpg') }}"></a>
    </div>
    <div class="head_nav_div">
        <nav class="head_nav">
            <ul id="nav_ul">
                <li class="nav_li_on nav_ul_li" style="color: red;">首页</li>
                <li class="nav_ul_li" style="color: rgb(0, 0, 0);">简介</li>
                <li class="nav_ul_li" style="color: rgb(0, 0, 0);">时间轴</li>
                <li class="nav_ul_li" style="color: rgb(0, 0, 0);">介绍</li>
                <li class="nav_ul_li" style="color: rgb(0, 0, 0);">联系方式</li>
{{--                <li style="background-color: red;"><a class=" btn btn-info" href="/admin">管理系统</a></li>--}}
            </ul>
        </nav>
    </div>
    <div class="clear"></div>
</header>

<ul class="float_btn" id="float_btn">
    <li class="btn_on" style="background: rgb(255, 255, 255);"></li>
    <li style="background: transparent;"></li>
    <li style="background: transparent;"></li>
    <li style="background: transparent;"></li>
</ul>

<div class="wrapBox" id="wrapBox" style="top: 0px;">
    <div class="box">
        <img class="box_bg" src="{{ asset('index/cx/pic_1.jpg') }}" href="#"
             style="width: 1920px; height: 1080px; top: -45px; left: 0px;">
        <div class="box01_content">
            <div class="head_div">
                <div class="cycle_item">
                    <a href="#" class="github_a" id="github_a" target="_blank" style="left: -10px; top: 307px;">
                        <span class="github_icon"><p class="item_name"> 春夏</p></span>
                        <span class="github_text"></span>
                    </a>
                    <a href="#" class="weibo_a" id="weibo_a" target="_blank" style="left: 339px; top: 155px;">
                        <span class="weibo_icon"><p class="item_name">秋冬</p></span>
                        <span class="weibo_text"></span>
                    </a>
                    <a href="#" class="blog_a" id="blog_a" target="_blank" style="left: 30px; top: 7px;">
                        <span class="blog_icon"><p class="item_name">不复</p></span>
                        <span class="blog_text"></span>
                    </a>

                    <div class="green_cycle">
                        <img class="green_cycle_img" src="{{ asset('index/cx/green_cycle.svg') }}">
                        <div class="yellow_cycle">
                            <img class="yellow_cycle_img" src="{{ asset('index/cx/yellow_cycle.svg') }}">
                            <div class="blue_cycle">
                                <img class="blue_cycle_img" src="{{ asset('index/cx/blue_cycle.svg') }}">
                                <div class="head_img_div">
                                    <img class="head_img" src="{{ asset('index/cx/head.jpg') }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h1 class="title">(*Φ皿Φ*)</h1>
            <h2 class="title_h2">最是青春奋斗时，不负韶华好时光？<br>不！是吃饭睡觉打豆豆！</h2>
            <div id="box01_text">
                <p class="box01_p" style="opacity: 1;">QQ：857355787</p>
                <p class="box01_p" style="opacity: 1;">待人和善不高冷 </p>
            </div>
        </div>
        <div class="arrow_div">
            <img class="arrow_img" src="{{ asset('index/cx/arrowhead.png') }}">
        </div>
    </div>

    <div class="box">
        <img class="box_bg" src="{{ asset('index/cx/pic_2.jpg') }}"
             style="width: 1920px; height: 1080px; top: -45px; left: 0px;">

        <div class="box02_content box_content">
            <div id="bar_container" class="bar_container">
                <div class="bar mint active" data-percent="100" data-skill="财富？"></div>
                <div class="bar red active" data-percent="80" data-skill="地位？"></div>
                <div class="bar lila active" data-percent="60" data-skill="名誉？"></div>
                <div class="bar orange active" data-percent="50" data-skill="权势？"></div>
            </div>
            <div id="box02_text">
                <h1 style="right: 0px;">岁月</h1>
                <div class="overline" style="right: 0px;"></div>
                <p style="right: 0px;">对于三十岁以后的人来说，十年八年不过是指缝间的事，而对于年轻人而言，三年五年就可以是一生一世</p>
                <p style="right: 0px;">岁月如流，什么都会过去，但总有些东西发生了就不能抹煞</p>
                <p style="right: 0px;">忘掉你的坏，我们永不永不说再见</p>
                <p style="right: 0px;">招收学徒详情：</p>
                <p style="right: 0px;">短暂的岁月要求我好好领会生活的进程……</p>
                <p style="right: 0px;">青春的美酒并不总是清澈的，有时它会变得混浊</p>
                <p style="right: 0px;">无论岁月有多长，我愿放弃所有孤单陪你闯</p>
                <p style="right: 0px;">当我猜到答案，才发现，宴席已散，一切都已过去</p>
                <p style="right: 0px;">无论幸福有多远，我愿与你共相伴</p>
                <p style="right: 0px;">小白应该更努力！要相信未来！</p>
                <p style="right: 0px;">只要心中有梦！未来，不属于我们！</p>
            </div>
            <div class="clear"></div>
        </div>

        <div class="arrow_div">
            <img class="arrow_img" src="{{ asset('index/cx/arrowhead.png') }}">
        </div>

    </div>

    <div class="box">
        <img class="box_bg" src="{{ asset('index/cx/pic_3.jpg') }}"
             style="width: 1920px; height: 1080px; top: -45px; left: 0px;">

        <div class="box_content box03_content">
            <ul id="timeUl" class="timeUl">
                <li>
                    <div>
                        <h1>1991.10</h1>
                        <p>伟大的日子</p>
                    </div>
                </li>
                <li>
                    <div>
                        <h1>2010</h1>
                        <p>你不要做英雄</p>
                        <p>英雄善始不善终</p>
                        </h1>
                    </div>
                </li>
                <li>
                    <div>
                        <h1>2015</h1>
                        <p>有些事</p>
                        <p>有些人</p>
                        <p>总是让你措手不及</p>
                    </div>
                </li>
                <li>
                    <div>
                        <h1>20++</h1>
                        <p>冷静分析 </p>
                        <p>善于思考</p>
                        <p>眼光长远</p>
                        <p>切莫脑袋一热</p>
                        </h1>
                    </div>
                </li>

            </ul>
            <div class="left_div" id="left_div">
                <img class="left_arrow" src="{{ asset('index/cx/arrowleft.png') }}">
            </div>
            <div class="right_div" id="right_div">
                <img class="right_arrow" src="{{ asset('index/cx/arrowright.png') }}">
            </div>
        </div>

        <div class="arrow_div">
            <img class="arrow_img" src="{{ asset('index/cx/arrowhead.png') }}">
        </div>
    </div>


    <div class="box">

        <img class="box_bg" src="{{ asset('index/cx/pic_4.jpg') }}"
             style="width: 1920px; height: 1080px; top: -45px; left: 0px;">
        <div class="box_content box04_content">
            <h1 class="box04_title">仔细阅读，让你了解我们</h1>
            <ul class="hobby_content">
                <li class="hobby_01">
                    <div class="hobby_img_div">
                        <div class="spinner spinner_01"></div>
                        <div class="hobby_img">
                            <img src="{{ asset('index/cx/kapok.jpg') }}">
                        </div>
                        <div class="hobby_img_info">
                            <h1>X</h1>
                            <h2>你所爱的</h2>
                        </div>
                    </div>
                    <div class="hobby_text_div">
                        <div class="hobby_img_info_mob">
                            <h1></h1>
                        </div>
                        <p class="about_p">
                            为人正直，热心公益，嫉恶如仇。就是没技术。
                        </p>
                        <p> 广交网络好友，不高冷，热心。喜欢妹子！

                        </p>
                    </div>
                </li>
                <li class="hobby_02">
                    <div class="hobby_img_div">
                        <div class="spinner spinner_02"></div>
                        <div class="hobby_img">
                            <img src="{{ asset('index/cx/acg.png') }}">
                        </div>
                        <div class="hobby_img_info">
                            <h1>X</h1>
                            <h2>我所爱的</h2>
                        </div>
                    </div>
                    <div class="hobby_text_div">
                        <div class="hobby_img_info_mob">
                            <h1></h1>
                        </div>
                        <p class="about_p">
                            欢迎
                        </p>
                        <p>
                            来了就是朋友，无条件无门槛
                        </p>
                    </div>
                </li>
                <li class="hobby_03">
                    <div class="hobby_img_div">
                        <div class="spinner spinner_03"></div>
                        <div class="hobby_img">
                            <img src="{{ asset('index/cx/reading.jpg') }}">
                        </div>
                        <div class="hobby_img_info">
                            <h1>X</h1>
                            <h2>你所爱的和我所爱的</h2>
                        </div>
                    </div>
                    <div class="hobby_text_div">
                        <div class="hobby_img_info_mob">
                            <h1></h1>
                        </div>
                        <p class="about_p">
                            爱
                        </p>
                        <p>
                            所爱的
                        </p>
                    </div>
                </li>
                <div class="clear"></div>
            </ul>
        </div>
        <div class="arrow_div">
            <img class="arrow_img" src="{{ asset('index/cx/arrowhead.png') }}">
        </div>
    </div>

    <foot id="foot" class="foot">
        <h1 class="foot_title">联系方式</h1>
        <div class="foot_info_main">
            <ul>
                <li class="weibo_items">
                    <a href="#" target="_blank">没有</a>
                </li>
                <li class="zhihu_items">
                    <a href="#" target="_blank">不告诉你</a>
                </li>
                <li class="zhihu_items">
                    <a href="#" target="_blank">你猜</a>
                </li>
                <li class="email_items">
                    <a href="#" target="_blank">无</a>
                </li>
                <div class="clear "></div>
            </ul>
            <div class="qrcode_div ">
            </div>
        </div>
        <div class="foot_power ">
            <h3>©2021 zsq
                <a href="#" title="Sxz " target="_blank "> &ampXXX</a>
                <a href="#" title="IceEnd ">版权所有</a>
                <a href="#" title="beian " target="_blank ">ICP备XXXX</a>
            </h3>
        </div>
    </foot>
</div>
<script type="text/javascript " src="{{ asset('index/cx/main.js') }}"></script>
<audio autoplay="autoplay ">
    <source src=" " type="audio/mpeg ">
</audio>
<iframe frameborder="no " border="0 " marginwidth="0 " marginheight="0 " width="330 " height="86 "
        src=""></iframe>
</body>
</html>
