<?php
    $conn = mysqli_connect("localhost", "id20026403_root", "mini_Project13440", "id20026403_student");

    if (mysqli_connect_error()) {
        echo "<script> alert('Cannot Connect to Database'); </script>";
        exit();
    }
?>