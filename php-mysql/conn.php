<?php
/**
 * Created by PhpStorm.
 * User: zq199
 * Date: 2016/10/30
 * Time: 20:11
 */
//连接数据库
$conn = mysqli_connect('localhost','root','');
if($conn){
    echo '<p>数据库连接成功！';
}
$link = mysqli_select_db($conn,'test12') or die ('数据库访问错误'.mysqli_errno($conn));
if($link){
    echo '<p>数据库选择成功！';
}
mysqli_query($conn,"set names utf8_general_ci");
//插入数据
$result1 = mysqli_query($conn,"insert into tb_user(user,pwd) VALUES ('Nike','nike123')");
if($result1){
    echo '<p>插入数据成功！';
}
//修改数据
$result2 = mysqli_query($conn," update tb_user set user='nike',pwd='change123' WHERE user = 'Nike'");
if($result2){
    echo '<p>修改数据成功！';
}
//修改数据
$result3 = mysqli_query($conn," delete from tb_user  WHERE user = 'nike'");
if($result3){
    echo '<p>删除数据成功！';
}
//查询数据
$result4 = mysqli_query($conn," select * from tb_user");
if($result4){
    echo "<p>查询数据成功！";
}

mysqli_close($conn);