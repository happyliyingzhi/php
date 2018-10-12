<?php
/**
 * Created by PhpStorm.
 * User: 李英芝
 * Date: 2018/6/27
 * Time: 11:52
 */

/*-- 选择数据库
use itheima;
use mysql;
-- mysql中字段的类型是字符串 要加引号 建议使用单引号
-- 增加数据
-- INSERT INTO 表名 SET 字段名1 = 值1,字段名2 = 值2,字段名N = 值N;
insert into user set name='梅梅',age=20,sex=1;
insert into user set name='琳琳',age=18,sex=2;
insert into userinfo name='英芝',age=18,sex=2;
-- 修改数据
-- update 表名 set 字段1=值1,字段2=值2 WHERE 条件;
-- 将id=5的这条记录中的name字段的值修改为马琳琳
update user set name='马琳琳' where id=5;
update userinfo set name='李英芝' where id=3;

-- 删除数据
-- delete from 表名 where 条件;
-- 将user表中的id为1的字段给删除
delete from user where id=1;
delete from userinfo where id=1;
-- 查询数据
-- select *|字段列表 from 表名 where 条件;
select *from userinfo where sex=2;
-- and or  !

select * from user;



select * from user where sex = 2;
**/
//添加数据库itheima1
//use itheima1;
//添加一条信息
//insert into classinfo set class_name='前端黑马'，class_name='java黑马';
//修改一条信息
//update classinfo set class_name='ul黑马' where id=2;
//删除信息
//delete from classinfo where id=2;