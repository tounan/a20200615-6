<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta http-equiv="Cache-Control" content="no-siteapp" />
 <link href="/Public/admin/assets/css/bootstrap.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="/Public/admin/css/style.css"/>       
        <link href="/Public/admin/assets/css/codemirror.css" rel="stylesheet">
        <link rel="stylesheet" href="/Public/admin/assets/css/ace.min.css" />
        <link rel="stylesheet" href="/Public/admin/assets/css/font-awesome.min.css" />
        	<!--[if IE 7]>
		  <link rel="stylesheet" href="/Public/admin/assets/css/font-awesome-ie7.min.css" />
		<![endif]-->
        <!--[if lte IE 8]>
		  <link rel="stylesheet" href="/Public/admin/assets/css/ace-ie.min.css" />
		<![endif]-->
		<script src="/Public/admin/js/jquery-1.9.1.min.js"></script>
        <script src="/Public/admin/assets/js/bootstrap.min.js"></script>
		<script src="/Public/admin/assets/js/typeahead-bs2.min.js"></script>           	
        <script src="/Public/admin/assets/layer/layer.js" type="text/javascript" ></script>          
        <script src="/Public/admin/assets/js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="/Public/admin/assets/js/jquery.ui.touch-punch.min.js"></script>
        <script src="/Public/admin/assets/js/ace-elements.min.js"></script>
		<script src="/Public/admin/assets/js/ace.min.js"></script>
<title>购买设置</title>

</head>

<body>
<div class="margin clearfix">
 <div class="stystems_style">
  <div class="tabbable">
	<ul class="nav nav-tabs" id="myTab">
	  <li class="active">
		<a data-toggle="tab" href="#home"><i class="green fa fa-home bigger-110"></i>&nbsp;修改数据</a></li>
     
	</ul>
	<form action="/Houtai/User/update" method="POST">
	<input type="hidden" name="id" value="<?php echo ($mod["id"]); ?>">
    <div class="tab-content">
		<div id="home" class="tab-pane active">
         <div class="form-group"><label class="col-sm-1 control-label no-padding-right" for="form-field-1"><i>*</i>用户名 </label>
          <div class="col-sm-9"><input type="text" name="name" value="<?php echo ($mod["username"]); ?>" placeholder="用户名" class="col-xs-10 "></div>
          </div>
          <div class="form-group"><label class="col-sm-1 control-label no-padding-right" for="form-field-1"><i>*</i>密码 </label>
          <div class="col-sm-9"><input type="text" id="website-title" name="pass" value="<?php echo ($mod["mim"]); ?>" placeholder="密码" class="col-xs-10 "></div>
          </div>
         
		<div class="form-group"><label class="col-sm-1 control-label no-padding-right" for="form-field-1"><i>*</i>积分 </label>
          <div class="col-sm-9"><input type="text" id="website-title"name="jifne" value="<?php echo ($mod["jifen"]); ?>" placeholder="积分" class="col-xs-10 "></div>
          </div>
		  <div class="form-group"><label class="col-sm-1 control-label no-padding-right" for="form-field-1"><i>*</i>余额 </label>
          <div class="col-sm-9"><input type="text" id="website-title" name="money" value="<?php echo ($mod["money"]); ?>" placeholder="余额" class="col-xs-10 "></div>
          </div>
		<div class="form-group"><label class="col-sm-1 control-label no-padding-right" for="form-field-1"><i>*</i>支付宝 </label>
          <div class="col-sm-9"><input type="text" id="website-title" name="zhifubao" value="<?php echo ($mod["zhifubao"]); ?>" placeholder="支付宝" class="col-xs-10 "></div>
          </div>
		  
		  <div class="form-group">
			<label class="col-sm-1 control-label no-padding-right" for="form-field-1"><i>*</i>身份： </label>
          <div class="col-sm-9">
		  <label>
		  <input  type="radio" class="ace" value="2"  name="status" <?php if($mod['status'] == 2): ?>checked="checked"<?php endif; ?>><span class="lbl">代理</span>
		  </label>
		  
			<label>
			<input  type="radio" class="ace" value="1" name="status" <?php if($mod['status'] == 1): ?>checked="checked"<?php endif; ?>><span class="lbl">会员</span>
			</label>
			
			</div>
          </div>
		  
		  
		  
          <div class="Button_operation"> 
					<button  class="btn btn-primary radius" type="submit"><i class="fa fa-save "></i>&nbsp;保存修改</button>
               
			</div>
        </div>
        
		 </form>
		</div>
		</div>
 </div>

</div>
</body>
</html>