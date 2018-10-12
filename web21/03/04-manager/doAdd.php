<?php
////header("Content-type:text/html;charset=utf-8");
//
////1.获取表单提交过来的数据
//$name = $_POST['user'];
//$info = $_POST['info'];
//$image = $_POST['image'];
//
////2.连接数据库
//$link = mysqli_connect('127.0.0.1','root','root','itheima');
////3.构建SQL语句  增
//
//$sql = "insert into star set name='{$name}',info='{$info}',image='{$image}'";
//
////echo $sql;exit;
//
////4.执行$sql
//$res = mysqli_query($link,$sql);

//接受表单传来的信息
//$user=$_POST['user'];
//$info=$_POST['info'];
//$image=$_POST['image'];
////数据库的连接
//$link=mysqli_connect('127.0.0.1','root','root','mysql');
////数据库增加
//$sql="insert into star set name='{$user}',image='{$image}',info='{$info}'";
//
////执行sql语句
//$date=mysqli_query($link,$sql);
$user=$_POST['user'];
$info=$_POST['info'];
$image=$_POST['image'];
$link=mysqli_connect('127.0.0.1','root','root','mysql');
$sql="insert into star set name='{$user}',info='{$info}',image='{$image}'";
$date=mysqli_query($link,$sql);



  //重定向 
header('Location:index.php');

