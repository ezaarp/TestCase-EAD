<?php
//Masukkan data host, username, password, dan nama database
$host = getenv('DB_HOST') ?: 'db';
$username= getenv('DB_USER') ?: 'wad_user';
$password= getenv('DB_PASSWORD') ?: 'wad_pass';
$db_name= getenv('DB_NAME') ?: 'test_case_wad';
$port = getenv('DB_PORT') ?: '3306';
// 

//Tambahkan var $conn untuk koneksi ke database
$conn = new mysqli($host, $username, $password, $db_name, (int)$port);
if ($conn->connect_errno) {
  http_response_code(500);
  die('DB connection failed: ' . $conn->connect_error);
}
?>