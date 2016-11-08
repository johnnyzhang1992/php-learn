<?php
/**
 * Created by PhpStorm.
 * User: zq199
 * Date: 2016/11/7
 * Time: 22:19
 */
require '../class/conn.php';

$sys_conn = new ConnDB();
$conn = $sys_conn->GetConn();
mysqli_query($conn,"set names 'utf8' ");
$site_name = $_POST['site_name']; //站点名称
$site_owner = $_POST['site_hoster']; //站点作者
$site_description = $_POST['site_description'];
$sql1 = mysqli_query($conn,"update system_config set blog_title='$site_name',blog_hoster='$site_owner',site_description='$site_description' where id='1'");
if($sql1){
    $sys_conn->CloseConn();
    echo "<script>alert('配置已更新！');window.location.href= '/php-mysql/blog/dashboard.php';</script>";
}else{
    echo "<script>alert('保存信息失败！')</script>";
}
