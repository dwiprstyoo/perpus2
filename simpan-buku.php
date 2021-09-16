<?php
    session_start();
    include "db.php";

    $noBuku = $_POST['noBuku'];
    $judulBuku = $_POST['judulBuku'];
    $pengarang = $_POST['pengarang'];
    $penerbit = $_POST['penerbit'];
    $tanggalTerbit = $_POST['tanggalTerbit'];

    $g = mysqli_query($koneksi, "INSERT INTO buku values('$noBuku', '$judulBuku', '$pengarang', '$penerbit', '$tanggalTerbit');");
    if($g){
        echo say("Berhasil","index.php?act=buku");
    }
?>