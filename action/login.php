<?php 

session_start();
include"connect.php";

// menangkap data yang dikirim dari form
$username = $_GET['username'];
$password = md5($_GET['password']);
$sql="SELECT * FROM users WHERE username='$username' AND password='$password'";

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($conn,$sql);

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if($cek > 0){
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Login berhasil');
    window.location.href='../admin';
    </script>");
    
	$_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    
    
    
}else{
	echo ("<script LANGUAGE='JavaScript'>
    window.alert('Login gagal');
    window.location.href='../login.php';
    </script>");
}
?>