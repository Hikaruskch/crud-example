<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$id = $_POST['idFavorite'];
$name      = $_POST['name'];
$username = $_POST['username'];
$password   = $_POST['password'];
$gender      = $_POST['gender'];
$favgame     = $_POST['favgame'];
$favfood     = $_POST['favfood'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE favorit SET name = '$name', username = '$username', password = '$password', gender = '$gender', favgame = '$favgame', favfood = '$favfood' WHERE idFavorite = '$id'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($koneksi->query($query)) {
    //redirect ke halaman tampil.php 
    header("location: tampil.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>