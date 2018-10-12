<?php
//接受表单的信息
$id=$_GET['id'];
//var_dump($id);
//die;
//连接数据库
$link=mysqli_connect('127.0.0.1','root','root','itheima');
//var_dump($link);
//die;
//查找sql语句
$sql="delete from chat_user where id=".$id;
//$sql = "delete from chat_user WHERE id=".$id;
//执行sql语句
$date=mysqli_query($link,$sql);
//var_dump($date);
//die;
//返回本页
if ($date){
    header("location:index.php");
}