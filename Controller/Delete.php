<?php

$connection = require_once('../Model/Koneksi.php');

if (!isset($_GET['id'])) {
    echo "Nomor id tidak ditemukan";
    exit();
}

$id = $_GET['id'];
$query = mysqli_query($connection, "DELETE FROM sugar WHERE id = $id");

header('location: ./../Frontend/Main.php');
