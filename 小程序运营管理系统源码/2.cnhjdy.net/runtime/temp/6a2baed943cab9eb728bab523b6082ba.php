<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:75:"/www/wwwroot/2.cnhjdy.net/public/../application/index/view/applet/user.html";i:1575814732;s:79:"/www/wwwroot/2.cnhjdy.net/public/../application/index/view/public/new_left.html";i:1575814742;s:79:"/www/wwwroot/2.cnhjdy.net/public/../application/index/view/public/new_head.html";i:1575814742;}*/ ?>
<!DOCTYPE html>

<html>



<head>

    <meta charset="UTF-8">

    <link rel="stylesheet" type="text/css" href="/css/iconfont_new.css" />

    <link rel="stylesheet" type="text/css" href="/css/new-index.css" />

    <script src="/js/jquery.min.js" type="text/javascript" charset="utf-8"></script>

    <script src="/js/new-index.js" type="text/javascript" charset="utf-8"></script>

    <title><?php echo \think\Session::get('sysnames'); ?></title>

</head>



<body>

<div class="nav_side">

    <img class="logo2" src="/image/logo2.png" />

    <div class="nav_sidebox">

        <a href="<?php echo Url('Applet/index'); ?>">

        <div class="nav_side_single" id="index">

            <div class="iconfont icon-index"></div>

            <div class="navside_text">首页</div>

        </div>
        
        <?php if(\think\Session::get('usergroup')==2): ?>
        </a>

        <a href="<?php echo Url('Combo/index'); ?>">

        <div class="nav_side_single" id="combo">

            <div class="iconfont icon-taocan"></div>

            <div class="navside_text">功能套餐</div>

        </div>

        </a>

        <a href="<?php echo Url('Timecombo/index'); ?>">

        <div class="nav_side_single" id="time_combo">

            <div class="iconfont icon-shijian"></div>

            <div class="navside_text">时长套餐</div>

        </div>

        </a>

       

        <a href="<?php echo Url('Applet/jxs'); ?>">

            <div class="nav_side_single" id="jxs">

                <div class="iconfont icon-daili"></div>

                <div class="navside_text">代理商管理</div>

            </div>

        </a>

        
        <a href="<?php echo Url('Log/index'); ?>">

        <div class="nav_side_single" id="log">

            <div class="iconfont icon-rizhi"></div>

            <div class="navside_text">系统日志</div>

        </div>

        </a>

       

        <?php endif; ?>

         <a href="<?php echo Url('Applet/index'); ?>" >

        <div class="nav_side_single" id="applet">

            <div class="iconfont icon-xiaochengxu"></div>

            <div class="navside_text">小程序管理</div>

        </div>

        </a>

        <a href="<?php echo Url('Applet/user'); ?>">

        <div class="nav_side_single" id="user">

            <div class="iconfont icon-guanli"></div>

            <div class="navside_text">用户管理</div>

        </div>

        </a>
       
        <?php if(\think\Session::get('usergroup')==2): ?>
        <a href="<?php echo Url('ComAdmin/Functionshow/index'); ?>">

        <div class="nav_side_single" id="user">

            <div class="iconfont icon-30wangzhanguanli"></div>

            <div class="navside_text">网站管理</div>

        </div>

        </a>
         <a href="<?php echo Url('Upappse/index'); ?>">

            <div class="nav_side_single" id="update">

                <div class="iconfont icon-shujugengxin"></div>

                <div class="navside_text">系统更新</div>

            </div>

        </a>
        <?php endif; ?>

    </div>

</div>



<script>

    $(function () {

        var show = $("#choose").val();

        if(show == 'combo'){

            $("#combo").removeClass('nav_side_single').addClass('nav_side_single_show');

        }else if(show == 'timecombo'){

            $("#time_combo").removeClass('nav_side_single').addClass('nav_side_single_show');

        }else if(show == 'applet'){

            $("#applet").removeClass('nav_side_single').addClass('nav_side_single_show');

        }else if(show == 'jxs'){

            $("#jxs").removeClass('nav_side_single').addClass('nav_side_single_show');

        }else if(show == 'user'){

            $("#user").removeClass('nav_side_single').addClass('nav_side_single_show');

        }else if(show == 'log'){

            $("#log").removeClass('nav_side_single').addClass('nav_side_single_show');

        }else if(show == 'update'){

            $("#update").removeClass('nav_side_single').addClass('nav_side_single_show');

        }



    });

