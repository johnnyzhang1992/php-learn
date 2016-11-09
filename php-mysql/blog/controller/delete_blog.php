<?php
/**
 * Created by PhpStorm.
 * User: zq199
 * Date: 2016/11/9
 * Time: 23:27
 */
require '../class/conn.php';
$url = $_SERVER["QUERY_STRING"];
$url_parse = explode('=', $url);
$id = $url_parse[1];
echo $id;

$sys_conn = new ConnDB();
$conn = $sys_conn->GetConn();
mysqli_query($conn,"set names 'utf8' ");

$sql = mysqli_query($conn,"delete from tb_blog  where id='$id'");
if($sql){
    $sys_conn->CloseConn();
    echo "<script>alert('删除成功！');window.location.href= '/php-mysql/blog/dashboard.php';</script>";
}else{
    echo "<script>alert('操作失败！')</script>";
}