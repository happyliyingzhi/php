<?php
/**
 * 文件重命名
 * @param string $str  文件名
 * @return string  新的文件名
 */
//function re_name($str){
//    //将$str这个变量分割成数组
//    $file_ext = explode('.',$str)[1];
//    //获取时间戳
//    $time = time();
//    $res = $time.'.'.$file_ext;
//    return $res;
//};
function re_name($str){
    //将$str这个遍历分割成数组
    $file_ext=explode('.',$str)[1];
    //获取时间戳
    $time=time();
    $res=$time.'.'.$file_ext;
    return $res;
}