<?php
require '../functions.php';

$keyword = $_GET["keyword"];
$query = "SELECT * FROM siswa WHERE nama LIKE '%$keyword%' OR nis LIKE '%$keyword%' ORDER BY id DESC";
$students = read($query);

?>

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
    foreach ($students as $student) : ?>
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