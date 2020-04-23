<!Doctype html>
<html>
<head>
    <title> NJforum Website </title>
</head>
<body>

<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "NJforum";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);

if($conn->connect_error){
    echo "Connection Error";

}
else {}

?>

<br />
<br />

<?php
    $query = "SELECT * FROM SURVEY";
    $result = $conn->query($query); 		 
    
?>
<table algin= "center" border = "1px" style= "width:600px; line-height:30px;">
<tr>
    <th colspan="4"> <h2> Surveys </h2> </th>
    </tr>
    <t>
    <th> Title </th>
    <th> Length </th>
    <th> Topic </th>
    <th> Date Created </th>
    </t>
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
