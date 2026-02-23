<?php
$email_user = $_POST['email']; 
$password_user = $_POST['password'];


if ($email_user == "liaalia86308@gmail.com" && $password_user == "140428") {
 
    header("Location: index.html"); 
    exit();
} else {
    
    echo "<script>alert('Email atau Password Salah!'); window.location='login.php';</script>";
}
?>