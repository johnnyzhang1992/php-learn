<?php
/**
 * Created by PhpStorm.
 * User: zq199
 * Date: 2016/10/16
 * Time: 18:22
 */
//启动会话用两种方法
//1-使用session_start（）函数
//2-使用session_register()函数

//session设置时间
$time = 1*60;                      //设置session失效时间
session_set_cookie_params($time);  //使用函数

//或者使用set_cookie来设置session失效时间
//setcookie(session_name(),session_id(),time()+$time, '/'); // 使用setcookie()手动设置session失效时间

//使用session_save_path()存储session临时文件
$path = "tmp/"; //设置session存储路径
session_save_path($path);

//session缓存
session_cache_limiter("private");
$cache_limit = session_cache_limiter();//开启客户端缓存
session_cache_expire(30);
$cache_expire = session_cache_expire(); //开启客户端缓存时间

//注册会话
session_start(); //启动session （初始化）
$_SESSION["admin"] = "johnnyzhang"; //声明一个名为admin的变量，并赋值
if(!empty($_SESSION["admin"])){    //判断用于储存用户名的session会话变量是否为空
    $myvalue = $_SESSION["admin"];  //将会话变量赋值给一个变量$myvalue
    echo "session_name:".$myvalue;  //打印会话变量
}
//删除会话
//unset($_SESSION["admin"]);//删除单个会话
//
//if(isset($_SESSION["admin"])){ //判断会话是否还存在
//    echo "当前会话仍然存在！";  //存在，输出信息
//}else{
//    echo "<br>Sorry,当前会话已被注销！";  //不存在。输出此信息
//}
//删除多个会话
//$_SESSION = array();
//结束当前会话
//session_destroy();

