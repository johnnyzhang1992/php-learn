<?php
/**
 * Created by PhpStorm.
 * User: zq199
 * Date: 2016/11/1
 * Time: 22:02
 */
require 'conn.php';
//取回数据库中网站的基本信息
class SystemInfo{
    var $site_name; //站点名称
    var $site_owner; //站点作者
    function get_info(){
        $sys_conn = new ConnDB();
        $sys_conn->conn_db('localhost','root','','system_config');
        $conn = $sys_conn->GetConn();
        $this->site_name = mysqli_query($conn,"select blog_title from system_config");
        $this->site_owner = mysqli_query($conn,"select blog_hoster from system_config");

    }
    function SetInfo(){
        if($this->site_name == ''){
            $this->site_name = 'site_name';
        }

        if($this->site_name == ''){
            $this->site_owner = 'site_hoster';
        }
        define('SITE_NAME',$this->site_name,TRUE);
        define('SITE_OWNER',$this->site_owner,TRUE);
    }
}
$system_info = new SystemInfo();
$system_info->get_info();
$system_info->get_info();
