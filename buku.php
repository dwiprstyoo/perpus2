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
            <h1 align="center">Administrasi Buku</h1>
                <table align="center" cellspacing="0" width="70%" style=" margin: auto; margin-top: 64px;">
                    <form action="simpan-buku.php" method="post">
                        <tr>
                            <td colspan="2"><h2 align="center">Tambah Buku</h2></td>
                        </tr>
                        <tr>
                            <td>No. Buku</td>
                            <td><input type="number" name="noBuku" class="input"></td>
                        </tr>
                        <tr>
                            <td>Judul Buku</td>
                            <td><input type="text" name="judulBuku" class="input"></td>
                        </tr>
                        <tr>
                            <td>Pengarang</td>
                            <td><input type="text" name="pengarang" class="input"></td>
                        </tr>
                        <tr>
                            <td>Penerbit</td>
                            <td><input type="text" name="penerbit" class="input"></td>
                        </tr>
                        <tr>
                            <td>Tanggal Terbit</td>
                            <td><input type="date" name="tanggalTerbit" class="input"></td>
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
                        <th style="background: #0ba966; color: #fff; padding:8px;">No. Seri</th>
                        <th style="background: #0ba966; color: #fff; padding:8px;">Judul Buku</th>
                        <th style="background: #0ba966; color: #fff; padding:8px;">Pengarang</th>
                        <th style="background: #0ba966; color: #fff; padding:8px;">Penerbit</th>
                        <th style="background: #0ba966; color: #fff; padding:8px;">Tanggal Terbit</th>
                        <th style="background: #0ba966; color: #fff; padding:8px;">Action</th>
                    </tr>
                    <?php
                    $q = mysqli_query($koneksi, "SELECT * FROM buku ORDER BY judulBuku DESC") or die(mysqli_error($koneksi));
                    while($a = mysqli_fetch_array($q)){

                    ?>
                    <tr>
                        <td style="text-align: center; padding: 4px;"><?= $a['noBuku']?></td>
                        <td style="text-align: center; padding: 4px;"><?= $a['judulBuku']?></td>
                        <td style="text-align: center; padding: 4px;"><?= $a['pengarang']?></td>
                        <td style="text-align: center; padding: 4px;"><?= $a['penerbit']?></td>
                        <td style="text-align: center; padding: 4px;"><?= $a['tanggalTerbit']?></td>
                        <td style="text-align: center; padding: 4px;"><a href="?editBuku=<?=$a['noBuku']?>">Edit</a></td>        
                    </tr>
                    <?php
                    }
                    ?>
        </table>
    </body>
</html>