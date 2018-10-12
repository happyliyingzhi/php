<?php
//rang函数，生成指定区间的数组
//  $res=range(1,10);
//var_dump($res);
//array_merge()将多个数组合并一个数组
$arr=array_merge(range('A','Z'),range(1,9));
$arr1=mt_rand(0,1);
//$arr2=count($arr);
//var_dump($arr2);
//die;
$rand='';
for ($i=0;$i<4;$i++){
    $rand.=$arr[mt_rand(0,count($arr)-1)];
};
echo $rand;
