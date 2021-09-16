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
                <table align="center" cellspacing="0" width="70%" style=" margin: auto; margin-top: 64px;">
                    <form action="simpan-siswa.php" method="post">
                        <tr>
                            <td colspan="2"><h2 align="center">Tambah Siswa</h2></td>
                        </tr>
                        <tr>
                            <td>NIS</td>
                            <td><input type="number" name="NIS" class="input"required></td>
                        </tr>
                        <tr>
                            <td>Nama Lengkap</td>
                            <td><input type="text" name="nama" class="input" required></td>
                        </tr>
                        <tr>
                        <tr>
                            <td>Kelas</td>
                            <td><input type="text" name="jk" class="input" required></td>
                        </tr>
                            <td>Jenis Kelamin</td>
                            <td>
                                <select name="jk" class="input" required>
                                    <option>-- Pilih Jenis Kelamin --</option>
                                    <option>Laki-laki</option>
                                    <option>Perempuan</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td><textarea name="alamat" class="text-area" required></textarea></td>
                        </tr>
                        <tr>
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
                        <th style="background: #0ba966; color: #fff; padding:8px;">NIS</th>
                        <th style="background: #0ba966; color: #fff; padding:8px;">Nama Siswa</th>
                        <th style="background: #0ba966; color: #fff; padding:8px;">Kelas</th>
                        <th style="background: #0ba966; color: #fff; padding:8px;">Jenis Kelamin</th>
                        <th style="background: #0ba966; color: #fff; padding:8px;">Alamat</th>
                        <th style="background: #0ba966; color: #fff; padding:8px;">Action</th>
                    </tr>
                    <?php
                    $q = mysqli_query($koneksi, "SELECT * FROM siswa ORDER BY NIS DESC") or die(mysqli_error($koneksi));
                    while($a = mysqli_fetch_array($q)){

                    ?>
                    <tr>
                        <td style="text-align: center; padding: 4px;"><?= $a['NIS']?></td>
                        <td style="text-align: center; padding: 4px;"><?= $a['nama']?></td>
                        <td style="text-align: center; padding: 4px;"><?= $a['kelas']?></td>
                        <td style="text-align: center; padding: 4px;"><?= $a['jk']?></td>
                        <td style="text-align: center; padding: 4px;"><?= $a['alamat']?></td>
                        <td style="text-align: center; padding: 4px;"><a href="?editSiswa=<?=$a['NIS']?>">Edit</a></td>        
                    </tr>
                    <?php
                    }
                    ?>
        </table>
    </body>
</html>