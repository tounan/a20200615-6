<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link type="text/css" rel="stylesheet" href="/Public/btb/css/lib.css?2">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1, minimum-scale=1.0"/>
	<meta content="telephone=no" name="format-detection">
    <title>申请提现</title>
    <script src="/Public/btb/js/jquery-1.8.3.min.js"></script>
    <link rel="stylesheet" href="/Public/btb/css/weui.min.css"/>
    <link rel="stylesheet" href="/Public/btb/css/jquery-weui.min.css">
    <link href="/Public/btb/css/font-awesome.min.css" rel="stylesheet">
    <link href="/Public/btb/fonts/iconfont.css" rel="stylesheet">

    <link rel="stylesheet" href="/Public/btb/css/styles.css"/>
    <script src="/Public/btb/js/layer.js"></script>
    <script>
        var money = <?php echo ($user["jinbi"]); ?>;
		var myname = "<?php echo ($user["username"]); ?>"; 
        var rate = <?php echo ($sxf); ?>;
        function clcAmount(){
            var amount = $("[name='money").val();
            var tax = amount*rate;
            var fact_money = parseFloat(amount)+parseFloat(tax);
            $("#tax").html(new Number(tax).toFixed(8));
            $("#fact_money").html(new Number(fact_money).toFixed(8));
        }

    </script>

<meta name="__hash__" content="61805a6acecdc009908bb25bd1d43f9d_0ea909b50ec85486245cf61bd2d6afb4" /></head>
<style>
.canvas-box {
	position:fixed;
	left:0;
	top:0;
	z-index:-1;
}
</style>
<body>

<!--顶部开始-->
<!--顶部开始-->
<header class="header">
    <span class="header_l"><a href="javascript:history.go(-1);"><i class="fa fa-chevron-left"></i></a></span>
    <span class="header_c">申请提现</span>
	<span style="position: absolute;right: 40px;top: 0px;text-align:center;width:70px;white-space:nowrap; overflow:hidden; text-overflow:ellipsis;font-size: 12px; "></span>
</header>
<div class="height40"></div>
<!--顶部结束-->
<!--顶部结束-->
    <form action="<?php echo U('Index/Emoney/tixianshenqing');?>" method="POST" id="form1" style="font-size:14px; padding-bottom:26px;">
        <ul style="width: 100%;padding:5% 5%;color: #060606;padding-top:65px" >
            <li style="height: 30px;line-height: 30px;margin-top: 5px;width:100%"><span style="display:inline-block;width:30%;">可提佣金：</span><?php echo (four_number($user["yj"])); ?></li>
            <li style="height: 30px;line-height: 30px;margin-top: 5px;width:100%"><span style="display:inline-block;width:30%;">提现金额：</span><input type="txt" placeholder="请输入提现金额" id="money" name="money" onkeyup="clcAmount()"  required="required" style="height: 30px;line-height: 30px;width: 62%;border-radius: 4px;border: none;padding-left: 5px;-webkit-appearance:none; color:#000;">
            </li>
            <li style="height: 30px;line-height: 30px;margin-top: 5px;width:100%"><span style="display:inline-block;width:30%;">手续费：</span><span id="tax">0.00000000</span>&nbsp;&nbsp;&nbsp;&nbsp;提现手续费率:<?php echo ($sxfl); ?>%
            <li style="height: 30px;line-height: 30px;margin-top: 5px;width:100%"><span style="display:inline-block;width:30%;">实际扣减：</span><span id="fact_money">0.00000000</span>
            </li>
            <li style="height: 30px;line-height: 30px;margin-top: 5px;width:100%"><span style="display:inline-block;width:30%;">安全密码：</span><input type="password" placeholder="请输入安全密码" name="safe" required="required"  style="height: 30px;line-height: 30px;width: 62%;border-radius: 4px;border: none;padding-left: 5px;-webkit-appearance:none; color:#000;">
            </li>

            <li style="margin-top:20px;"><input type="button" name="submit" clicked="0"  value="预计两小时内到账,确认提现" style="width: 100%;height: 30px;line-height: 30px;border-radius: 5px;border: 0px; background-color:#1fc811;margin-top: 5px;color: #FFFFFF;-webkit-appearance: none;"/></li>
      		<li style="margin-top:10px;"><span style="color:red">友情提示：提现时间9:00-18:00,一旦提交,不可撤销.提现需审核,审核通过后金钱将会发放到实名认证时上传得收款二微码上,非工作时间内提现将隔天处理。</span></li>
      </ul>
	  </form>