</script>

<script type="text/javascript" src="/js/jquery.form.js"></script>
<div class="head clearfix">
    <div class="fl" style="display: inline-block;color: #584f9e;line-height: 78px;font-size: 24px;font-weight: bold;"><?php echo \think\Session::get('sysnames'); ?></div>

    <div class="head_line fl"></div>

    <div class="head_title fl">运营管理系统</div>

    <div class="fr clearfix">

        <div class="head_balance fl" style="display: none" id="show_balance">

            <span class="iconfont icon-qianbao"></span>余额：<span id="balance">100</span>

        </div>

        <div class="head_line2 fl"></div>

        <div class="head_portrait fl" onclick="show_info()">
            <?php
                $icon = $_SESSION['icon'];
            if($icon): ?>
                <img src="<?php echo $icon; ?>" style="width: 35px; height: 35px; text-align: center;" />
                <div>个人中心</div> 
            <?php else: ?>
                <img src="/image/tx.png" style="width: 35px; height: 35px; text-align: center;" />
                <div>个人中心</div> 
            <?php endif; ?>

            

        </div>

        <div class="head_line2 fl"></div>

        <div class="head_exit fl">

            <span class="iconfont icon-tuichu"></span><a href="<?php echo Url('Login/index'); ?>">退出</a>

        </div>

    </div>

</div>

<form id='myupload' action="<?php echo Url('Applet/upimg'); ?>" method='post' enctype='multipart/form-data'>
    <input type="file" id="uploadphoto" name="uploadfile" value="请点击上传图片"   style="display:none" />
</form>


<div class="alertbox" id="info" style="display: none;">

    <div class="alert" id="alert1">

        <div class="alert_head">个人中心

            <img src="/image/close_alert.png" onclick="close_info()"/>

        </div>

        <div class="alert_content">

            <form action="<?php echo Url('Applet/save_admininfo'); ?>" method="POST" enctype="multipart/form-data" onsubmit="return checkadmininfo()">

                <div class="clearfix">

                    <div class="alert_form_left fl">

                        <div class="clearfix mb-30">

                            <div class="open_form_title fl">用户名<span>*</span></div>

                            <div class="alert_form_right fl">

                                <input class="open_form_text" type="text" name="username" id="gr_admin_username" placeholder="密码默认为123456，请登录账号修改"/>

                            </div>

                        </div>

                        <div class="clearfix mb-30">

                            <div class="open_form_title fl">头像</div>

                            <div class="alert_form_right hbj fl">

                                <img class="upimg" src="/image/upimg.png" id="showicon" />

                                <div class="up_imgbox">

                                    <div class="up_img_btn" onClick="uploadphoto.click();">上传图片

                                        <input type="hidden" name="icon" id="admin_icon" value="" />

                                    </div>

                                    <div class="up_img_bz">建议上传正方形图片</div>

                                </div>

                            </div>

                        </div>

                        <div class="clearfix">

                            <div class="open_form_title fl">姓名<span>*</span></div>

                            <div class="alert_form_right fl">

                                <input class="open_form_text" type="text" name="realname" id="admin_realname" value="" />

                            </div>

                        </div>

                    </div>

                    <div class="alert_form_left fr">

                        <div class="clearfix mb-30">

                            <div class="open_form_title fl">手机号码<span>*</span></div>

                            <div class="alert_form_right fl">

                                <input class="open_form_text" type="text" name="mobile" id="admin_mobile" value="" />

                            </div>

                        </div>

                        <div class="clearfix mb-30">

                            <div class="open_form_title fl">邮箱</div>

                            <div class="alert_form_right fl">

                                <input class="open_form_text" type="email" name="email" id="admin_email" value="" />

                            </div>

                        </div>

                        <div class="clearfix">

                            <div class="open_form_title fl">新密码</div>

                            <div class="alert_form_right fl">

                                <input class="open_form_text" type="password" name="password" id="admin_password" value="" />

                            </div>

                        </div>

                    </div>

                </div>

                <input type="hidden" name="uid" id="admin_uid" value="">

                <input type="hidden" name="oldusername" id="admin_oldusername" value="">

                <input class="alert_submit" type="submit" name="" id="" value="确定" />

            </form>

        </div>

    </div>

