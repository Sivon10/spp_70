<?php
require 'functions.php';

$id = $_GET["id"];

$user = query("SELECT * FROM tb_kelas WHERE id_kelas = $id")[0];

if (isset($_POST["submit"])) {

    if (ubah($_POST) > 0) {
        echo "
        <script>
          alert('Data edit successfully!');
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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Edit Data Petugas</title>
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
            <table class="tableAddEdit" cellpadding="10" cellspacing="0">
                <form action="" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id_kelas" value="<?= $user["id_kelas"]; ?>">
                    <tr>
                        <td><label for="nama_kelas">Nama Kelas :</label></td>
                        <td>
                            <?php $nama_kelas = $user['nama_kelas']; ?>
                            <select name="nama_kelas">
                                <option <?php echo ($nama_kelas == 'XII RPL 1') ? "selected" : "" ?>>XII RPL 1</option>
                                <option <?php echo ($nama_kelas == 'XII RPL 2') ? "selected" : "" ?>>XII RPL 2</option>
                                <option <?php echo ($nama_kelas == 'XII RPL 3') ? "selected" : "" ?>>XII RPL 3</option>
                                <option <?php echo ($nama_kelas == 'XII TKJ 1') ? "selected" : "" ?>>XII TKJ 1</option>
                                <option <?php echo ($nama_kelas == 'XII TKJ 2') ? "selected" : "" ?>>XII TKJ 2</option>
                                <option <?php echo ($nama_kelas == 'XII TKJ 3') ? "selected" : "" ?>>XII TKJ 3</option>
                            </select>
                        </td>
                        </td>
                    </tr>
                    <tr>
                        <td>Kompetensi Keahlian :</td>
                        <td>
                            <input type="checkbox" value="Web Design" name="kompetensi_keahlian" id="webdesign" <?php if ($user["kompetensi_keahlian"] == "Web Design") {
                                                                                                                    echo "checked";
                                                                                                                } ?>>
                            <label for="webdesign"> Web Design</label>
                            <br>
                            <input type="checkbox" value="Android" name="kompetensi_keahlian" id="android" <?php if ($user["kompetensi_keahlian"] == "Android") {
                                                                                                                echo "checked";
                                                                                                            } ?>>
                            <label for="android"> Android</label>
                            <br>
                            <input type="checkbox" value="Video vlog" name="kompetensi_keahlian" id="video vlog" <?php if ($user["kompetensi_keahlian"] == "Video vlog") {
                                                                                                                        echo "checked";
                                                                                                                    } ?>>
                            <label for="video vlog"> Video vlog</label>
                            <br>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2" align="center">
                            <button type="submit" name="submit" class="btnEdit">Ubah Data</button>
                        </td>
                    </tr>
                </form>
            </table>

        </section>
        <div class="clear"></div>

        <footer>
            <p>Copyright &copy; Abiyasa</p>
        </footer>

    </div>
    <script src="script.js"></script>

</body>

</html>