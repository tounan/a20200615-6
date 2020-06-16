<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="format-detection" content="telephone=no,email=no,adress=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>H5兑换矿机</title>
    <link href="/Public/kj/css/swiper.min.css" type="text/css" rel="stylesheet">
    <link href="/Public/kj/css/style.css" type="text/css" rel="stylesheet">
    <script src="/Public/kj/js/jquery.min.js"></script>
    <script src="/Public/kj/js/swiper.min.js"></script>
    <script src="/Public/kj/js/rem.js"></script>
    <script src="/Public/kj/js/safari.js"></script>
</head>
<body>
<!-- 头部-->
<div class="header">
    <span class="go_black" id="goblack"></span>
    <h3>兑换</h3>
</div>
<!--end-->
<!--兑换矿机-->
 <div class="exchange">
     <h3><?php echo ($product["title"]); ?></h3>
     <div class="formtemplate">
         <p><?php echo ($product["content"]); ?></p>
     </div>
     <div class="btn">
         <span onclick="javascript:window.location.href='<?php echo U('Shop/buy',array('id'=>$product['id']));?>'">立即兑换</span>
     </div>
 </div>
<!--end-->
<!--footer-->
<div class="footer">
    <ul>
        <li><a href="<?php echo U('Index/Emoney/shouye');?>"> <span class="icn1"></span>
            <p>首页</p></a></li>
        <li class="active"><a href="<?php echo U('Index/Shop/plist');?>"> <span class="icn2"></span>
            <p>矿机商场</p></a></li>
        <li><a href="<?php echo U('Index/Emoney/index');?>"> <span class="icn3"></span>
            <p>交易中心</p></a></li>
        <li><a href="<?php echo U('Index/Index/index');?>"> <span class="icn4"></span>
            <p>个人中心</p></a></li>
    </ul>
</div>
<!--end-->
<script src="/Public/kj/js/goblak.js"></script>
</body>
</html>