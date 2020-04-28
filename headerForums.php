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
require ('headerForums.php');
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

<table border = "1px" style= "width:600px; line-height:40px;">

<t>
<th colspan = "8"> <h2>Forums </h2></th>

</t>


<?php
	while($rows = $result -> fetch_assoc()){

?>
	<tr>
	<td class = "mdc-data-table_cell"><?php echo '<a target = "_blank" href = '.$rows["Title"].'">'.$rows["Title"].'</a> <br>';?></td>
	</tr>
 
<?php }
?>


</table>


</body>
</html>
