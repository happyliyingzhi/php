<?php
/**
 * Created by PhpStorm.
 * User: 李英芝
 * Date: 2018/7/2
 * Time: 14:24
 */
//清除cookie
setcookie('cookeislogin','');
setcookie('id','');
header("location:02.login.html");