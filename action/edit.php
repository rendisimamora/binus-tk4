<?php 
include"connect.php";

$id = $_GET['id'];
$title = $_GET['title'];
$price = $_GET['price'];
$description = $_GET['description'];



$sql = "UPDATE book SET title='$title', description='$description', price='$price' WHERE id=$id";

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