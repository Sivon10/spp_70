<?php
require '../functions.php';
$spp = query("SELECT * FROM tb_spp");
$kelas = query("SELECT * FROM tb_kelas");
$users = query("SELECT * FROM tb_siswaku");
if (isset($_POST["submit"])) {

    if (pembayaran($_POST) > 0) {
        echo "
			<script>
				alert('Data add successfully!');
				document.location.href = 'history_pembayaran.php';
			</script>
		";
    } else {
        echo "
			<script>
				alert('Data failed successfully!');
				document.location.href = 'history_pembayaran.php';
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
    <title>Pembayaran</title>
</head>

<body>
    <div class="container">
        <header>
            <h1>PETUGAS</h1>
        </header>

        <nav>
            <ul>
                <li><a href="halaman_petugas.php">HOME</a></li>
                <div class="dropup">
                    <button class="dropbtn">DATA PEMBAYARAN</button>
                    <div class="dropup-content">
                        <a href="pembayaran.php">Pembayaran</a>
                        <a href="history_pembayaran.php">History Pembayaran </a>
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
                <form action="" method="post" enctype="multipart/form-data">
                    <tr>
                        <td><label for="nisn">Nisn :</label></td><br>
                        <td><select name="nisn" id="nisn">

                                <?php
                                foreach ($users as $row) :
                                ?>


                                    <option value="<?= $row['nisn']; ?>"><?= $row['nisn']; ?></option>;


                                <?php
                                endforeach;
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="id_spp">Id SPP :</label></td><br>
                        <td><select name="id_spp" id="id_spp">

                                <?php
                                foreach ($spp as $row) :
                                ?>


                                    <option value="<?= $row['id_spp']; ?>"><?= $row['id_spp']; ?></option>;


                                <?php
                                endforeach;
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="tgl_bayar"> Tanggal Bayar :</label></td>
                        <td>
                            <input type="date" name="tgl_bayar" id="tgl_bayar" required placeholder="Enter your Tanggal">
                        </td>
                    </tr>
                    <tr>
                        <td><label for="bulan_dibayar"> Bulan :</label></td>
                        <td><select name="bulan_dibayar" id="bulan_dibayar">
                                <option value="Januari">Januari</option>
                                <option value="Februari">Februari</option>
                                <option value="Maret">Maret</option>
                                <option value="April">April</option>
                                <option value="Mei">Mei</option>
                                <option value="Juni">Juni</option>
                                <option value="Juli">Juli</option>
                                <option value="Agustus">Agustus</option>
                                <option value="September">September</option>
                                <option value="Oktober">Oktober</option>
                                <option value="November">November</option>
                                <option value="Desember">Desember</option>
                            </select></td>
                    </tr>
                    <tr>
                        <td><label for="tahun_dibayar"> Tahun Dibayar :</label></td>
                        <td>
                            <input type="number" name="tahun_dibayar" id="tahun_dibayar" required placeholder="Enter your Tahun Bayar">
                        </td>
                    </tr>
                    <tr>
                        <td><label for="jumlah_bayar"> Jumlah Dibayar :</label></td>
                        <td>
                            <input type="number" name="jumlah_bayar" id="jumlah_bayar" required placeholder="Enter your Bulan Bayar">
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

        <footer>
            <p>Copyright &copy; Abiyasa</p>
        </footer>

    </div>
    <script src="../script.js"></script>

</body>

</html>