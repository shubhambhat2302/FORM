<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>
<style>
a:link, a:visited {
  background-color: #f44336;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-weight: bold;

}

a:hover, a:active {
  background-color: blue;
  font-weight: bold;

}
</style>

<body bgcolor="#F2F221">
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "staff");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
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
		


		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO feedback(first_name,last_name,email,pwd,phone,course,rating,ads,comments) VALUES ('$first_name',
			'$last_name','$email','$pwd','$phone','$course','$rating','$hob','$feedback')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>Data stored in a database successfully.";

			// echo nl2br("\n$first_name\n $last_name\n "
			// 	. "$gender\n $address\n $email");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
		<br>
		<a href="home1.php" >Home Page</a>

	</center>
</body>

</html>
