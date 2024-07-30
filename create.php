<?php
include ("connection.php");
if (isset($_POST['submit'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];

    $sql = "INSERT INTO crud (first_name, last_name, email, gender) 
            VALUES ('$first_name', '$last_name', '$email', '$gender')";

    $result = mysqli_query($conn , $sql);

    if ($result) {
        header("Location: read.php?msg=New record created successfully");
    } else {
        echo "Failed: " . mysqli_error($con);
    }
}
?>
