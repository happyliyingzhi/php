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
<table width="800" align="center" border="1" style="border-collapse: collapse">
    <tr>
        <th>姓名</th>
        <th>年龄</th>
        <th>性别</th>
        <th>地址</th>
    </tr>
    <?php

    $arr1 = array(
        'name'=>'鸣人',
        'age'=>18,
        'sex'=>'男',
        'addr'=>'木叶'
    );

    $arr2 = array(
        'name'=>'佐助',
        'age'=>18,
        'sex'=>'男',
        'addr'=>'木叶'
    );

    $arr3 = array(
        'name'=>'雏田',
        'age'=>18,
        'sex'=>'女',
        'addr'=>'木叶'
    );


    //创建一个空数组
    $arr4 = array(
         $arr1,
         $arr2,
        $arr3
    );
//    var_dump($arr4);
   foreach ($arr4 as $value){



        ?>
      <tr>
          <td><?php echo $value['name'];?></td>
          <td><?php echo $value['age'];?></td>
          <td><?php echo $value['sex'];?></td>
          <td><?php echo $value['addr'];?></td>
      </tr>


    <?php  } ?>
    <?php
    $array = ['张三','李四','王五','赵六'];
    $box=['李一','李四','张三'];

    ?>
<ul>
    <?php
       foreach ($array as $value){
      echo '<li>' ."$value".'</li>';
    ?>

</ul>
<?php   } ?>

</table>
</body>
</html>
