<?php

$connection = require_once('../Model/Koneksi.php');

$nama = $_POST['nama'];

$query = mysqli_query(
    $connection,
    "insert into sugar values(DEFAULT, '$nama')"
);

header('location: ./../Frontend/Main.php');
