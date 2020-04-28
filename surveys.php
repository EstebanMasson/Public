<!DOCTYPE html>
<html>
<head>

<?php include 'header.php';?>
<title>NJ forum Hub</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


</head>

<body style = "background: url(https://www.siarza.com/wp-content/uploads/2017/12/webplunder-background-image-technology-online-website-solutions.jpg);">


<div class = "tabContainer">
	<div class= "buttonContainer">

    	<form action = "http://localhost/forums.php">
    	<button type="submit">Go Back</button>   	 
	</form>
	</div>
</div>

<h1 style="text-align:center" class="title"> Surveys </h1>


<input type="Button" onClick="hideShowTable()" value="Show/Hide All Surveys" id="toggleSurveys"></input>

<script>
function hideShowTable(){
	var x = document.getElementById("surveyTable");
	if(x.style.display === "none")x.style.display = "block";	
	else x.style.display = "none";
	
}
</script>


<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "NJforum";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);

$dropdownResult = mysqli_query($conn,"SELECT * FROM SURVEY");
echo "<center>";
echo "<hr/>";
echo "<h3>Filter Surveys By Topic</h3>";
echo "<select name='userChoice'>";
echo "<option>-- Select Topic --</option>";
while($row=mysqli_fetch_array($dropdownResult))
{
	echo "<option>$row[Topic]</option>";
}
echo "</select>";
echo "</center>";

?>

<?php


	$query = "SELECT * FROM SURVEY";
	$result = $conn->query($query);     	 
    
?>

<table id="surveyTable" border = "2%" style= "width:100%; line-height:150%;">

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
	    <td class = "mdc-data-table_cell"><?php echo '<a target = "_blank" href = "http://localhost/welcome.php"'.$rows["Title"].'">'.$rows["Title"].'</a> <br>';?></td>
	    <td><?php echo $rows["Length"]; ?></td>
	    <td class = "mdc-data-table_cell"><?php echo '<a target = "_blank" href = "http://localhost/welcome.php"'.$rows["Topic"].'">'.$rows["Topic"].'</a> <br>';?></td>
	    <td><?php echo $rows["Date_made"]; ?></td>
	</tr>
 
<?php }
?>



</table>


</body>
</html>
