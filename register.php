<!DOCTYPE html>
<head>

<!--Background and header tab navigation -->
<?php include 'header.php';?>
	
<title>NJ forum Hub</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<style>

li {listt-style: none;}

</style>

</head>

<h1 style="text-align:center" class="title">NJforum Website</h1>

<!--Buttons to access original website and go back to previous page-->
<div class = "tabContainer">

	<div class= "buttonContainer">

   <form action = "http://srhub.org">

       	<button type = "submit" >NJSR Hub Website</button>

   </form>

   	<form action = "http://localhost/forums.php">

       	<button type = "submit" >Forums</button>

   </form>

	</div>

</div style = "float: left;">

<h2>Enter New User Data</h2>

<ul>

<!--Form for user to create new account-->
<form name="insert" action="createUser.php" method="POST" autocomplete = "off">

<li>First Name:</li><input type="text" name="fName" />

<li>Last Name:</li><input type="text" name="lName" />

<li>Username:</li><input type="text" name="Username" />

<li>Password:</li><input type="password" name="Password" />

<br>

<!--Submit user input to database-->
<input type="submit" value="submit"/>

<!-- Login page link -->
<p> Already have an account? <a href="login.php"> Login here </a>.</p>

</form>

</ul>


<?php
//connect to databse
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "NJforum";
$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);

//check if user input is valid
if(!(empty($_POST['Username']) || empty($_POST['Password']) || empty($_POST['fName']) || empty($_POST['fName'])))
{
	$Username = $_POST['Username'];
	$Password = $_POST['Password'];
	$fName = $_POST['fName'];
	$lName = $_POST['lName'];
	
	//check if username being made is not already made
	$query = "SELECT * FROM USERS WHERE Username = '$Username'";
	$result = mysqli_query($conn, $query);
	if(mysqli_num_rows($result)>0)
		echo "ERROR: Username Already Exist";

	else
	{
		//username is valid create new user to database
		$sql = "INSERT INTO USERS (Username, Password, fName, lName) VALUES
			('$Username','$Password','$fName','$lName')";

	if(mysqli_query($conn, $sql))
		echo "Record added Succesfully";
	else
		echo "ERROR: could not add record $sql" . mysqli_error($conn);

	//if every query ran correctly proceed to showTables page
	header("Location: showTables.php");
	exit();
	}
}

//as long as the fields are not fully filled out then keepp tellin user to fill it out
if(empty($Username) || empty($Password) || empty($fName) || empty($lName)){

	echo "All fields are Mandatory\r\n";
	exit;
}
?>
<br />
<br />
</table>
</body>
</html>
