<?php
//接受表单传来的信息
$id=$_GET['id'];
//连接数据库
$link=mysqli_connect('127.0.0.1','root','root','mysql');
//var_dump($link);
//修改SQL语句
$sql='update hero set isDel=1 where id='.$id;
//执行SQL语句
$date=mysqli_query($link,$sql);
//返回本页
if($date){
    header("Location:recycle.php");
}