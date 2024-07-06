<?php
require '../functions.php';
$users = query("SELECT * FROM tb_kelas");
$spp = query("SELECT * FROM tb_spp");
if (isset($_POST["submit"])) {

    if (tambah_siswa($_POST) > 0) {
        echo "
			<script>
				alert('Data add successfully!');
				document.location.href = 'data_siswa.php';
			</script>
		";
    } else {
        echo "
			<script>
				alert('Data failed successfully!');
				document.location.href = 'data_siswa.php';
			</script>
		";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../style2.css">
    <title>TAMBAH DATA SISWA</title>
</head>

<body>
    <div class="container">
        <header>
            <h1>ADMINISTRATOR</h1>
        </header>

        <nav>
            <ul>
                <li><a href="../index.php">HOME</a></li>
                <div class="dropup">
                    <button class="dropbtn">Pembayaran</button>
                    <div class="dropup-content">
                        <a href="../pembayaran/history_pembayaran_admin.php">History Pembayaran</a>
                    </div>
                </div>
                <div class="dropup">
                    <button class="dropbtn">ADMIN</button>
                    <div class="dropup-content">
                        <a href="../useradmin.php">Data Kelas</a>
                        <a href="../data_siswa/data_siswa.php">Data Siswa</a>
                        <a href="../data_petugas/data_petugas.php">Data Petugas</a>
                        <a href="../data_spp/data_spp.php">Data Spp</a>
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
                <li style="margin-left:50px"><a href="../../logout.php">LOGOUT</a></li>
            </ul>
        </nav>
        <div class="content">
            <section>
                <table class="tableAddEdit" cellspacing="0" cellpadding="10">
                    <form action="" method="post">
                        <tr>
                            <td><label for="nama">Nisn : </label></td>
                            <td>
                                <input type="number" name="nisn" id="nisn" required placeholder="Enter your Nisn">
                            </td>
                        </tr>
                        <tr>
                            <td><label for="nis">Nis :</label></td>
                            <td>
                                <input type="number" name="nis" id="nis" required placeholder="Enter your NIS">
                            </td>
                        </tr>
                        <tr>
                            <td><label for="nama">Nama :</label></td>
                            <td>
                                <input type="text" name="nama" id="nama" required placeholder="Enter your Nama">
                            </td>
                        </tr>
                        <tr>
                            <td><label for="no_telp">No Telp :</label></td>
                            <td>
                                <input type="number" name="no_telp" id="no_telp" required placeholder="Enter your No Telp">
                            </td>
                        </tr>
                        <tr>
                            <td><label for="alamat">Alamat :</label></td>
                            <td>
                                <input type="text" name="alamat" id="alamat" required placeholder="Enter your Alamat">
                            </td>
                        </tr>
                        <tr>
                            <td><label for="id_spp">SPP:</label></td><br>
                            <td><select name="id_spp" id="id_spp">

                                    <?php
                                    foreach ($spp as $row) :
                                    ?>


                                        <option value="<?= $row['id_spp']; ?>"><?= $row['tahun']; ?> - <?= $row['nominal']; ?></option>;


                                    <?php
                                    endforeach;
                                    ?>
                                </select>
                            </td>
                        </tr>
                        <td><label for="id_kelas">Kelas :</label></td><br>
                        <td><select name="id_kelas" id="id_kelas">

                                <?php
                                foreach ($users as $row) :
                                ?>


                                    <option value="<?= $row['id_kelas']; ?>"><?= $row['nama_kelas']; ?></option>;


                                <?php
                                endforeach;
                                ?>
                            </select>
                        </td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center">
                                <button type="submit" name="submit" class="btnAdd">Simpan</button>
                            </td>
                        </tr>
                    </form>
                </table>
            </section>
        </div>

        <footer>
            <p>Copyright &copy; Abiyasa</p>
        </footer>

    </div>
    <script src="../script.js"></script>

</body>

</html>