<!DOCTYPE html>
<html>
<head>

<!--Background image and header for tab navigation-->
<?php include 'headerForums.php';?>

<title>NJ forum Hub</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<style>
li {listt-style: none;}

</style>
</head>

<h1 style="text-align:center" class="title">NJforum Website</h1>

<!--Buttons to acces the original website and to go back to original website -->
<div class = "tabContainer">
	<div class= "buttonContainer">
    <form action = "http://srhub.org">
   		 <button type = "submit" >NJSR Hub Website</button>
    </form>
    <form action = "http://localhost/createUser.php">
   		 <button type = "submit" >Register/Login</button>
    </form>

    	<form action = "http://localhost/createUser.php">
    	<button type="submit">Go Back</button>   	 
	</form>
	</div>
</div>

<h1 style="text-align:center" class="title"> Forums </h1>



<?php

//Connect to database
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "NJforum";
$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);

//run a SQL query to get all the records from CATEGORIES table
$query = "SELECT * FROM FORUM_CATEGORIES";
$result = $conn->query($query);     	 
?>

<!--Table to show all the forums-->
<table border = "1px" style= "width:100%; line-height:40px;">

<t><th colspan = "8">
<h2>Forums </h2>
</th></t>


<?php
	//Populate all the rows
	while($rows = $result -> fetch_assoc()){

?>
	<tr>
	<td><?php echo $rows["Title"]; ?></td>
	</tr>
<?php }
?>

<?php
	//Run query to fetch all the records from POSTS table
	$query = "SELECT * FROM POSTS";
	$result = $conn->query($query);     	 
    
?>
<!--Table showing all the data from POSTS table in our database -->
<table border = "1px" style= "width:100%; line-height:30px;">
<t>
<th colspan = "8"> <h2>Posts </h2></th>

</t>

<tr>
	<th> Author </th>
	<th> Time </th>
	<th> Forum Title </th>
	<th> Post </th>
    <th> Category </th>

    
</tr>

<?php
	//fetch all the data from POST
	while($rows = $result -> fetch_assoc()){

?>
	<!--Populate the table -->
	<tr>
	<td><?php echo $rows["postAuthor"]; ?></td>
	<td><?php echo $rows["postTime"]; ?></td>
	<td><?php echo $rows["fTitle"]; ?></td>
	<td><?php echo $rows["Data"]; ?></td>
	<td><?php echo $rows["Category"]; ?></td>



	</tr>
<?php }
?>

 

</table>


</body>
</html>


