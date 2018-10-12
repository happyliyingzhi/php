<?php
/**
 * Created by PhpStorm.
 * User: 李英芝
 * Date: 2018/6/29
 * Time: 11:15
 */
//接受表单传来的信息
$del=$_GET['del'];
//echo $del;
//连接数据库
$link=mysqli_connect('127.0.0.1','root','root','mysql');
//删除sql语句
$sql='delete from hero where id='.$del;
//执行sql语句
$date=mysqli_query($link,$sql);
//返回本页
if ($date){
    header("Location:recycle.php");
}