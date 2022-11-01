<?php
require 'functions.php';

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
    <title>MySQL-Edit Data</title>
</head>
<body>
    <h1>Edit Data Siswa</h1>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $student['id'] ?>">
        <table callpadding="10" callspacing="0">
            <tr>
                <td>
                    <label for="nama">Nama</label>
                </td>
                <td>
                    : <input type="text" name="nama" id="nama" value="<?= $student['nama'] ?>" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="nis">NIS</label>
                </td>
                <td>
                    : <input type="text" name="nis" id="nis" value="<?= $student['nis'] ?>" readonly>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="tel">Telepon</label>
                </td>
                <td>
                    : <input type="tel" name="tel" id="tel" value="<?= $student['tel'] ?>" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="jurusan">Jurusan</label>
                </td>
                <td>
                    : <input type="text" name="jurusan" id="jurusan" value="<?= $student['jurusan'] ?>" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="email">Email</label>
                </td>
                <td>
                    : <input type="email" name="email" id="email" value="<?= $student['email'] ?>" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="ph">URL Foto</label>
                </td>
                <td>
                    : <input type="" name="ph" id="ph" value="<?= $student['ph'] ?>">
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