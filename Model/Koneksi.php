<?php
$connection = mysqli_connect('localhost', 'root', 'password', 'mainan');

if (mysqli_connect_errno()) {
    echo "Database error : " . mysqli_connect_error();
    exit();
}

return $connection;
