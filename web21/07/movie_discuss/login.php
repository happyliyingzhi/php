<?php
//接受表单的信息
$user=$_POST['user'];
$password=$_POST['password'];
if (isset($_POST['login']) && $_POST['login']=='2'){
   //连接数据库
    $link=mysqli_connect('127.0.0.1','root','root','m');
//    var_dump($link);
//    die;
    //构建sql语句 bug
    $sql="select * from muser WHERE user_name='{$user}' AND user_pass='{$password}'";
    //执行sql语句
    $date=mysqli_query($link,$sql);
    //取出结果集
    $res=mysqli_fetch_assoc($date);
//    var_dump($res);
//    die;
   if ($res){
       //开始session的开关
       session_start();
       $_SESSION['login']=1;
       $_SESSION['res']=$res;
//       var_dump($_SESSION['res']);
//       die;
       header("location:index.php");
   }else{
          header("location:login.html");
   }
}else{
   header("location:login.html");
}