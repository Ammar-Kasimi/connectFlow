<?php require_once "config.php";
$message = "";
if ($_SERVER['REQUEST_METHOD'] != "POST") header("Location: register.php");
$user = $_POST['username'];
$pass = $_POST['password'];
$stmt = $pdo->prepare("select username from users where username = ? ");
$stmt->execute([$user]);
$result = $stmt->fetchAll();
if (Count($result) > 0) {
    echo $message = "this username is already taken";
} else {
    $password = password_hash($pass, PASSWORD_DEFAULT);
    $stmt = $pdo->prepare("insert into users(username,password) values (?,?)");
    $stmt->execute([$user, $password]);
    header("Location: login.php");
};