</div>



<script>



    //显示余额

    $(function () {

        $.post("<?php echo Url('Applet/user_balance'); ?>",function(data){

            if(data['group'] == 3){

                console.log(data);

                $("#balance").html(data['balance']);

                $("#show_balance").show();

            }

        });

    });





    function show_info() {

        //获取个人信息

        $.post("<?php echo Url('Applet/admin_info'); ?>",function(data){

            $("#gr_admin_username").val(data['username']);

            $("#admin_oldusername").val(data['username']);

            $("#admin_realname").val(data['realname']);

            $("#admin_mobile").val(data['mobile']);

            $("#admin_email").val(data['email']);

            $("#admin_uid").val(data['uid']);

            $("#admin_password").val("");

            if(data['icon']){

                $("#showicon").attr('src', data['icon']);

            }else{

                $("#showicon").attr('src', '/image/upimg.png');

            }

        });

        $("#info").show();

    }



    function close_info() {

        $("#info").hide();

    }



    function checkadmininfo(){

        var username = $("#gr_admin_username").val();

        var realname = $("#admin_realname").val();

        var mobile = $("#admin_mobile").val();

        if(!username){

            alert("请输入用户名！");

            return false;

        }else if(!realname){

            alert("请输入用户真实姓名！");

            return false;

        }else if(!mobile){

            alert("请输入用户手机号");

            return false;

        }else{

            return true;

        }

    }



    $("#uploadphoto").change(function(){
        $("#myupload").ajaxSubmit({ 
          dataType:  'json', //数据格式为json 
          success: function(data) {
            $("#admin_icon").val(data);
            $(".upimg").attr("src",data);
          }
        }); 
    });






</script>
<script type="text/javascript" src="/js/jquery.form.js"></script>
<form id='app_my_upload' action="<?php echo Url('Applet/upimg'); ?>" method='post' enctype='multipart/form-data'>
    <input type="file" id="app_upload_photo" name="uploadfile" value="请点击上传图片"   style="display:none" />
</form>
<form id='app_my_upload_a' action="<?php echo Url('Applet/upimg'); ?>" method='post' enctype='multipart/form-data'>
    <input type="file" id="app_upload_photo_a" name="uploadfile" value="请点击上传图片"   style="display:none" />
</form>
<input type="hidden" id="choose" value="user">

<div class="content">

	<div class="clearfix">

		<div class="content_title fl agent_list_title">用户列表</div>

		

		<div class="overview_right fr">

			<div class="add_agent fl" onclick="show_add()" style="cursor: pointer">新增用户</div>

			<div class="agent_search hbj fl">

				<input class="agent_search_input flex1" type="" name="keyworld" id="keyworld" value="" placeholder="输入关键词" />

				<div class="agent_search_icon iconfont icon-sousuo" onclick="search()"></div>

			</div>

		</div>

	</div>
