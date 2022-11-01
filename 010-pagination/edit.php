<?php
session_start();
require 'functions.php';

if(!isset($_SESSION['login'])) :
    header("Location: login.php");
    exit;
endif;

$id = $_GET["id"];

$student = read("SELECT * FROM siswa WHERE id = $id")[0];

if(isset($_POST["submit"])) :
    if(update($_POST) > 0) {
        echo "
            <script>
                alert('Data Berhasil Disimpan!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data Gagal Disimpan!');
            </script>
        ";
    }
endif;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>
<body>
    <h1>Edit Data Siswa</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $student['id'] ?>">
        <input type="hidden" name="old_ph" value="<?= $student['ph'] ?>">
        <table callpadding="10" callspacing="0">
            <tr>
                <td>
                    <label for="nama">Nama</label>
                </td>
                <td>
                    : <input type="text" name="nama" id="nama" size="30" value="<?= $student['nama'] ?>" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="nis">NIS</label>
                </td>
                <td>
                    : <input type="text" name="nis" id="nis" size="30" value="<?= $student['nis'] ?>" readonly>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="tel">Telepon</label>
                </td>
                <td>
                    : <input type="tel" name="tel" id="tel" size="30" value="<?= $student['tel'] ?>" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="jurusan">Jurusan</label>
                </td>
                <td>
                    : <input type="text" name="jurusan" id="jurusan" size="30" value="<?= $student['jurusan'] ?>" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="email">Email</label>
                </td>
                <td>
                    : <input type="email" name="email" id="email" size="30" value="<?= $student['email'] ?>" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="ph">
                        <img src="img/<?= $student["ph"] ?>" alt="foto" width="55px">
                    </label>
                </td>
                <td>
                    <input type="file" name="ph" id="ph">
                </td>
            </tr>
            <tr>
                <td colspan="2" align="right">
                    <button type="submit" name="submit">Simpan</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>