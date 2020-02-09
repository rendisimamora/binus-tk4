<?php 

include"connect.php";

$username = $_GET['username'];
$password = md5($_GET['password']);
$roleId = 0;

$sql = "INSERT INTO users (username, password, roleId)
VALUES ('$username', '$password', '$roleId')";

if (mysqli_query($conn, $sql)) {
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Register berhasil');
    window.location.href='../register.php';
    </script>");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>