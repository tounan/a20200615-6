<?
include("../../config/conn.php");
include("../../config/function.php");
sesCheck_m();
$userid=returnuserid($_SESSION["SHOPUSER"]);
$orderbh=$_GET[orderbh];
while0("*","yjcode_order where orderbh='".$orderbh."' and userid=".$userid);if(!$row=mysql_fetch_array($res)){php_toheader("order.php");}
$sj=getsj();
?>
<html>
<head>
<meta http-equiv="x-ua-compatible" content="ie=7" />
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
<title>会员中心 <?=webname?></title>
<? include("../tem/cssjs.html");?>
<link href="css/buy.css" rel="stylesheet" type="text/css" />
</head>
<body>
<!--订单通知B-->
<? if(returncount("yjcode_smsmail where userid=".$userid." and tyid=1")>0){?>
<div class="bghui" id="bghui"></div>
<script language="javascript">
var nowsms=1; //当前执行的顺序号
var allsms; //最大的SMS顺序号
function timeset(){
document.getElementById("bghui").style.display="none";
document.getElementById("smsmain").style.display="none";
}

function userChecksms(){
 $.get("../../user/sms_sell_chk.php",{id:document.getElementById("smsid"+nowsms).innerHTML},function(result){
  if(result!=""){
   a=parseInt(nowsms/allsms*100);
   document.getElementById("s2").innerHTML=a+"%";
   if(allsms>nowsms){nowsms=nowsms+1;setTimeout("userChecksms()",4000);}else{timeset();}
  }
 });
}
</script>
<div class="smsmain box" id="smsmain">
 <div class="d1">
 <span class="s1">您有订单数据正在同步中</span>
 <span id="s2">0%</span>
 <span class="s3">(请不要刷新或关闭页面)</span>
 </div>
</div>
<? $i=1;while1("*","yjcode_smsmail where userid=".$userid." and tyid=1 order by id asc");while($row1=mysql_fetch_array($res1)){?>
<span id="smsid<?=$i?>" style="display:none"><?=$row1[id]?></span>
<? $i++;}?>
<script language="javascript">
allsms=<?=$i-1?>;
if(allsms<=0){timeset();}else{userChecksms();}
</script>
<? }?>
<!--订单通知E-->

<? include("topuser.php");?>

<div class="ordervtop box">
 <div class="d1" onClick="gourl('order.php')"><img src="img/topleft1.png" height="21" /></div>
 <div class="d2">订单详情</div>
 <div class="d3"><img onClick="gourl('./')" src="../img/tx.png" height="21" /></div>
</div>
</div>

<?
$sqlpro="select * from yjcode_pro where bh='".$row[probh]."'";mysql_query("SET NAMES 'GBK'");$respro=mysql_query($sqlpro);$rowpro=mysql_fetch_array($respro);
$protp=returntp("bh='".$row[probh]."' order by iffm desc","-2");
$prourl="../product/view".$rowpro[id].".html";
$tcfhxs=0;if(!empty($row[tcid])){$sqltc="select * from yjcode_taocan where id=".$row[tcid];mysql_query("SET NAMES 'GBK'");$restc=mysql_query($sqltc);if($rowtc=mysql_fetch_array($restc)){$tcfhxs=$rowtc[fhxs];}}
$sqlsell="select * from yjcode_user where id=".$row[selluserid];mysql_query("SET NAMES 'GBK'");$ressell=mysql_query($sqlsell);$rowsell=mysql_fetch_array($ressell);
?>
<div class="ordervtop1 box">
 <div class="d1">
  <strong><?=strip_tags(returnorderzt($row[ddzt]))?></strong><br>
  <? 
  if($row[ddzt]=="wait"){
   $second=strtotime($sj)-strtotime($row[sj]);
   $day = floor($second/(3600*24));
   $second = $second%(3600*24);//除去整天之后剩余的时间
   $hour = floor($second/3600);
   $second = $second%3600;//除去整小时之后剩余的时间 
   $minute = floor($second/60);
   $second = $second%60;//除去整分钟之后剩余的时间 
   $sjcv=$day."天".$hour."时".$minute."分".$second."秒";
   echo "已过去".$sjcv;
  
  }elseif($row[ddzt]=="db"){
   while1("*","yjcode_db where orderbh='".$orderbh."'");$row1=mysql_fetch_array($res1);
   $second=strtotime($row1[dboksj])-strtotime($sj);
   $day = floor($second/(3600*24));
   $second = $second%(3600*24);//除去整天之后剩余的时间
   $hour = floor($second/3600);
   $second = $second%3600;//除去整小时之后剩余的时间 
   $minute = floor($second/60);
   $second = $second%60;//除去整分钟之后剩余的时间 
   $sjcv=$day."天".$hour."时".$minute."分".$second."秒";
   echo "还剩".$sjcv."自动确认";
  
  }elseif($row[ddzt]=="close"){
   echo $row[closesj];
    
  }elseif($row[ddzt]=="back"){
   while1("*","yjcode_tk where orderbh='".$orderbh."'");$row1=mysql_fetch_array($res1);
   $second=strtotime($row1[tkoksj])-strtotime($sj);
   $day = floor($second/(3600*24));
   $second = $second%(3600*24);//除去整天之后剩余的时间
   $hour = floor($second/3600);
   $second = $second%3600;//除去整小时之后剩余的时间 
   $minute = floor($second/60);
   $second = $second%60;//除去整分钟之后剩余的时间 
   $sjcv=$day."天".$hour."时".$minute."分".$second."秒";
   echo "商家需在".$sjcv."内处理";

  }elseif($row[ddzt]=="backerr"){
   while1("*","yjcode_db where orderbh='".$orderbh."'");$row1=mysql_fetch_array($res1);
   $second=strtotime($row1[dboksj])-strtotime($sj);
   $day = floor($second/(3600*24));
   $second = $second%(3600*24);//除去整天之后剩余的时间
   $hour = floor($second/3600);
   $second = $second%3600;//除去整小时之后剩余的时间 
   $minute = floor($second/60);
   $second = $second%60;//除去整分钟之后剩余的时间 
   $sjcv=$day."天".$hour."时".$minute."分".$second."秒";
   echo $sjcv."后自动打款给商家";
 
  }elseif($row[ddzt]=="suc"){
   echo "感谢您的支持";
  
  }
  ?>
 </div>
 <div class="d2"><img src="img/ddzt_<?=$row[ddzt]?>.png" /></div>
