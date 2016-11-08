<?php
/**
 * Created by PhpStorm.
 * User: zq199
 * Date: 2016/11/1
 * Time: 21:44
 */
//连接服务器的类
class ConnDB{
//    var $host; //主机
//    var $user; //用户名称
//    var $pwd; //登录密码
//    var $dbname; //数据库名字
    var $conn;
//    function conn_db($host,$user,$pwd,$dbname){ //构造方法,为成员变量赋值
//        $this->host = $host;
//        $this->user = $user;
//        $this->pwd = $pwd;
//        $this->dbname = $dbname;
//    }
    function GetConn(){ // 连接数据库
        $this->conn = mysqli_connect('localhost','root','','blog') or die ("数据库服务器连接错误").mysqli_error();
        mysqli_select_db($this->conn,'blog') or die("数据库选择错误").mysqli_error($this->conn);
        mysqli_query($this->conn,"set names 'utf-8'");//设置数据库的编码格式
        return $this->conn; //返回连接对象
    }
    function CloseConn(){ //定义关闭数据库的方法
         mysqli_close($this->conn);
    }
}