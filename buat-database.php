<?php

/*
BUAT DATABASE
*/

// Integrasi Koneksi
require_once('./config/koneksi1.php');

// perintah SQL untuk baut database
$sql =" CREATE DATABASE db_belajar_php";

// melakukan permintaan ke database
$query = $koneksi->query($sql);

// periksa permintaan berhasil atau gagal


?>