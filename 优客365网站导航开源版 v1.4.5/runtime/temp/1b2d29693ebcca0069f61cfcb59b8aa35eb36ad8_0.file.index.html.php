<?php
/* Smarty version 3.1.31, created on 2019-12-13 22:40:39
  from "D:\WWW\youke365_free\app\admin\view\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5df3a2e72cf538_72077843',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b2d29693ebcca0069f61cfcb59b8aa35eb36ad8' => 
    array (
      0 => 'D:\\WWW\\youke365_free\\app\\admin\\view\\index.html',
      1 => 1576248037,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base.html' => 1,
  ),
),false)) {
function content_5df3a2e72cf538_72077843 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo @constant('SITE_NAME');?>
 - 后台管理中心 - Powered by Youke365</title>
<?php $_smarty_tpl->_subTemplateRender("file:base.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
 type="text/javascript">
$(document).ready(function(){  
    /*$("#main_frame").load(function(){
        $(this).height($(this).height() - $("#main_frame").offset().top - 10);    
    });
	*/
	$("#menu").treeview();
	
	var win_height = $(window).height() - $("#main_frame").offset().top - 5;
	$("#main_frame").height(win_height);
	$("#sidebar").css("height", win_height);
});
<?php echo '</script'; ?>
>
</head>

<body>
<div id="wrapper">
	<div id="header">
    	    <a  id="logo" href="<?php echo url('main');?>
" target="main">
                 Youke365 管理后台
          </a>
                  <div id="link">
<a href="http://bbs.youke365.site/forum.php?mod=forumdisplay&fid=39" target="_blank"  class="author"><i class="fa fa-window-maximize" aria-hidden="true"></i> PC模板</a>
<a href="http://bbs.youke365.site/forum-42-1.html" target="_blank"  class="author"><i class="fa fa-window-maximize" aria-hidden="true"></i> 手机模板</a> 
<a href="<?php echo @constant('youke365_auth_url');?>
" target="_blank"  class="author"><i class="fa fa-window-maximize" aria-hidden="true"></i> 官方网站</a>

         
            <a href="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
" target="_blank"><i class="fa fa-home" aria-hidden="true"></i> 前台首页</a>  
           <a href="<?php echo url('cache');?>
" target="main"><i class="fa fa-refresh" aria-hidden="true"></i> 缓存管理</a>
           <a href="<?php echo url('editpwd');?>
" target="main"><i class="fa fa-cog" aria-hidden="true"></i> 修改密码</a>  <a href="<?php echo url('login',array('act'=>'logout'));?>
" onclick="return confirm('确认退出吗？');"><i class="fa fa-power-off" aria-hidden="true"></i> 退 出</a>

           </div>
    </div>

<?php echo '<script'; ?>
>
layui.use('element', function(){
  var element = layui.element(); //导航的hover效果、二级菜单等功能，需要依赖element模块
  //监听导航点击
  element.on('nav(demo)', function(elem){
    //console.log(elem)
    layer.msg(elem.text());
  });
});
<?php echo '</script'; ?>
>



    <div id="mainer">
    	<div id="mainer-left">
    		<div id="sidebar">

            <ul class="layui-nav layui-nav-tree" lay-filter="demo">
  <li class="layui-nav-item layui-nav-itemed">
    <a href="javascript:;" target="main">系统设置</a>
    <dl class="layui-nav-child">
      <dd><a href="<?php echo url('main');?>
" target="main">后台首页</a></dd>
      <dd><a href="<?php echo url('option',array('opt'=>'basic'));?>
" target="main">站点信息</a></dd>
      <dd><a href="<?php echo url('option',array('opt'=>'module'));?>
" target="main">模块开关</a></dd>
      <dd><a href="<?php echo url('option',array('opt'=>'misc'));?>
" target="main">功能配置</a></dd>

      <dd><a href="<?php echo url('option',array('opt'=>'template'));?>
" target="main">模板配置</a></dd>
      <dd><a href="<?php echo url('option',array('opt'=>'user'));?>
