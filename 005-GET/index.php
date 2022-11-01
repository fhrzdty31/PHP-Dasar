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
    <title>GET</title>
</head>
<body>
    <h1>Daftar Nama!</h1>
    <?php foreach($people as $person) : ?>
        <ul>
            <li><b><?= $person["nama"]; ?> </b><button><a href="detail.php?id=<?= $person["id"]; ?>&nama=<?= $person["nama"]; ?>&usia=<?= $person["usia"]; ?>&alamat=<?= $person["alamat"]; ?>&email=<?= $person["email"]; ?>">Detail</a></button></li>
        </ul>
        <hr>
    <?php endforeach; ?>
</body>
</html>