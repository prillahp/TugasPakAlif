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
		//untuk keperluan upload gambar//
		$query_ambil_file_gambar_lama	= $mysqli->query("SELECT gambar FROM berita WHERE id_berita = '$id_berita'");
		$data_file_gambar_lama			= $query_ambil_file_gambar_lama->fetch_array();
		unlink("gambar/".$data_file_gambar_lama['gambar']);
		//upload gambar selesai disini//
		$query_update	= $mysqli->query("UPDATE berita SET judul = '$judul', penulis = '$penulis', isi_berita = '$isi', gambar = '$nama_file' WHERE id_berita = '$id_berita'");	
		header("Location: beritaadmin.php");
	} else {
		$query_update	= $mysqli->query("UPDATE berita SET judul = '$judul', penulis = '$penulis', isi_berita = '$isi' WHERE id_berita = '$id_berita'");
		header("Location: beritaadmin.php");
	}
} else {
	$query_update	= $mysqli->query("UPDATE berita SET judul = '$judul', penulis = '$penulis', isi_berita = '$isi' WHERE id_berita = '$id_berita'");
	
	header("Location: beritaadmin.php");
}
?>