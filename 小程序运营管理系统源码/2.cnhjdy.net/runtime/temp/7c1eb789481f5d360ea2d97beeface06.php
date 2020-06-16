<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:72:"D:\wwwroot\2.cnhjdy.net\public/../application/index\view\applet\jxs.html";i:1575814731;s:77:"D:\wwwroot\2.cnhjdy.net\public/../application/index\view\public\new_left.html";i:1575814741;s:77:"D:\wwwroot\2.cnhjdy.net\public/../application/index\view\public\new_head.html";i:1575814741;}*/ ?>
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

<script src="/laydate/laydate.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="/js/jquery.form.js"></script>
<form id='app_my_upload' action="<?php echo Url('Applet/upimg'); ?>" method='post' enctype='multipart/form-data'>
    <input type="file" id="app_upload_photo" name="uploadfile" value="请点击上传图片"   style="display:none" />
</form>
<form id='app_my_upload_e' action="<?php echo Url('Applet/upimg'); ?>" method='post' enctype='multipart/form-data'>
    <input type="file" id="app_upload_photo_e" name="uploadfile" value="请点击上传图片"   style="display:none" />
</form>
<input type="hidden" id="choose" value="jxs">

<div class="content">

    <div class="clearfix">

        <div class="content_title fl agent_list_title">代理商列表</div>

       

        <div class="overview_right fr">

            <div class="add_agent fl" onclick="add_jxs()" style="cursor: pointer">新增代理商</div>

            <div class="agent_search hbj fl">

                <input class="agent_search_input flex1" type="" name="" id="keyworld" value="" placeholder="输入关键词" />

                <div class="agent_search_icon iconfont icon-sousuo" onclick="search()"></div>

            </div>

        </div>

    </div>
 <div class="overview_center clearfix">

            <div class="overview_all fl " id="type0"><img class="img1" src="/image/list_ysj.png" /><img class="img2" src="/image/list_xjt.png" /><a href="<?php echo Url('Applet/jxs'); ?>">全部：<?php echo $all_count; ?></a></div>

            <div class="overview_all fl" id="type1"><img class="img1" src="/image/list_ysj.png" /><img class="img2" src="/image/list_xjt.png" /><a href="<?php echo Url('Applet/jxs'); ?>?show=1">正式代理商：<?php echo $fromal_count; ?></a></div>

            <div class="overview_all fl" id="type2"><img class="img1" src="/image/list_ysj.png" /><img class="img2" src="/image/list_xjt.png" /><a href="<?php echo Url('Applet/jxs'); ?>?show=2">额度预警：<?php echo $balance_count; ?></a></div>

            <div class="overview_all fl" id="type3"><img class="img1" src="/image/list_ysj.png" /><img class="img2" src="/image/list_xjt.png" /><a href="<?php echo Url('Applet/jxs'); ?>?show=3">额度为零：<?php echo $zero_count; ?></a></div>

            <div class="overview_all fl" id="type4"><img class="img1" src="/image/list_ysj.png" /><img class="img2" src="/image/list_xjt.png" /><a href="<?php echo Url('Applet/jxs'); ?>?show=4">禁用代理商：<?php echo $close_count; ?></a></div>

        </div>
    <table class="agent_list_table" border="0" cellspacing="0" cellpadding="0">

        <thead>

        <tr>

            <th width="4%">ID</th>



            <th width="7%">姓名</th>

            <th width="8%">电话</th>

            <th width="8%">业务类型</th>

            <th width="14%">用户名</th>

            <th width="8%">开通时间</th>

            <th width="8%">到期时间</th>

            <th width="7%">额度</th>

            <th width="8%">状态</th>

            <th width="32%">操作</th>

        </tr>

        <?php if($admins): foreach($admins as $item): ?>

        <tr>

            <td class="fontfamily-a"><?php echo $item['uid']; ?></td>

            <td><?php echo $item['realname']; ?></td>

            <td class="fontfamily-a"><?php echo $item['mobile']; ?></td>

            <td>

                <?php $type = unserialize($item['type']); if($type): if(in_array('0', $type)): ?>微信小程序<br><?php endif; ?>

                   <!--  <?php if(in_array('2', $type)): ?>支付宝小程序<br><?php endif; if(in_array('1', $type)): ?>百度小程序<?php endif; ?> -->

                <?php endif; ?>

            </td>

            <td><?php echo $item['username']; ?></td>

            <td class="fontfamily-a"><?php echo date('Y-m-d',$item['updatetime']); ?></td>

            <td class="fontfamily-a"><?php echo date('Y-m-d',$item['overtime']); ?></td>

            <td class="fontfamily-a"><?php echo round($item['balance'], 2); ?></td>

            <td>

                <?php if($item['flag'] == 0): ?>

                <font color="#fb8166">已关闭</font>

                <?php else: ?>

                <font color="green">正常</font>

                <?php endif; ?>

            </td>

            <td>



                <div class="newbtn" onclick="show_edit(<?php echo $item['uid']; ?>)" style="cursor: pointer;display: inline-block;">编辑</div>

                <span class="linetd"></span>

                <div class="newbtn" onclick="czmm(<?php echo $item['uid']; ?>)" style="cursor:pointer;display: inline-block;">重置密码</div>
                <span class="linetd"></span>
                <a class="newbtn" href="<?php echo Url('Applet/add_balance'); ?>?uid=<?php echo $item['uid']; ?>">

                    充值

                </a>

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

