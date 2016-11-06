<?php
/**
 * Created by PhpStorm.
 * User: zq199
 * Date: 2016/11/4
 * Time: 22:40
 */
//require '../blog/class/conn.php';

class getData{
    public $user_info;
    public $blog_list;
    function get_data($username){
        $sys_conn1 = new ConnDB();
        $sys_conn1->conn_db('localhost','root','','blog');
        $conn = $sys_conn1->GetConn();
        mysqli_query($conn,"set names 'utf8' ");
        $sql = mysqli_query($conn," select *from users where username='$username'");
        $this->user_info = mysqli_fetch_array($sql);
        $sys_conn1->CloseConn();
    }
    function get_user_name(){
        echo $this->user_info['username'];
    }
    function get_user_avatar(){
        echo $this->user_info['avatar'];
    }
    function get_user_description(){
        echo $this->user_info['description'];
    }
    function get_user_id(){
        echo $this->user_info['id'];
    }
    function get_blog_list($username){
        $sys_conn1 = new ConnDB();
        $sys_conn1->conn_db('localhost','root','','blog');
        $conn = $sys_conn1->GetConn();
        mysqli_query($conn,"set names 'utf8' ");
        $sql = mysqli_query($conn," select *from tb_blog where author='$username'");
        $this->blog_list = mysqli_fetch_object($sql);
    }
    function show_blog_list(){
        return $this->blog_list;
    }
}
$home_data = new getData();
$home_data->get_data($_COOKIE['user_name']);
$home_data->get_blog_list($_COOKIE['user_name']);
//echo $_COOKIE['username'];