</div>

<!--物流B-->
<script language="javascript">
function wuliu1onc(){
if(document.getElementById("wuliu1d2").className=="d2"){
 document.getElementById("wuliu1d2").className="d2 d21";
 document.getElementById("wuliu1img").src="../img/jiantop.png";
 }else{
 document.getElementById("wuliu1d2").className="d2";
 document.getElementById("wuliu1img").src="../img/jiandown.png";
 }
}
</script>
<? if((5==$rowpro[fhxs] && empty($tcfhxs)) || 5==$tcfhxs){?>
<div class="wuliu1 box" onClick="wuliu1onc()">
 <div class="d1"><img src="img/add1.png" /></div>
 <div class="d2" id="wuliu1d2">
 <? if(!empty($row[kdid])){while1("*","yjcode_kuaidi where id=".$row[kdid]);if($row1=mysql_fetch_array($res1)){$kdbh=$row1[kdbh];$kddh=$row[kddh];?>
 <a href="<?=$row1[kdweb]?>" target="_blank"><?=$row1[tit]?></a> (<span><?=$row[kddh]?></span>)<br>
 <? while1("*","yjcode_chajian where cjbh='cj001' and zt=0");if($row1=mysql_fetch_array($res1)){include("../../config/chajian/cj001/index.php");}else{echo "<br>您可以复制快递单号，然后点击快递公司名称进入网站查询及时的物流信息";}?>
 <? }}else{echo "暂无快递/物流信息<br>可及时关注订单进度<br>如有疑问，请及时联系店家";}?>
 </div>
 <div class="d3"><img id="wuliu1img" src="../img/jiandown.png" /></div>
</div>
<div class="wuliu2 box">
 <div class="d1"><img src="img/add2.png" /></div>
 <div class="d2"><?=$row[shdz]?></div>
</div>
<? }?>
<!--物流E-->

<!--商品B-->
<div class="orderpro box" onClick="gourl('../shop/view<?=$rowsell[id]?>.html')">
 <div class="d1"><img src="img/shop.png" height="15" /></div>
 <div class="d2"><?=$rowsell[shopname]?>&nbsp;&nbsp;&nbsp;&nbsp;<img src="img/jianright.png" height="10" /></div>
</div>
<div class="orderpro1 box" onClick="gourl('<?=$prourl?>')">
 <div class="d1"><img src="<?=$protp?>" onerror="this.src='../img/none70x70.gif'" width="70" height="70" /></div>
 <div class="d2"><?=$row["tit"]?><br><? if(!empty($row[tcv])){echo "<span class='hui'>".$row[tcv]."</span>";}?></div>
 <div class="d3">￥<?=$row[money1]?><br><span class="hui">x<?=$row[num]?></span></div>
