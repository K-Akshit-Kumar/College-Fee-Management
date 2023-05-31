<?php
include '../dbconnect.php';

$npwd = $_POST['npwd'];
$rpwd = $_POST['rpwd'];
$hpwd=password_hash($rpwd, PASSWORD_DEFAULT);
// echo $hpwd;
$sql = "UPDATE admin_authentication SET password = '$hpwd' WHERE name='ADMIN'";
if ($npwd == $rpwd) {
    $result = $conn->query($sql);
    if ($result) {
        echo "<script>
                alert('Password Changed Successfully');
                window.location.replace('https://miniproject13440.000webhostapp.com/admin_Login.html');      
              </script>";
    } else {
        echo "<script>alert('Password Not Changed!')</script>";
    }
} else {
    echo "<script>alert('Password Not Matched!')</script>";
}
?>