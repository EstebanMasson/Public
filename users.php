<!DOCTYPE html>
<head>
<title style="text-align:center" class="title">NJforum Website</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<style>
li {listt-style: none;}

</style>
</head>

<body>



<h2>Registration</h2>
<ul>
<form name="insert" action="users.php" method="POST" autocomplete = "off">

<li>First Name:</li><input type="text" name="fName" />
<li>Last Name:</li><input type="text" name="lName" />
<li>Username:</li><input type="text" name="Username" />
<li>Password:</li><input type="password" name="Password" />
<br>

<input type="submit" value="submit"/>
</form>
</ul>



<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "NJforum";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);

if(isset($_POST['Username']) && isset($_POST['Password']) && isset($_POST['fName']) && isset($_POST['fName']))
{
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
    $fName = $_POST['fName'];
    $lName = $_POST['lName'];

    $sql = "INSERT INTO USERS (Username, Password, fName, lName) VALUES ('$Username','$Password','$fName','$lName')";

    if(mysqli_query($conn, $sql)){
        echo "Record added Succesfully";
    } else {
        echo "ERROR: could not add record $sql" . mysqli_error($conn);
    }

    header("Location: showTables.php");
    exit;
}

else {//(empty($Username) || empty($Password) || empty($fName) || empty($lName)){
    echo "All fields are Mandatory\r\n";

    exit;
}



?>

<br />
<br />

</table>


</body>
</html>
