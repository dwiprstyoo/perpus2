<?php
    session_start();
    include "db.php";

    $namaSiswa = $_POST['namaSiswa'];
    $kelas = $_POST['kelas'];
    $judulBuku = $_POST['judulBuku'];

    $g = mysqli_query($koneksi, "INSERT INTO peminjaman values('NULL', '$namaSiswa', '$kelas', '$judulBuku', NOW(), '');");
    if($g){
        echo say("Berhasil","index.php?act=peminjaman");
    }
?>