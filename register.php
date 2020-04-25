<!DOCTYPE html>
<html>
<head>


<style>
li {listt-style: none;}

</style>
</head>

<body>


<h1 style="text-align:center" class="title">NJforum Website</h1>
<html>
   
   <head>
      <title>Login Page</title>
      
   </head>
   
   <body bgcolor = "#FFFFFF">
	<div class = "tabContainer">
    <div class= "buttonContainer">
	<form action = "http://localhost/environment.php">
		<button type="submit">Environment</button>		
	</form>
        <form action = "http://localhost/sustainability.php">
		<button type="submit">Sustainability</button>		
	</form>
        <form action = "http://localhost/forums.php">
		<button type="submit">Forums</button>		
	</form>
        <form action = "http://localhost/register.php">
		<button type="submit">Register</button>		
	</form>
    </div>
</div>

      <div>
         <div style = "width:300px; " align = "left">
            <h1>Sign In</h1>
				
            <div style = "margin:30px">
               
               <form action = "" method = "post">
                  <label>UserName  :</label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Submit "/><br />
               </form>
               
              
					
            </div>
				
         </div>
			
      </div>



   </body>
</html>

<?php
require_once ('users.php');
?>


<?php

   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "USERS") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$USERS['Username']);
      $mypassword = mysqli_real_escape_string($db,$USERS['Password']); 
      
      $sql = "SELECT Username FROM USERS WHERE Username = '$myusername' and Password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("Location: http://localhost/forums.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>




</body>
</html>
