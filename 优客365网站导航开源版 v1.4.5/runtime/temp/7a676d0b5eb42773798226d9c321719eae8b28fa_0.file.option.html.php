<?php
/* Smarty version 3.1.31, created on 2019-12-13 16:16:35
  from "D:\WWW\youke365_free\app\admin\view\option.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5df348e3dcb286_06545029',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a676d0b5eb42773798226d9c321719eae8b28fa' => 
    array (
      0 => 'D:\\WWW\\youke365_free\\app\\admin\\view\\option.html',
      1 => 1576147474,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_5df348e3dcb286_06545029 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <h3 class="title"><em><?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
</em></h3>
    <div class="formbox">
        <form name="mform" method="post" action="<?php echo $_smarty_tpl->tpl_vars['fileurl']->value;?>
"  enctype="multipart/form-data">
		<table width="100%" border="0" cellspacing="1" cellpadding="0">
<?php if ($_smarty_tpl->tpl_vars['option']->value == 'basic') {?>
			<tr>
				<th>网站名称：</th>
				<td><input name="cfg[site_name]" type="text" class="ipt" id="site_name" size="50" maxlength="50" value="<?php echo $_smarty_tpl->tpl_vars['cfg']->value['site_name'];?>
" /></td>
			</tr>
			<tr>
				<th>网站标题：</th>
				<td><input name="cfg[site_title]" type="text" class="ipt" id="site_title" size="50" maxlength="255" value="<?php echo $_smarty_tpl->tpl_vars['cfg']->value['site_title'];?>
" /><span class="tips">网站头部显示</span></td>
			</tr>
			<tr>
				<th>网站地址：</th>
				<td><input name="cfg[site_url]" type="text" class="ipt" id="site_url" size="50" maxlength="255" value="<?php echo $_smarty_tpl->tpl_vars['cfg']->value['site_url'];?>
" /><span class="tips">格式 http://www.youke365.site/</span></td>
			</tr>
			<tr>
				<th>上传logo：</th>
				<td>
				  <?php if ($_smarty_tpl->tpl_vars['cfg']->value['site_logo']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['cfg']->value['site_logo'];?>
"><?php }?><br>
				  <input name="site_logo" type="file" class="ipt" id="site_logo" size="50" maxlength="255" value="<?php echo $_smarty_tpl->tpl_vars['cfg']->value['site_logo'];?>
" /><span class="tips">logo尺寸：170*70</span>
              
				</td>
			</tr>
			<tr>
				<th>安装目录：</th>
				<td><input name="cfg[site_root]" type="text" class="ipt" id="site_root" size="50" maxlength="255" value="/" readonly="readonly" /><span class="tips">系统自动获得正确的路径，仅需手工保存。</span></td>
			</tr>

				<th>站长邮件：</th>
				<td><input name="cfg[admin_email]" type="text" class="ipt" id="admin_email" size="50" maxlength="100" value="<?php echo $_smarty_tpl->tpl_vars['cfg']->value['admin_email'];?>
" /><span class="tips">用来发送邮件的邮箱地址</span></td>
			</tr>
			<tr>
				<th valign="top">关 键 词：</th>
				<td><textarea name="cfg[site_keywords]" cols="50" rows="6" class="ipt" id="site_keywords"><?php echo $_smarty_tpl->tpl_vars['cfg']->value['site_keywords'];?>
</textarea></td>
			</tr>
			<tr>
				<th valign="top">网站描述：</th>
				<td><textarea name="cfg[site_description]" cols="50" rows="6" class="ipt" id="site_description"><?php echo $_smarty_tpl->tpl_vars['cfg']->value['site_description'];?>
</textarea></td>
			</tr>
			<tr>
				<th valign="top">在线QQ客服：</th>
				<td><textarea name="cfg[site_kefu]" cols="50" rows="6" class="ipt" id="site_kefu"><?php echo $_smarty_tpl->tpl_vars['cfg']->value['site_kefu'];?>
</textarea>一行一个QQ号，为空则不显示客服</td>
			</tr>
			 <tr>
				<th valign="top">统计代码：</th>
				<td><textarea name="cfg[site_code]" cols="50" rows="6" class="ipt" id="site_code"><?php echo $_smarty_tpl->tpl_vars['cfg']->value['site_code'];?>
</textarea></td>
			</tr>
			<tr>
				<th valign="top">底部微信二维码名称：</th>
				<td><input name="cfg[qcode_name]"  class="ipt" id="qcode_name"  value="<?php echo $_smarty_tpl->tpl_vars['cfg']->value['qcode_name'];?>
"></td>
			</tr>
			<tr>
				<th valign="top">底部微信二维码图片地址：</th>
				<td><textarea name="cfg[qcode_img]" cols="50" rows="6" class="ipt" id="qcode_img"><?php echo $_smarty_tpl->tpl_vars['cfg']->value['qcode_img'];?>
</textarea>将图片地址放到 /public/images/ 下</td>
			</tr>
<?php } elseif ($_smarty_tpl->tpl_vars['option']->value == 'module') {?>
           <tr>
				<th>文章模块：</th>
				<td><input name="cfg[is_article_status]" type="radio" id="is_article_status_y" value="yes"<?php echo opt_checked($_smarty_tpl->tpl_vars['cfg']->value['is_article_status'],'yes');?>
 onclick="$('#submit_reason').hide();"><label for="is_article_status_y">开启</label>　<input name="cfg[is_article_status]" type="radio" id="is_article_status_n" value="no"<?php echo opt_checked($_smarty_tpl->tpl_vars['cfg']->value['is_article_status'],'no');?>
 onclick="$('#submit_reason').show();"><label for="is_article_status_n">关闭</label></td>
			</tr>
           <tr>
				<th>视频模块：</th>
				<td><input name="cfg[is_video_status]" type="radio" id="is_video_status_y" value="yes"<?php echo opt_checked($_smarty_tpl->tpl_vars['cfg']->value['is_video_status'],'yes');?>
 onclick="$('#submit_reason').hide();"><label for="is_video_status_y">开启</label>　<input name="cfg[is_video_status]" type="radio" id="is_video_status_n" value="no"<?php echo opt_checked($_smarty_tpl->tpl_vars['cfg']->value['is_video_status'],'no');?>
 onclick="$('#submit_reason').show();"><label for="is_video_status_n">关闭</label></td>
			</tr>
           <tr>
				<th>游戏模块：</th>
				<td><input name="cfg[is_game_status]" type="radio" id="is_game_status_y" value="yes"<?php echo opt_checked($_smarty_tpl->tpl_vars['cfg']->value['is_game_status'],'yes');?>
 onclick="$('#submit_reason').hide();"><label for="is_game_status_y">开启</label>　<input name="cfg[is_game_status]" type="radio" id="is_game_status_n" value="no"<?php echo opt_checked($_smarty_tpl->tpl_vars['cfg']->value['is_game_status'],'no');?>
 onclick="$('#submit_reason').show();"><label for="is_game_status_n">关闭</label></td>
			</tr>
        
<?php } elseif ($_smarty_tpl->tpl_vars['option']->value == 'template') {?>
<tr>
				<th>网站模板主题：</th>
				<td><select name="cfg[default_theme]" id="theme">
				<?php if (!empty($_smarty_tpl->tpl_vars['themes']->value)) {?>
					  	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['themes']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
					  <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['dir'];?>
" <?php if ($_smarty_tpl->tpl_vars['cfg']->value['default_theme'] == trim($_smarty_tpl->tpl_vars['v']->value['dir'])) {?> selected <?php }?> ><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
					   <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

				   <?php } else { ?>
				   <option value="">没有默认模板</option>
				 <?php }?>
				</select>
    <a href="<?php echo @constant('youke365_auth_url');?>
" target="_blank"> 更多模板主题 </a>       
				</td>
			</tr>
			<tr>
				<th>网站皮肤：</th>
				<td>
				<select name="cfg[default_skin]" id="skin">
				</select>
				</td>
			</tr>
<?php echo '<script'; ?>
>
$(function(){
       var theme = $("#theme").val();
		$.post("<?php echo url('api/getTheme');?>
",{theme:theme},function(json){
			if(json.code == 0){
			  $("#skin").html(json.data);	
			}else{
			  $("#skin").html(json.msg);
			}
           
	   });
	$("#theme").on("change",function(){
		var theme = $(this).val();
		$.post("<?php echo url('api/getTheme');?>
",{theme:theme},function(json){
          		  if(json.code ==0){
					  $("#skin").html(json.data);	
					}else{
					  $("#skin").html(json.msg);
					}

	   });
	});
});
<?php echo '</script'; ?>
>		
			<tr>


	<tr>
		<th>手机版状态：</th>
				<td>
              <input name="cfg[is_mobile_status]" type="radio" id="is_mobile_status_y" value="yes"<?php echo opt_checked($_smarty_tpl->tpl_vars['cfg']->value['is_mobile_status'],'yes');?>
 onclick="$('#submit_reason').hide();"><label for="is_mobile_status_y">开启</label>　<input name="cfg[is_mobile_status]" type="radio" id="is_mobile_status_n" value="no"<?php echo opt_checked($_smarty_tpl->tpl_vars['cfg']->value['is_mobile_status'],'no');?>
 onclick="$('#submit_reason').show();"><label for="is_mobile_status_n">关闭</label>  
              <span style="padding-left:30px;"> 开启后，手机访问自动跳转手机版</span>  
				</td>
		</tr>
		
	<tr>
				<th>手机模板主题：</th>
				<td>
			<select name="cfg[default_mobile_theme]">
				<?php if (!empty($_smarty_tpl->tpl_vars['mobile_themes']->value)) {?>
					  	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mobile_themes']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
					  <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['dir'];?>
" <?php if ($_smarty_tpl->tpl_vars['cfg']->value['default_mobile_theme'] == trim($_smarty_tpl->tpl_vars['v']->value['dir'])) {?> selected <?php }?> ><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
					   <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

				   <?php } else { ?>
				   <option value="">没有默认主题</option>
				 <?php }?>
				</select>
                 <a href="<?php echo @constant('youke365_auth_url');?>
forum.php?mod=forumdisplay&fid=42" target="_blank"> 更多手机模板主题 </a>
				</td>
			</tr>
        	<?php } elseif ($_smarty_tpl->tpl_vars['option']->value == 'misc') {?>
			<tr>
				<th>Gzip压缩功能：</th>
				<td><input name="cfg[is_enabled_gzip]" type="radio" id="is_enabled_gzip_y" value="yes"<?php echo opt_checked($_smarty_tpl->tpl_vars['cfg']->value['is_enabled_gzip'],'yes');?>
><label for="is_enabled_gzip_y">开启</label>　<input name="cfg[is_enabled_gzip]" type="radio" id="is_enabled_gzip_n" value="no"<?php echo opt_checked($_smarty_tpl->tpl_vars['cfg']->value['is_enabled_gzip'],'no');?>
><label for="is_enabled_gzip_n">关闭</label></td>
			</tr>
			<tr>
				<th>站点提交功能：</th>
				<td><input name="cfg[is_enabled_submit]" type="radio" id="is_enabled_submit_y" value="yes"<?php echo opt_checked($_smarty_tpl->tpl_vars['cfg']->value['is_enabled_submit'],'yes');?>
 onclick="$('#submit_reason').hide();"><label for="is_enabled_submit_y">开启</label>　<input name="cfg[is_enabled_submit]" type="radio" id="is_enabled_submit_n" value="no"<?php echo opt_checked($_smarty_tpl->tpl_vars['cfg']->value['is_enabled_submit'],'no');?>
 onclick="$('#submit_reason').show();"><label for="is_enabled_submit_n">关闭</label></td>
			</tr>
			<tr id="submit_reason" style="display: <?php echo opt_display($_smarty_tpl->tpl_vars['cfg']->value['is_enabled_submit'],'no');?>
;">
				<th valign="top">关闭站点提交功能说明：</th>
				<td><textarea name="cfg[submit_close_reason]" cols="50" rows="6" class="ipt" id="submit_close_reason"><?php echo $_smarty_tpl->tpl_vars['cfg']->value['submit_close_reason'];?>
</textarea></td>
			</tr>


			 <tr>
				<th>菜单导航-提交收录按钮：</th>
				<td><input name="cfg[is_enabled_submit_collect]" type="radio" id="is_enabled_submit_collect_y" value="yes"<?php echo opt_checked($_smarty_tpl->tpl_vars['cfg']->value['is_enabled_submit_collect'],'yes');?>
 "><label for="is_enabled_submit_collect_y">开启</label>　<input name="cfg[is_enabled_submit_collect]" type="radio" id="is_enabled_submit_collect_n" value="no"<?php echo opt_checked($_smarty_tpl->tpl_vars['cfg']->value['is_enabled_submit_collect'],'no');?>
 "><label for="is_enabled_submit_collect_n">关闭</label></td>
			</tr>

			<tr>
				<th>首页站点统计：</th>
				<td><input name="cfg[is_enabled_tj]" type="radio" id="is_enabled_tj_y" value="yes"<?php echo opt_checked($_smarty_tpl->tpl_vars['cfg']->value['is_enabled_tj'],'yes');?>
 "><label for="is_enabled_tj_y">开启</label>　<input name="cfg[is_enabled_tj]" type="radio" id="is_enabled_tj_n" value="no"<?php echo opt_checked($_smarty_tpl->tpl_vars['cfg']->value['is_enabled_tj'],'no');?>
 "><label for="is_enabled_tj_n">关闭</label></td>
			</tr>
			<tr>
				<th>首页快审费用：</th>
				<td><input name="cfg[home_pay_money]" type="text" class="ipt" id="home_pay_money" size="10" maxlength="10" value="<?php echo $_smarty_tpl->tpl_vars['cfg']->value['home_pay_money'];?>
" /><span class="tips">元/站，填 0 自动关闭该显示</span></td>
			</tr>
			<tr>
				<th>首页权威推荐显示数量：</th>
				<td><input name="cfg[home_best]" type="text" class="ipt" id="home_best" size="10" maxlength="10" value="<?php echo $_smarty_tpl->tpl_vars['cfg']->value['home_best'];?>
" /><span class="tips">个，一行9个，填 0 自动关闭该显示</span></td>
			</tr>
			<tr>
				<th>首页最新快审显示数量：</th>
				<td><input name="cfg[home_pay]" type="text" class="ipt" id="home_pay" size="10" maxlength="10" value="<?php echo $_smarty_tpl->tpl_vars['cfg']->value['home_pay'];?>
" /><span class="tips">个，一行9个，填 0 自动关闭该显示</span></td>
			</tr>
			<tr>
				<th>首页最新点入显示数量：</th>
				<td><input name="cfg[home_instat]" type="text" class="ipt" id="home_instat" size="10" maxlength="10" value="<?php echo $_smarty_tpl->tpl_vars['cfg']->value['home_instat'];?>
" /><span class="tips">个，填 0 自动关闭该显示</span></td>
			</tr>

			<tr>
				<th>首页站长推荐显示数量：</th>
				<td><input name="cfg[home_isbest]" type="text" class="ipt" id="home_isbest" size="10" maxlength="10" value="<?php echo $_smarty_tpl->tpl_vars['cfg']->value['home_isbest'];?>
" /><span class="tips">个，填 0 自动关闭该显示</span></td>
			</tr>
			<tr>
				<th>首页最新收录显示数量：</th>
				<td><input name="cfg[home_new]" type="text" class="ipt" id="home_new" size="10" maxlength="10" value="<?php echo $_smarty_tpl->tpl_vars['cfg']->value['home_new'];?>
" /><span class="tips">个，填 0 自动关闭该显示</span></td>
			</tr>
			
			<tr>
				<th>站点数据更新周期设置：</th>
				<td><input name="cfg[data_update_cycle]" type="text" class="ipt" id="data_update_cycle" size="10" maxlength="10" value="<?php echo $_smarty_tpl->tpl_vars['cfg']->value['data_update_cycle'];?>
" /><span class="tips">天，系统自动更新BR, SPR, Alexa</span></td>
			</tr>

               <tr>
				<th>图片文件保存目录设置：</th>
				<td><input name="cfg[upload_dir]" type="text" class="ipt" id="upload_dir" size="10" maxlength="10" value="<?php echo $_smarty_tpl->tpl_vars['cfg']->value['upload_dir'];?>
" /><span class="tips">只需填写存放图片的目录名称即可，用于存放站点及文章图片</span></td>
			</tr>

			<tr>
            	<th>首页导航菜单代码：</th>
                <td><textarea name="cfg[home_nav]" cols="100" rows="10" class="ipt" id="home_nav"><?php echo $_smarty_tpl->tpl_vars['cfg']->value['home_nav'];?>
</textarea><span class="tips"></span></td>
            </tr>


<!-- 			<tr>
            	<th>首页搜索热搜关键词：</th>
                <td><textarea name="cfg[hot_words]" cols="100" rows="6" class="ipt" id="hot_words"><?php echo $_smarty_tpl->tpl_vars['cfg']->value['hot_words'];?>
</textarea><span class="tips">每行一个 </span></td>
            </tr> -->

			 <tr>
            	<th>首页搜索右侧文字滚动广告：</th>
                <td><textarea name="cfg[ad_text]" cols="100" rows="6" class="ipt" id="ad_text"><?php echo $_smarty_tpl->tpl_vars['cfg']->value['ad_text'];?>
</textarea><span class="tips">（每行一个）格式：广告名称|广告地址  </span></td>
            </tr>
			 <tr>
            	<th>首页左侧工具盒子代码：</th>
                <td><textarea name="cfg[nav_code]" cols="100" rows="15" class="ipt" id="nav_code"><?php echo $_smarty_tpl->tpl_vars['cfg']->value['nav_code'];?>
</textarea><span class="tips"></span></td>
            </tr>

			 <tr>
            	<th>首页导航小插件代码：</th>
                <td><textarea name="cfg[nav_slide]" cols="100" rows="15" class="ipt" id="nav_slide"><?php echo $_smarty_tpl->tpl_vars['cfg']->value['nav_slide'];?>
</textarea><span class="tips"></span></td>
            </tr>

            <tr>
            	<th>非法关键词过滤设置：</th>
                <td><textarea name="cfg[filter_words]" cols="50" rows="6" class="ipt" id="filter_words" onBlur="javascript:this.value=this.value.replace(/，/ig,',');"><?php echo $_smarty_tpl->tpl_vars['cfg']->value['filter_words'];?>
</textarea><span class="tips">多个词之间用英文的“,”逗号隔开</span></td>
            </tr>
            <?php } elseif ($_smarty_tpl->tpl_vars['option']->value == 'user') {?>
			<tr>
				<th>是否允许新用户注册：</th>
				<td><input name="cfg[is_enabled_register]" type="radio" id="is_enabled_register_y" value="yes"<?php echo opt_checked($_smarty_tpl->tpl_vars['cfg']->value['is_enabled_register'],'yes');?>
><label for="is_enabled_register_y">允许</label>　<input name="cfg[is_enabled_register]" type="radio" id="is_enabled_register_n" value="no"<?php echo opt_checked($_smarty_tpl->tpl_vars['cfg']->value['is_enabled_register'],'no');?>
><label for="is_enabled_register_n">禁止</label><span class="tips">禁止后用户将无法注册</span></td>
			</tr>
			<tr>
				<th>新用户注册验证：</th>
				<td><input name="cfg[register_email_verify]" type="radio" id="register_email_verify_n" value="no"<?php echo opt_checked($_smarty_tpl->tpl_vars['cfg']->value['register_email_verify'],'no');?>
><label for="register_email_verify_n">无</label>　<input name="cfg[register_email_verify]" type="radio" id="register_email_verify_y" value="yes"<?php echo opt_checked($_smarty_tpl->tpl_vars['cfg']->value['register_email_verify'],'yes');?>
><label for="register_email_verify_y">Email验证</label><span class="tips">“Email验证”将向用户注册Email发送一封验证邮件以确认邮箱的有效性；</span></td>
			</tr>
			<tr>
				<th>注册用户名最小长度：</th>
				<td><input name="cfg[regname_small]" type="text" class="ipt" id="regname_small" size="10" maxlength="10" value="<?php echo $_smarty_tpl->tpl_vars['cfg']->value['regname_small'];?>
" /><span class="tips">字符，每个汉字算一个字符。</span></td>
			</tr>
			<tr>
				<th>注册用户名最大长度：</th>
				<td><input name="cfg[regname_large]" type="text" class="ipt" id="regname_large" size="10" maxlength="10" value="<?php echo $_smarty_tpl->tpl_vars['cfg']->value['regname_large'];?>
" /><span class="tips">字符，每个汉字算一个字符。</span></td>
			</tr>
			<tr>
				<th valign="top">禁止注册的用户名：</th>
				<td><textarea name="cfg[regname_forbid]" cols="50" rows="6" class="ipt" id="regname_forbid"><?php echo $_smarty_tpl->tpl_vars['cfg']->value['regname_forbid'];?>
</textarea><span class="tips">每个用户名换一行</span></td>
			</tr>
        	<?php } elseif ($_smarty_tpl->tpl_vars['option']->value == 'qq') {?>
			<tr>
				<th>QQ一键登录：</th>
				<td><input name="cfg[is_enabled_connect]" type="radio" id="is_enabled_connect_y" value="yes"<?php echo opt_checked($_smarty_tpl->tpl_vars['cfg']->value['is_enabled_connect'],'yes');?>
><label for="is_enabled_connect_y">允许</label>　<input name="cfg[is_enabled_connect]" type="radio" id="is_enabled_connect_n" value="no"<?php echo opt_checked($_smarty_tpl->tpl_vars['cfg']->value['is_enabled_connect'],'no');?>
><label for="is_enabled_connect_n">禁止</label><span class="tips">启用后将允许用户使用QQ登录或注册</span></td>
			</tr>
            <tr>
				<th>QQ一键登录APP ID：</th>
				<td><input name="cfg[qq_appid]" type="text" class="ipt" id="qq_appid" size="50" maxlength="50" value="<?php echo $_smarty_tpl->tpl_vars['cfg']->value['qq_appid'];?>
" /><span class="tips">申请地址：http://connect.qq.com/</span></td>
			</tr>
            <tr>
				<th>QQ一键登录APP KEY：</th>
				<td><input name="cfg[qq_appkey]" type="password" class="ipt" id="qq_appkey" size="50" maxlength="50" value="<?php echo $_smarty_tpl->tpl_vars['cfg']->value['qq_appkey'];?>
" /><span class="tips">同上</span></td>
			</tr>
            <tr>
				<th>回调地址：</th>
				<td><?php echo $_smarty_tpl->tpl_vars['cfg']->value['site_url'];?>
member/connect/type/callback.html<span class="tips"></span></td>
			</tr>

	        	<?php } elseif ($_smarty_tpl->tpl_vars['option']->value == 'comment') {?>
			<tr>
				<th>评论：</th>
				<td><input name="cfg[is_enabled_comment]" type="radio" id="is_enabled_comment_y" value="1"<?php echo opt_checked($_smarty_tpl->tpl_vars['cfg']->value['is_enabled_comment'],'1');?>
><label for="is_enabled_connect_y">开启</label>
				<input name="cfg[is_enabled_comment]" type="radio" id="is_enabled_comment_y" value="2"<?php echo opt_checked($_smarty_tpl->tpl_vars['cfg']->value['is_enabled_comment'],'2');?>
><label for="is_enabled_connect_n">关闭</label>


				<span class="tips"></span></td>
			</tr>
            <tr>
				<th>畅言评论appid：</th>
				<td><input name="cfg[changyan_appid]" type="text" class="ipt"  size="50" maxlength="50" value="<?php echo $_smarty_tpl->tpl_vars['cfg']->value['changyan_appid'];?>
" /><span class="tips">申请地址：http://changyan.kuaizhan.com/</span></td>
			</tr>
            <tr>
				<th>畅言评论conf：</th>
				<td><input name="cfg[changyan_conf]" type="password" class="ipt"  size="50" maxlength="50" value="<?php echo $_smarty_tpl->tpl_vars['cfg']->value['changyan_conf'];?>
" /><span class="tips">同上</span></td>
			</tr>
	        	<?php } elseif ($_smarty_tpl->tpl_vars['option']->value == 'reward') {?>


            <tr>
				<th>支付宝二维码上传</th>
				<td><img src="<?php echo $_smarty_tpl->tpl_vars['cfg']->value['qcode_alipay'];?>
">
				<input name="qcode_alipay" type="file" class="ipt"  size="50" maxlength="50" value="<?php echo $_smarty_tpl->tpl_vars['cfg']->value['qcode_alipay'];?>
" />
				<span class="tips">尺寸：140*140</span></td>
			</tr>

            <tr>
				<th>微信二维码上传：</th>
				<td><img src="<?php echo $_smarty_tpl->tpl_vars['cfg']->value['qcode_weixin'];?>
">
				<input name="qcode_weixin" type="file" class="ipt"  size="50" maxlength="50" value="<?php echo $_smarty_tpl->tpl_vars['cfg']->value['qcode_weixin'];?>
" />
				
				<span class="tips">尺寸：140*140</span></td>
			</tr>

			<?php } elseif ($_smarty_tpl->tpl_vars['option']->value == 'link') {?>
            <tr>
            	<th>网站URL链接结构设置：</th>
                <td><input name="cfg[link_struct]" type="radio" id="link_struct_0" value="0"<?php echo opt_checked($_smarty_tpl->tpl_vars['cfg']->value['link_struct'],0);?>
><label for="link_struct_0">默认 - http://www.domain.com/?mod=category</label><br />

                <input name="cfg[link_struct]" type="radio" id="link_struct_1" value="1"<?php echo opt_checked($_smarty_tpl->tpl_vars['cfg']->value['link_struct'],1);?>
><label for="link_struct_1">文件型 - http://www.domain.com/category-1-2.html</label><br />

      <!--           <input name="cfg[link_struct]" type="radio" id="link_struct_2" value="2"<?php echo opt_checked($_smarty_tpl->tpl_vars['cfg']->value['link_struct'],2);?>
><label for="link_struct_2">目录和文件型 - http://www.domain.com/category/1-2.html</label><br />

                <input name="cfg[link_struct]" type="radio" id="link_struct_3" value="3"<?php echo opt_checked($_smarty_tpl->tpl_vars['cfg']->value['link_struct'],3);?>
>
                <label for="link_struct_3">目录型 - http://www.domain.com/category/1/2</label> -->

                </td>
            </tr>
        	<?php } elseif ($_smarty_tpl->tpl_vars['option']->value == 'mail') {?>
			<tr>
				<th>SMTP服务器地址：</th>
				<td><input name="cfg[smtp_host]" type="text" class="ipt" id="smtp_host" size="50" maxlength="50" value="<?php echo $_smarty_tpl->tpl_vars['cfg']->value['smtp_host'];?>
" /><span class="tips">发送邮件的服务器地址，例smtp.126.com</span></td>
			</tr>
			<tr>
				<th>SMTP服务器端口：</th>
				<td><input name="cfg[smtp_port]" type="text" class="ipt" id="smtp_port" size="10" maxlength="10" value="<?php echo $_smarty_tpl->tpl_vars['cfg']->value['smtp_port'];?>
" /><span class="tips">默认端口为25</span></td>
			</tr>
			<tr>
				<th>SMTP验证功能：</th>
				<td><input name="cfg[smtp_auth]" type="radio" id="smtp_auth1" value="yes"<?php echo opt_checked($_smarty_tpl->tpl_vars['cfg']->value['smtp_auth'],'yes');?>
><label for="smtp_auth1">开启</label>　<input name="cfg[smtp_auth]" type="radio" id="smtp_auth0" value="no"<?php echo opt_checked($_smarty_tpl->tpl_vars['cfg']->value['smtp_auth'],'no');?>
><label for="smtp_auth0">关闭</label><span class="tips">通常需要开启</span></td>
			</tr>
			<tr>
				<th>SMTP服务器帐号：</th>
				<td><input name="cfg[smtp_user]" type="text" class="ipt" id="smtp_user" size="30" maxlength="30" value="<?php echo $_smarty_tpl->tpl_vars['cfg']->value['smtp_user'];?>
" /><span class="tips">登录邮件服务器的帐号</span></td>
			</tr>
			<tr>
				<th>SMTP服务器密码：</th>
				<td><input name="cfg[smtp_pass]" type="password" class="ipt" id="smtp_pass" size="30" maxlength="30" value="<?php echo $_smarty_tpl->tpl_vars['cfg']->value['smtp_pass'];?>
" /><span class="tips">登录邮件服务器的密码</span></td>
			</tr>
        	<?php }?>
			<tr class="btnbox">
            	<th>&nbsp;</th>
				<td>
					<input name="act" type="hidden" id="act" value="update">
					<input type="submit" class="btn" value="保 存">
				</td>
			</tr>
		</table>
		</form>
	</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
