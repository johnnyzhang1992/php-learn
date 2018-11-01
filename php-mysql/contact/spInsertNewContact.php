<?php

require ('conn.php');

header('content-type:text/html;charset=uft-8');
//重定向页面
header('location:MyContacts3.html');

$sys_conn = new ConnDB();
$conn = $sys_conn->GetConn();


$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$city = $_POST['city'];
$state = $_POST['state'];
$birth = $_POST['birthday'];
$age = $_POST['age'];
$email = $_POST['email'];

$result = [];

$sql = "INSERT INTO MyContacts ".
    "(`First Name`, `Last Name`, City, State, `Date of Birth`, Age, Email ) ".
    "VALUES ".
    "('$first_name','$last_name','$city','$state','$birth','$age','$email') ";

if($conn->query($sql) === TRUE){
    $result['success'] = true;
    $result['message'] = "New record created successfully";
    $conn->close();
    echo json_encode($result);
}else{
    $result['success'] = false;
    $result['message'] = 'Error:: ' . $conn->connect_error;
    die('Error:: ' . $conn->connect_error);
}