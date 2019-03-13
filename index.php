<?php
header('Access-Control-Allow-Origin: *');
include "db_connect.php" ;
$task = $_POST['text1'];
$sql= "INSERT INTO todo (item) VALUES ('$task')";
//conn is the connection varible
if ($conn->query($sql) === TRUE) 
{
   $last_id = $conn->insert_id;
   $result = mysqli_query($conn,"SELECT * FROM todo WHERE id=$last_id");
   $todo=[];
   while ($row = mysqli_fetch_assoc($result)) {
       $item['item']=$row['item'];
       $item['id']=$row['id'];
       $item['is_completed']=$row['is_completed'];
       array_push($todo , $item);
   }
   echo json_encode($todo);
} else {
   echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
