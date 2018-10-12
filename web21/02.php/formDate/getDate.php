<?php
include "./header.php";
//PHP要如何获取到表单提交过来的数据    在PHP中有一些预定义变量  九个预定义变量
// 预定义变量的数据类型是数组
//判断用户的行为  看看用户是不是通过01-form.html页面过来的
//在php中有一个函数的 isset() 判断这个变量是否定义了
//判断用户的行为 看看它是从那个页面过来的
if(isset($_GET['sysid'])&&$_GET['sysid']=='web'){
    echo '从heml页面过来的';
}else{
    echo "<h2>倒计时3秒</h2>";
//    echo "<script>setInterval('goBack()',1000)</script>";
}
//if(isset($_GET['sysid']) && $_GET['sysid'] == 'web'){
//    echo "是从html页面过来的";
//}else{
//    echo "<h2>倒计时3秒</h2>";
//    //echo "<script>location.href='01-form.html'</script>";
//}

?>
<!--<h2>这位小哥哥是--><?php //echo $name; ?><!--</h2>-->
<script>

//    console.log(arr1);
    var sec=3;
    function goBack() {
        var arr1=document.querySelector('h2');
        sec--;
        arr1.innerHTML='倒计时'+sec+'秒';
        if (sec==0){
            location.href='01-form.html';
        }
    }
  setInterval(goBack,1000);
</script>
