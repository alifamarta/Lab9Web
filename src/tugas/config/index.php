<?php 
include("koneksi.php");

$sql = 'SELECT * FROM data_barang';
$conn = mysqli_connect($host, $user, $pass, $db);
$result = mysqli_query($conn, $sql);
?>