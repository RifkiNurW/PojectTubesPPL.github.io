<?php
require 'koneksi.php';
$email = $_POST["email"];
$username = $_POST["username"];
$password = $_POST["password"];

$quary_sql = "INSERT INTO tbl_users (username, email, password)
            VALUE ('$username', '$email', '$password')";

if(mysqli_query($conn, $quary_sql)) {
    header("location: login.html");
} else {
    echo "pendaftaran Gagal : " . mysqli_error($conn);
}

