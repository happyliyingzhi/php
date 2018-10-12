<?php
/**
 * Created by PhpStorm.
 * User: 李英芝
 * Date: 2018/6/30
 * Time: 16:33
 */
//  die('ok');
//接受表单传来的信息
$id=$_GET['ids'];
//var_dump($id);
//die;
//传过来的是数组,拼接成字符串
$str=join(',',$id);
//var_dump($str);
//die;
//连接数据库
$link=mysqli_connect('127.0.0.1','root','root','itheima');
//var_dump($link);
//构建sql语句
//$sql="update cq set isDelete=2 where id in ({$str}) ";
$sql="update cq set isDelete = 2 where id in ({$str})";
//执行sql语句
$date=mysqli_query($link,$sql);
//返回本页
if ($date){
    header("location:01.index.php");
}
