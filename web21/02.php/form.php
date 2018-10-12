<?php

include "./header.php";
if (isset($_GET['sysid'])&& $_GET['sysid']=='web'){
    echo "是从html页面过来的";
}else{
    echo "<h2>倒计时3秒</h2>";
//    echo " <script>setInterval(goBack,1000)</script>";
//    echo "<script>location.href='form.html'</script>";
}
?>
<script>
    var timeDi;
    var sec=4;
function goBack() {
    sec--;
    //获取h2标签
    var arr1=document.querySelector('h2');
    //将获取的属性，设置内容，将倒计时添加到页面上
    arr1.innerHTML='倒计时'+sec+'秒';
    if (sec==0){
        //跳转到页面
        location.href='form.html';
        clearInterval(timeDi)
    }
}
 timeDi=  setInterval(goBack,1000)
</script>
