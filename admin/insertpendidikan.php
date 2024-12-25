<?php
include "../koneksi.php";
	$kdpendidikan=addslashes($_POST['kdpendidikan']);
	$nmpendidikan=addslashes($_POST['nmpendidikan']);
	$query="select * from pendidikan where kdpendidikan='".$kdpendidikan."'";
	$exec=mysqli_query($koneksi,$query);
	$r=mysqli_fetch_array($exec);
	$kdjabfield=$r[0];
	$nmjabfield=$r[1];
	if(mysqli_num_rows($exec)==0)
		$query="insert into pendidikan values('$kdpendidikan','$nmpendidikan')";
	else
		$query="update pendidikan set nmpendidikan='$nmpendidikan' where kdpendidikan='$kdpendidikan'";
	if(mysqli_query($koneksi,$query))
		header("location:./?p=pendidikan&code=1");
	else
		header("location:./?p=pendidikan&code=2");

?>