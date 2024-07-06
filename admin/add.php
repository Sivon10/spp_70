<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Tambah Data</title>
</head>

<body>
    <div class="container">
        <header>
            <h1>ADMINISTRATOR</h1>
        </header>

        <nav>
            <ul>
                <li><a href="index.php">HOME</a></li>
                <div class="dropup">
                    <button class="dropbtn">Pembayaran</button>
                    <div class="dropup-content">
                        <a href="./pembayaran/history_pembayaran_admin.php">History Pembayaran</a>
                    </div>
                </div>
                <div class="dropup">
                    <button class="dropbtn">ADMIN</button>
                    <div class="dropup-content">
                        <a href="useradmin.php">Data Kelas</a>
                        <a href="./data_siswa/data_siswa.php">Data Siswa</a>
                        <a href="./data_petugas/data_petugas.php">Data Petugas</a>
                        <a href="./data_spp/data_spp.php">Data Spp</a>
                    </div>
                </div>
                <div class="dropup">
                    <button class="dropbtn"></button>
                    <div class="dropup-content">
                        <!-- <a href="#">Link 1</a>
                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a> -->
                    </div>
                </div>
                <div class="dropup">
                    <button class="dropbtn"></button>
                    <div class="dropup-content">
                        <!-- <a href="#">Link 1</a>
                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a> -->
                    </div>
                </div>
                <div class="dropup">
                    <button class="dropbtn"></button>
                    <div class="dropup-content">
                        <!-- <a href="#">Link 1</a>
                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a> -->
                    </div>
                </div>

                <div class="dropup">
                    <button class="dropbtn"></button>
                    <div class="dropup-content">
                        <a href="#"></a>
                        <a href="#"> </a>
                        <a href="#"></a>
                        <a href="#"></a>
                    </div>
                </div>
                <li><a href=""></a></li>
                <li><a href=""></a></li>
                <li><a href=""></a></li>
                <li><a href=""></a></li>
                <li><a href=""></a></li>
                <li><a href=""></a></li>
                <li><a href=""></a></li>
                <li><a href=""></a></li>
                <li><a href=""></a></li>
                <li><a href=""></a></li>
                <li style="margin-left:50px"><a href="../logout.php">LOGOUT</a></li>
            </ul>
        </nav>




        <section>
            <?php
            require 'functions.php';

            if (isset($_POST["submit"])) {

                if (tambah($_POST) > 0) {
                    echo "
        	<script>
        		alert('Data add successfully!');
        		document.location.href = 'useradmin.php';
        	</script>
        ";
                } else {
                    echo "
        	<script>
        		alert('Data failed successfully!');
        		document.location.href = 'useradmin.php';
        	</script>
        ";
                }
            }
            ?>
            <table class="tableAddEdit" cellspacing="0" cellpadding="10">
                <form action="" method="post" enctype="multipart/form-data">
                    <tr>
                        <td><label for="nama_kelas"> Nama Kelas :</label></td>
                        <td><select name="nama_kelas" id="nama_kelas">
                                <option value="XII RPL 1">XII RPL 1</option>
                                <option value="XII RPL 2">XII RPL 2</option>
                                <option value="XII RPL 2">XII RPL 3</option>
                                <option value="XII TKJ 1">XII TKJ 1</option>
                                <option value="XII TKJ 2">XII TKJ 2</option>
                                <option value="XII TKJ 3">XII TKJ 3</option>
                            </select></td>
                    </tr>

                    <tr>
                        <td>Kompetensi Keahlian : </td>
                        <td>
                            <input type="checkbox" value="Web Design" name="kompetensi_keahlian" id="webdesign"><label for="webdesign"> Web Design</label>
                            <br>
                            <input type="checkbox" value="Android" name="kompetensi_keahlian" id="android"><label for="android"> Android</label>
                            <br>
                            <input type="checkbox" value="Video vlog" name="kompetensi_keahlian" id="video vlog"><label for="video vlog"> Video vlog</label>
                            <br>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2" align="center">
                            <button type="submit" name="submit" class="btnAdd">Tambah Data</button>
                        </td>
                    </tr>
                </form>
            </table>
        </section>

        <footer>
            <p>Copyright &copy; Abiyasa</p>
        </footer>

    </div>
    <script src="script.js"></script>

</body>

</html>