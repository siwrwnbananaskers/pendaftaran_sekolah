<?php
include "../koneksi.php";
$kdpendaftar= $_GET ['kdpendaftar'];

	mysqli_query($koneksi,"update pendaftar set statusdaftar='Ditolak' where kdpendaftar='$kdpendaftar'");
		
if(mysqli_query)
		header("location:./?p=seleksi&code=1");
else
	header("location:./?p=seleksi&code=2");

?>