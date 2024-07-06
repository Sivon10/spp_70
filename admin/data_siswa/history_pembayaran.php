<?php
require '../functions.php';
$users = query("SELECT * FROM tb_pembayaran JOIN tb_siswaku on tb_pembayaran.nisn=tb_siswaku.nisn JOIN tb_spp on tb_pembayaran.id_spp=tb_spp.id_spp   ");
if (isset($_POST['cari'])) {
    $users = cariPembayaran($_POST['kataKunci']);
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

    <title>SISWA</title>
</head>

<body>
    <div class="container">
        <header>
            <h1>SISWA</h1>
        </header>

        <nav>
            <ul>
                <li><a href="halaman_siswa.php">HOME</a></li>
                <div class="dropup">
                    <button class="dropbtn">DATA PEMBAYARAN</button>
                    <div class="dropup-content">
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
                        <!-- <a href="pembayaran.php">Pembayaran</a>
                        <a href="data_pembayaran.php">Data Pembayaran</a> -->
                    </div>
                </div>
                <div class="dropup">
                    <button class="dropbtn"></button>
                    <div class="dropup-content">
                        <!-- <a href="#">Link 1</a>
                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a> -->
                    </div>
                    <div class="dropup">
                        <button class="dropbtn"></button>
                        <div class="dropup-content">

                        </div>
                    </div>


                    <div class="dropup">
                        <button class="dropbtn"></button>
                        <div class="dropup-content">

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
                    <a href="cetak_siswa.php" class="add" target="_blank">Print</a>
                    <a href="report.php" class="add">Ekspor PDF</a>
                    <table border="0" cellpadding="10" cellspacing="0">
                        <caption>Data Pembayaran</caption>

                        <tr>
                            <th>No.</th>
                            <th>Nisn</th>
                            <th>Tanggal</th>
                            <th>Bulan</th>
                            <th>Tahun</th>
                            <th>Jumlah Dibayar</th>
                            <th>Status</th>
                            <th>Id Spp</th>


                        </tr>

                        <?php $i = 1; ?>
                        <?php foreach ($users as $user) : ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $user["nisn"]; ?></td>
                                <td><?= $user["tgl_bayar"]; ?></td>
                                <!-- <td><?= $user["id_petugas"]; ?></td> -->
                                <td><?= $user["bulan_dibayar"]; ?></td>
                                <td><?= $user["tahun_dibayar"]; ?></td>
                                <td><?= $user["jumlah_bayar"]; ?></td>
                                <td>
                                    <?php
                                    // Jika jumlah bayar sesuai dengan yang harus dibayar maka Status LUNAS
                                    if ($user['jumlah_bayar'] == $user['nominal']) { ?>
                                        <font style="color: green; font-weight: bold;">LUNAS</font>
                                    <?php } else { ?> BELUM LUNAS <?php } ?>
                                </td>
                                <td><?= $user["id_spp"]; ?></td>


                                <!-- <td>
                                    <a href="hapus_pembayaran.php?id=<?= $user["id_pembayaran"]; ?>" class="delete">Hapus</a> | <a href="edit_pembayaran.php?id=<?= $user["id_pembayaran"]; ?>" class="edit">Edit</a>
                                </td> -->
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