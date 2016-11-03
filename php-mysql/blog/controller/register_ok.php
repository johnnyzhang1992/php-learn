<?php
/**
 * Created by PhpStorm.
 * User: zq199
 * Date: 2016/11/3
 * Time: 22:33
 */
require '../class/conn.php';

$sys_conn = new ConnDB();
$sys_conn->conn_db('localhost','root','','blog');
$conn = $sys_conn->GetConn();
mysqli_query($conn,"set names 'utf8' ");
$username = $_POST['username'];
$user_email = $_POST['user-email'];
$user_description = $_POST['user-description'];
$user_pwd = $_POST['user-pwd'];
$info = mysqli_query($conn,"insert into users(username,password,email,avatar,description) VALUES ('$username','$user_pwd','$user_email','images/avatar/avatar.JPG','$user_description') ");
if($info){

    echo "<script> alert('恭喜你,注册成功！');window.location.href= '/php-mysql/blog/index.php';</script> ";
}
$sys_conn->CloseConn();