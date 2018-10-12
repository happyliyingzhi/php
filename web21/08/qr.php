<?php
$width=60;
$height=20;
//创建一个画布
$img=imagecreatetruecolor($width,$height);
//给画布分配颜色
$bgcolor=imagecolorallocate($img,220,220,220);
//给画布添加上颜色
imagefill($img,0,0,$bgcolor);
//循环遍历数组的点的颜色
for ($i=0;$i<1000;$i++){
    //分配点的颜色
    $pxcolor=imagecolorallocate($img,mt_rand(180,250),mt_rand(180,250),mt_rand(180,250));
    $x=mt_rand(0,$width);
    $y=mt_rand(0,$height);
    imagesetpixel($img,$x,$y,$pxcolor);
}
//设置干扰线的循环
for ($i=1;$i<4;$i++){
    $linecolor=imagecolorallocate($img,mt_rand(100,180),mt_rand(100,180),mt_rand(100,180));
    $x1=mt_rand(0,$width);
    $y1=mt_rand(0,$height);
    $x2=mt_rand(0,$width);
    $y2=mt_rand(0,$height);
    imageline($img,$x1,$y1,$x2,$y2,$linecolor);
}
//设置session
//开启session
session_start();
$_SESSION['code']=$string=getcode();
//设置字体颜色
$stringcolor=imagecolorallocate($img,mt_rand(100,180),mt_rand(100,180),mt_rand(100,180));
//设置字体的添加画布上
imagettftext($img,15,0,10,18,$stringcolor,'./font/simsun.ttc',$string);


//告诉浏览器是什么输出的方式
header("content-type:image/jpeg");
imagejpeg($img);
imagedestroy($img);
//封装一个四个数组随机出现的位置
function getcode(){
    $str='';
    $arr=array_merge(range('A','Z'),range(1,9));
    for ($i=0;$i<4;$i++){
        $str.=$arr[mt_rand(0,count($arr)-1)];
    }
    return $str;
}