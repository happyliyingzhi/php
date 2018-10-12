<?php
//数组的语法   $数组名=array(元素列表)  或者  $数组名=[元素]
//写法一
//$arr=array(1,2,3,4,5);
////var_dump($arr);
////写法二
//$arr1=[5,6,7,8,9];
////var_dump($arr1);
////写法三
//$arr3=array();
//$arr3[]=10;
//$arr3[]=11;
//$arr3[]=12;
////var_dump($arr3);
////取数组的某一个值
//echo $arr[2];
//echo $arr3[2];
//关联数组
//语法：
//$数组名=array('key'=>'value);
////或者    $数组名=['key'=>'value'];
//$arr=array('name'=>'jack','age'=>18);
////取值语法
//var_dump($arr);
////var_dump($arr['name']);
//echo $arr['name'];



//多维数组
$arr1=array(
       array('name'=>'jack1','age'=>18),
       array('name'=>'jack2','age'=>90),
       array('name'=>'jack3','age'=>77),
       array('name'=>'jack4','age'=>44),
);
  var_dump($arr1);
//    echo $arr1[1];
////取php数组的长度
////语法  count(函数名)
//echo count($arr1);


//遍历索引数组
//$arr4=array(1,2,3,4);
//for ($i=0;$i<count($arr4);$i++){
//    echo $arr4[$i].'<br>';
//};

//遍历关联数组
//语法：foreach($数组名 as $key=>$value){
          //循环体$key就是当前遍历到的元素的$key
//          循环体$value就是当前遍历到的元素的$value
//}
$arr8=array('name'=>'li','age'=>14);
//遍历数组
foreach ($arr8 as $key=>$value){
    echo $key .'=>' .$value .'<br>';

}
var_dump($arr8);
?>



