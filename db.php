<?php

$server="localhost";
$username="192410103022";
$password="secret";
$db="uas192410103022";

try {
    $conn = new PDO("mysql:host=$server;dbname=$db", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "berhasil";
} catch(PDOException $e) {
    echo "err: " . $e->getMessage();
}

?>