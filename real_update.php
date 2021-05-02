<?php

session_start();

$conn = mysqli_connect("localhost", "root", "", "staff");
$id=$_SESSION["iid"];
$query = "SELECT * from feedback where id=$id"; 
$result = mysqli_query($conn, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);

        $first_name = $_REQUEST['first_name'];
		$last_name = $_REQUEST['last_name'];
		$pwd = $_REQUEST['pwd'];
		$phone = $_REQUEST['phone'];
		$email = $_REQUEST['email'];
        $course = $_REQUEST['course'];
        $rating = $_REQUEST['rating'];
		$ads = $_REQUEST['ads'];
		$hob=implode(",",$ads);
		$feedback = $_REQUEST['comments'];

        // mysql_query("update feedback set first_name='$first_name', last_name='$last_name', email='$email', pwd='$pwd', phone='$phone',course='$course', rating='$rating' ,ads='$ads',comments='$comments' where id=$id");
        $query = "update feedback set first_name='$first_name', last_name='$last_name', email='$email', pwd='$pwd', phone='$phone',course='$course', rating='$rating' ,ads='$hob',comments='$feedback' where id=$id"; 
        $result = mysqli_query($conn,$query) ;
        header("Location: update_view.php"); 

        echo "<h3>Data updated in a database successfully.";

?>