<?php
header("Content-type:text/html;charset=utf-8");
//接受表单传来的信息
$userName=$_POST['userName'];
$userPass=$_POST['userPass'];
$userIcon=$_FILES['userIcon'];
//连接数据库
$link = mysqli_connect('127.0.0.1','root','root','itheima');
//查询sql语句
$sql="select * from chat_user where userName='{$userName}'";
//执行sql语句
$date=mysqli_query($link,$sql);
//取出结果集
$res=mysqli_fetch_all($date,1);
//判断
if (count($res)){
    echo "亲已经注册过，请返回<a href='03.register.html'>重新注册</a>";
}else{
    //图片去后缀
    $filename=time().'.'.explode('.',$userIcon['name'])[1];
    //图片位置
    $filesta='./images/icon'.$filename;
    //图片移动
    move_uploaded_file($userIcon['tmp_name'],$filesta);
    //查询sql语句
    $sqll="insert into chat_user set userName='{$userName}',userPass='{$userPass}', userIcon='{$filename}'";
    //执行sqll语句
    $date1=mysqli_query($link,$sqll);
    if ($date1){
        header("location:02.login.html");
    }
}