<script type="text/javascript">
    //uses classList, setAttribute, and querySelectorAll
    //if you want this to work in IE8/9 youll need to polyfill these
    (function(){
        var d = document,
                accordionToggles = d.querySelectorAll('.js-accordionTrigger'),
                setAria,
                setAccordionAria,
                switchAccordion,
                touchSupported = ('ontouchstart' in window),
                pointerSupported = ('pointerdown' in window);

        skipClickDelay = function(e){
            e.preventDefault();
            e.target.click();
        }

        setAriaAttr = function(el, ariaType, newProperty){
            el.setAttribute(ariaType, newProperty);
        };
        setAccordionAria = function(el1, el2, expanded){
            switch(expanded) {
                case "true":
                    setAriaAttr(el1, 'aria-expanded', 'true');
                    setAriaAttr(el2, 'aria-hidden', 'false');
                    break;
                case "false":
                    setAriaAttr(el1, 'aria-expanded', 'false');
                    setAriaAttr(el2, 'aria-hidden', 'true');
                    break;
                default:
                    break;
            }
        };
//function
        switchAccordion = function(e) {
            console.log("triggered");
            e.preventDefault();
            var thisAnswer = e.target.parentNode.nextElementSibling;
            var thisQuestion = e.target;
            if(thisAnswer.classList.contains('is-collapsed')) {
                setAccordionAria(thisQuestion, thisAnswer, 'true');
            } else {
                setAccordionAria(thisQuestion, thisAnswer, 'false');
            }
            thisQuestion.classList.toggle('is-collapsed');
            thisQuestion.classList.toggle('is-expanded');
            thisAnswer.classList.toggle('is-collapsed');
            thisAnswer.classList.toggle('is-expanded');

            thisAnswer.classList.toggle('animateIn');
        };
        for (var i=0,len=accordionToggles.length; i<len; i++) {
            if(touchSupported) {
                accordionToggles[i].addEventListener('touchstart', skipClickDelay, false);
            }
            if(pointerSupported){
                accordionToggles[i].addEventListener('pointerdown', skipClickDelay, false);
            }
            accordionToggles[i].addEventListener('click', switchAccordion, false);
        }
    })();
</script>
	    <link href="/Public/kj/css/swiper.min.css" type="text/css" rel="stylesheet">
    <link href="/Public/kj/css/style.css" type="text/css" rel="stylesheet">
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
	<!--底部结束-->
<script src="/Public/gec/reg/js/jquery-1.11.3.min.js"></script>
<script src="/Public/gec/web/js/jquery-weui.min.js"></script>	

<script src="/Public/btb/js/jquery-weui.min.js"></script>
<script>
    $("input[name='submit']").click(function(){
        var btn = $("input[name='submit']");
        if(btn.attr("clicked") == "1"){
            return ;
        }
        btn.attr("clicked","1");
        var money = $("input[name='money']").val();
        var safe = $("input[name='safe']").val();
        var pd=/^1[3|4|5|7|8][0-9]\d{4,8}$/;
        if(money == ''){
            $.alert('请填写需要提现的金额');
            btn.attr("clicked","0");
            return ;
        }

        if(safe == ''){
            $.alert('请填写安全码');
            btn.attr("clicked","0");
            return ;
        }

        $.showLoading("正在提交");
        $.ajax({
            url:"<?php echo U('Index/Emoney/tixianshenqing');?>",
            type:"post",
            data:$("#form1").serialize(),
            dataType:"json",
            success:function(data){
                if(data.status==1){
                    $.alert(data.info,function(){
                        window.location = "<?php echo U('Index/Emoney/withdrawList');?>";
                    })
                }else{
                    $.alert(data.info);
                    btn.attr("clicked","0");
                }
            },error:function(){
                $.alert("网络错误");
                btn.attr("clicked","0");
            },complete:function(){
                $.hideLoading();
            }
        })
        return false;
    })
</script>

</body>
</html>