<?php
//连接数据库
$link=mysqli_connect('127.0.0.1','root','root','mysql');
//获取表单的传入的元素
$heroName=$_POST['heroName'];
$heroSkill=$_POST['heroSkill'];
$heroIcon=$_FILES['heroIcon'];

//echo $heroIcon;
//exit;

$arr=explode('.',$heroIcon['name']);
//获取下标为1的元素
$str=$arr[1];
//拼接字符串
$new_name = time().'.'.$str;

$fileName = './imgs/icon/'.$new_name;
//$name = $_FILES['icon']['name'];
//
//move_uploaded_file($file,'./'.$name);

$flag = move_uploaded_file($heroIcon['tmp_name'],$fileName);
if($flag){
    echo 'true';
}else{
    echo 'false';
}
//exit;
//添加sql语句
$sql="insert into hero set heroName='{$heroName}',heroSkill='{$heroSkill}',heroIcon='{$fileName}'";
//执行sql语句
$date=mysqli_query($link,$sql);
//返回index.php
if ($date){
    header("Location:index.php");
}


?>