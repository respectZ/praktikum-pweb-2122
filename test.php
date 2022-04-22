<?php
if($_POST["username"]) {
    echo $_POST["username"];
} else {
    echo "gak punya username";
}

echo $_POST["username"] ?? "gak punya username";
?>