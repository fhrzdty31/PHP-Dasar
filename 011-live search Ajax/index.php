<?php
session_start();
require 'functions.php';

if(!isset($_SESSION['login'])) :
    header("Location: login.php");
    exit;
endif;

$students = read("SELECT * FROM siswa ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
</head>
<body>
    <h1>Data Siswa</h1>

    <div>
        <input type="text" name="keyword" id="keyword" size="30" placeholder="Keyword NIS / Nama" autocomplate="off" autofocus>
        <button><a href="tambah.php">Tambah</a></button> | 
        <button><a href="logout.php">Logout</a></button>
    </div><br>

    <div id="container">
    <table border="2" cellpadding="10" cellspacing="0">
        <tr>
            <th>Foto</th>
            <th>Nama</th>
            <th>NIS</th>
            <th>Telepon</th>
            <th>Jurusan</th>
            <th>Email</th>
            <th>Aksi</th>
        </tr>
        <?php
        foreach( $students as $student ) : ?>
            <tr>
                <td><img src="img/<?= $student["ph"] ?>" alt="foto" width="55px"></td>
                <td><?= $student["nama"] ?></td>
                <td><?= $student["nis"] ?></td>
                <td><?= $student["tel"] ?></td>
                <td><?= $student["jurusan"] ?></td>
                <td><?= $student["email"] ?></td>
                <td>
                    <button><a href="edit.php?id=<?= $student["id"]; ?>">Edit</a></button>
                     | 
                     <button onclick="return confirm('Apakah anda yakin?');"><a href="hapus.php?id=<?= $student['id'] ?>">Hapus</a></button>
                </td>
            </tr>
        <?php
        endforeach;
        ?>
    </table>
    </div>
    <script src="js/script.js"></script>
</body>
</html>