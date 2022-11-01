<?php
$people = [
    [
        "id" => 123,
        "nama" => "Fahreza",
        "usia" => 16,
        "alamat" => "Kediri",
        "email" => "fahreza@email.com",
    ],
    [
        "id" => 231,
        "nama" => "Ditya",
        "usia" => 12,
        "alamat" => "Blitar",
        "email" => "ditya@email.com",
    ],
    [
        "id" => 132,
        "nama" => "Alfandry",
        "usia" => 20,
        "alamat" => "Malang",
        "email" => "alfandry@email.com",
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<style>
    img {
        float: left;
        margin-left: 25px;
        margin-right: 30px;
    }
</style>
<body>
    <h1>Daftar Nama!</h1>
    <?php foreach($people as $person) : ?>
        <br>
        <div>
            <img src="https://picsum.photos/id/<?= $person["id"]; ?>/100/100">
            <ul>
                <li>Nama : <?= $person["nama"] ?></li>
                <li>Usia : <?= $person["usia"] ?></li>
                <li>Alamat : <?= $person["alamat"] ?></li>
                <li>Email : <?= $person["email"] ?></li>
            </ul>
        </div>
    <?php endforeach; ?>
</body>
</html>