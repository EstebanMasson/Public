<!DOCTYPE html>
<html>
<head>
<title>NJ forum Hub</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<style>
li {listt-style: none;}

</style>
</head>

<body style = "background: url(https://www.siarza.com/wp-content/uploads/2017/12/webplunder-background-image-technology-online-website-solutions.jpg);">
<h1 style="text-align:center" class="title">NJforum Website</h1>
<div class = "tabContainer">
	<div class= "buttonContainer">
    <form action = "http://srhub.org">
   		 <button type = "submit" >NJSR Hub Website</button>
    </form>
    <form action = "http://localhost/createUser.php">
   		 <button type = "submit" >Register/Login</button>
    </form>

    	<form action = "http://localhost/showTables.php">
    	<button type="submit">Go Back</button>   	 
	</form>
	</div>
</div>

<h1 style="text-align:center" class="title"> Surveys </h1>


<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "NJforum";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);

?>

<?php


	$query = "SELECT * FROM SURVEY";
	$result = $conn->query($query);     	 
    
?>

<table border = "1px" style= "width:100%; line-height:40px;">

<t>
<th colspan = "8"> <h2>Surveys </h2></th>

</t>
<tr>
	<th> Title </th>
	<th> Length </th>
	<th> Topic</th>
	<th> Date Added </th>

    
</tr>

<?php
	while($rows = $result -> fetch_assoc()){

?>
	<tr>
	<td><?php echo $rows["Title"]; ?></td>
    <td><?php echo $rows["Length"]; ?></td>
    <td><?php echo $rows["Topic"]; ?></td>
    <td><?php echo $rows["Date_made"]; ?></td>

	</tr>
 
<?php }
?>



</table>


</body>
</html>