" target="main">注册设置</a></dd>
      <dd><a href="<?php echo url('option',array('opt'=>'mail'));?>
" target="main">邮件设置</a></dd>
      <dd><a href="<?php echo url('option',array('opt'=>'qq'));?>
" target="main">QQ 登陆</a></dd>
      <dd><a href="<?php echo url('option',array('opt'=>'comment'));?>
" target="main">畅言接口</a></dd>
    </dl>
  </li>
  <li class="layui-nav-item">
    <a href="javascript:;">网站管理</a>
    <dl class="layui-nav-child">
      <dd><a href="<?php echo url('category',array('mod'=>'webdir'));?>
" target="main">网站分类</a></dd>
      <dd><a href="<?php echo url('category',array('mod'=>'webdir','act'=>'merge'));?>
" target="main">分类合并</a></dd>
      <dd><a href="<?php echo url('website');?>
" target="main">网站列表</a></dd>
      <dd><a href="<?php echo url('website',array('act'=>'down'));?>
" target="main">下载图片</a></dd>

    </dl>
  </li>


  <li class="layui-nav-item"><a href="javascript:;">文章管理</a>
    <dl class="layui-nav-child">
      <dd><a href="<?php echo url('category',array('mod'=>'article'));?>
" target="main">文章分类</a></dd>
      <dd><a href="<?php echo url('category',array('mod'=>'merge'));?>
" target="main">分类合并</a></dd>
      <dd><a href="<?php echo url('article');?>
" target="main">文章列表</a></dd>
    </dl>
  </li>

  <li class="layui-nav-item"><a href="javascript:;">小游戏管理</a>
    <dl class="layui-nav-child">  
      <dd><a href="<?php echo url('category',array('mod'=>'game'));?>
" target="main">游戏分类</a></dd>
      <dd><a href="<?php echo url('game',array('act'=>'add'));?>
" target="main">游戏添加</a></dd>
      <dd><a href="<?php echo url('game');?>
" target="main">游戏列表</a></dd>
    </dl>
  </li>
  <li class="layui-nav-item"><a href="javascript:;">视频管理</a>
    <dl class="layui-nav-child"> 
     <dd><a href="<?php echo url('category',array('mod'=>'video'));?>
" target="main">视频分类</a></dd>
      <dd><a href="<?php echo url('video');?>
" target="main">视频列表</a></dd>
      <dd><a href="<?php echo url('video',array('act'=>'add'));?>
" target="main">视频添加</a></dd>

      </dl>
  </li>

  <li class="layui-nav-item"><a href="javascript:;">用户管理</a>
    <dl class="layui-nav-child"> 
      <dd><a href="<?php echo url('user');?>
" target="main">用户列表</a></dd>
      </dl>
  </li>
  <li class="layui-nav-item"><a href="javascript:;">运营管理</a>
    <dl class="layui-nav-child"> 
        <dd><a href="<?php echo url('page');?>
" target="main">单页列表</a></dd>
      <dd><a href="<?php echo url('adver');?>
" target="main">网站广告</a></dd>
      <dd><a href="<?php echo url('link');?>
" target="main">友情链接</a></dd>
      <dd><a href="<?php echo url('feedback');?>
" target="main">意见反馈</a></dd>
    </dl>

  </li>

  <li class="layui-nav-item"><a href="javascript:;">数据库管理</a>
    <dl class="layui-nav-child">
      <dd><a href="<?php echo url('database',array('act'=>'backup'));?>
" target="main">数据库备份</a></dd>
      <dd><a href="<?php echo url('database',array('act'=>'restore'));?>
" target="main">数据库恢复</a></dd>
      <dd><a href="<?php echo url('database',array('act'=>'maintain'));?>
" target="main">数据库维护</a></dd>
    </dl>
  </li>
</ul>

            </div>
        </div>
        <div id="mainer-right">
        	<div id="content"><iframe id="main_frame" name="main" frameborder="0" src="<?php echo url('main');?>
"></iframe></div>
        </div>
    </div>
</div>
</body>
</html><?php }
}
