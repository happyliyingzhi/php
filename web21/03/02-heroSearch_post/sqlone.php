<?php
/**
 * Created by PhpStorm.
 * User: 李英芝
 * Date: 2018/6/27
 * Time: 15:18
 */
header("Content-type:text/html;charset=utf-8");
//1.连接数据库 连接认证
$link = mysqli_connect("127.0.0.1",'root','root','mysql','3306');
//var_dump($link);
//2.查询所有的记录
$sql='select * from userinfo WHERE id=2';
//3.使用mysqli_query
$res=mysqli_query($link,$sql);
$data=mysqli_fetch_assoc($res);
echo '<pre>';
print_r($data);
