<!DOCTYPE html>
<html>
    <head>
        <title>Perpustakaan Wikrama</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="container">
            <div class="kiri">
                <ul>
                    <a href="index.php?act=buku"><li>Buku</li></a>
                    <a href="index.php?act=peminjaman"><li>Peminjaman</li></a>
                    <a href="index.php?act=siswa"><li>Siswa</li></a>
                    <a href="#"><li></li></a>
                    <a href="#"><li></li></a>
                    <a href="#"><li></li></a>
                    <a href="#"><li></li></a>
                    <a href="#"><li></li></a>
                    <a href="#"><li></li></a>
                    <a href="#"><li></li></a>
                    <a href="#"><li></li></a>
                    <a href="#"><li></li></a>
                    <a href="logout.php"><li>Log Out</li></a>
                    <a href="#"><li></li></a>
                    <a href="#"><li></li></a>
                    <a href="#"><li></li></a>
                    <a href="#"><li></li></a>
                    <a href="#"><li></li></a>
                    <a href="#"><li></li></a>
                    <a href="#"><li></li></a>
                    <a href="#"><li></li></a>
                    <a href="#"><li></li></a>
                    <a href="#"><li></li></a>
                    <a href="#"><li></li></a>
                    <a href="#"><li></li></a>
                    <a href="#"><li></li></a>
                    <a href="#"><li></li></a>
                    <a href="#"><li></li></a>
                    <a href="#"><li></li></a>
                    <a href="#"><li></li></a>
                    <a href="#"><li></li></a>
                </ul>
            </div>
            <div class="kanan">
                <div class="hal">
                    <?php
                        if(isset($_GET['act'])) {
                            if($_GET['act'] == 'buku') 
                                include 'buku.php';
                            else
                                if($_GET['act'] == 'peminjaman')
                                include 'peminjaman.php';
                            else
                                if($_GET['act'] == 'siswa')
                                include 'siswa.php';
            
                        }else if(isset($_GET['editBuku'])){
                            include "editBuku.php";

                        }else if(isset($_GET['editSiswa'])){
                            include "editSiswa.php";
                            
                        }else
                            include "depan.php";
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>