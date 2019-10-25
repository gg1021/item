<?php
//
////$data=[['cname'=>'全部', 'goods'=>[['name','price','xxx'],]], ['cname'=>'沙发']]
//$cate=[['id'=>0,'cname'=>'全部']];
//$sql = "select * from category order by id asc ";
//$cate1=$mysql->query($sql)->fetch_all(MYSQLI_ASSOC);
//$care=array_merge($cate,$cate1);   //两个数组合并
//$sql="select * from goods";
//$all = $mysql->query($sql)->fetcg_all(MYSQLI_ASSOC);
//$len=count($cate);
//for ($i=0;$i<$len;$i++){
//    $items=$cate[$i];
//    $id = $items['id'];
//    if ($i == 0){
//        $cate[$i]['goods']=$all;
//        continue;
//    }
//    $cate[$i]['goods']=array_filter($all,function ($v)use($id){return $v['cid']==$id;}); //
//
//}
//以上部分属于 产品中心的 选项卡部分的数据渲染
?>
<?php
require '../lib/db.php';

$sql ="select * from nav order by nsort desc";
$nav = $mysql->query($sql)->fetch_all(MYSQLI_ASSOC);

require '../view/index/header.html';

