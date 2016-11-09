<?php
/**
 * Created by PhpStorm.
 * User: zq199
 * Date: 2016/11/7
 * Time: 18:25
 */
//编辑文章
require '../class/conn.php';
$url = $_SERVER["QUERY_STRING"];
$url_parse = explode('=', $url);
$id = $url_parse[1];

$sys_conn = new ConnDB();
$conn = $sys_conn->GetConn();
mysqli_query($conn,"set names 'utf8' ");
$blog_title = $_POST['blog_title'];
$blog_tag = $_POST['blog_tag'];
$blog_content = $_POST['blog_content'];

$sql1 = mysqli_query($conn,"update tb_blog set title='$blog_title',tag='$blog_tag',content='$blog_content' where id='$id'");
if($sql1){
    $sys_conn->CloseConn();
    echo "<script>alert('更新文章内容成功！');window.location.href= '/php-mysql/blog/dashboard.php';</script>";
}else{
    echo "<script>alert('保存信息失败！')</script>";
}