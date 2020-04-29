<!DOCTYPE HTML>
<!--
	Projection by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>NJ Forum</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<div class="inner">
					<a href="index.php" class="logo"><strong>NJ FORUM</strong></a>
					<nav id="nav">
						<a href="index.php">Home</a>
						<a href="login.php">SignIn/SignUp</a>
						<a href="surveys.php">Surveys</a>
					</nav>
					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
				</div>
			</header>

		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<header>
						<h1>Welcome to NJ Forum</h1>
						
					</header>


<!--Buttons to access original website and go back to previous page-->
<div class = "tabContainer">

	<div class= "buttonContainer">

   <form action = "http://srhub.org">

       	<button type = "submit" >NJSR Hub Website</button>

   </form>

   	

	</div>

</div style = "float: left;">

<h2 style = "color: white">Enter New User Data</h2>

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
