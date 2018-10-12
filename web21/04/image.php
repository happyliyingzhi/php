<?php
/**
 * Created by PhpStorm.
 * User: 李英芝
 * Date: 2018/6/28
 * Time: 11:27
 */
//接收文件上传
$file=$_FILES['image'];
//将文件名分割为数组
$arr=explode('.',$file['name']);
//获取下标为1的元素
$str=$arr[1];
//拼接字符串
$new_name = time().'.'.$str;

$fileName = './name/'.$new_name;
//$name = $_FILES['icon']['name'];
//
//move_uploaded_file($file,'./'.$name);

$flag = move_uploaded_file($file['tmp_name'],$fileName);
if($flag){
    echo 'true';
}else{
    echo 'false';
}