<!--重置密码成功-->

<!--添加代理商-->

<div class="alertbox" style="display: none;" id="add_jxs">

    <div class="alert" style="height: 484px;top: 0;bottom: 0">

        <div class="alert_head">添加代理商

            <img src="/image/close_alert.png" onclick="close_jxs()"/>

        </div>

        <div class="alert_content">

            <form action="<?php echo Url('Applet/save_jxs'); ?>" method="post" enctype="multipart/form-data" onsubmit = "return checkinfo();">

                <div class="clearfix">

                    <div class="alert_form_left fl">

                        <div class="clearfix mb-30">

                            <div class="open_form_title fl">用户名<span>*</span></div>

                            <div class="alert_form_right fl">

                                <input class="open_form_text" type="text" name="username" id="name" placeholder="密码默认为123456，请登录帐号修改" />

                            </div>

                        </div>

                        <div class="clearfix mb-30">

                            <div class="open_form_title fl">姓名<span>*</span></div>

                            <div class="alert_form_right fl">

                                <input class="open_form_text" type="text" name="realname" id="real"  />

                            </div>

                        </div>

                        <div class="clearfix mb-30">

                            <div class="open_form_title fl">LOGO</div>

                            <div class="alert_form_right hbj fl">

                                <img class="upimg" src="/image/upimg.png" id="add_upimg"/>

                                <div class="up_imgbox">

                                    <div class="up_img_btn" onClick="app_upload_photo.click();">上传图片

                                        <input type="hidden" name="icon" id="add_thumb" value="" />

                                    </div>

                                    <div class="up_img_bz">建议上传正方形图片</div>

                                </div>

                            </div>

                        </div>

                        <div class="clearfix">

                            <div class="open_form_title fl" style="margin-top: 0;">业务类型<span>*</span></div>

                            <div class="alert_form_right fl">

                                <label class="alert_form_label">

                                    <input class="alert_checkbox" type="checkbox" name="type[]"  value="0" checked/>微信小程序

                                </label>

                               <!--  <label class="alert_form_label">

                                    <input class="alert_checkbox" type="checkbox" name="type[]"  value="2" />支付宝小程序

                                </label>

                                <label class="alert_form_label">

                                    <input class="alert_checkbox" type="checkbox" name="type[]"  value="1" />百度小程序

                                </label> -->

                            </div>



                        </div>

                    </div>

                    <div class="alert_form_left fr">

                        <div class="clearfix mb-30">



                            <div class="alert_form_right fr">

                                <input class="open_form_text" type="text" name="mobile" id="mob" value="" />

                            </div>

                            <div class="open_form_title fr">联系方式</div>

                        </div>

                        <div class="clearfix mb-30">



                            <div class="alert_form_right fr">

                                <input class="open_form_text" type="text" name="balance" id="balance" value="" />

                            </div>

                            <div class="open_form_title fr">初始金额</div>

                        </div>

                        <div class="clearfix mb-30">



                            <div class="alert_form_right fr">

                                <input class="open_form_date" style="font-family: arial;" id="date1" type="text" name="overtime"  value="" readonly/>

                                <!--<input class="open_form_date" type="text" name="overtime" id="overtime" value="一年" readonly />-->

                            </div>

                            <div class="open_form_title fr">账号到期时间</div>

                        </div>

                        <div class="clearfix">



                            <div class="alert_form_right fr">

                                <label class="alert_form_label">

                                    <input class="alert_checkbox" type="radio" name="flag"  value="1" checked/>开启

                                </label>

                                <label class="alert_form_label">

                                    <input class="alert_checkbox" type="radio" name="flag"  value="0" />关闭

                                </label>

                            </div>

                            <div class="open_form_title fr" style="margin-top: 0;">账号状态</div>

                        </div>

                    </div>

                </div>

                <input class="alert_submit" type="submit" name=""  value="确定" />

            </form>

        </div>

    </div>

