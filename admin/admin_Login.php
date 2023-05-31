<?php
include '../dbconnect.php';

$name = $_POST['aname'];
$pwd = $_POST['pwd'];
// $hpwd=password_hash($pwd, PASSWORD_DEFAULT);
$sql = "select name,password from admin_authentication";
$result = $conn->query($sql);
if ($result) {
    $i = false;
    while ($row = $result->fetch_assoc()) {
        if (strtoupper($name) == $row["name"] and password_verify($pwd, $row["password"])) {
            header("location:admin.php");
            $i = true;
            break;
        }

    }
    if ($i == false) {
        echo "<script>";
        echo "alert('Invalid Username or Password');";
        echo "window.location.href = '../admin_Login.html';";
        echo "</script>";
    }
}
?>