</div>
<!--商品E-->

<!--订单信息B-->
<? if($row[ddzt]=="db" || $row[ddzt]=="suc"){?>
<div class="ordermain1 box"><div class="d1"></div><div class="d2">取货方式</div></div>
<div class="ordermain2 box">
 <div class="d1">取货方式:</div>
 <div class="d2">
 <span class="feng">
 <? if((1==$rowpro[fhxs] && empty($tcfhxs)) || 1==$tcfhxs){?>该订单的商品由卖家手动发货，请联系卖家<? }?>
 <? if(2==$rowpro[fhxs] && empty($tcfhxs)){?>网盘地址：<?=$rowpro[wpurl]?><br>网盘密码：<?=$rowpro[wppwd]?><br>解压密码：<?=$rowpro[wppwd1]?><? }?>
 <? if(2==$tcfhxs){?>网盘地址：<?=$rowtc[wpurl]?><br>网盘密码：<?=$rowtc[wppwd]?><br>解压密码：<?=$rowtc[wppwd1]?><? }?>
 <? if(3==$rowpro[fhxs] && empty($tcfhxs)){if(empty($rowpro[upty])){$u=weburl."upload/".$rowpro[userid]."/".$rowpro[bh]."/".$rowpro[upf];}else{$u=$rowpro[upf];}?>
 该订单的商品已经传至服务器，请点击以下图标进行下载<br>
 <a href="<?=$u?>" target="_blank"><img border="0" style="margin-top:5px;" src="img/down.png" height="25" /></a>
 <? }?>
 <? if(3==$tcfhxs){if(empty($rowpro[upty])){$u=weburl."upload/".$rowpro[userid]."/".$rowpro[bh]."/".$rowtc[upf];}else{$u=$rowtc[upf];}?>
 该订单的商品已经传至服务器，请点击以下图标进行下载<br>
 <a href="<?=$u?>" target="_blank"><img border="0" style="margin-top:5px;" src="img/down.png" height="25" /></a>
 <? }?>
 <? if((4==$rowpro[fhxs] && empty($tcfhxs)) || 4==$tcfhxs){?>
 以下是您购买的卡密信息<br>
 <? if(!empty($rowpro[downurl])){echo "软件下载地址：<a href='".$rowpro[downurl]."' target='_blank'>【点击下载软件】</a><br>";}?>
 <?=$row[txt]?>
 <? }?>
 </span>
 </div>
</div>
<div class="ordermain3 box"></div>
<? }?>
<div class="ordermain1 box"><div class="d1"></div><div class="d2">订单信息</div></div>
<div class="ordermain2 box"><div class="d1">订单编号:</div><div class="d2"><?=$orderbh?></div></div>
<div class="ordermain2 box"><div class="d1">下单时间:</div><div class="d2"><?=$row[sj]?></div></div>
<? if(!empty($row[liuyan])){?>
<div class="ordermain2 box"><div class="d1">购买留言:</div><div class="d2"><?=$row[liuyan]?></div></div>
<? }?>
<? if(!empty($row[buyform])){?>
<div class="ordermain2 box"><div class="d1">购买信息:</div><div class="d2"><?=$row[buyform]?></div></div>
<? }?>
<div class="ordermain2 box"><div class="d1">订单总额:</div><div class="d2"><?=returnjgdian($row[money1]*$row[num]+$row[yunfei])?><? if(!empty($row[yunfei])){?>(含运费<?=$row[yunfei]?>元)<? }?></div></div>
<div class="ordermain3 box"></div>
<!--订单信息E-->

<? if($row[ddzt]=="back" || $row[ddzt]=="backerr" || $row[ddzt]=="backsuc" || $row[ddzt]=="jf" || $row[ddzt]=="jfbuy" || $row[ddzt]=="jfsell"){?>
<!--退款B-->
<div class="ordermain1 box"><div class="d1"></div><div class="d2">退款信息</div></div>
<div class="ordermain2 box"><div class="d1">申请时间:</div><div class="d2"><?=$row[tksj]?></div></div>
<div class="ordermain2 box"><div class="d1">退款原因:</div><div class="d2"><?=$row[tkly]?></div></div>
<? if(!empty($row[tkoksj])){?>
<div class="ordermain2 box"><div class="d1">受理时间:</div><div class="d2"><?=$row[tkoksj]?></div></div>
<div class="ordermain2 box"><div class="d1">受理结果:</div><div class="d2"><?=$row[tkjg]?></div></div>
<? }?>
<div class="ordermain2 box" onClick="gourl('orderjf1.php?orderbh=<?=$orderbh?>')"><div class="d1">协商历史:</div><div class="d2">点击查看更多退款相关信息&nbsp;&nbsp;&nbsp;&nbsp;<img src="img/jianright.png" height="10" /></div></div>
<div class="ordermain3 box"></div>
<!--退款E-->
<? }?>

