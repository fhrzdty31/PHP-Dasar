<?php
require 'functions.php';

if(isset($_POST["submit"])) :
    if(insert($_POST) > 0) {
        echo "
            <script>
                alert('Data Berhasil Ditambahkan!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data Gagal Ditambahkan!');
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
    <title>MySQL-Tambah Data</title>
</head>
<body>
    <h1>Tambah Data Siswa</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <table callpadding="10" callspacing="0">
            <tr>
                <td>
                    <label for="nama">Nama</label>
                </td>
                <td>
                    : <input type="text" name="nama" id="nama" size="30" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="nis">NIS</label>
                </td>
                <td>
                    : <input type="text" name="nis" id="nis" size="30" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="tel">Telepon</label>
                </td>
                <td>
                    : <input type="tel" name="tel" id="tel" size="30" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="jurusan">Jurusan</label>
                </td>
                <td>
                    : <input type="text" name="jurusan" id="jurusan" size="30" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="email">Email</label>
                </td>
                <td>
                    : <input type="email" name="email" id="email" size="30" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="ph">Foto</label>
                </td>
                <td>
                    : <input type="file" name="ph" id="ph">
                </td>
            </tr>
            <tr>
                <td colspan="2" align="right">
                    <button type="submit" name="submit">Tambah</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>