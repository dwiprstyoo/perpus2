<div class="container" style="margin-top: 64px">
                <table align="center" cellspacing="0" width="70%" style=" margin: auto; margin-top: 64px;">
                    <form action="simpan-edit-siswa.php" method="post">
                        <tr>
                            <td colspan="2"><h2 align="center">Edit Data Siswa</h2>
                        </td>
                        </tr>
                        <?php
                        include 'db.php';
                            $NIS = $_GET['editSiswa'];
                            $q = mysqli_query($koneksi, "select * from siswa where NIS='$NIS'");
                            $a = mysqli_fetch_array($q);
                        ?>
                        <input type="hidden" name="NIS" value="<?= $a['NIS']?>">
                        <tr>
                            <td>Nama Lengkap</td>
                            <td><input type="text" name="nama" class="input" value="<?= $a['nama']?>"></td>
                        </tr>
                        <tr>
                            <td>Kelas</td>
                            <td><input type="text" name="kelas" class="input" value="<?= $a['kelas']?>"></td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>
                                <select name="jk" class="input">
                                    <option>-- Pilih Jenis Kelamin --</option>
                                    <option>Laki-laki</option>
                                    <option>Perempuan</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td><textarea name="alamat" class="text-area" value="<?= $a['alamat']?>"></textarea></td>
                        </tr>
                        <tr>
                            <td colspan="2" style="padding-bottom: 16px;">
                                <input type="reset" class="submit" value="Reset">
                                <input type="submit" class="submit right" value="Selesai">
                            </td>
                        </tr>
                    </form>
                </table>
            </div>