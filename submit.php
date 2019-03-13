<?php include "db_connect.php" ;
$name=$_POST["item"];

$sql= "INSERT INTO todo (item) VALUES ('$name')";

if ($conn->query($sql) === TRUE) //conn is the connection varible
{
   header("Location: http://to_do_using_db.local.geekydev.com");

} else {
   echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>