<?php 
include"connect.php";

$title = $_GET['title'];
$price = $_GET['price'];
$description = $_GET['description'];



$sql = "INSERT INTO book (title, price, pict, description)
VALUES ('$title', '$price','','$description')";

$data = mysqli_query($conn,$sql);

if ($data === TRUE) {
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Success insert book');
    window.location.href='../admin/book.php';
    </script>");
} else {
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Failed');
    window.location.href='../admin/book.php';
    </script>");
}

?>