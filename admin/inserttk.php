<?php
include "../koneksi.php";
	$kdtk=addslashes($_POST['kdtk']);
	$namatk=addslashes($_POST['namatk']);
	$alamat_tk=addslashes($_POST['alamat_tk']);
	$query="select * from tk where kdtk='".$kdtk."'";
	$exec=mysqli_query($koneksi,$query);
	$r=mysqli_fetch_array($exec);
	$kdjabfield=$r[0];
	$nmjabfield=$r[1];
	if(mysqli_num_rows($exec)==0)
		$query="insert into tk values('$kdtk','$namatk','$alamat_tk')";
	else
		$query="update tk set namatk='$namatk', alamat_tk='$alamat_tk' where kdtk='$kdtk'";
	if(mysqli_query($koneksi,$query))
		header("location:./?p=tk&code=1");
	else
		header("location:./?p=tk&code=2");

?>