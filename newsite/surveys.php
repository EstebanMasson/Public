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

<h1 style="text-align:center" class="title"> Surveys </h1>

<!--Button that allows for hiding and showing surveys table -->
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
//connecting to database called NJforum

$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);

//creates a drop down menu of survey topics for user to pick from 
//that gets updated from database as more are added
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
<!--makes Survey table -->
<table id="surveyTable" border = "2%" style= "width:100%; line-height:150%;">

<t>
<th colspan = "8"> <h2>Surveys </h2></th>

</t>
<tr>
	<th style= "color: white"> Title </th>
	<th style= "color: white"> Length </th>
	<th style= "color: white"> Topic</th>
	<th style= "color: white"> Date Added </th>

    
</tr>

<?php
	while($rows = $result -> fetch_assoc()){

?>
<!-- Displays survey table-->
	<tr>
	    <td class = "mdc-data-table_cell"><?php echo '<a target = "_blank" href = "http://localhost/welcome.php"'.$rows["Title"].'">'.$rows["Title"].'</a> <br>';?></td>
	    <td><?php echo $rows["Length"]; ?></td>
	    <td class = "mdc-data-table_cell"><?php echo '<a target = "_blank" href = "http://localhost/welcome.php"'.$rows["Topic"].'">'.$rows["Topic"].'</a> <br>';?></td>
	    <td><?php echo $rows["Date_made"]; ?></td>
	</tr>
 
<?php }
?>



</table>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
