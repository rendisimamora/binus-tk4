<?php 
include"connect.php";

$name = $_GET['fullname'];
$email = $_GET['email'];



$sql = "INSERT INTO tamu (name, email)
VALUES ('$name', '$email')";

$data = mysqli_query($conn,$sql);

if ($data === TRUE) {
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Berhasil daftar tamu');
    window.location.href='../';
    </script>");
} else {
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Gagal');
    window.location.href='../';
    </script>");
}

?>