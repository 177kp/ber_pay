<?php

include("../includes/common.php");
if($islogin==1){}else exit("<script language='javascript'>window.location.href='./login.php';</script>");

$channel = \lib\Channel::get($conf['transfer_wxpay']);
if(!$channel)exit('{"code":-1,"msg":"当前支付通道信息不存在"}');


$id = isset($_POST['id'])?intval($_POST['id']):exit('{"code":-1,"msg":"ID不能为空"}');

if(!isset($_SESSION['paypwd']) || $_SESSION['paypwd']!==$conf['admin_paypwd'])exit('{"code":-1,"msg":"支付密码错误，请返回重新进入该页面"}');

$row=$DB->getRow("SELECT * FROM pre_settle WHERE id='{$id}' limit 1");

if(!$row)exit('{"code":-1,"msg":"记录不存在"}');

if($row['type']!=2)exit('{"code":-1,"msg":"该记录不是微信结算"}');

if($row['transfer_status']==1)exit('{"code":0,"ret":2,"result":"微信订单号:'.$row['transfer_result'].' 支付时间:'.$row['transfer_date'].'"}');

$out_biz_no = date("Ymd").'000'.$id;

$result = transferToWeixin($channel, $out_biz_no, $row['account'], $row['username'], $row['money']);

if($result['code']==0 && $result['ret']==1){
	$data['code']=0;
	$data['ret']=1;
	$data['msg']='success';
	$data['result']='微信订单号:'.$result["orderid"].' 支付时间:'.$result["paydate"];
	$DB->exec("update `pre_settle` set `status`='1',`endtime`='$date',`transfer_status`='1',`transfer_result`='".$result["orderid"]."',`transfer_date`='".$result["paydate"]."' where `id`='$id'");
} elseif($result['code']==0 && $result['ret']==0) {
	$data['code']=0;
	$data['ret']=0;
	$data['msg']='fail';
	$data['result']='转账失败 ['.$result['sub_code'].']'.$result['sub_msg'];
	$DB->exec("update `pre_settle` set `transfer_status`='2',`transfer_result`='".$data['result']."' where `id`='$id'");
	if($result["sub_code"]=='OPENID_ERROR' || $result["sub_code"]=='NAME_MISMATCH' || $result["sub_code"]=='V2_ACCOUNT_SIMPLE_BAN'){
		$DB->exec("update `pre_settle` set `status`='3',`result`='".$result["sub_msg"]."' where `id`='$id'");
	}
} else {
	$data['code']=-1;
	$data['msg']=$result['msg'];
}
echo json_encode($data);
