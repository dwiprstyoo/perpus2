<?php
    session_start();
    include "db.php";

    $noBuku = $_POST['noBuku'];
    $judulBuku = $_POST['judulBuku'];
    $pengarang = $_POST['pengarang'];
    $penerbit = $_POST['penerbit'];
    $tanggalTerbit = $_POST['tanggalTerbit'];

    $g = mysqli_query($koneksi, "UPDATE `buku` SET  `judulBuku` = '$judulBuku', `pengarang` = '$pengarang', `penerbit` = '$penerbit', `tanggalTerbit` = '$tanggalTerbit' WHERE `buku`.`noBuku` = $noBuku;");
    if($g){
        echo say("Berhasil","index.php?act=buku");
    }
?>