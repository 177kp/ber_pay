<?php
/**
 * 资金明细
**/
include("../includes/common.php");
if($islogin2==1){}else exit("<script language='javascript'>window.location.href='./login.php';</script>");


$sql=" uid=$uid";
if(isset($_GET['kw']) && !empty($_GET['kw'])) {
	$kw=daddslashes($_GET['kw']);
	if($_GET['type']==1){
		$sql.=" AND `type`='{$kw}'";
	}elseif($_GET['type']==2){
		$sql.=" AND `money`='{$kw}'";
	}elseif($_GET['type']==3){
		$sql.=" AND `trade_no`='{$kw}'";
	}
	$numrows=$DB->getColumn("SELECT count(*) from pre_record A WHERE{$sql}");
	$con='包含 '.$_GET['value'].' 的共有 <b>'.$numrows.'</b> 条记录';
	$link='&type='.$_GET['type'].'&kw='.$_GET['kw'];
}else{
	$numrows=$DB->getColumn("SELECT count(*) from pre_record A WHERE{$sql}");
	$con='共有 <b>'.$numrows.'</b> 条记录';
}
?>
	  <div class="table-responsive">
        <table class="table table-striped table-bordered table-vcenter">
          <thead><tr><th>操作类型</th><th>变更金额</th><th>变更前金额</th><th>变更后金额</th><th>时间</th><th>关联订单号</th></tr></thead>
          <tbody>
<?php
$pagesize=30;
$pages=ceil($numrows/$pagesize);
$page=isset($_GET['page'])?intval($_GET['page']):1;
$offset=$pagesize*($page - 1);

$rs=$DB->query("SELECT * FROM pre_record WHERE{$sql} order by id desc limit $offset,$pagesize");
while($res = $rs->fetch())
{
echo '<tr><td>'.($res['action']==2?'<font color="red">'.$res['type'].'</font>':'<font color="green">'.$res['type'].'</font>').'</td><td>'.($res['action']==2?'- ':'+ ').$res['money'].'</td><td>'.$res['oldmoney'].'</td><td>'.$res['newmoney'].'</td><td>'.$res['date'].'</td><td>'.($res['trade_no']?'<a href="./order.php?type=1&kw='.$res['trade_no'].'">'.$res['trade_no'].'</a>':'无').'</td></tr>';
}
?>
          </tbody>
        </table>
      </div>
<?php
echo'<div class="text-center"><ul class="pagination">';
$first=1;
$prev=$page-1;
$next=$page+1;
$last=$pages;
if ($page>1)
{
echo '<li><a href="javascript:void(0)" onclick="listTable(\'page='.$first.$link.'\')">首页</a></li>';
echo '<li><a href="javascript:void(0)" onclick="listTable(\'page='.$prev.$link.'\')">&laquo;</a></li>';
} else {
echo '<li class="disabled"><a>首页</a></li>';
echo '<li class="disabled"><a>&laquo;</a></li>';
}
$start=$page-10>1?$page-10:1;
$end=$page+10<$pages?$page+10:$pages;
for ($i=$start;$i<$page;$i++)
echo '<li><a href="javascript:void(0)" onclick="listTable(\'page='.$i.$link.'\')">'.$i .'</a></li>';
echo '<li class="disabled"><a>'.$page.'</a></li>';
for ($i=$page+1;$i<=$end;$i++)
echo '<li><a href="javascript:void(0)" onclick="listTable(\'page='.$i.$link.'\')">'.$i .'</a></li>';
if ($page<$pages)
{
echo '<li><a href="javascript:void(0)" onclick="listTable(\'page='.$next.$link.'\')">&raquo;</a></li>';
echo '<li><a href="javascript:void(0)" onclick="listTable(\'page='.$last.$link.'\')">尾页</a></li>';
} else {
echo '<li class="disabled"><a>&raquo;</a></li>';
echo '<li class="disabled"><a>尾页</a></li>';
}
echo'</ul></div>';
