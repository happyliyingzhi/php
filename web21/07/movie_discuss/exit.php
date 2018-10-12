<?php
/**
 * Created by PhpStorm.
 * User: 李英芝
 * Date: 2018/7/3
 * Time: 20:49
 */
//注销session
session_start();
//清除session
unset($_SESSION['res']);
unset($_SESSION['login']);
header("location:login.html");
