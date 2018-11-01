<?php

require ('conn.php');

$sys_conn = new ConnDB();
$conn = $sys_conn->GetConn();

$id = $_POST['id'];

if(isset($id) && $id){
    $sql = "SELECT *  FROM  MyContacts WHERE ContactID = '$id' ORDER By ContactID ASC";
}else{
    $sql = 'SELECT *  FROM  MyContacts ORDER By ContactID ASC';
}


$result = $conn->query($sql);

$list = [];

if ($result->num_rows > 0) {
    while($info = $result->fetch_assoc()){
        $item = [];
        $item['ContactID'] = $info['ContactID'];
        $item['First Name'] = $info['First Name'];
        $item['Last Name'] = $info['Last Name'];
        $item['City'] = $info['City'];
        $item['State'] = $info['State'];
        $item['Date of Birth'] = $info['Date of Birth'];
        $item['Age'] = $info['Age'];
        $item['Email'] = $info['Email'];
        array_push($list,$item);
    };
}


//print_r($list);
if(!$result){
    die('can"t read data'.$conn->connect_error);
}else{
    $conn->close();
    echo json_encode($list);
}