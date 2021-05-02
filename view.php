
<?php

// Username is root
$user = 'root';
$password = '';

// Database name is gfg
$database = 'staff';

// Server is localhost with
// port number 3308
$servername='localhost';
$mysqli = new mysqli($servername, $user,
				$password, $database);

// Checking for connections
if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

// SQL query to select data from database
$sql = "SELECT * FROM feedback";
$result = $mysqli->query($sql);
$mysqli->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>View</title>
	<!-- CSS FOR STYLING THE PAGE -->
	<style>
		table {
			margin: 0 auto;
			font-size: large;
			border: 1px solid black;
		}

		h1 {
			text-align: center;
			color: #006600;
			font-size: xx-large;
			font-family: 'Gill Sans', 'Gill Sans MT',
			' Calibri', 'Trebuchet MS', 'sans-serif';
		}

		td {
			background-color: #E4F5D4;
			border: 1px solid black;
		}

		th,
		td {
			font-weight: bold;
			border: 1px solid black;
			padding: 10px;
			text-align: center;
		}

		td {
			font-weight: lighter;
		}
		
a:link, a:visited {
  background-color: #A569BD;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-weight: bold;

}

a:hover, a:active {
  background-color: #48C9B0;
  font-weight: bold;

}

	</style>
</head>

<body>
	<section>
		<h1>Feedback Form Entries</h1>
		<!-- TABLE CONSTRUCTION-->
		<table>
			<tr>
				<th>ID</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Email</th>
				<th>Password</th>
				<th>Phone No.</th>
				<th>Course</th>
				<th>Ratings</th>
				<th>Ads</th>
				<th>Feedback</th>
			</tr>
			<!-- PHP CODE TO FETCH DATA FROM ROWS-->
			<?php // LOOP TILL END OF DATA
				while($rows=$result->fetch_assoc())
				{
			?>
			<tr>
				<!--FETCHING DATA FROM EACH
					ROW OF EVERY COLUMN-->
				<td><?php echo $rows['id'];?></td>
				<td><?php echo $rows['first_name'];?></td>
				<td><?php echo $rows['last_name'];?></td>
				<td><?php echo $rows['email'];?></td>
                <td><?php echo $rows['pwd'];?></td>
				<td><?php echo $rows['phone'];?></td>
                <td><?php echo $rows['course'];?></td>
                <td><?php echo $rows['rating'];?></td>
                <td><?php echo $rows['ads'];?></td>
                <td><?php echo $rows['comments'];?></td>

				



			</tr>
			<?php
				}
			?>
		</table>
	</section>
	<br>
	<center>
	<a href="home1.php" >Home Page</a>
	</center>
</body>

</html>
