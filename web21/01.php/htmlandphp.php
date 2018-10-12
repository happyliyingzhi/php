<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<script>
    var arr=[1,2,3,4];
    console.log(arr);
    console.log(arr[0]);
    var arr1=[
        {
            name:'li',
            age:17
        }
    ]
    console.log(arr1);
    console.log(arr1[0]);
//    console.log(arr1['name']);undefied
</script>

<?php
$res=['name'=>'li','age'=>14];
echo $res['name'];
$name1='jack';


?>
<h1>我的名字叫<?php echo "$name1" ?></h1>

</body>
</html>
