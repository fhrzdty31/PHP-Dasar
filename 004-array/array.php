<?php
$days = ["Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu", "Minggu"];
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
    div {
        width: 80px;
        padding: 5px;
        margin: 5px;
        border: 2px solid black;
        text-align: center;
        float: left;
    }
</style>
<body>
    <?php
    foreach($days as $day) : ?>
        <div>
            <?= $day; ?>
        </div>
    <?php endforeach; ?>
</body>
</html>