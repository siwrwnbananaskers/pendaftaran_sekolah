<?php
include "../koneksi.php";
	$kdagama=addslashes($_POST['kdagama']);
	$nmagama=addslashes($_POST['nmagama']);
	$query="select * from agama where kdagama='".$kdagama."'";
	$exec=mysqli_query($koneksi,$query);
	$r=mysqli_fetch_array($exec);
	$kdjabfield=$r[0];
	$nmjabfield=$r[1];
	if(mysqli_num_rows($exec)==0)
		$query="insert into agama values('$kdagama','$nmagama')";
	else
		$query="update agama set nmagama='$nmagama' where kdagama='$kdagama'";
	if(mysqli_query($query))
		header("location:./?p=agama&code=1");
	else
		header("location:./?p=agama&code=2");

?>