</div>

<!--添加代理商-->



<!--编辑代理商-->

<div class="alertbox" style="display: none;" id="edit_jxs">

    <div class="alert" style="height: 484px;top: 0;bottom: 0">

        <div class="alert_head">编辑代理商

            <img src="/image/close_alert.png" onclick="close_edit()"/>

        </div>

        <div class="alert_content">

            <form action="<?php echo Url('Applet/save_edit_jxs'); ?>" method="post" enctype="multipart/form-data" onsubmit = "return checkeditinfo();">

                <div class="clearfix">

                    <div class="alert_form_left fl">

                        <div class="clearfix mb-30">

                            <div class="open_form_title fl">用户名<span>*</span></div>

                            <div class="alert_form_right fl">

                                <input class="open_form_text" type="text" name="username" id="e_username" value="" />

                            </div>

                        </div>

                        <div class="clearfix mb-30">

                            <div class="open_form_title fl">姓名<span>*</span></div>

                            <div class="alert_form_right fl">

                                <input class="open_form_text" type="text" name="realname" id="e_realname" value="" />

                            </div>

                        </div>

                        <div class="clearfix mb-30">

                            <div class="open_form_title fl">LOGO</div>

                            <div class="alert_form_right hbj fl">

                                <img class="upimg" src="/image/upimg.png" id="edit_upimg"/>

                                <div class="up_imgbox">

                                    <div class="up_img_btn" onClick="app_upload_photo_e.click();">上传图片

                                        <input type="hidden" name="icon" id="edit_thumb" value="" />

                                    </div>

                                    <div class="up_img_bz">建议上传正方形图片</div>

                                </div>

                            </div>

                        </div>

                        <div class="clearfix">

                            <div class="open_form_title fl" style="margin-top: 0;">业务类型<span>*</span></div>

                            <div class="alert_form_right fl">

                                <label class="alert_form_label">

                                    <input class="alert_checkbox" type="checkbox" name="e_type[]" id="wx" value="0" />微信小程序

                                </label>

                              <!--   <label class="alert_form_label">

                                    <input class="alert_checkbox" type="checkbox" name="e_type[]" id="ali"  value="2" />支付宝小程序

                                </label>

                                <label class="alert_form_label">

                                    <input class="alert_checkbox" type="checkbox" name="e_type[]"  id="baidu" value="1" />百度小程序

                                </label> -->

                            </div>



                        </div>

                    </div>

                    <div class="alert_form_left fr">

                        <div class="clearfix mb-30">



                            <div class="alert_form_right fr">

                                <input class="open_form_text" type="text" name="mobile" id="e_mobile" value="" />

                            </div>

                            <div class="open_form_title fr">联系方式</div>

                        </div>

                       <!--  <div class="clearfix mb-30">



                            <div class="alert_form_right fr">

                                <input class="open_form_text" type="text" name="balance" id="e_balance" value="" />

                            </div>

                            <div class="open_form_title fr">初始金额</div>

                        </div>
 -->
                        <div class="clearfix mb-30">



                            <div class="alert_form_right fr">

                                <input class="open_form_date" style="font-family: arial;" id="date2" type="text" name="overtime"  value="" readonly/>

                            </div>

                            <div class="open_form_title fr">账号到期时间</div>

                        </div>

                        <div class="clearfix">



                            <div class="alert_form_right fr">

                                <label class="alert_form_label">

                                    <input class="alert_checkbox" type="radio" name="flag" id="e_open" value="1" />开启

                                </label>

                                <label class="alert_form_label">

                                    <input class="alert_checkbox" type="radio" name="flag" id="e_close"  value="0" />关闭

                                </label>

                            </div>

                            <div class="open_form_title fr" style="margin-top: 0;">账号状态</div>

                        </div>

                    </div>

                </div>

                <input type="hidden" name="uid" id="e_uid" value="">

                <input type="hidden" name="oldusername" id="old" value="">

                <input class="alert_submit" type="submit" name=""  value="确定" />

            </form>

        </div>

    </div>

