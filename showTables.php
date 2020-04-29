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
<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "NJforum";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);

?>


<?php
	$query = "SELECT * FROM FORUM_CATEGORIES";
	$result = $conn->query($query);     	 
    
?>

<table border = "1px" style= "width:1050px; line-height:40px;">

<t>
<th colspan = "8"> <h2>Forums </h2></th>

</t>


<?php
	while($rows = $result -> fetch_assoc()){

?>
	<tr>
	<td><?php echo $rows["Title"]; ?></td>
	</tr>
 
<?php }
?>





<?php
	$query = "SELECT * FROM POSTS";
	$result = $conn->query($query);     	 
    
?>

<table border = "1px" style= "width:1050px; line-height:30px;">
<t>
<th colspan = "15"> <h2>Posts</h2></th>

</t>


<tr>
	<th> Author </th>
	<th> Time </th>
	<th> Forum Title </th>
	<th> Post </th>
    <th> Category </th>

    
</tr>

<?php
	while($rows = $result -> fetch_assoc()){

?>
	<tr>
	<td><?php echo $rows["postAuthor"]; ?></td>
	<td><?php echo $rows["postTime"]; ?></td>
	<td><?php echo $rows["fTitle"]; ?></td>
	<td><?php echo $rows["Data"]; ?></td>
	<td><?php echo $rows["Category"]; ?></td>



	</tr>
<?php }
?>

<?php
	$query = "SELECT * FROM COMMENTS";
	$result = $conn->query($query);     	 
    
?>

<table border = "1px" style= "width:1050px; line-height:40px;">

<t>
<th colspan = "8"> <h2>Comments </h2></th>

</t>

<tr>
	<th> Post Author </th>
	<th> Post Time </th>
	<th> Comment Author </th>
	<th> Comment Time </th>
    <th> Comment </th>
    
</tr>

<?php
	while($rows = $result -> fetch_assoc()){

?>
	<tr>
	<td><?php echo $rows["pAuthor"]; ?></td>
    <td><?php echo $rows["pTime"]; ?></td>
    <td><?php echo $rows["cAuthor"]; ?></td>
	 <td><?php echo $rows["cTime"]; ?></td>
    <td><?php echo $rows["cData"]; ?></td>


	</tr>
 
<?php }
?>


<div style = "float: left;">
<h2>Insert A Post</h2>
<ul>
<form name="insert" action="showTables.php" method="POST" autocomplete = "off" >


<li>Your Name:</li><input type="text" name="postAuthor" />

<li>Forum Title to Post in:</li><input type="text" name="fTitle" /> <br>
<li>Post: </li><textarea rows="5" cols="50" name = 'Data'> Write your Post </textarea>
<br>
<input type="submit" value="submit"/>
</form>
</ul>
</div>

<div style = "float: left;">
<h2>Insert A Comment</h2>
<ul>
<form name="insert" action="showTables.php" method="POST" autocomplete = "off" >
<li>Post Author</li><input type = "text" name = "pAuthor"><br>
<li>Your Name:</li><input type="text" name="cAuthor" />
<br>
<li>Comment: </li><textarea rows="5" cols="50" name = 'cData'> </textarea>
<br>
<input type="submit" value="submit"/>
</form>
</ul>
</div>

<?php
if(isset($_POST['postAuthor']) && isset($_POST['fTitle']) && isset($_POST['Data']))
{
	$postAuthor = $_POST['postAuthor'];
	$fTitle = $_POST['fTitle'];
	$Data = $_POST['Data'];
   

	$sql = "INSERT INTO POSTS (postAuthor,fTitle,Data) VALUES ('$postAuthor', '$fTitle','$Data')";

	if(mysqli_query($conn, $sql)){
    	echo "Record added Succesfully";
	} else {
    	echo "ERROR: could not add record $sql" . mysqli_error($conn);
	}

	header("Location: showTables.php");
	exit;
}
if(isset($_POST['cAuthor']) && isset($_POST['cData']))
{
	$pAuthor = $_POST['pAuthor'];
	$cAuthor = $_POST['cAuthor'];
	$cData = $_POST['cData'];

 
	$sql = "INSERT INTO COMMENTS (pAuthor,cAuthor,cData) VALUES ('$pAuthor','$cAuthor', '$cData')";

	if(mysqli_query($conn, $sql)){
    	echo "Record added Succesfully";
	} else {
    	echo "ERROR: could not add record $sql" . mysqli_error($conn);
	}

	header("Location: showTables.php");
	exit;
}




?>

</table>


		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
