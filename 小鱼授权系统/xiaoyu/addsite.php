<?php
/**
 * 添加站点
**/
$mod='blank';
$title='添加站点';
include './head.php';
header("Content-Type: text/html; charset=utf-8");
if($islogin==1){}else exit("<script language='javascript'>window.location.href='./login.php';</script>");
?>
<div class="col-lg-8 col-md-12 col-lg-offset-2 text-center">
<div class="panel panel-info" draggable="true">
<?php
/*if($udata['per_db']==0) {
	showmsg('您的账号没有权限使用此功能',3);
	exit;
}*/
if(isset($_POST['qq']) && isset($_POST['url'])){
$qq=daddslashes($_POST['qq']);
$url=daddslashes($_POST['url']);
     
$row=$DB->get_row("SELECT * FROM auth_site WHERE uid='{$qq}' limit 1");
if($row=='')exit("<script language='javascript'>alert('授权平台不存在该QQ！');history.go(-1);</script>");
if($row['active']==0)exit("<script language='javascript'>alert('此QQ的授权已被封禁！');history.go(-1);</script>");
$url_arr=explode(',',$url);
$re='';

$rowu=$DB->get_row("SELECT * FROM auth_user WHERE user='{$user}' limit 1");

$kou=$rowu['peie']-1;

if($rowu['peie']==0){
   showmsg('你的配额不足请联系站长购买！<br/>'.$DB->error(),4,$_POST['url']);
   exit(0);
}

foreach($url_arr as $val) {
	$row1=$DB->get_row("SELECT * FROM auth_site WHERE url='{$val}' limit 1");
	if($row1!='')continue;
	$sql="insert into `auth_site` (`uid`,`url`,`addid`,`date`,`authcode`,`active`,`sign`) values ('".$qq."','".trim($val)."','".$udata['uid']."','".$date."','".$row['authcode']."','1','".$row['sign']."')";
	$kc="UPDATE `auth_user` SET `peie` = '$kou' WHERE `auth_user`.`user` = '".$user."'";
	$DB->query($sql);
	$DB->query($kc); 
	$re.=$val.',';
}
if($re){ 
$DB->query("insert into `zcd_log` (`url`,`type`,`addtime`,`adduser`) values ('".$url."','1','".$date."','".$rowu['user']."')");  
showmsg('添加授权成功！域名：<br/>'.$re,1,$_POST['url']);
        $nr='我们系统收到通知</br>你在我们系统进行了授权[以下是你的授权信息]</br>授权域名=><font color="red">'.$url.'</font></br>授权QQ=><font color="bule">'.$qq.'</font></br>授权时间:'.$date.'';
        $tittle='小鱼商务组提示您,你新加了一枚授权';
 //       $mail=tomail($qq."@qq.com",$nr,$tittle);   
exit();
}else
exit("<script language='javascript'>alert('添加失败，可能域名已存在！');history.go(-1);</script>");
} ?>
      <div class="panel-heading font-bold">添加站点（已购买者）</div>
        <div class="panel-body">
        <div class="panel-body">
          <form action="./addsite.php" method="post" class="form-horizontal" role="form">
            <div class="input-group">
              <span class="input-group-addon">ＱＱ</span>
              <input type="text" name="qq" value="<?=@$_POST['qq']?>" class="form-control" placeholder="购买授权的QQ" autocomplete="off" required/>
            </div><br/>
            <div class="input-group">
              <span class="input-group-addon">域名</span>
              <input type="text" name="url" value="<?=@$_POST['url']?>" class="form-control" placeholder="" autocomplete="off" required/>
            </div><br/>
            <div class="form-group">
              <div class="col-sm-12"><input type="submit" value="添加" class="btn btn-primary form-control"/></div>
            </div>
          </form>
        </div>
        <div class="panel-footer">
          <span class="glyphicon glyphicon-info-sign"></span> 添多个域名请用英文逗号 , 隔开！
        </div>
      </div>
    </div>
  </div>
<?php include './foot.php';?>