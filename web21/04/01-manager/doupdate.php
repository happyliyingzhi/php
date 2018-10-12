<?php
//接受表单传来的信息
$user=$_POST['userName'];
$info=$_POST['userinfo'];
$image=$_POST['userIcon'];
$id=$_POST['txt'];
//echo $user;
//连接数据库
$link=mysqli_connect('127.0.0.1','root','root','mysql');
var_dump($link);
//更新sql语句
$sql="update star set name='{$user}',info='{$info}',image='{$image}' where id=".$id;
//执行sql语句
$date=mysqli_query($link,$sql);
//返回本地的index.php
header("Location:index.php");
