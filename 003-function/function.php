<?php
function welcome($time, $name = "Admin") {
    return "Selamat $time, $name!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>
<body>
    <center>
        <h1><?= welcome("Pagi", "Fahreza"); ?></h1>
    </center>
</body>
</html>