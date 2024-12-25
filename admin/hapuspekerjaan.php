<?php
include "../koneksi.php";
	$kdpekerjaan=addslashes($_GET['kdpekerjaan']);
	$query="delete from pekerjaan where kdpekerjaan='".$kdpekerjaan."'";
	$exec=mysqli_query($koneksi,$query);
	if(mysqli_query($koneksi,$query))
		header("location:./?p=pekerjaan&code=3");
	else
		header("location:./?p=pekerjaan&code=2");

?>