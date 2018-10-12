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
<?php

header('content-type:text/html;charset=utf-8');
$books = array(

    array('name'=>'C语言从入门到入土','price'=>9.9),
    array('name'=>'MySql：从删库到跑路','price'=>11.9),
    array('name'=>'前端开发：土豪之路','price'=>99.99),
    array('name'=>'颈椎病治疗指南','price'=>8.4)
);
var_dump($books);
?>
<table width="400px" height="300px" border="1" style="border-collapse: collapse">

    <tr>
        <th>语言</th>
        <th>分数</th>
    </tr>
    <?php
    foreach ( $books as $value){

        ?>
    <tr>
        <td><?php echo $value['name']; ?></td>
        <td><?php echo $value['price']; ?></td>
    </tr>
    <?php  } ?>

</table>
</body>
</html>


