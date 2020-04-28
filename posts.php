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


<?php
require ('header.php');
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "NJforum";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);

?>


<?php
	$query = "SELECT * FROM POSTS";
	$result = $conn->query($query);     	 
    
?>

<table border = "1px" style= "width:600px; line-height:30px;">
<t>
<th colspan = "8"> <h2>Posts </h2></th>

</t>

<tr>
	<th> Author </th>
	<th> Time </th>
	<th> Forum Title </th>
	<th> Post </th>
        <th> Category </th>
        <th> Day </th>
        <th> Month </th>
    
</tr>

<?php
	while($rows = $result -> fetch_assoc()){

?>
	<tr>
	<td><?php echo $rows["postAuthor"]; ?></td>
	<td><?php echo $rows["postTime"]; ?></td>
	<td class = "mdc-data-table_cell"><?php echo '<a target = "_blank" href = "localhost/posts.php'.$rows["fTitle"].'>'.$rows["fTitle"].'</a> <br>';?></td>
	<td class = "mdc-data-table_cell"><?php echo '<a target = "_blank" href = '.$rows["Data"].'">'.$rows["Data"].'</a> <br>';?></td>
	<td class = "mdc-data-table_cell"><?php echo '<a target = "_blank" href = '.$rows["Category"].'">'.$rows["Category"].'</a> <br>';?></td>
	<td><?php echo $rows["pDay"]; ?></td>
	<td><?php echo $rows["pMonth"]; ?></td>


	</tr>
<?php }
?>


</body>
</html>
