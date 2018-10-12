<?php
//输出hello word
// 语法： echo 输出的内容  相当于congsole.log
//输出多个变量用逗号隔开
//这里不能输出数组，对象
//echo 'hello world!';
//echo '<h1>hello world!<h1>';


//php的变量
//语法  $变量名=数据;
//声明一个变量$age ,值为16
//$age=16;
//$name='andy';
//$height=123;
//$gender=true;
//echo $age,$gender,$height,$name;


//php的数据类型
//string
//int(整型)
//float(浮点型)
//boolean(布尔型)
//array(数组)
//object(对象)
//null(空)


//在php中双引号或单引号
//双引号：能解析有的标签和变量名
//单引号：如果时变量名，这个变量名只是当字符串，不能解析变量

//$name ='li';
//$str1='hello $name';//不能解析$name
//$str2="hello $name";//能解析$name
//echo $str1,$str2;

//字符串的连接符  .
$name='jack';
$message='hey' .$name;
echo $message;



?>




