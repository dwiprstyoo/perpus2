<div class="container" style="margin-top: 64px">
                <table align="center" cellspacing="0" width="70%" style=" margin: auto; margin-top: 64px;">
                    <form action="simpan-edit-buku.php" method="post">
                        <tr>
                            <td colspan="2"><h2 align="center">Edit Buku</h2>
                        </td>
                        </tr>
                        <?php
                        include 'db.php';
                            $noBuku = $_GET['editBuku'];
                            $q = mysqli_query($koneksi, "select * from buku where noBuku='$noBuku'");
                            $a = mysqli_fetch_array($q);
                        ?>
                        <input type="hidden" name="noBuku" value="<?= $a['noBuku']?>">
                        <tr>
                            <td>Judul Buku</td>
                            <td><input type="text" name="judulBuku" class="input" value="<?= $a['judulBuku']?>"></td>
                        </tr>
                        <tr>
                            <td>Pengarang</td>
                            <td><input type="text" name="pengarang" class="input" value="<?= $a['pengarang']?>"></td>
                        </tr>
                        <tr>
                            <td>Penerbit</td>
                            <td><input type="text" name="penerbit" class="input" value="<?= $a['penerbit']?>"></td>
                        </tr>
                        <tr>
                            <td>Tanggal Terbit</td>
                            <td><input type="date" name="tanggalTerbit" class="input" value="<?= $a['tanggalTerbit']?>"></td>
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