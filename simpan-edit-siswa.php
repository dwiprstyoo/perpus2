<?php
    session_start();
    include "db.php";

    $NIS = $_POST['NIS'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];

    $g = mysqli_query($koneksi, "UPDATE `siswa` SET  `nama` = '$nama', `kelas` = '$kelas', `jk` = '$jk', `alamat` = '$alamat' WHERE `siswa`.`NIS` = $NIS;");
    if($g){
        echo say("Berhasil","index.php?act=siswa");
    }
?>