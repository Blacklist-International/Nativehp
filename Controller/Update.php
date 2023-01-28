<?php

$connection = require_once('../Model/Koneksi.php');

$id = $_POST['id'];
$nama = $_POST['nama'];

$query = mysqli_query(
    $connection,
    "UPDATE sugar SET nama = '$nama' WHERE id = $id"
);

header('location: ./../Frontend/Main.php');
