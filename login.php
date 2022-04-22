<?php
session_start();
if(!isset($_SESSION["username"])) {
    if(isset($_POST["username"])) {
        $_SESSION["username"] = $_POST["username"];
        echo $_POST["username"];
    }
} else {
    echo "sesion";
}
// header("Location: index.php");
?>