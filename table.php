<!DOCTYPE html>
<html>
<head>
    <title>Simple Table</title>
</head>
<body>

<h2>Sample Table</h2>

<table border="1">
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Age</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
        <?php
        require("connection.php");
        $tbl=mysqli_query($con,"SELECT * from `tb_user`");
        
        if($tbl){
            while($row=mysqli_fetch_assoc($tbl)){
                $id=$row['id'];
                $name=$row['name'];
                $email=$row['email'];
                $age=$row['age'];
                echo '<tr>
                <td>'.$id.'</td>
                <td>'.$name.'</td>
                <td>'.$email.'</td>
                <td>'.$age.'</td>
                <td>
                <button><a href="update.php?editid=' . $id . '">edit</a></button>
                <button><a href="delete.php?deleteid=' . $id . '">delete</a></button>
                </td>
                </tr>';
            }
        }
        ?>
   
    </tbody>
    <!-- Add more rows as needed -->
</table>
<a href="form.php">back</a>
</body>
</html>
