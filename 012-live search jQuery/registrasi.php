<?php
require 'functions.php';

if (isset($_POST["register"])) {
    if (register($_POST) > 0) {
        echo "
            <script>
                alert('Berhasil Registrasi!');
            </script>
        ";
    } else {
        echo mysqli_error($db);
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>

<body>
    <center>
        <br>
        <h1>Registrasi!!</h1><br>

        <form action="" method="post">
            <table callpadding="10" callspacing="0">
                <tr>
                    <td colspan="2">
                        <b>Username :</b>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="text" name="username" placeholder="Username" size="46">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <b>Password :</b>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="password" name="pass1" placeholder="Password" size="20">
                    </td>
                    <td>
                        <input type="password" name="pass2" placeholder=" Confirm" size="20">
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="right">
                        <button type="submit" name="register">Sing Up</button>
                    </td>
                </tr>
            </table>
        </form>
        <p>Sudah memiliki akun? <a href="login.php">login</a></p>
    </center>
</body>

</html>