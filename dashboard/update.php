<?php
    session_start();
    $new_name = $_POST["uname"];
    $new_desc = $_POST["desc"];
    $uname = $_SESSION['username'];
    $useremail = $_SESSION["email"];
    include 'connection.php';

    $query = "UPDATE user SET full_name = '$new_name', descriptions='$new_desc' WHERE username ='$uname' ";

    if (mysqli_query($conn, $query)) {
        header("Location: ../logout.php");
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
    
    mysqli_close($conn);
    
?>