<?php

$connection = require_once('../Model/Koneksi.php');

$id = $_GET['id'];
$query = mysqli_query($connection, "SELECT * FROM sugar WHERE id = $id");

if (!$query) return [];

return mysqli_fetch_assoc($query) ?? [];