<!--卖家B-->
<div class="ordersell box"><div class="d1"></div><div class="d2">卖家信息</div></div>
<div class="ordersell1 box"><div class="d1">联系QQ:</div><div class="d2"><?=$rowsell[uqq]?></div></div>
<div class="ordersell1 box"><div class="d1">微信号码:</div><div class="d2"><?=$rowsell[weixin]?></div></div>
<div class="ordersell2 box"></div>
<!--卖家E-->

<div class="ordersell box"><div class="d1"></div><div class="d2">沟通记录</div></div>
<div class="jflist box">
 <div class="jfgtlist">
  <? 
  $i=1;
  while1("*","yjcode_orderlog where orderbh='".$orderbh."' and userid=".$userid." order by sj desc");while($row1=mysql_fetch_array($res1)){
  $txt=$row1[txt];
  if($row1[admin]==1){$tp=returntppd("../../upload/".$row1[userid]."/user.jpg","../img/nonetx.jpg");$sf="买方";}
  elseif($row1[admin]==2){$tp=returntppd("../../upload/".$row1[selluserid]."/user.jpg","../img/nonetx.jpg");$sf="卖方";}
  elseif($row1[admin]==3){$tp="../img/nonetx.jpg";$sf="平台";}
  ?>
  <ul class="u1<? if($i==1){?> u0<? }?>">
  <li class="l1"><img src="<?=$tp?>" width="40" height="40" /></li>
  <li class="l2">[<?=$sf?>] <?=$txt?><br><?=$row1[sj]?></li>
  </ul>
  <? $i++;}?>
 </div>
</div>

<!--状态B-->
<? 
$cz="";
if($row[ddzt]=="suc"){ //交易成功
 if(panduan("userid,orderbh","yjcode_propj where orderbh='".$row[orderbh]."' and userid=".$userid)==0){
 $cz="<a href='orderpj.php?orderbh=".$row[orderbh]."' class='a1'>进行评价</a>";
 }else{
 $cz="<a href='orderpj.php?orderbh=".$row[orderbh]."'>已评价</a>";
 }
 $cz=$cz."<a href='../product/view".returnproid($row[probh]).".html'>再次购买</a>";

}elseif($row[ddzt]=="wait"){ //等待发货
 $cz=$cz."<a href='ordertk.php?orderbh=".$row[orderbh]."'>申请退款</a>";
 
}elseif($row[ddzt]=="backsuc"){ //退款成功
 $cz="<a href='../product/view".returnproid($row[probh]).".html'>重新购买</a>";
 
}elseif($row[ddzt]=="backerr"){ //退款失败，不同意退款
 $cz="<a href='shouhuo.php?orderbh=".$row[orderbh]."' class='a1'>确认收货</a>";
 $cz=$cz."<a href='ordertk.php?orderbh=".$row[orderbh]."'>再次退款</a>";
 $cz=$cz."<a href='orderjf.php?orderbh=".$row[orderbh]."'>申请客服介入</a>";

}elseif($row[ddzt]=="db"){ //担保中
 $cz="<a href='shouhuo.php?orderbh=".$row[orderbh]."' class='a1'>确认收货</a>";
 $cz=$cz."<a href='ordertk.php?orderbh=".$row[orderbh]."'>申请退款</a>";

}elseif($row[ddzt]=="close"){ //订单取消
 $cz="<a href='../product/view".$proid.".html'>重新购买</a>";

}elseif($row[ddzt]=="jf"){ //纠纷处理中
 $cz="<a href='orderjf1.php?orderbh=".$row[orderbh]."'>沟通记录</a>";

}elseif($row[ddzt]=="jfbuy"){ //买家胜诉
 $cz="<a href='orderjf1.php?orderbh=".$row[orderbh]."'>沟通记录</a>";

}elseif($row[ddzt]=="jfsell"){ //卖家胜诉
 $cz="<a href='orderjf1.php?orderbh=".$row[orderbh]."'>沟通记录</a>";
  
}
?>
<div class="ordermain4fd">
<div class="ordermain4 box">
 <div class="d1"><?=$cz?></div>
</div>
</div>
<div class="ordermain4fdv"></div>
<!--状态E-->
</body>
</html>