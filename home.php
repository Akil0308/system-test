<?php
session_start();
include("connection.php");

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
                <table class="table table-hover" id="sample-table-1">
                    <thead>
                        <th class="center">ID</th>
                        <th class="center">Email</th>
                        <th class="center">Password</th>
                        <th class="center">Option</th>
                    </thead>
                    <tbody>
                        <?php
                        //  $id=$_SESSION["ID"];

                        $select = $con->query("select * from tb_login");
                        $cnt=1;
                        while($row=mysqli_fetch_array($select))
{
                        ?>
                        <tr>
                        <td class="center"><?php echo $row['ID'];?>.</td>
                        <td class="center"><?php echo $row['Email'];?></td>
                        <td class="center"><?php echo $row['Password'];?></td>
                        <td class="center">
                        <a href="update.php?id=<?php echo $row['ID'];?>" class="btn btn-primary">Edit</a></td>
                        </tr>
                        <?php
}
?>
                    </tbody>
                </table><br>
            </center>
        </div>
    </div>

</body>

</html>