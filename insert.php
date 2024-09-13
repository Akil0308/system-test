<?php
session_start();
require("connection.php");

$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$age=$_REQUEST['age'];

$reg = mysqli_query($con,"INSERT INTO `tb_user` (name, email, age) VALUES ('$name', '$email', '$age')");

if($reg = 1)
{

    header('Location: table.php'); 
    exit();
}
else{
    echo("error");
}

?>