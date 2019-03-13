<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: PUT");
header("Access-Control-Allow-Credentials: true");
header('Content-Type: application/json');

include "db_connect.php" ;

$result=file_get_contents('php://input');
parse_str($result);
$sql="UPDATE todo SET item = '$name',is_completed= $status WHERE id=$id";
if($conn->query($sql) === TRUE)
{

$users = [
       "name" => $name,
       "id" => $id,
];
echo json_encode($users);
}
else
{
   echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
