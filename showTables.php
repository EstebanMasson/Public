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

    	<form action = "http://localhost/surveys.php">
    	<button type="submit">Surveys</button>   	 
	</form>
 
	</div>
</div>

<h1 style="text-align:center" class="title"> All Tables </h1>


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


</body>
</html>
