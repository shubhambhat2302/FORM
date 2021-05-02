<?php 

$conn = mysqli_connect("localhost", "root", "", "staff");
$id=$_REQUEST['id'];
$query = "DELETE FROM feedback WHERE id=$id"; 
$result = mysqli_query($conn,$query) ;
header("Location: try222.php"); 

?>
