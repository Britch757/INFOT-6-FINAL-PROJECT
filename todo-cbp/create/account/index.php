<?php
require("http://localhost/todo/db.php");

$username = $_POST["username"];
$password = $_POST["password"];

$add_account = $pdo->prepare("INSERT INTO accounts (username, passphrase) VALUES
(:username, AES_ENCRYPT(:password, 'yanyan'))");
$add_account->bindParam(':username', $username);
$add_account->bindParam(':password', $password);
$add_account->execute();

header("location:http://localhost/todo/signin");
?>