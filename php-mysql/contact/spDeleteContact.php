<?php
require ('conn.php');
$sys_conn = new ConnDB();
$conn = $sys_conn->GetConn();

$ids= $_POST['id'];
//echo 'id----'.$id;
// sql to delete a record
$ids = explode(',',$ids);
$result = [];


foreach ($ids as $id){
    $sql = "DELETE FROM MyContacts WHERE ContactID= '$id' ";

    if ($conn->query($sql) === TRUE) {
        $result['success'] = true;
        $result['message'] = 'Record deleted successfully';

    } else {
        $result['success'] = false;
        $result['message'] =  "Error deleting record: " . $conn->error;
    }
}

echo json_encode($result);

//
//$conn->close();