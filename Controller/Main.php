<?php

$connection = require_once('../Model/Koneksi.php');

$result = [];
$query = mysqli_query($connection, "SELECT * FROM sugar");

if (!$query) return $result;

while ($fetch = mysqli_fetch_assoc($query)) {
    $result[] = $fetch;
}

return $result;
