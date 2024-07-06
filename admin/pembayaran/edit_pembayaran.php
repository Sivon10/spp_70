<?php
require '../functions.php';

$id = $_GET["id"];

$user = query("SELECT * FROM tb_pembayaran WHERE id_pembayaran = $id")[0];
if (isset($_POST["submit"])) {

    if (ubah_pembayaran($_POST) > 0) {
        echo "
			<script>
				alert('Data edit successfully!');
				document.location.href = 'data_pembayaran.php';
			</script>
		";
    } else {
        echo "
			<script>
				alert('Data failed successfully!');
				document.location.href = 'data_pembayaran.php';
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
    <title>UBAH DATA PETUGAS</title>
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
                        <a href="data_petugas.php">Data Petugas</a>
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



        <section>
            <table class="tableAddEdit" cellspacing="0" cellpadding="10">
                <form action="" method="post">
                    <input type="hidden" name="id_pembayaran" value="<?= $user["id_pembayaran"]; ?>">
                    <tr>
                        <td><label for="nisn">Nisn : </label></td>
                        <td>
                            <input type="text" name="nisn" value="<?= $user["nisn"]; ?>" readonly required>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="id_spp">ID SPP :</label></td>
                        <td>
                            <input type="text" name="id_spp" value="<?= $user["id_spp"]; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td><label for="tgl_bayar">Tanggal Bayar :</label></td>
                        <td>
                            <input type="date" name="tgl_bayar" value="<?= $user["tgl_bayar"]; ?>">
                        </td>
                    </tr>
                    <td><label for="bulan_dibayar">Bulan Dibayar :</label></td>
                    <td>
                        <?php $bulan_dibayar = $user['bulan_dibayar']; ?>
                        <select name="bulan_dibayar">
                            <option <?php echo ($bulan_dibayar == 'Januari') ? "selected" : "" ?>>Januari</option>
                            <option <?php echo ($bulan_dibayar == 'Februari') ? "selected" : "" ?>>Februari</option>
                            <option <?php echo ($bulan_dibayar == 'Maret') ? "selected" : "" ?>>Maret</option>
                            <option <?php echo ($bulan_dibayar == 'April') ? "selected" : "" ?>>April</option>
                            <option <?php echo ($bulan_dibayar == 'Mei') ? "selected" : "" ?>>Mei</option>
                            <option <?php echo ($bulan_dibayar == 'Juni') ? "selected" : "" ?>>Juni</option>
                            <option <?php echo ($bulan_dibayar == 'Juli') ? "selected" : "" ?>>Juli</option>
                            <option <?php echo ($bulan_dibayar == 'Agustus') ? "selected" : "" ?>>Agustus</option>
                            <option <?php echo ($bulan_dibayar == 'September') ? "selected" : "" ?>>September</option>
                            <option <?php echo ($bulan_dibayar == 'Oktober') ? "selected" : "" ?>>Oktober</option>
                            <option <?php echo ($bulan_dibayar == 'November') ? "selected" : "" ?>>November</option>
                            <option <?php echo ($bulan_dibayar == 'Desember') ? "selected" : "" ?>>Desember</option>
                        </select>
                    </td>
                    <tr>
                        <td><label for="tahun_dibayar">Tahun Dibayar :</label></td>
                        <td>
                            <input type="text" name="tahun_dibayar" value="<?= $user["tahun_dibayar"]; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td><label for="jumlah_bayar">Jumlah Bayar :</label></td>
                        <td>
                            <input type="text" name="jumlah_bayar" value="<?= $user["jumlah_bayar"]; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center">
                            <button type="submit" name="submit" class="btnAdd">Ubah</button>
                        </td>
                    </tr>
                </form>
            </table>
        </section>

        <footer>
            <p>Copyright &copy; Abiyasa</p>
        </footer>

    </div>
    <script src="../script.js"></script>

</body>

</html>