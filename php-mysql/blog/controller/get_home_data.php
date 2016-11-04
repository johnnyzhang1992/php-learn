<?php
/**
 * Created by PhpStorm.
 * User: zq199
 * Date: 2016/11/4
 * Time: 22:40
 */
require '../blog/class/conn.php';

class getData{
    public $user_info;
    function get_data($username){
        $sys_conn = new ConnDB();
        $sys_conn->conn_db('localhost','root','','blog');
        $conn = $sys_conn->GetConn();
        mysqli_query($conn,"set names 'utf8' ");
        $sql = mysqli_query($conn," select *from users where username='$username'");
        $this->user_info = mysqli_fetch_array($sql);
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
}
$home_data = new getData();
$home_data->get_data($_COOKIE['username']);





