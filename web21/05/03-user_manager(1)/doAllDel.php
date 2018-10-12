<?php
//获取表单传入的ids的值
$ids=$_POST['ids'];
//var_dump($ids);
//$ids是数组，转换成字符串
$str=join(',',$ids);
//var_dump($str);
//连接数据库
$link=mysqli_connect('127.0.0.1','root','root','itheima');
//查询sql语句
$sql="update cq set isDelete=2 where id in ({$str})";
//执行SQL语句
$date=mysqli_query($link,$sql);
//返回本页
if ($date){
    header("location:01-index.php");
}





////接收数据
//$ids = $_POST['ids'];
//
////将$ids这个数组连接为一个字符串 以,来连接
//$str = implode(',',$ids);
//
//
////1.连接数据库
//$link = mysqli_connect("127.0.0.1","root","root","itheima");
//
//$sql = 'update cq set isDelete = 2 where id in ('.$str.')';
////$sql = "update cq set isDelete = 2 WHERE id in ({$str})";
//$res = mysqli_query($link,$sql);
//
////2.循环$ids这个数组
///*$length = count($ids);
//for($i=0;$i<$length;$i++){
//    //3.构建sql语句 批量更新
//    //echo $ids[$i],'<br/>';
//    $sql = 'update cq set isDelete = 1 where id ='.$ids[$i];
//    $res = mysqli_query($link,$sql);
//}*/
//
//header('location:01-index.php');
//mysqli_close($link);