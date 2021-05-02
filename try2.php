<!DOCTYPE html>
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
        <form method="post" action="try22.php">
		
		E-mail id: <input type="text" name="email">
		&nbsp;&nbsp;
		Password : <input type="password" name="pwd">
		<br><br>

		First Name: <input type="text" name="first_name" autocomplete="off">
		&nbsp;&nbsp;
		Last Name : <input type="text" name="last_name">
		<br><br>
		Phone number : <input type="number" name="phone">
		<br><br>
		Which of our course did you attend? &nbsp;&nbsp;
		<select name="course">
		<option value="">Please select a value</option>
			<option value="Intrduction to HTML">Intrduction to HTML</option>
			<option value="Bassic CSS">Bassic CSS</option>
			<option value="Workshop on JS">Workshop on JS</option>
		</select>
		<br><br>
			Please give us a rating for your experience with our course 
		<input type="radio" name="rating" value="1"> 1
		<input type="radio" name="rating" value="2"> 2
		<input type="radio" name="rating" value="3"> 3
		<input type="radio" name="rating" value="4"> 4 
		<input type="radio" name="rating" value="5"> 5
		<br><br>
		From where did you come to know about us?
		<input type="checkbox" name="ads[]" value="Newspaper">Newspaper
		<input type="checkbox" name="ads[]" value="Bill boards">Bill boards
		<input type="checkbox" name="ads[]" value="Social Media">Social Media
		<input type="checkbox" name="ads[]" value="Others">Others
		<br><br>
		Do you have any other feedback? <br>
		<textarea cols="35" rows="12" name="comments" id="para1"></textarea>
			<br><br>
		&nbsp;&nbsp;&nbsp;
		<input id="button" type="submit" name="submit" value="Submit"> &nbsp;&nbsp;&nbsp;
	</form>
</center>
</div>

</body>
</html>
