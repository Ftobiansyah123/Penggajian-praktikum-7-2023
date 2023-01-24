<?php
 $servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_penggajian";

$connection = mysqli_connect($servername, $username, $password, $dbname);
if (!$connection){
    die("Gagal koneksi : " . mysqli_connect_error());
    }