<?php
//判断是否从login页面过来的
if (isset($_POST['login']) && $_POST['login']=='yes'){
    //接受表单的信息
    $userName=$_POST['userName'];
    $userPass=$_POST['userPass'];
//    echo "ok";
    //连接数据库
    $link = mysqli_connect('127.0.0.1','root','root','itheima');
    //构建sql语句
    $sql="select * from chat_user where userName='{$userName}' AND userPass='{$$userPass}'";
    //执行



}else{
    header("location:02.login.html");
}





////接受表单的信息
//$userName=$_POST['userName'];
//$userPass=$_POST['userPass'];
////var_dump($userPass);
////die;
////连接数据库
//$link = mysqli_connect('127.0.0.1','root','root','itheima');
////查询sql语句
////$sql="select * from chat_user where userName='{$userName}',userPass='{$userPass}'";
//if ($userName=='admin'&& $userPass=='admin') {
//    $sql = "select * from chat_user where userName='{$userName}' and userPass='{$userPass}'";
////执行sql语句
//    $res = mysqli_query($link, $sql);
////取出结果集
//    $date = mysqli_fetch_assoc($res);
//
////判断
//    if (count($date)) {
//        setcookie('cookeislogin', 'yes');
//        setcookie('id', $date['id']);
//        header("location:index.php");
//    }
//}else{
//    echo "密码错误请<a href='02.login.html'>重新登入</a>";
//};