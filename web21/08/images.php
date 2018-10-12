<?php


//设置画布的宽高
$widht=200;
$height=200;

//创建画布
$img=imagecreatetruecolor($widht,$height);
//给画布分配背景颜色
$bgColor=imagecolorallocate($img,0,255,255);
//3.给画布着色
imagefill($img,0,0,$bgColor);
//4.往$img这个图片上面绘制干扰点
//41.给干扰点分配颜色
$pxColor=imagecolorallocate($img,100,100,100);
for ($i=0;$i<1000;$i++){
    $x=mt_rand(0,$widht);
    $y=mt_rand(0,$height);

    imagesetpixel($img,$x,$y,$pxColor);
}

//告诉浏览器，要使用图片解析；
header("content-type:image/png");
//6.输出图片
imagepng($img);
//7.销毁图片
imagedestroy($img);