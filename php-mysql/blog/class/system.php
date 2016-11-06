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
    function get_name(){
        $sys_conn = new ConnDB();
        $sys_conn->conn_db('localhost','root','','blog');
        $conn = $sys_conn->GetConn();
        $sql= mysqli_query($conn,"select blog_title from system_config");
        $info = mysqli_fetch_array($sql); //获取查询结果
        $this->site_name = $info['blog_title'];
        $sys_conn->CloseConn();
    }
    function get_owner(){
        $sys_conn = new ConnDB();
        $sys_conn->conn_db('localhost','root','','blog');
        $conn = $sys_conn->GetConn();
        $sql1 = mysqli_query($conn,"select blog_hoster from system_config");
        $info1 = mysqli_fetch_array($sql1); //获取查询结果
        $this->site_owner = $info1['blog_hoster'];
        $sys_conn->CloseConn();
    }
    function SetInfo(){
        if($this->site_name == ''){
            $this->site_name = '小小梦工场的网站';
        }
        setcookie('site_name',$this->site_name,time()+60*60*24*7);
        define('SITE_NAME',$this->site_name,TRUE);
        if($this->site_owner == ''){
            $this->site_owner = '小小梦工场';
        }
        define('SITE_OWNER',$this->site_owner,TRUE);
        setcookie('site_owner',$this->site_owner,time()+60*60*2487);
    }
}
$system_info = new SystemInfo();
$system_info->get_name();
$system_info->get_owner();
$system_info->SetInfo();