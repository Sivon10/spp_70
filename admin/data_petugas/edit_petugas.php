<?php
require '../functions.php';

$id = $_GET["id"];

$user = query("SELECT * FROM tb_petugas WHERE id_petugas = $id")[0];
if (isset($_POST["submit"])) {

    if (ubah_petugas($_POST) > 0) {
        echo "
			<script>
				alert('Data edit successfully!');
				document.location.href = 'data_petugas.php';
			</script>
		";
    } else {
        echo "
			<script>
				alert('Data failed successfully!');
				document.location.href = 'data_petugas.php';
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
                <li><a href="halaman_petugas.php">HOME</a></li>
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
                    <input type="hidden" name="id_petugas" value="<?= $user["id_petugas"]; ?>">
                    <tr>
                        <td><label for="nama">Nama : </label></td>
                        <td>
                            <input type="text" name="nama_petugas" value="<?= $user["nama_petugas"]; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td><label for="username">Username :</label></td>
                        <td>
                            <input type="text" name="username" value="<?= $user["username"]; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td><label for="password">Password :</label></td>
                        <td>
                            <input type="text" name="password" value="<?= $user["password"]; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Level :</td>
                        <td>
                            <input type="checkbox" value="admin" name="level" id="admin" <?php if ($user["level"] == "admin") {
                                                                                                echo "checked";
                                                                                            } ?>>
                            <label for="admin"> Admin</label>
                            <br>
                            <input type="checkbox" value="petugas" name="level" id="petugas" <?php if ($user["level"] == "petugas") {
                                                                                                    echo "checked";
                                                                                                } ?>>
                            <label for="petugas"> Petugas</label>
                            <br>
                            <input type="checkbox" value="siswa" name="level" id="siswa" <?php if ($user["level"] == "siswa") {
                                                                                                echo "checked";
                                                                                            } ?>>
                            <label for="siswa"> Siswa</label>
                            <br>
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