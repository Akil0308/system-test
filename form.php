<?php
session_start();
require("connection.php");

?>
<!DOCTYPE html>
<html>
<head>
    <title>Simple Form</title>
</head>
<body>

<h2>Enter Your Information</h2>

<form action="insert.php" method="post">
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name"><br><br>
    
    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email"><br><br>
    
    <label for="age">Age:</label><br>
    <input type="number" id="age" name="age"><br><br>
    
    <input type="submit" value="Submit">
</form>
<a href="table.php">table</a>
</body>
</html>
