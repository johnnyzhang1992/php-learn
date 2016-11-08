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
    var $site_description;//站点描述
    function get_name(){
        $sys_conn = new ConnDB();
//        $sys_conn->conn_db('localhost','root','','blog');
        $conn = $sys_conn->GetConn();
        mysqli_query($conn,"set names 'utf8' ");
        $sql= mysqli_query($conn,"select blog_title from system_config");
        $info = mysqli_fetch_array($sql); //获取查询结果
        $this->site_name = $info[0];
        $sys_conn->CloseConn();
    }
    function get_owner(){
        $sys_conn = new ConnDB();
//        $sys_conn->conn_db('localhost','root','','blog');
        $conn = $sys_conn->GetConn();
        mysqli_query($conn,"set names 'utf8' ");
        $sql1 = mysqli_query($conn,"select blog_hoster from system_config");
        $info1 = mysqli_fetch_array($sql1); //获取查询结果
        $this->site_owner = $info1[0];
//        echo "<script>alert('".$this->site_owner."')</script>";
        $sys_conn->CloseConn();
    }
    function get_description(){
        $sys_conn = new ConnDB();
//        $sys_conn->conn_db('localhost','root','','blog');
        $conn = $sys_conn->GetConn();
        mysqli_query($conn,"set names 'utf8' ");
        $sql1 = mysqli_query($conn,"select site_description from system_config");
        $info1 = mysqli_fetch_array($sql1); //获取查询结果

        $this->site_description = $info1[0];
        $sys_conn->CloseConn();
    }

    function SetInfo(){
        if(empty($this->site_name)){
            $this->site_name = '小小梦工场的网站';
        }
        setcookie('site_name',$this->site_name,time()+60*60*24*7);
        define('SITE_NAME',$this->site_name,TRUE);
        if(empty($this->site_owner)){
            $this->site_owner = '小小梦工场';
        }
        define('SITE_OWNER',$this->site_owner,TRUE);
        setcookie('site_owner',$this->site_owner,time()+60*60*2487);
    }
    function out_name(){
        echo $this->site_name;
    }
    function out_owner(){
        echo $this->site_owner;
    }
    function out_description(){
        echo $this->site_description;
    }
}
$system_info = new SystemInfo();
$system_info->get_name();
$system_info->get_owner();
$system_info->get_description();
$system_info->SetInfo();