<!DOCTYPE html>
<html>
<head>
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

<div class="header">
  <a href="#default" class="logo">NJ Forum Hub</a>
  <div class="header-right">
    <a class="active" href="showTables.php">Home</a>
    <a href="createUser.php">New User</a>
    <a href="surveys.php">Surveys</a>
    <a href="forums.php">Forums</a>
  </div>
</div>