<div class="overview_center clearfix">

			<div class="overview_all fl" id="type0"><img class="img1" src="/image/list_ysj.png" /><img class="img2" src="/image/list_xjt.png" /><a href="user">全部：<?php echo $all_count; ?></a></div>

			<?php if($group == 2): ?><div class="overview_all fl" id="type1"><img class="img1" src="/image/list_ysj.png" /><img class="img2" src="/image/list_xjt.png" /><a href="user?show=1">属代理商：<?php echo $syjxs_count; ?></a></div><?php endif; ?>

			<div class="overview_all fl" id="type2"><img class="img1" src="/image/list_ysj.png" /><img class="img2" src="/image/list_xjt.png" /><a href="user?show=2">三个月内登陆用户数：<?php echo $three_count; ?></a></div>

			<div class="overview_all fl" id="type3"><img class="img1" src="/image/list_ysj.png" /><img class="img2" src="/image/list_xjt.png" /><a href="user?show=3">一年未登陆用户数：<?php echo $year_count; ?></a></div>

			<div class="overview_all fl" id="type4"><img class="img1" src="/image/list_ysj.png" /><img class="img2" src="/image/list_xjt.png" /><a href="user?show=4">用户回收站：<?php echo $del_count; ?></a></div>

		</div>
	<table class="agent_list_table" border="0" cellspacing="0" cellpadding="0">

		<thead>

		<tr>

			<th>ID</th>

			<th>姓名</th>

			<th>联系电话</th>

			<th>用户名</th>

			<th>用户邮箱</th>

			<th>开通时间</th>

			<!-- <th>到期时间</th> -->

			<th>最近登陆时间</th>

			<th>所属代理商</th>

			<th>状态</th>

			<th>操作</th>

		</tr>

		<?php if($admin_arr): foreach($admin_arr as $item): ?>

		<tr>

			<td class="fontfamily-a"><?php echo $item['uid']; ?></td>

			<td><?php echo $item['realname']; ?></td>

			<td class="fontfamily-a"><?php echo $item['mobile']; ?></td>

			<td><?php echo $item['username']; ?></td>

			<td class="fontfamily-a"><?php echo $item['email']; ?></td>

			<td class="fontfamily-a"><?php echo date('Y-m-d ',$item['updatetime']); ?></td>

			<!-- <td><?php if($item['overtime']): ?><?php echo date('Y-m-d',$item['overtime']); endif; ?></td> -->

			<td class="fontfamily-a"><?php if($item['lastlogintime']): ?><?php echo date('Y-m-d',$item['lastlogintime']); endif; ?></td>

			<td><?php echo $item['jxs']; ?></td>

			<td>正常</td>

			<td>
				<?php
					$show  = input('show');
				 if(4 == $show): ?>

				 	<div class="newbtn" onclick="recove(<?php echo $item['uid']; ?>);" style="cursor: pointer;display: inline-block;">恢复</div>
				 	<span class="linetd"></span>
				 	<div class="newbtn" style="cursor: pointer" onclick="real_del(<?php echo $item['uid']; ?>)">彻底删除</div>

				 <?php else: ?>

					<div class="newbtn" onclick="edit_user(<?php echo $item['uid']; ?>)" style="cursor: pointer;display: inline-block;">编辑</div>
					<span class="linetd"></span>
					<div class="newbtn" style="cursor: pointer;display: inline-block;" onclick="czmm(<?php echo $item['uid']; ?>)">重置密码</div>
					<span class="linetd"></span>
					<div class="newbtn" style="margin-right: 0;cursor: pointer;display: inline-block;" onclick="del_user(<?php echo $item['uid']; ?>)" >删除用户</div>
				<?php endif; ?>


			</td>

		</tr>

		<?php endforeach; endif; ?>

		</thead>

	</table>

	<div class="list_page">

		<?php echo $admins->render(); ?>

	</div>

</div>

<!--重置密码-->

<div class="alertbox" style="display: none;" id="show_czmm">

	<div class="alert2" style="height: 160px">

		<div class="alert2_head">重置密码

			<img src="/image/close_alert.png" onclick="close_czmm()"/>

		</div>

		<div class="alert2_content hbj">

			<div class="alert2_content_text">确定将密码重置为123456吗？</div>

			<input type="hidden" value="" name="uid" id="uid">

			<div class="alert2_content_btn1" onclick="czmm_ex()" style="cursor: pointer">确定</div>

			<div class="alert2_content_btn2" onclick="close_czmm()" style="cursor: pointer">取消</div>

		</div>

	</div>

</div>

<!--重置密码-->

<!--重置密码成功-->

<div class="alertbox" style="display: none;"  id="cz_success">

	<div class="alert3">

		<div class="alert2_head">提示

			<img src="/image/close_alert.png" onclick="close_success()"/>

		</div>

		<div class="alert3_content">

			<div class="alert3_content_icon iconfont icon-chenggong"></div>

			<div class="alert3_content_text">重置密码成功！</div>

		</div>

	</div>

</div>

<!--充值密码成功-->

<!--删除用户-->

