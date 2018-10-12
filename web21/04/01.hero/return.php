<?php
/**
 * Created by PhpStorm.
 * User: 李英芝
 * Date: 2018/6/28
 * Time: 18:36
 */
//接受表单传来的数据
$id=$_GET['return'];
//echo $id;

//连接数据库
$link=mysqli_connect('127.0.0.1','root','root','mysql');
//修改sql语句
$sql="update hero set isDel=1 where id=".$id;
//执行sql语句
$date=mysqli_query($link,$sql);
//返回本页面
if ($date){
    header("Location:recycle.php");
}
