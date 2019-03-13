<?php
header('Access-Control-Allow-Origin: *');
require "db_connect.php" ;

$name=$_GET['text1'];
global $conn;
$rows = mysqli_query($conn,"SELECT * FROM todo");
$todo=[];
while ($row = mysqli_fetch_assoc($rows)) {
   $item['item']=$row['item'];
   $item['id']=$row['id'];
   $item['is_completed']=$row['is_completed'];
   array_push($todo , $item);
}
echo json_encode($todo);

?>