<div class="alertbox" style="display: none;" id="del_user">

	<div class="alert2" style="height: 160px">

		<div class="alert2_head">删除用户

			<img src="/image/close_alert.png" onclick="close_del()"/>

		</div>

		<div class="alert2_content hbj">

			<div class="alert2_content_text">确定要删除名为<span id="user_name" style="color: #f73e4c;">王美丽</span>的用户吗？</div>

			<input type="hidden" value="" name="uid" id="user_id">

			<div class="alert2_content_btn1" onclick="del_ex()" style="cursor: pointer">确定</div>

			<div class="alert2_content_btn2" onclick="close_del()" style="cursor: pointer">取消</div>

		</div>

	</div>

</div>

<!--删除用户-->

<!--删除成功-->

<div class="alertbox" style="display: none;"  id="del_sucesss">

	<div class="alert3">

		<div class="alert2_head">提示

			<img src="/image/close_alert.png" onclick="close_del_success()"/>

		</div>

		<div class="alert3_content">

			<div class="alert3_content_icon iconfont icon-chenggong"></div>

			<div class="alert3_content_text">删除成功！</div>

		</div>

	</div>

</div>

<!--删除成功-->

<!--彻底删除用户-->

<div class="alertbox" style="display: none;" id="real_del">

	<div class="alert2" style="height: 160px">

		<div class="alert2_head">彻底删除用户

			<img src="/image/close_alert.png" onclick="close_real_del()"/>

		</div>

		<div class="alert2_content hbj">

			<div class="alert2_content_text">确定要彻底删除该用户吗？</div>

			<input type="hidden" value="" name="uid" id="real_del_uid">

			<div class="alert2_content_btn1" onclick="real_del_ex();" style="cursor: pointer">确定</div>

			<div class="alert2_content_btn2" onclick="close_real_del();" style="cursor: pointer">取消</div>

		</div>

	</div>

</div>

<!--彻底删除用户-->

<!--彻底删除成功-->

<div class="alertbox" style="display: none;"  id="real_del_sucesss">

	<div class="alert3">

		<div class="alert2_head">提示

			<img src="/image/close_alert.png" onclick="close_real_del_success()"/>

		</div>

		<div class="alert3_content">

			<div class="alert3_content_icon iconfont icon-chenggong"></div>

			<div class="alert3_content_text">彻底删除成功！</div>

		</div>

	</div>

</div>

<!--彻底删除成功-->

<!--修改资料-->

<div class="alertbox" style="display: none" id="edit_user">

	<div class="alert" style="height: 410px;top: 0;bottom: 0">

		<div class="alert_head">编辑用户

			<img src="/image/close_alert.png" onclick="close_edit()"/>

		</div>

		<div class="alert_content">

			<form action="<?php echo Url('Applet/save_edit_admin'); ?>" method="POST" enctype="multipart/form-data" onsubmit = "return checkeditinfo();">

				<div class="clearfix">

					<div class="alert_form_left fl">

						<div class="clearfix mb-30">

							<div class="open_form_title fl">用户名<span>*</span></div>

							<div class="alert_form_right fl">

								<input class="open_form_text" type="text" name="username" id="e_username" value="" placeholder="密码默认为123456，请登录帐号修改"/>

							</div>

						</div>

						<div class="clearfix mb-30">

							<div class="open_form_title fl">头像</div>

							<div class="alert_form_right hbj fl">
								
								<img class="upimg" src="/image/upimg.png" id="app_upimg" />

								<div class="up_imgbox">

									<div class="up_img_btn" onClick="app_upload_photo.click();">上传图片

										<input type="hidden" name="icon" id="thumb" value=""/>

									</div>

									<div class="up_img_bz">建议上传正方形图片</div>

								</div>

							</div>

						</div>

						<div class="clearfix">

							<div class="open_form_title fl">姓名<span>*</span></div>

							<div class="alert_form_right fl">

								<input class="open_form_text" type="text" name="realname" id="e_realname" value="" />

							</div>



						</div>

					</div>

					<div class="alert_form_left fr">

						<div class="clearfix mb-30">



							<div class="alert_form_right fr">

								<input class="open_form_text" type="text" name="mobile" id="e_mobile" value="" />

							</div>

							<div class="open_form_title fr">手机号码<span>*</span></div>

						</div>

						<div class="clearfix mb-30">



							<div class="alert_form_right fr">

								<input class="open_form_text" type="email" name="email" id="e_email" value="" />

							</div>

							<div class="open_form_title fr">邮箱<span>*</span></div>

						</div>

						<!-- <div class="clearfix">



							<div class="alert_form_right fr">

								<label class="alert_form_label">

									<input class="alert_checkbox" type="checkbox" name="group"  value="" checked/>小程序管理员

								</label>

							</div>

							<div class="open_form_title fr" style="margin-top: 0;">用户组</div>

						</div> -->

					</div>

				</div>

				<input type="hidden" id="edit_uid" name="uid" value="">

				<input type="hidden" id="old_username" name="old_username" value="">

				<input class="alert_submit" type="submit" name=""  value="确定" />

			</form>

		</div>

	</div>

