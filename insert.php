<?php
include_once("db.php");
session_start();

if(!isset($_SESSION["username"])) {
    header("Location: index.php");
}
if(isset($_POST["title"]) && isset($_POST["description"]) && isset($_POST["language_id"])) {
    if(!empty($_FILES["gambar"]["tmp_name"])) {
        $destination = "img/" . basename($_FILES["gambar"]["name"]);
        if(move_uploaded_file($_FILES["gambar"]["tmp_name"], $destination)) {
            $query = "INSERT INTO film(title, description, language_id, img) VALUES(?, ?, ?, ?)";
            $stmt = $conn->prepare($query);
            $stmt->execute([$_POST["title"], $_POST["description"], $_POST["language_id"], $destination]);
            header("Location: index.php");
        }
    }
} else {
    http_response_code(400);
}
?>