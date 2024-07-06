<?php
require '../functions.php';

if (isset($_POST["submit"])) {

    if (tambah_spp($_POST) > 0) {
        echo "
			<script>
				alert('Data add successfully!');
				document.location.href = 'data_spp.php';
			</script>
		";
    } else {
        echo "
			<script>
				alert('Data failed successfully!');
				document.location.href = 'data_spp.php';
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
    <title>TAMBAH DATA PETUGAS</title>
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
                        <a href="data_spp.php">Data Spp</a>
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
                    <tr>
                        <td><label for="tahun">Tahun : </label></td>
                        <td>
                            <input type="text" name="tahun" id="tahun" required placeholder="Enter your Tahun">
                        </td>
                    </tr>
                    <tr>
                        <td><label for="nominal">Nominal :</label></td>
                        <td>
                            <input type="text" name="nominal" id="nominal" required placeholder="Enter your nominal">
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