<?php
$hari = array("Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu");
$hari[] = "Minggu";

$bulan = ["Januari","Februari", "Maret", "Apri", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober"];
$bulan[] = "November";
$bulan[] = "Desember"; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <center>
        <?php var_dump($hari); ?>
        <hr>
        <?php print_r($bulan); ?>
        <hr>
        <?= "$hari[1], $bulan[8]"; ?>
        <hr><br>
        <button>
            <a href="array.php">Array</a>
        </button>
        <br><br>
        <button>
            <a href="associative array.php">Associative Array</a>
        </button>
    </center>
</body>
</html>