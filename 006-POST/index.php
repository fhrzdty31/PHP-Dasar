<?php
if(isset($_POST["submit"])) :
    if ($_POST["username"] == "admin" && $_POST["pass"] == "admin") {
        header("Location: home.php");
        exit;
    } else {
        $error = true;
    }
endif;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<body>
    <h1>Login Admin</h1>
    <?php if(isset($error)) : ?>
        <p style="color: red; font-style: italic;">Username / Password salah!!!</p>
    <?php endif; ?>
    <form action="" method="post">
        <label for="username">Username : </label>
        <input type="text" name="username" id="username">
        <br><br>
        <label for="pass">Password : </label>
        <input type="password" name="pass" id="pass">
        <br><hr><br>
        <button type="submit" name="submit">Login!</button>
    </form>
</body>
</html>