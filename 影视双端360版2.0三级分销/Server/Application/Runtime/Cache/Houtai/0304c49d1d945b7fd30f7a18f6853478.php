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
		
<title>卡密设置</title>

</head>

<body>
<div class="margin clearfix">
 <div class="stystems_style">
  <div class="tabbable">
	<ul class="nav nav-tabs" id="myTab">
	  <li class="active">
		<a data-toggle="tab" href="#home"><i class="green fa fa-home bigger-110"></i>&nbsp;生成卡密</a></li>
     
	</ul>
	
	<div class="tab-content">
		<div id="home" class="tab-pane active">
		
		 
		<div class="form-group"><label class="col-sm-1 control-label no-padding-right" for="form-field-1"><i>*</i>天数 </label>
          <div class="col-sm-9"><input type="number" name="fen" id="tians"  placeholder="天数" class="col-xs-10 "></div>
          </div>
         <div class="form-group"><label class="col-sm-1 control-label no-padding-right" for="form-field-1"><i>*</i>份数 </label>
          <div class="col-sm-9"><input type="number" name="fen" id="fens"  placeholder="份数" class="col-xs-10 "></div>
          </div>
		
		 
		  
          <div class="Button_operation"> 
					<!-- <button  class="btn btn-primary radius" type="submit"onclick="tian()" ><i class="fa fa-save "></i>&nbsp;生成</button> -->
					<input class="btn btn-primary radius" type="submit"onclick="tian1()"  class="am-btn am-btn-primary" value="生成">
               
			</div>
        </div>
        
		
		</div>
    <div class="tab-content">
		<div id="home" class="tab-pane active">
		
		 <div class="form-group"><label class="col-sm-1 control-label no-padding-right" for="form-field-1"><i>*</i>分类 </label>
          <div class="col-sm-9">

		  <select class="form-control"  name="type"  id="sss" >
			 <option value="0.75">七天</option>
			<option value="1.5">一个月</option>
			<option value="4.5">三个月</option>
		   <option value="9">六个月</option>
			<option value="18">一年</option>	
				<option value="150">永久</option>			
			</select>

		  </div>
          </div>
		
         <div class="form-group"><label class="col-sm-1 control-label no-padding-right" for="form-field-1"><i>*</i>份数 </label>
          <div class="col-sm-9"><input type="number" name="fen" id="fen"  placeholder="份数" class="col-xs-10 "></div>
          </div>
		
		 
		  
          <div class="Button_operation"> 
					<!-- <button  class="btn btn-primary radius" type="submit"onclick="tian()" ><i class="fa fa-save "></i>&nbsp;生成</button> -->
					<input class="btn btn-primary radius" type="submit"onclick="tian()"  class="am-btn am-btn-primary" value="生成">
               
			</div>
        </div>
        
		
		</div>
		
		
		
		
		</div>
 </div>

</div>

	<script type="text/javascript">
	function tian1() {
//alert(1)
    var type   =   $('#tians').val();
    var fen     =   $('#fens').val();
    $.ajax({
        'type'  :   'post',
        'url'   :   '/Houtai/Kami/kami1',
        'data'  :   {
            'type' :   type,
            'fen'   :   fen
        },
        'dataType'  :   'json',
        'success'   :   function (msg) {

            if(msg.code=='1')
            {
			
			
                layer.alert(msg.dian,{
                    btn:['txt导出','excel导出','取消'],
                    btn1: function(index, layero){
                        window.open('/Houtai/Kami/xtxt.html?content='+msg.dian);
                    }
                    ,btn2: function(index, layero){
                        window.open('/Houtai/Kami/xexcel.html?content='+msg.dian);
                        return false
                    }
                })
            }else{
                layer.alert(msg.dian);
            }
        },
        'error' :   function () {
            layer.alert('服务器错误');
        }
    })
}
	
	

function tian() {
//alert(1)
    var type   =   $('#sss').val();
    var fen     =   $('#fen').val();
    $.ajax({
        'type'  :   'post',
        'url'   :   '/Houtai/Kami/kami',
        'data'  :   {
            'type' :   type,
            'fen'   :   fen
        },
        'dataType'  :   'json',
        'success'   :   function (msg) {

            if(msg.code=='1')
            {
			
			
                layer.alert(msg.dian,{
                    btn:['txt导出','excel导出','取消'],
                    btn1: function(index, layero){
                        window.open('/Houtai/Kami/xtxt.html?content='+msg.dian);
                    }
                    ,btn2: function(index, layero){
                        window.open('/Houtai/Kami/xexcel.html?content='+msg.dian);
                        return false
                    }
                })
            }else{
                layer.alert(msg.dian);
            }
        },
        'error' :   function () {
            layer.alert('服务器错误');
        }
    })
}
  

</script>
</body>


</html>