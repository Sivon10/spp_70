<?php
session_start();
$koneksi = new mysqli("localhost", "root", "", "portal_beritaku");
?>

<!DOCTYPE html>
<html>

<head>
    <title>Login User</title>
    <style type="text/css">
        .login {
            padding: 1em;
            margin: 2em auto;
            width: 20em;
            background: #fff;
            border-radius: 20px;
        }

        .tombol {
            background: #00FFFF;
            color: #fff;
            border: 0;
            padding: 10px 10px;
            margin: 20px 10px;
            text-decoration: none;
            border-radius: 5px;
        }

        .login td {
            font-size: 10pt;
            color: #555;
        }

        body {
            background: #00FFFF;
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
    </style>
</head>

<body>
    <br> <br> <br> <br> <br> <br> <br>
    <h1>Login User</h1>

    <table border="0" cellpadding="10" cellspacing="0" align="center" class="login">
        <form method="post">
            <tr>
                <td>Username</td>
                <td><input type="username" name="username" class="form_login" placeholder="Username.." required="required" class="form-control"></input></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" class="form_login" placeholder="Password.." required="required" class="form-control"></input></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><button name="login" class="tombol">Login</button></td>
            </tr>
        </form>
    </table>



    <div class="sukses">
        <?php
        if (isset($_POST['login'])) {
            $ambil = $koneksi->query("SELECT * FROM tb_login WHERE username='$_POST[username]' AND password = '$_POST[password]'");
            $yangcocok = $ambil->num_rows;
            if ($yangcocok == 1) {
                $_SESSION['admin'] = $ambil->fetch_assoc();
                echo "<div>Login sukses</div>";
                echo "<meta http-equiv='refresh' content='1;url=index.php'>";
            } else {
                echo "<div>Username dan Password Salah</div>";
                echo "<meta http-equiv='refresh' content='1;url=login.php'>";
            }
        }
        ?>
    </div>
    </div>


</body>

</html>