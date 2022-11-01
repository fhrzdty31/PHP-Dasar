<?php
if (!isset($_GET["id"]) || !isset($_GET["nama"]) || !isset($_GET["usia"]) || !isset($_GET["alamat"]) || !isset($_GET["email"])) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $_GET["nama"]; ?></title>
</head>
<style>
    img {
        float: left;
        margin-left: 25px;
        margin-right: 30px;
    }
</style>
<body>
        <br>
        <div>
            <img src="https://picsum.photos/id/<?= $_GET["id"]; ?>/100/100">
            <ul>
                <li>Nama : <?= $_GET["nama"]; ?></li>
                <li>Usia : <?= $_GET["usia"]; ?></li>
                <li>Alamat : <?= $_GET["alamat"]; ?></li>
                <li>Email : <?= $_GET["email"]; ?></li>
            </ul>
        </div>
</body>
</html>