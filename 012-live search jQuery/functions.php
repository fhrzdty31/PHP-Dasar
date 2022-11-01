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
    $ph = upload();

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
    $old_ph = $data["old_ph"];
    if($_FILES["ph"]["error"] === 4) {
        $ph = $old_ph;
    } else {
        $ph = upload();
    }

    $query = "UPDATE siswa SET nama = '$nama', nis = '$nis', tel = '$tel', jurusan = '$jurusan', email = '$email', ph = '$ph' WHERE id = $id";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

function upload() {
    $name = $_FILES["ph"]["name"];
    $size = $_FILES["ph"]["size"];
    $tmpName = $_FILES["ph"]["tmp_name"];
    $error = $_FILES["ph"]["error"];

    if($error === 4) :
        return false;
    endif;

    $ekstensi = ["jpg", "jpeg", "png"];
    $eksFile = explode(".", $name);
    $eksFile = strtolower(end($eksFile));
    if(!in_array($eksFile, $ekstensi)) :
        echo "
            <script>
                alert('Upload file jpg, jpeg, atau png!');
            </script>
        ";
        return false;
    endif;

    if($size > 2000000) :
        echo "
            <script>
                alert('Ukuran gambar terlalu besar!');
            </script>
        ";
        return false;
    endif;

    $newName = uniqid();
    $newName .= ".";
    $newName .= $eksFile;

    move_uploaded_file($tmpName, "img/" . $newName);
    return $newName;
}

// registrasi
function register($data) {
    global $db;

    $username = strtolower(stripslashes($data["username"]));
    $pass1 = mysqli_real_escape_string($db, $data["pass1"]);
    $pass2 = mysqli_real_escape_string($db, $data["pass2"]);

    if($pass1 !== $pass2) :
        echo "
            <script>
                alert('Password tidak sama!');
            </script>
        ";
        return false;
    endif;

    $username_check = mysqli_query($db, "SELECT username FROM user WHERE username = '$username'");
    if (mysqli_fetch_assoc($username_check)) {
        echo "
            <script>
                alert('Username sudah dipakai!');
            </script>
        ";
        return false;
    }

    $password = password_hash($pass1, PASSWORD_DEFAULT);
    mysqli_query($db, "INSERT INTO user VALUES ('', '$username', '$password')");
    return mysqli_affected_rows($db);
}