</div>

<!--编辑代理商-->



</body>



</html>

<script type="text/javascript">


    $("#app_upload_photo").change(function(){
        $("#app_my_upload").ajaxSubmit({ 
          dataType:  'json', //数据格式为json 
          success: function(data) {
            $("#add_thumb").val(data);
            $("#add_upimg").attr("src",data);
          }
        }); 
    });
    $("#app_upload_photo_e").change(function(){
        $("#app_my_upload_e").ajaxSubmit({ 
          dataType:  'json', //数据格式为json 
          success: function(data) {
            $("#edit_thumb").val(data);
            $("#edit_upimg").attr("src",data);
          }
        }); 
    });

    laydate.render({

        elem: '#date1',

    });

    laydate.render({

        elem: '#date2',

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



    // 搜索功能

    function search(){

        var val = $("#keyworld").val();

        if(!val){

            alert("请输入搜索用户姓名");

        }else{

            location.href="<?php echo Url('Applet/jxs'); ?>"+"?keyworld="+val;

        }

    }



    function del_user_conf(){

        if(confirm('您确定要删除该用户嘛?')){

            return true;

        }else{

            return false;

        }

    }



    //显示添加经销商

    function add_jxs() {

        $("#add_jxs").show();

    }



    //关闭显示添加经销商

    function close_jxs() {

        $("#add_jxs").hide();

    }



    //添加经销商部分

    //检验数据

    function checkinfo(){

        var name = $("#name").val();

        var realname = $("#real").val();

        var mobile = $("#mob").val();

        //业务类型

        var type = [];

        $('input[name="type[]"]:checked').each(function(){

            type.push($(this).val());

        });

        if(!name){

            alert('请输入用户名!!');

            return false;

        }else if(!realname){

            alert('请输入用户真实姓名!');

            return false;

        }else if(!mobile){

            alert("请输入用户手机号");

            return false;

        }else if(type.length == 0){

            alert("请选择业务类型");

            return false;

        }else{

            return true;

        }



    }



    //显示编辑代理商

    function show_edit(id) {

        //清空类型

        $("#wx").attr('checked',false);

        $("#baidu").attr('checked',false);

        $("#ali").attr('checked',false);

        $.post("<?php echo Url('Applet/edit_jxs'); ?>",{"uid":id},function(data){

            $("#e_uid").val(data['uid']);

            $("#old").val(data['username']);

            $("#e_username").val(data['username']);

            $("#e_realname").val(data['realname']);

            $("#e_mobile").val(data['mobile']);

            // $("#e_balance").val(data['balance']);

            if(data['icon']){

                $("#edit_upimg").attr('src',data['icon']);

            }else{

                $("#edit_upimg").attr('src','/image/upimg.png');

            }

            for(var i=0; i<data['type'].length; i++){

                if(data['type'][i] == 0){

                    $("#wx").attr('checked',true);

                }
                // else if(data['type'][i] == 2){

                //     $("#ali").attr('checked',true);

                // }else if(data['type'][i] == 1){

                //     $("#baidu").attr('checked',true);

                // }

            }

            $("#date2").val(data['overtime']);
            if(data['flag'] == 0){
                $("#e_close").attr('checked', true);
            }else{
                $("#e_open").attr('checked', true);
            }

        });

        $("#edit_jxs").show();

    }



    //关闭编辑显示

    function close_edit() {

        $("#edit_jxs").hide();

    }



    function checkeditinfo(){

        var username = $("#e_username").val();

        var realname = $("#e_realname").val();

        var mobile = $("#e_mobile").val();

        //业务类型

        var type = [];

        $('input[name="e_type[]"]:checked').each(function(){

            type.push($(this).val());

        });

        if(!username){

            alert("请输入用户名！");

            return false;

        }else if(!realname){

            alert("请输入用户真实姓名！");

            return false;

        }else if(!mobile){

            alert("请输入用户手机号");

            return false;

        }else if(type.length == 0){

            alert("请选择业务类型");

            return false;

        }else{

            return true;

        }

    }





</script>