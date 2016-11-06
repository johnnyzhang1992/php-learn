<?php
/**
 * Created by PhpStorm.
 * User: zq199
 * Date: 2016/11/3
 * Time: 23:10
 */
require '../class/conn.php';

$sys_conn = new ConnDB();
$sys_conn->conn_db('localhost','root','','blog');
$conn = $sys_conn->GetConn();
mysqli_query($conn,"set names 'utf8' ");
$user_email = $_POST['user-email'];
$user_pwd = $_POST['user-pwd'];
$sql = mysqli_query($conn," select password from users where email='$user_email'");
$info = mysqli_fetch_array($sql);
if($user_pwd == $info[0]){
    $sql1 = mysqli_query($conn," select username from users where email='$user_email'");
    $info1 = mysqli_fetch_array($sql1);
//    define('USERNAME',$info1[0],true);
    setcookie('username',$info1[0],time()+60*60*24*7,'/','php-learning.dev',1);
//    echo $info1[0];
    echo $_COOKIE['username'];
    echo "<script>;window.location.href= '/php-mysql/blog/index.php';</script>";
}else{
    echo "<script>alert('请重新填写密码！');</script>";
}
$sys_conn->CloseConn();