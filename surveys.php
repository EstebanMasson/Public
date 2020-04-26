<!DOCTYPE html>
<html>
<head>
	<?php include 'header';?>
<title>NJ forum Hub</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<style>
li {listt-style: none;}
td {text-allign: center;}

* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  overflow: hidden;
  padding: 20px 10px;
}

header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 25px;
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
 
  .header-right {
    float: none;
  }
}

</style>
</head>

<body style = "background: url(https://www.siarza.com/wp-content/uploads/2017/12/webplunder-background-image-technology-online-website-solutions.jpg);">


<div class="header">
  <a href="#default" class="logo">NJ Forum Hub</a>
  <div class="header-right">
    <a class="active" href="showTables.php">Home</a>
    <a href="createUser.php">New User</a>
    <a href="surveys.php">Surveys</a>
    <a href="forums.php">Forums</a>
  </div>
</div>

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

