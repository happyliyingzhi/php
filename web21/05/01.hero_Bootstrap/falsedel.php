<?php
/**
 * Created by PhpStorm.
 * User: 李英芝
 * Date: 2018/6/28
 * Time: 21:52
 */
//接受表单的信息
$id=$_GET['id'];
//echo $id;
//连接数据库
$link=mysqli_connect('127.0.0.1','root','root','mysql');
//更新sql语句
$sql="update hero set isDel=2 where id=".$id;
//执行sql语句
$date=mysqli_query($link,$sql);
//var_dump($date);
//exit;
//返回页面
if ($date){
    header("Location:index.php");
}
//if ($date){
//    header("Location:index.php");
//}
