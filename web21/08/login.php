<?php
//判断页面
header("Content-type:text/html;charset=utf-8");
if (isset($_GET['isLogin']) && $_GET['isLogin']=='yes' ){
    //开始session
    session_start();
    $res=strtoupper($_GET['txt']);
//    var_dump($res);
    if ($res==$_SESSION['code']){
        echo "验证码正确";
    }else{
        echo "验证码错误";
    }




 //   $yzm = strtoupper(trim($_GET['txt']));
   // var_dump($yzm);
//    if($yzm == $_SESSION['code']){
//        echo '验证码正确';
//    }else{
//        echo '验证码错误';
//    }
}