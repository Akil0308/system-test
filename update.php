<?php
session_start();
require("connection.php");

$edit = $_GET['id'];

$sql = mysqli_query($con, "SELECT * FROM tb_login WHERE ID = '$edit'");

if ($sql && mysqli_num_rows($sql) > 0) {
    // Fetch user details
    $row = mysqli_fetch_assoc($sql);
    // $name = $row['name'];
    $email = $row['Email'];
    $password = $row['Password'];

    if (isset($_POST['submit'])) {
        // Retrieve form data
        // $name = $_POST['name'];
        $email = $_POST['Email'];
        $password = $_POST['Password'];

        // Update user details in the tb_user table
        $update_query = mysqli_query($con, "UPDATE tb_login SET Email='$email', Password='$age' WHERE ID='$edit'");

        if ($update_query) {
            echo "User details updated successfully!";
            // Redirect to the table page after successful update
            header("Location: table.php");
            exit();
        } else {
            echo "Error updating user details: " . mysqli_error($con);
        }
    }
} else {
    // Handle case where user with the provided ID is not found
    echo "User not found";
    exit(); // Stop further execution
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit User</title>
</head>

<body>

    <h2>Edit User Information</h2>
    <form role="form" name="submit" method="post">
        <!-- <form action="insert.php" method="post"> -->
        <!-- <input type="hidden" name="id" value="<?php //echo $edit; 
                                                    ?>"> Hidden field to store ID -->

        <!-- <label for="name">Name:</label><br> -->
        <!-- <input type="text" id="name" name="name" value="<?php //echo $name ?>"><br><br> -->

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="em" value="<?php echo $email ?>"><br><br>

        <label for="Password">Password:</label><br>
        <input type="password" id="password" name="pas" value="<?php echo $password ?>"><br><br>

        <input type="submit" value="submit" id="submit" name="submit">
    </form>
    <a href="table.php">Back to table</a>
</body>

</html>