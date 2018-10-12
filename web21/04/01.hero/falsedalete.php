<?php
//获取表单传来的数据
$id=$_GET['id'];
//echo $id;
//连接数据库
$link=mysqli_connect('127.0.0.1','root','root','mysql');
//模拟删除，就是更新页面,sql语句
$sql='update hero set isDel=2 where id='.$id;
//执行sql语句
$date=mysqli_query($link,$sql);

//返回本地的页面
if ($date){
    header("Location:index.php");
}


