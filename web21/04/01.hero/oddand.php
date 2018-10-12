<?php
//接受表单传来的数据
$heroName=$_POST['heroName'];
$heroSkill=$_POST['heroSkill'];
$heroIcon=$_FILES['heroIcon'];
//引入数据
//将文件名分割为数组
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
//连接数据库
$link=mysqli_connect("127.0.0.1",'root','root','mysql','3306');
//新增sql语句
$sql="insert into hero set heroName='{$heroName}',heroSkill='{$heroSkill}',heroIcon='{$fileName}'";
//执行sql语句
$date=mysqli_query($link,$sql);
if ($date){
    header("Location:index.php");
}















