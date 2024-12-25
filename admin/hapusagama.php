<?php
include "../koneksi.php";
	$kdagama=addslashes($_GET['kdagama']);
	$query="delete from agama where kdagama='".$kdagama."'";
	$exec=mysqli_query($query);
	if(mysqli_query($query))
		header("location:./?p=agama&code=3");
	else
		header("location:./?p=agama&code=2");

?>