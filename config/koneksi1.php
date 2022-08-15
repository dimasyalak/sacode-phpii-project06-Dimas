<?php
    // KONEKSI TANPA DATABASE

    // Integrasi config
    require_once('config.php');

    // Membuat konesi 
    $koneksi = new mysqli($servername, $username, $password);

    // peeriksa koneksi
    if($koneksi->connect_error){
        echo "Koneksi Gagal!";

    }else {
        echo "Koneksi Berhasil";

    }

?>