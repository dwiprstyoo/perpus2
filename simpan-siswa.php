<?php
    session_start();
    include "db.php";

    $NIS = $_POST['NIS'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];

    $g = mysqli_query($koneksi, "INSERT INTO siswa values('$NIS', '$nama', '$kelas', '$jk', '$alamat');");
    if($g){
        echo say("Berhasil","index.php?act=siswa");
    }
?>