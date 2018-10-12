<?php
////1.接收数据
//$id = $_GET['id'];
////2.连接数据库
//$link = mysqli_connect('127.0.0.1','root','root','mysql');
////3.构建sql语句 删除
//$sql = 'delete from star where id='.$id;
////4.执行$sql
////4.执行$sql
//$res = mysqli_query($link,$sql);
//接受表单传来的数据
$id=$_GET['id'];
//连接数据库
$link=mysqli_connect('127.0.0.1','root','root','mysql');
//构建sql语句
$sql='delete from star where id='.$id;
//执行sql语句
$date=mysqli_query($link,$sql);

  //重定向 
header('Location:index.php');