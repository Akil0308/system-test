<?php
session_start();
require("connection.php");

$idDelete = $_GET['deleteid'];

// SQL query to delete records based on a condition (example: age greater than 30)
$sql =mysqli_query($con,"DELETE FROM tb_user WHERE id='$idDelete'");

if (($sql) === TRUE) {
    // echo "Records deleted successfully";
    header('Location: table.php'); 
    exit();
} else {
    echo "Error deleting records: " . $con->error;
}

?>


<?php
require("connection.php");

$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$age=$_REQUEST['age'];

$reg=mysqli_query($con,"INSERT INTO `tb_user`");
if($reg=1){
    header('location:form.php');
}
else{
    echo"data not insert";
}
?>
<?php
require("connection.php");

$tbl=mysqli_query($con,"SELECT * FROM `tb_user`");

if($tbl>1){
    while($row=mysqli_fetch_assoc($tbl)){
        $id=$row["id"];
        $name=$row["name"];
        $email=$row["email"];
        $age=$row["age"];
        echo'<tr>
        <td>'.$id.'</td>
        <td>'.$name.'</td>
        <td>'.$email.'</td>
        <td>'.$age.'</td>
        <td><button><a href="delete.php?deleteid='.$id.'">delete</a></button></td>
        </tr>';
    }
}
?>
<?php
require("connection.php");

$deleteid=$_GET['deleteid'];

$sql=mysqli_query($con,"DELETE FROM `tb_user` where id='$deleteid'");

if(($sql) === TRUE){
    echo"deleted successfully";
}
else{
    echo"data not found";
}

?>

<?php
require("connection.php");

$editid=$_GET['editid'];

$view=mysqli_query($con,"SELECT FROM `tb_user` where id='$editid'");

if($view && mysqli_num_rows($view) > 0){
    $row=mysqli_fetch_assoc($view);
    $name=$row['name'];
    $email=$row['email'];
    $age=$row['age'];

    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $age=$_POST['age'];

        $update=mysqli_query($con,"UPDATE FROM `tb_user` SET name='$name',email='$email',age='$age' where id='$editid'");

        if($update){
            header('location:table.php');
            exit();
        }
    }
}
else{
    echo"data not found";
}

?>