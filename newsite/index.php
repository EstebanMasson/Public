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

<h1 style="text-align:center" class="title">  </h1>
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

<table border = "1px" style= "width:100%; line-height:40px;">

<t>
<div style= "text-align:center"><th colspan = "8"> <h2 style= "color: white" > Forums </h2></th></div>

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

<table border = "1px" style= "width:100%; line-height:30px;">
<t>
<th colspan = "15" > <h2 style = "color: white" >Posts</h2></th>

</t>


<tr>
	<th style = "color: white"> Author </th>
	<th style = "color: white"> Time </th>
	<th style = "color: white"> Forum Title </th>
	<th style = "color: white"> Post </th>
    <th style = "color: white"> Category </th>

    
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

<table border = "1px" style= "width:100%; line-height:40px;">

<t>
<th> <h2 style = "color: white">Comments </h2></th>

</t>

<tr>
	<th style = "color: white"> Post Author </th>
	<th style = "color: white"> Comment Author </th>
	<th style = "color: white"> Comment Time </th>
    <th style = "color: white"> Comment </th>
    
</tr>

<?php
	while($rows = $result -> fetch_assoc()){

?>
	<tr>
	<td><?php echo $rows["pAuthor"]; ?></td>
    <td><?php echo $rows["cAuthor"]; ?></td>
	 <td><?php echo $rows["cTime"]; ?></td>
    <td><?php echo $rows["cData"]; ?></td>


	</tr>
 
<?php }
?>


				
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

<div class="flex ">

						<div>
							<span class="icon fa-cloud"></span>
							<h3> Go To NJSR Hub Website</h3>
							<p>New Jersey Sustainability Reporting Hub</p>
						</div>

					</div>

					<footer>
						<a href="https://srhub.org/" class="button" target="_blank">Go Now</a>
					</footer>
				</div>
			</section>



	</body>
</html>
