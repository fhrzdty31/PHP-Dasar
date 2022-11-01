<?php
session_start();
require 'functions.php';

if (isset($_COOKIE['id']) && isset($_COOKIE['key'])) :
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];

    $result = mysqli_query($db, "SELECT username FROM user WHERE id = $id");
    $row = mysqli_fetch_assoc($result);

    if ($key === hash('sha256', $row['username'])) :
        $_SESSION['login'] = true;
    endif;
endif;

if (isset($_SESSION['login'])) :
    header("Location: index.php");
    exit;
endif;

if (isset($_POST["login"])) :
    $username = $_POST["username"];
    $pass = $_POST["pass"];

    $username_check = mysqli_query($db, "SELECT * FROM user WHERE username = '$username'");
    if (mysqli_num_rows($username_check) === 1) :
        $row = mysqli_fetch_assoc($username_check);
        if (password_verify($pass, $row["password"])) :
            if (isset($_POST["remember"])) :
                setcookie("id", $row["id"], time() + (60 * 60));
                setcookie("key", hash('sha256', $row['username']), time() + (60 * 60));
            endif;
            $_SESSION["login"] = true;

            header("Location: index.php");
            exit;
        endif;
    endif;
    $error = true;
endif;
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <center>
        <br>
        <h1>LOGIN</h1><br>

        <?php if (isset($error)) : ?>
            <p style="color: red;, font-style: italic;">Username / Password Salah!!</p>
        <?php endif; ?>

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
                    <td colspan="2">
                        <input type="password" name="pass" placeholder="Password" size="46">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" name="remember" id="remember">
                        <label for="remember">Remember me </label>
                    </td>
                    <td align="right">
                        <button type="submit" name="login">Sing In</button>
                    </td>
                </tr>
            </table>
        </form>
        <p>Belum punya akun? <a href="registrasi.php">register</a></p>
    </center>
</body>

</html>