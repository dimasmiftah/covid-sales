<?php 
include 'config.php';
$id=$_GET['id'];
mysqli_query($mysqli,"delete from pengeluaran where id ='$id'");
header("location:pengeluaran.php");

 ?>