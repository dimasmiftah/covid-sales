<?php 
$currentPage = 'dashboard';
include 'header.php';
?> 

<?php
$a = mysqli_query($mysqli,"select * from barang_laku");
?>

<div class="col-md-10" style="border:1px solid #efefef; width:100%; padding:0">
	<div style="background: #F8F8F8; margin:0; padding:20px; font-weight:bold;">
		<h3>Selamat datang</h3>	
		<p>Aplikasi Penjualan Sederhana</p>
	</div>
</div>
<!-- kalender -->
<div class="pull-right">
	<div id="kalender"></div>
</div>

<?php 
include 'footer.php';

?>