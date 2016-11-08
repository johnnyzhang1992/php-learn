<?php
/**
 * Created by PhpStorm.
 * User: zq199
 * Date: 2016/11/6
 * Time: 22:17
 */
require '../class/conn.php';

$sys_conn = new ConnDB();
//$sys_conn->conn_db('localhost','root','','blog');
$conn = $sys_conn->GetConn();
mysqli_query($conn,"set names 'utf8' ");
$blog_title = $_POST['blog_title'];
$blog_tag = $_POST['blog_tag'];
$blog_content = $_POST['blog_content'];
$blog_author = $_COOKIE['user_name'];
$info = mysqli_query($conn,"insert into tb_blog(title,author,content,tag,status) VALUES ('$blog_title','$blog_author','$blog_content','$blog_tag','status') ");
$sys_conn->CloseConn();
if($info){

    echo "<script> alert('文章创建成功！');window.location.href= '/php-mysql/blog/index.php';</script> ";
}
