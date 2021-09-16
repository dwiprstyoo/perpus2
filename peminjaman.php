<?php
include 'db.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Perpustakaan Wikrama</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="container" style="margin-top: 64px">
            <h1 align="center">Administrasi Peminjaman</h1>
                <table align="center" cellspacing="0" width="70%" style=" margin: auto; margin-top: 64px;">
                    <form action="simpan-pinjam.php" method="post">
                        <tr>
                            <td colspan="2"><h2 align="center">Form Peminjaman</h2></td>
                        </tr>
                        <tr>
                            <td>Nama Siswa</td>
                            <td><input type="text" name="namaSiswa" class="input"></td>
                        </tr>
                        <tr>
                            <td>Kelas</td>
                            <td><input type="text" name="kelas" class="input"></td>
                        </tr>
                        <tr>
                            <td>Judul Buku</td>
                            <td><input type="text" name="judulBuku" class="input"></td>
                        </tr>
                        <tr>
                            <td colspan="2" style="padding-bottom: 16px;">
                                <input type="reset" class="submit" value="Reset">
                                <input type="submit" class="submit right" value="Tambah">
                            </td>
                        </tr>
                    </form>
                </table>
            </div>
        <table align="center" cellspacing="0" width="100%" style="margin: top 32px; padding: 8px;">
                    <tr>
                        <th style="background: #0ba966; color: #fff; padding:8px;">Nama Siswa</th>
                        <th style="background: #0ba966; color: #fff; padding:8px;">Kelas</th>
                        <th style="background: #0ba966; color: #fff; padding:8px;">Judul Buku</th>
                        <th style="background: #0ba966; color: #fff; padding:8px;">Tanggal Pinjam</th>
                        <th style="background: #0ba966; color: #fff; padding:8px;">Tanggal Kembali</th>
                        <th style="background: #0ba966; color: #fff; padding:8px;">Action</th>
                    </tr>
                    <?php
                    $q = mysqli_query($koneksi, "SELECT * FROM peminjaman ORDER BY tanggalKembali DESC") or die(mysqli_error($koneksi));
                    while($a = mysqli_fetch_array($q)){
                    ?>
                    <tr>
                        <td style="text-align: center; padding: 4px;"><?= $a['namaSiswa']?></td>
                        <td style="text-align: center; padding: 4px;"><?= $a['kelas']?></td>
                        <td style="text-align: center; padding: 4px;"><?= $a['judulBuku']?></td>
                        <td style="text-align: center; padding: 4px;"><?= $a['tanggalPinjam']?></td>
                        <td style="text-align: center; padding: 4px;"><?= $a['tanggalKembali']?></td>
                        <td style="text-align: center; padding: 4px;"><a href="?act=peminjaman&kon=<?=$a['idPeminjaman']?>">Konfirmasi</a></td>        
                    </tr>
                    <?php
                    }
                    ?>
        </table>
    </body>
</html>
<?php
    if (isset($_GET['kon'])) {
        $idPeminjaman = $_GET['kon'];
        $q = mysqli_query($koneksi, "update peminjaman set tanggalKembali=NOW()where idPeminjaman='$idPeminjaman'");
        if ($q) {
            echo say("Berhasil","index.php?act=peminjaman");
        }
    }
?>