</div>

<!--修改资料-->

<!--添加用户-->

<div class="alertbox" style="display: none;" id="add_user">

	<div class="alert" style="height: 430px;top: 0;bottom: 0;">

		<div class="alert_head">添加用户

			<img src="/image/close_alert.png" onclick="close_add()" />

		</div>

		<div class="alert_content">

			<form action="<?php echo Url('Applet/save_admin'); ?>" method="POST" enctype="multipart/form-data" onsubmit = "return checkinfo();">

				<div class="clearfix">

					<div class="alert_form_left fl">

						<div class="clearfix mb-30">

							<div class="open_form_title fl">用户名<span>*</span></div>

							<div class="alert_form_right fl">

								<input class="open_form_text" type="text" name="username" id="user_user" value="" placeholder="密码默认为123456，请登录帐号修改"/>

							</div>

						</div>

						<div class="clearfix mb-30">

							<div class="open_form_title fl">头像</div>

							<div class="alert_form_right hbj fl">
						
								<img class="upimg" src="/image/upimg.png" id="e_image" />

								<div class="up_imgbox">

									<div class="up_img_btn"  onClick="app_upload_photo_a.click();">上传图片

										<input type="hidden" name="icon" id="e_thumb" value="" />

									</div>

									<div class="up_img_bz">建议上传正方形图片</div>

								</div>

							</div>

						</div>

						<div class="clearfix">

							<div class="open_form_title fl">姓名<span>*</span></div>

							<div class="alert_form_right fl">

								<input class="open_form_text" type="text" name="realname" id="real_real" value="" />

							</div>



						</div>

					</div>

					<div class="alert_form_left fr">

						<div class="clearfix mb-30">



							<div class="alert_form_right fr">

								<input class="open_form_text" type="text" name="mobile" id="mob_mob" value="" />

							</div>

							<div class="open_form_title fr">手机号码<span>*</span></div>

						</div>

						<div class="clearfix">



							<div class="alert_form_right fr">

								<input class="open_form_text" type="email" name="email" id="em" value="" />

							</div>

							<div class="open_form_title fr">邮箱<span>*</span></div>

						</div>



					</div>

				</div>

				<input class="alert_submit" type="submit"  value="确定" />

			</form>

		</div>

	</div>

</div>

<!--添加用户-->

</body>



</html>

