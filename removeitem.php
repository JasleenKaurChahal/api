<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: DELETE");
header("Access-Control-Allow-Credentials: true");
header('Content-Type: application/json');
include "db_connect.php" ;
$i=file_get_contents('php://input');
parse_str($i);
$sql="DELETE FROM todo WHERE id=$text1";

if ($conn->query($sql) === TRUE)
{
   echo $text1;

} else {
   echo "Error: ".$text1."cdcd". $sql . "<br>" . $conn->error;
}
?>