<?php

session_start();

$conn = mysqli_connect("localhost", "root", "", "staff");
$id=$_REQUEST['id'];
$_SESSION["iid"] = $id;
$query = "SELECT * from feedback where id=$id"; 
$result = mysqli_query($conn, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>

<html>
<head>
	<title>Forms</title>
	<style>
		#container{
             width: 900px;
	height: 500px;
	margin-right: auto;
	margin-left: auto;
}
</style>
</head>
<body bgcolor="#ABEBC6">
	<center>
	<div id="container">
		<h1>Course Feedback Form</h1>
        <form method="post" action="real_update.php">
		
		E-mail id: <input type="text" name="email" value="<?php echo $row['email'];?>">
		&nbsp;&nbsp;
		Password : <input type="password" name="pwd" value="<?php echo $row['pwd'];?>">
		<br><br>

		First Name: <input type="text" name="first_name" value="<?php echo $row['first_name'];?>">
		&nbsp;&nbsp;
		Last Name : <input type="text" name="last_name" value="<?php echo $row['last_name'];?>">
		<br><br>
		Phone number : <input type="number" name="phone" value="<?php echo $row['phone'];?>">
		<br><br>
		Which of our course did you attend? &nbsp;&nbsp;
		<select name="course">
        <option value="">Please select a value</option>
			<option value="Intrduction to HTML" <?php if($row['course']=="Intrduction to HTML"){echo "selected";}?>>Intrduction to HTML</option>
			<option value="Bassic CSS" <?php if($row['course']=="Bassic CSS"){echo "selected";}?>>Bassic CSS</option>
			<option value="Workshop on JS" <?php if($row['course']=="Workshop on JS"){echo "selected";}?>>Workshop on JS</option>
		</select>
		<br><br>
			Please give us a rating for your experience with our course 
		<input type="radio" name="rating" value="1" <?php if($row['rating']=="1"){echo "checked";}?>> 1
		<input type="radio" name="rating" value="2" <?php if($row['rating']=="2"){echo "checked";}?>> 2
		<input type="radio" name="rating" value="3" <?php if($row['rating']=="3"){echo "checked";}?>> 3
		<input type="radio" name="rating" value="4" <?php if($row['rating']=="4"){echo "checked";}?>> 4 
		<input type="radio" name="rating" value="5" <?php if($row['rating']=="5"){echo "checked";}?>> 5
		<br><br>
		From where did you come to know about us?
        <?php 
					$chkbox=$row['ads'];
					$arr=explode(",",$chkbox);
					
					?>
		<input type="checkbox" name="ads[]" value="Newspaper" <?php if(in_array("Newspaper",$arr)){echo "checked";}?>>Newspaper
		<input type="checkbox" name="ads[]" value="Bill boards" <?php if(in_array("Bill boards",$arr)){echo "checked";}?>>Bill boards
		<input type="checkbox" name="ads[]" value="Social Media" <?php if(in_array("Social Media",$arr)){echo "checked";}?>>Social Media
		<input type="checkbox" name="ads[]" value="Others" <?php if(in_array("Others",$arr)){echo "checked";}?>>Others
		<br><br>
		Do you have any other feedback? <br>
		<textarea cols="35" rows="12" name="comments" id="para1" ><?php echo $row['comments'];?></textarea>
			<br><br>
		&nbsp;&nbsp;&nbsp;
		<input id="button" type="submit" name="submit" value="Update"> &nbsp;&nbsp;&nbsp;
	</form>
</center>
</div>

</body>
</html>