<script>

	$("#app_upload_photo").change(function(){
        $("#app_my_upload").ajaxSubmit({ 
          dataType:  'json', //数据格式为json 
          success: function(data) {
            $("#thumb").val(data);
            $("#app_upimg").attr("src",data);
          }
        }); 
    });
    $("#app_upload_photo_a").change(function(){
        $("#app_my_upload_a").ajaxSubmit({ 
          dataType:  'json', //数据格式为json 
          success: function(data) {
            $("#e_thumb").val(data);
            $("#e_image").attr("src",data);
          }
        }); 
    });

    //判断显示类型

    $(function () {

        var show = '<?php echo input('show'); ?>';

        if(show){

            if(show == 1){

                $("#type1").addClass('on');

            }else if(show == 2){

                $("#type2").addClass('on');

            }else if(show == 3){

                $("#type3").addClass('on');

            }else if(show == 4){

                $("#type4").addClass('on');

            }

        }else{

            $("#type0").addClass('on');

        }

    });



	//显示添加用户框

	function show_add() {

		$("#add_user").show();

    }



    //关闭添加用户

	function close_add() {

        $("#add_user").hide();

    }



    //检验提交

    function checkinfo(){

        var username = $("#user_user").val();

        var realname = $("#real_real").val();

        var mobile = $("#mob_mob").val();

        if(!username){

            alert("请输入用户名！");

            return false;

        }else if(!realname){

            alert("请输入用户真实姓名！");

            return false;

        }else if(!mobile){

            alert("请输入用户手机号");

            return false;

        }else{

            return true;

        }

    }



    function checkeditinfo(){

        var username = $("#e_username").val();

        var realname = $("#e_realname").val();

        var mobile = $("#e_mobile").val();

        if(!username){

            alert("请输入用户名！");

            return false;

        }else if(!realname){

            alert("请输入用户真实姓名！");

            return false;

        }else if(!mobile){

            alert("请输入用户手机号");

            return false;

        }else{

            return true;

        }

    }



    //搜索

    function search(){

        var val = $("#keyworld").val();

        if(!val){

            alert("请输入搜索用户姓名");

        }else{

            location.href="<?php echo Url('Applet/user'); ?>"+"?keyworld="+val;

        }

    }



    //编辑页面显示

	function edit_user(id) {

	    var id = id;

	    //根据ID获取当前用户的信息

        $.post("<?php echo Url('Applet/user_info'); ?>",{"id":id},function(data){

            $("#edit_uid").val(data['uid']);

            $("#e_username").val(data['username']);

            $("#e_realname").val(data['realname']);

            $("#e_mobile").val(data['mobile']);

            $("#e_email").val(data['email']);

            $("#old_username").val(data['username']);

            if(data['icon']){

                $("#app_upimg").attr('src',data['icon']);

			}else{

                $("#app_upimg").attr('src','/image/upimg.png');

			}

        })

		$("#edit_user").show();

    }



    //关闭编辑页面

	function close_edit() {

		$("#edit_user").hide();

    }

    

    //提示删除用户

	function del_user(id) {

	    var id = id;



        //获取用户名称

        $.post("<?php echo Url('Applet/user_name'); ?>",{"id":id},function(data){

            $("#user_name").html(data);

        });

        $("#user_id").val(id);

	    $("#del_user").show();

    }



    //执行删除用户

    function del_ex() {

        $("#del_user").hide();

        var id = $("#user_id").val();

        $.post("<?php echo Url('Applet/del_user'); ?>",{"id":id},function(data){

            if(data == 1){

                $("#del_sucesss").show();

                setInterval(g, 2000);



            }else{

                return false;

            }

        })

    }



    //关闭删除用户

	function close_del() {

        $("#del_user").hide();

    }



    //显示重置密码框

    function czmm (id) {

        $("#uid").val(id) ;

        $("#show_czmm").show();

    }



    //确认重置

    function czmm_ex() {

        $("#show_czmm").hide();

        var id = $("#uid").val();

        $.post("<?php echo Url('Applet/czmm'); ?>",{"uid":id},function(data){

            if(data == 1){

                $("#cz_success").show();

                setInterval(g, 2000);

            }

        })



    }



    //手动关闭成功提示框

    function close_success() {

        $("#cz_success").hide();

    }



    function g() {

        location.reload();

    }



    //关闭重置密码框

    function close_czmm() {

        $("#show_czmm").hide();

    }

    //恢复删除用户
    function recove(id){
    	var uid = id;
    	 $.post("<?php echo Url('Applet/recove'); ?>",{"uid":id},function(data){
    	 		if(data == 1){
    	 			location.reload();
    	 		}else{
    	 			return false;
    	 		}
    	 });

    }

    //彻底删除用户
    function real_del(id){

    	$("#real_del_uid").val(id);

    	$("#real_del").show();

    }

    //彻底删除关闭
    function close_real_del(){

    	$("#real_del").hide();

    }

    //执行彻底删除
    function real_del_ex(){
    	$("#real_del").hide();
    	var uid = $("#real_del_uid").val();
    	$.post("<?php echo Url('Applet/real_del_user'); ?>",{"uid":uid},function(data){

    		 if(data == 1){

                $("#real_del_sucesss").show();

                setInterval(g, 2000);

            }

    	});
    }



</script>