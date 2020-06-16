<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>PCO商城六月中旬上线</title>
		<meta name="keywords" content="手机,WAP版,超市百货,购物商城,商城网站,模板下载" />
		<meta name="description" content="手机WAP版超市百货购物商城网站模板下载。" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="renderer" content="webkit">
        <meta http-equiv="Cache-Control" content="no-siteapp" />
        <link rel="icon" type="image/png" href="/theme/default/images/favicon.png">
		<link href="/Public/home/css/amazeui.min.css" rel="stylesheet" type="text/css" />
		<link href="/Public/home/css/style.css" rel="stylesheet" type="text/css" />
		<link type="text/css" rel="stylesheet" href="/Public/btb/css/lib.css?2">
		<link href="/Public/gec/web/fonts/iconfont.css" rel="stylesheet">
		<link rel="stylesheet" href="/Public/gec/web/css/weui.min.css"/>
    <script src="/Public/btb/js/jquery-1.8.3.min.js"></script>
    <link rel="stylesheet" href="/Public/btb/css/weui.min.css"/>
    <link rel="stylesheet" href="/Public/btb/css/jquery-weui.min.css">
    <link href="/Public/btb/css/font-awesome.min.css" rel="stylesheet">
    <link href="/Public/btb/fonts/iconfont.css" rel="stylesheet">

    <link rel="stylesheet" href="/Public/btb/css/styles.css"/>
	<link href="/Public/gec/web/css/font-awesome.min.css" rel="stylesheet">
		<script src="/Public/home/js/jquery-1.10.2.min.js"></script>
		<script src="/Public/home/js/time.js"></script>
		<script src="/Public/home/js/popup.mini.js"></script>
	</head>
	<body>
    <header class="header">
        <span class="header_l"><a href="javascript:history.go(-1);"><i class="fa fa-chevron-left"></i></a></span>
        <span class="header_c">PCO商城</span>

    </header>
<div style="height: 49px;"></div>
<!--图片轮换-->
<div class="am-slider am-slider-default" data-am-flexslider id="demo-slider-0">
  <ul class="am-slides">
  <?php if(is_array($banner_list)): foreach($banner_list as $key=>$vo): ?><li><img src="<?php echo ($vo['path']); ?>" /></li><?php endforeach; endif; ?>
  </ul>
</div>
<!--导航-->
 <ul class="sq-nav">
   	<li>
        <div class="am-gallery-item">
            <a href="<?php echo U('Index/Shop/jiameng');?>" class="">
              <img src="/Public/home/images/icon4.png" />
              <p>入驻商城</p>
            </a>
        </div>
      </li>
      <li>
        <div class="am-gallery-item">
            <a href="<?php echo U('Index/Shop/search');?>" class="">
              <img src="/Public/home/images/icon5.png" />
              <p>超市</p>
            </a>
        </div>
      </li>
      <li>
        <div class="am-gallery-item">
            <a href="javascript:alert('暂未开放，敬请期待！');" class="">
              <img src="/Public/home/images/yule.png" />
              <p>场内游戏</p>
            </a>
        </div>
      </li>
      <li>
        <div class="am-gallery-item">
            <a href="<?php echo U('Index/Shop/dingdan');?>" class="">
              <img src="/Public/home/images/icon3.png" />
              <p>我的订单</p>
            </a>
        </div>
      </li>
  </ul>

  <div class="h-line"></div>
  <!--不规则展示-->
  <div class="index-product">
  	<div class="index-pro-lf"><a href=""><img src="/Public/home/images/s1.png"/></a></div>
  	<div class="index-pro-lr"><a href=""><img src="/Public/home/images/s2.png"/></a></div>
  </div>
  <div class="product-bot">
  	<div class="product-bot-lf"><a href=""><img src="/Public/home/images/s3.png"/></a></div>
  	<div class="product-bot-lr">
  		<div class="top"><a href=""><img src="/Public/home/images/s4.png"/></a></div>
  		<div class="bot">
  			<div class="bot-lf"><a href=""><img src="/Public/home/images/s5.png"/></a></div>
  			<div class="bot-lr"><a href=""><img src="/Public/home/images/s6.png"/></a></div>
  		</div>
  	</div>
  </div>
  <!--不规则展示-->
  <div class="h-line"></div>


 <!--底部-->
 <div style="height: 55px;"></div>
<link href="/Public/btb/fonts/iconfont.css" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="/Public/btb/css/lib.css?2">

    <link href="/Public/kj/css/styles.css" type="text/css" rel="stylesheet">
<style>
	.footer ul li{
		width: 25%;
	}
</style>
<div class="footer">
    <ul>
        <li><a href="<?php echo U('Index/Emoney/shouye');?>"> <span class="icn1"></span>
            <p>首页</p></a></li>
        <li><a href="<?php echo U('Index/Shop/plist');?>"> <span class="icn2"></span>
            <p>矿机商场</p></a></li>
        <li><a href="<?php echo U('Index/Emoney/index');?>"> <span class="icn3"></span>
            <p>交易中心</p></a></li>
        <li><a href="<?php echo U('Index/Index/index');?>"> <span class="icn4"></span>
            <p>个人中心</p></a></li>
    </ul>
</div>
 
 
 
 <script type='text/javascript'>
	(function(){
		 new PopUp_api({el:'.index-qd',html:'.qd-box'});
	})()
</script>
 
<script src="/Public/home/js/jquery.min.js"></script>
<script src="/Public/home/js/amazeui.min.js"></script>
	</body>
</html>