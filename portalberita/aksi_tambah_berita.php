<?php
include "koneksi4.php";

//get variabel yg dikirimkan dari form

$id_berita	= $_POST['id_berita'];
$judul		= $_POST['judul'];
$kategori	= $_POST['kategori'];
$penulis	= $_POST['penulis'];
$isi		= $_POST['isi'];

//get variabel file upload
$lokasi_file = $_FILES['gambar']['tmp_name'];
$tipe_file   = $_FILES['gambar']['type'];
$nama_file   = $_FILES['gambar']['name'];
$direktori   = "gambar/$nama_file";

if (!empty($lokasi_file)) {
	if (move_uploaded_file($lokasi_file,$direktori)) {
				
		$query_tambah	= $mysqli->query("INSERT INTO berita VALUES ('', '$kategori', '$judul', '$penulis', '$isi', NOW(), '$nama_file')");
	
		header("Location: beritaadmin.php");
	} else {
		$query_tambah	= $mysqli->query("INSERT INTO berita VALUES ('', '$kategori', '$judul', '$penulis', '$isi', NOW(), '-')");
	
		header("Location: index.php");
	}
} else {
	$query_tambah	= $mysqli->query("INSERT INTO berita VALUES ('', '$kategori', '$judul', '$penulis', '$isi', NOW(), '-')");
	
	header("Location:admin.php");
}
?>