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
<title>系统设置</title>

</head>

<body>
<div class="margin clearfix">
 <div class="stystems_style">
  <div class="tabbable">
	
	<form class="am-form am-form-horizontal" action="/Houtai/Tan/update" method="POST">
							<input type="hidden" value="1" name="id">
	
    <div class="tab-content">
		<div id="home" class="tab-pane active">
		
		 <div class="form-group"><label class="col-sm-1 control-label no-padding-right" for="form-field-1"><i>*</i>弹窗开关 </label>

		  <div class="col-sm-9">
		  <label>
		  <input  type="radio" class="ace" value="1" name="kai" <?php if($mod['kai'] == 1): ?>checked="checked"<?php endif; ?>><span class="lbl">打开</span>
		  </label>
		  <label>
		  <input  type="radio" class="ace" value="2"  name="kai" <?php if($mod['kai'] == 2): ?>checked="checked"<?php endif; ?>><span class="lbl">关闭</span>
		  </label>
		  </div>
		  </div>
		
		
         <div class="form-group"><label class="col-sm-1 control-label no-padding-right" for="form-field-1"><i>*</i>弹窗标题 </label>
          <div class="col-sm-9"><input type="text" placeholder="弹窗标题" name="title" value="<?php echo ($mod["title"]); ?>" class="col-xs-10 "></div>
          </div>
         
		  <div class="form-group"><label class="col-sm-1 control-label no-padding-right" for="form-field-1"><i>*</i>弹窗内容 </label>
          <div class="col-sm-9"><input type="text" placeholder="弹窗内容" name="nei" value="<?php echo ($mod["nei"]); ?>" class="col-xs-10 "></div>
          </div>
         <!-- <div class="form-group"><label class="col-sm-1 control-label no-padding-right" for="form-field-1"><i>*</i>弹窗连接 </label> -->
          <!-- <div class="col-sm-9"><input type="text" id="website-title" name="url" value="<?php echo ($mod["url"]); ?>" placeholder="弹窗连接" class="col-xs-10 ">弹窗连接：可以放帮助里面的连接如（http://自己的网址/App/Login/news.html）</div> -->
          <!-- </div> -->
		
		 
		  
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