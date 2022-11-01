<?php
session_start();
require 'functions.php';

if(!isset($_SESSION['login'])) :
    header("Location: login.php");
    exit;
endif;

$id = $_GET["id"];

if(delete($id) > 0) {
    echo "
        <script>
            alert('Data Berhasil Dihapus!');
            document.location.href = 'index.php';
        </script>
    ";
} else {
    echo "
        <script>
            alert('Data Gagal Dihapus!');
            document.location.href = 'index.php';
        </script>
    ";
}
