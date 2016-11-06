<?php
/**
 * Created by PhpStorm.
 * User: zq199
 * Date: 2016/11/6
 * Time: 22:17
 */
require '../class/conn.php';

$sys_conn = new ConnDB();
$sys_conn->conn_db('localhost','root','','blog');
$conn = $sys_conn->GetConn();
mysqli_query($conn,"set names 'utf8' ");
