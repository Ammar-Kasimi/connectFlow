<?php
require_once "config.php";
session_start();
if (!isset($_SESSION["username"])) {
    header("location: login.php");
    exit;
}
$stmt = $pdo->prepare("select * from users where username = ? ");
$stmt->execute([$_SESSION["username"]]);
$result = $stmt->fetch();

if (!$result) {
    header("Location: login.php");
    exit;
}
$user = htmlspecialchars($result["username"]);
$registere_date = date("d/m/Y", strtotime($result["created_at"]));

$last_login = date("H:i", strtotime($result["login_time"]));
?>