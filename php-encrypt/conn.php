<?php
/**
 * Created by PhpStorm.
 * User: zq199
 * Date: 2016/10/29
 * Time: 22:37
 */
//连接数据库
$conn = mysqli_connect('localhost','root','');
mysqli_select_db($conn,'test11') or die ('数据库访问错误'.mysqli_errno($conn));
mysqli_query($conn,"set names utf8_general_ci");
mysqli_query($conn,"INSERT INTO  tb_user (id,user,password) VALUES ('1','johnny','123')");
mysqli_close($conn);