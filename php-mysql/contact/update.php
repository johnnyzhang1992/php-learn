<?php

require ('conn.php');

header('content-type:text/html;charset=uft-8');
//重定向页面
header('location:MyContacts3.html');

$sys_conn = new ConnDB();
$conn = $sys_conn->GetConn();

$contact_id = $_POST['contact_id'];

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$city = $_POST['city'];
$state = $_POST['state'];
$birth = $_POST['birthday'];
$age = $_POST['age'];
$email = $_POST['email'];

$result = [];
if(isset($contact_id) && $contact_id>0){
    $sql = "UPDATE MyContacts SET `First Name` = '$first_name', `Last Name` = '$last_name', City = '$city',
 State = '$state', `Date of Birth` = '$birth', Age = '$age', Email = '$email' WHERE ContactID = '$contact_id' ";

    if($conn->query($sql) === TRUE){
        $result['success'] = true;
        $result['message'] = "Record updated successfully";
        $conn->close();
        echo json_encode($result);

    }else{
        $result['success'] = false;
        $result['message'] = 'Error:: ' . $conn->connect_error;
        die('Error:: ' . $conn->connect_error);
    }
}else{
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

}




