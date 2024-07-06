<?php
require 'functions.php';
$users = query("SELECT * FROM tb_user");
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
</style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style3.css">
    <title>ADMINISTRATOR</title>
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
                    <button class="dropbtn">KATEGORI</button>
                    <div class="dropup-content">
                        <a href="#">Link 1</a>
                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a>
                    </div>
                </div>
                <div class="dropup">
                    <button class="dropbtn">BERITA</button>
                    <div class="dropup-content">
                        <a href="#">Link 1</a>
                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a>
                    </div>
                </div>

                <div class="dropup">
                    <button class="dropbtn">ADMIN</button>
                    <div class="dropup-content">
                        <a href="?mod=useradmin">Data Admin</a>
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
                <li style="margin-left:50px"><a href="login.php">LOGOUT</a></li>
            </ul>
        </nav>

        <div class="slideshow-container">

            <div class="mySlides fade">
                <img src="../assets/images/1.png" style="width:100%">
                <div class="text">Administrator</div>
            </div>

            <div class="mySlides fade">
                <img src="../assets/images/2.png" style="width:100%">
                <div class="text">User</div>
            </div>



            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>

        </div>

        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>

        <div class="content">

            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="stylesheet" href="style.css">
                <title>Tambah Data User</title>
            </head>



            <div class="content">

                <div class="content">
                    <section>

                        <table border="0" cellpadding="10" cellspacing="0">
                            <caption>Data Berita</caption>

                            <tr>
                                <th>No.</th>
                                <th>Nama User</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Email</th>

                            </tr>

                            <?php $i = 1; ?>
                            <?php foreach ($users as $user) : ?>
                                <tr>
                                    <td><?= $i; ?></td>
                                    <td><?= $user["nama_user"]; ?></td>
                                    <td><?= $user["username"]; ?></td>
                                    <td><?= $user["password"]; ?></td>
                                    <td><?= $user["email"]; ?></td>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        </table>
                    </section>
                </div>
            </div>
        </div>
        <div class="clear"></div>

        <footer>
            <p>Copyright &copy; Abiyasa</p>
        </footer>

    </div>
    <script src="script.js"></script>
</body>

</html>