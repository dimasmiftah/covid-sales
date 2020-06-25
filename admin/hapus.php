<?php 
include 'config.php';
$id=$_GET['id'];
mysqli_query($mysqli,"delete from barang where id='$id'");
header("location:barang.php");

?>