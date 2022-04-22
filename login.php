<?php
include_once("db.php");
session_start();

if(isset($_SESSION["username"])) {
    header("Location: index.php");
}
if(isset($_POST["email"]) && isset($_POST["password"])) {
    $query = "SELECT * from staff WHERE email = ? AND password = ?";
    $stmt = $conn->prepare($query);
    $stmt->execute([$_POST["email"], md5($_POST["password"])]);
    $result = $stmt->fetch();
    if($result) {
        $_SESSION["username"] = $result["username"];
        echo "ok";
    header("Location: index.php");
} else {
        http_response_code(400);
    }
} else {
    http_response_code(400);
}
?>