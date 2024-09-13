<?php
session_start();
include("connection.php");

if (isset($_POST['submit'])) {
    
    $email = $_REQUEST['em'];
    $password = $_REQUEST['pas'];

    $select=$con->query("SELECT * from tb_login where `Email`='$email' AND `Password`='$password'");
$select1=$select->num_rows;
$row = mysqli_fetch_array($select);

if($select1>0)
{
    $_SESSION["user"]=$email;
    $_SESSION["ID"]=$id;
    
    
    header("location:home.php");
}
else
{
    header("location:AKlogin.php");
}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        .a {
            background-color: gray;
            border-radius: 10px;

        }

        .b {
            align-items: center;
        }
    </style>
</head>

<body><br><br><br><br>
    <div class="container-fluid col-md-6 a">
        <div class="b">
            <center><br><br>
                <h2>login</h2><br>
                <form class="form-login" method="post" enctype="multipart/form-data">
                    <label for="email">Email</label><br>
                    <input type="email" name="em" id=""><br><br>
                    <label for="password">Password</label><br>
                    <input type="password" name="pas" id=""><br><br>
                    <input type="submit" name="submit" value="submit">
                </form><br><br>
            </center>
        </div>
    </div>

</body>

</html>