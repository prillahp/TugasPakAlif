<?php
	include "koneksi2.php";

	$nm = $_POST["nama"];
	$em = $_POST["mail"];
	$id = $_POST["id"];

	date_default_timezone_set("Asia/Jakarta");

	$tgl = date("Y:m:d");

	// query sql
	$sql = "UPDATE mahasiswa 
			SET nama_mahasiswa='$nm',
				email_mahasiswa='$em',
				tanggal='$tgl'
			WHERE id_mhs='$id'";
	$query = mysqli_query($koneksi2, $sql) or die (mysqli_error());

	if($query){
		echo "Data berhasil dirubah!";
	} else {
		echo "Error".$sql."<br>".mysqli_error($koneksi2);
	}

	mysqli_close($koneksi2);

?>