<?php
require '../functions.php';
$users = query("SELECT * FROM tb_petugas");
$no = 1;

if (isset($_POST['cari'])) {
    $users = cariPetugas($_POST['kataKunci']);
}
?>
<!DOCTYPE html>
<html lang="en">
<style type="text/css">
    .tambah {
        background-color: #333;
        padding: 5px;
        margin: 0px 0px 10px 340px;
    }

    .tambah a {
        color: #fff;
        text-decoration: none;
        font-weight: bold;
    }

    .edit {
        color: rgb(21, 255, 0);
        font-weight: bold;
    }

    .hapus {
        color: red;
        font-weight: bold;
    }

    .btnEdit {
        background-color: #333;
        color: #fff;
        padding: 5px;
    }

    input[type=text] {
        width: 130px;
        box-sizing: border-box;
        border: 2px solid #ccc;
        border-radius: 4px;
        font-size: 16px;
        background-color: white;
        background-image: url('../search.png');
        background-position: 10px 10px;
        background-repeat: no-repeat;
        padding: 12px 20px 12px 40px;
        -webkit-transition: width 0.4s ease-in-out;
        transition: width 0.4s ease-in-out;
    }

    input[type=text]:focus {
        width: 50%;
    }

    .add {
        padding: 5px 20px;
        background-color: #1694d2;
        text-decoration: none;
        color: white;
        border-radius: 10px;
    }
</style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style3.css">
    <link rel="stylesheet" href="../style2.css">
    <title>ADMINISTRATOR</title>
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

            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="stylesheet" href="../style.css">
                <title>Tambah Data User</title>
            </head>



            <div class="content">
                <br><br>
                <form action="" method="post">
                    <input type="text" name="kataKunci" placeholder="Search..">
                    <button type="submit" name="cari" class="add">Cari</button>
                </form>
                <section>
                    <a href="tambah_petugas.php" class="add">Tambah</a>
                    <a href="cetak.php" class="add" target="_blank">Print</a>
                    <a href="report.php" class="add">Ekspor PDF</a>
                    <table border="0" cellpadding="10" cellspacing="0">
                        <caption>Data Petugas</caption>

                        <tr>
                            <th>No.</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Nama</th>
                            <th>Level</th>
                            <th>Aksi</th>


                        </tr>

                        <?php $i = 1; ?>
                        <?php foreach ($users as $user) : ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $user["username"]; ?></td>
                                <td><?= $user["password"]; ?></td>
                                <td><?= $user["nama_petugas"]; ?></td>
                                <td><?= $user["level"]; ?></td>


                                <td>
                                    <a href="hapus_petugas.php?id=<?= $user["id_petugas"]; ?>" class="delete">Hapus</a> | <a href="edit_petugas.php?id=<?= $user["id_petugas"]; ?>" class="edit">Edit</a>
                                </td>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </table>
                </section>
            </div>
        </div>
        <div class="clear"></div>

        <footer>
            <p>Copyright &copy; Abiyasa</p>
        </footer>

    </div>
    <script src="../script.js"></script>
</body>

</html>