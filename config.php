<?php

$server = '127.0.0.1';
$username = 'root';
$password = '';
$dbname = 'corona';

$conn = new mysqli($server, $username, $password, $dbname);

if($conn->connect_error) {
    echo "Connection Failed!";
}

?>