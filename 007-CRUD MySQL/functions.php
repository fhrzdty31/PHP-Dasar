<?php
// koneksi database
$db = mysqli_connect("127.0.0.1", "root", "", "phpdasar");

// query read
function read($query) {
    global $db;

    $result = mysqli_query($db, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) :
        $rows[] = $row;
    endwhile;

    return $rows;
}

// query create
function insert($data) {
    global $db;

    $nama = htmlspecialchars($data["nama"]);
    $nis = htmlspecialchars($data["nis"]);
    $tel = htmlspecialchars($data["tel"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $email = htmlspecialchars($data["email"]);
    $ph = htmlspecialchars($data["ph"]);

    $query = "INSERT INTO siswa VALUES ('', '$nama', '$nis', '$tel', '$jurusan', '$email', '$ph')";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

// query delete
function delete($id) {
    global $db;

    mysqli_query($db, "DELETE FROM siswa WHERE id = $id");

    return mysqli_affected_rows($db);
}

// query update
function update($data) {
    global $db;

    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $nis = htmlspecialchars($data["nis"]);
    $tel = htmlspecialchars($data["tel"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $email = htmlspecialchars($data["email"]);
    $ph = htmlspecialchars($data["ph"]);

    $query = "UPDATE siswa SET nama = '$nama', nis = '$nis', tel = '$tel', jurusan = '$jurusan', email = '$email', ph = '$ph' WHERE id = $id";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

function search($keyword) {
    $query = "SELECT * FROM siswa WHERE nama LIKE '%$keyword%' OR nis LIKE '%$keyword%'";

    return read($query);
}
?>