<?php
//清除cookie的值
setcookie('cookielogin','');
setcookie('id','');
header("location:02.login.html");