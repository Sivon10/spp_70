<!DOCTYPE html>
<html>
<?php
session_start();
$koneksi = new mysqli("localhost", "root", "", "spp_70");
// cek apakah yang mengakses halaman ini sudah login
if (($_SESSION['level'] == 'admin')) {
    header("location:admin/index.php");
} else if (($_SESSION['level']) == 'petugas') {
    header("location:admin/pembayaran/halaman_petugas.php");
} else if (($_SESSION['level']) == 'siswa') {
    header("location:admin/data_siswa/halaman_siswa.php");
}
?>

<head>
    <title>LOGIN</title>
    <style type="text/css">
        .login {
            padding: 1em;
            margin: 2em auto;
            width: 20em;
            background: #fff;
            border-radius: 20px;
        }

        .tombol {
            background: #000000;
            color: #fff;
            border: 0;
            padding: 10px 10px;
            margin: 20px 10px;
            text-decoration: none;
            border-radius: 5px;
        }

        .login td {
            font-size: 10pt;
            color: #A9A9A9;
        }

        body {
            background: #000000;
            font-family: sans-serif;
        }

        .sukses {
            text-align: center;
            color: white;
        }

        label {
            font-size: 10pt;
            color: #555;
        }

        input[type="text"],
        input[type="username"],
        input[type="password"],
        input[type="email"],
        textarea {
            padding: 10px;
            width: 95%;
            background: #efefef;
            border: 0;
            font-size: 10pt;
            margin: 5px 0px;
            border-radius: 5px;
        }

        h1 {
            text-align: center;
            color: white;
            font: center;
        }

        .alert {
            background: #e44e4e;
            color: white;
            padding: 10px;
            text-align: center;
            border: 1px solid #b32929;
        }
    </style>
</head>

<body>
    <br>
    <h1>LOGIN</h1>
    <?php
    if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == "gagal") {
            echo "<div class='sukses'>Username dan Password tidak sesuai !</div>";
        }
    }
    ?>

    <table border="0" cellpadding="10" cellspacing="0" align="center" class="login">
        <form action="cek_login2.php" method="post">
            <tr>
                <td>Username</td>
                <td><input type="username" name="username" class="form_login" placeholder="Username.." required="required" class="form-control"></input></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" class="form_login" placeholder="Password.." required="required" class="form-control"></input></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" class="tombol" value="Login"></input></td>
            </tr>
        </form>
    </table>

    </div>


</body>

</html>