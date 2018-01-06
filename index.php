<?php
$menu='https://c.y.qq.com/v8/fcg-bin/fcg_v8_toplist_opt.fcg?page=index&format=html&tpl=macv4&v8debug=1&jsonCallback=jsonCallback';
$menu=file_get_contents($menu);
//$menu=preg_replace('/^ jsonCallback\((.+?)\)$/','',$menu);
$menu=str_replace(' jsonCallback(','',$menu);
$menu=substr($menu,0,-1);//var_dump($menu);
$menu=json_decode($menu,true);
$menu_list=$menu[1]['List'];
//var_dump($menu[1]);
$public='/public/';
?>
<!doctype html>
<html class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="viewport"
        content="width=device-width, initial-scale=1">
  <title>Hello Amaze UI</title>
<!--<style>
body{font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;}.container{max-width:32rem;margin-left:auto;margin-right:auto;}h1{font-size:54px;color:#333;margin:30px 0 10px;}h2{font-size:22px;color:#555;}h3{font-size:24px;color:#555;}hr{display:block;width:7rem;height:1px;margin:2.5rem 0;background-color:#eee;border:0;}a{color:#08c;text-decoration:none;}p{font-size:18px;}
</style>-->
  <!-- Set render engine for 360 browser -->
  <meta name="renderer" content="webkit">

  <!-- No Baidu Siteapp-->
  <meta http-equiv="Cache-Control" content="no-siteapp"/>

  <link rel="icon" type="image/png" href="<?php echo $public;?>i/favicon.png">

  <!-- Add to homescreen for Chrome on Android -->
  <meta name="mobile-web-app-capable" content="yes">
  <link rel="icon" sizes="192x192" href="<?php echo $public;?>i/app-icon72x72@2x.png">

  <!-- Add to homescreen for Safari on iOS -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="apple-mobile-web-app-title" content="Amaze UI"/>
  <link rel="apple-touch-icon-precomposed" href="<?php echo $public;?>i/app-icon72x72@2x.png">

  <!-- Tile icon for Win8 (144x144 + tile color) -->
  <meta name="msapplication-TileImage" content="<?php echo $public;?>i/app-icon72x72@2x.png">
  <meta name="msapplication-TileColor" content="#0e90d2">

  <link rel="stylesheet" href="<?php echo $public;?>css/amazeui.min.css">
  <link rel="stylesheet" href="<?php echo $public;?>css/apps.css">
<link rel="stylesheet" href="/music/APlayer.min.css">
</head>
<body onhashchange="miniSPA.changeUrl();zh_init();">
<nav data-am-widget="menu" class="am-menu am-menu-default am-no-layout">
<a href="javascript: void(0)" class="am-menu-toggle">
<i class="am-menu-toggle-icon am-icon-bars"></i>
</a>
<ul class="am-menu-nav am-avg-sm-3">
<li class="am-parent">
<a href="#!" class="">首页</a>
<ul class="am-menu-sub am-collapse am-avg-sm-2">
<li class="">
<a href="#!/about" class="">关于本程序</a>
</li>
<li class="am-menu-nav-channel"><a href="#!/home" class="" title="栏目">进入栏目 »</a></li></ul>
</li>
<li class=""><a href="#!/about" class="">关于本程序</a></li>
</ul></nav>
<div class="am-u-sm-12 am-u-md-3">
  <div data-am-widget="list_news" class="am-list-news am-list-news-default">
  <!--列表标题-->
    <div class="am-list-news-hd am-cf">
       <!--带更多链接-->
        <a href="###" class="">
          <h2>全球音乐榜</h2>
            <span class="am-list-news-more am-fr">更多 &raquo;</span>
        </a>
          </div>

  <div class="am-list-news-bd">
  <ul class="am-list">
    <?php
	foreach($menu_list as $v){
		
	
	?>
    
    
     <!--缩略图在标题右边-->
      <li class="am-g am-list-item-desced am-list-item-thumbed am-list-item-thumb-right">
        <div class=" am-u-sm-8 am-list-main">
            <h3 class="am-list-item-hd"><a href="#!/list/name/<?php echo $v['ListName']; ?>/update_key/<?php echo $v['update_key']; ?>/topID/<?php echo $v['topID']; ?>" class=""><?php echo $v['ListName']; ?></a></h3>

<?php
$song_list=$v['songlist'];
$song_str='更新日期：'.$v['showtime'].'本期榜单歌曲有：';
$song_arr=array();
$str='';
foreach($song_list as $vv){
//$str.='';
$str.=$vv['singername'].'的'.$vv['songname'].'，';
	//array_push($song_arr,$vv);
}
$str=substr($str,0,-3);
?>
            <div class="am-list-item-text"><?php echo $str;?></div>

        </div>
          <div class="am-u-sm-4 am-list-thumb">
            <a href="#!/list/name/<?php echo $v['ListName']; ?>/update_key/<?php echo $v['update_key']; ?>/topID/<?php echo $v['topID']; ?>" class="">
              <img src="<?php echo $v['pic']; ?>" alt="<?php echo $v['ListName']; ?>"/>
            </a>
          </div>
      </li>
<?php

	}
	?>
    </ul>
  </div>

    </div>

</div>
<div class="am-u-sm-12 am-u-md-9">
<div id="contents">

 </div>
    </div>
<!--在这里编写你的代码-->

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="<?php echo $public;?>js/jquery.min.js"></script>		<script src="/music/APlayer.min.js"></script> 
<script type="text/javascript" src="<?php echo $public;?>js/miniSPA.js"></script>
<script type="text/javascript" src="<?php echo $public;?>js/mp3app.js"></script>
<!--<![endif]-->
<!--[if lte IE 8 ]>
<script src="http://libs.baidu.com/jquery/1.11.3/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="<?php echo $public;?>js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->
<script src="<?php echo $public;?>js/lang.js"></script>
<script src="<?php echo $public;?>js/amazeui.min.js"></script>
</body>
</html>
