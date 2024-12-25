<?php
include "../koneksi.php";
	$kdpekerjaan=addslashes($_POST['kdpekerjaan']);
	$nmpekerjaan=addslashes($_POST['nmpekerjaan']);
	$query="select * from pekerjaan where kdpekerjaan='".$kdpekerjaan."'";
	$exec=mysqli_query($koneksi,$query);
	$r=mysqli_fetch_array($exec);
	$kdjabfield=$r[0];
	$nmjabfield=$r[1];
	if(mysqli_num_rows($exec)==0)
		$query="insert into pekerjaan values('$kdpekerjaan','$nmpekerjaan')";
	else
		$query="update pekerjaan set nmpekerjaan='$nmpekerjaan' where kdpekerjaan='$kdpekerjaan'";
	if(mysqli_query($koneksi,$query))
		header("location:./?p=pekerjaan&code=1");
	else
		header("location:./?p=pekerjaan&code=2");

?>