<?php 
include"connect.php";
$id = $_GET['id'];

$sql = "DELETE FROM book WHERE id=$id";
$data = mysqli_query($conn,$sql);

if ($data === TRUE) {
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Success delete book');
    window.location.href='../admin/book.php';
    </script>");
} else {
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Failed');
    window.location.href='../admin/book.php';
    </script>");
}

?>