<?php
// ini adalah komentar

// Output
echo " Output dari echo, ";
print " Output dari print";

// Variable
$judul = "PHP Dasar";
$tema = "PHP";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sintaks PHP</title>
</head>
<body>
    <hr>
    <!-- Penulisan sintaks -->
    <h1>Belajar Pemrograman <?php echo $judul; ?></h1>
    <?php echo "<p>Sintaks $tema</p>" ?>
</body>
</html>