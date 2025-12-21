<?php
require_once "config.php";
session_start();


if (isset($_POST["delete"])) {
    $stmt = $pdo->prepare("DELETE FROM contacts WHERE id = ? AND user_id = ?");
    $stmt->execute([$_POST["delete_id"], $_SESSION['id']]);
    header("location: contacts.php");
    exit;
}
if (isset($_POST["save"])) {
    $stmt = $pdo->prepare("insert into contacts(name,email,number,user_id) values (?,?,?,?)");
    $stmt->execute([$_POST["name"], $_POST["email"], $_POST["number"], $_SESSION["id"]]);
    header("location: contacts.php");
    exit;
}
if (isset($_POST["update"])) {
    $stmt = $pdo->prepare(" UPDATE contacts SET name = ?, email = ?, number = ? WHERE id = ? AND user_id = ?"); 
    $stmt->execute([$_POST["name"], $_POST["email"], $_POST["number"],$_POST["edit_id"], $_SESSION["id"]]);
    header("location: contacts.php");
    exit;
}

if (isset($_SESSION["id"])) {
    $stmt = $pdo->prepare("select * from contacts where user_id =?");
    $stmt->execute([$_SESSION["id"]]);
    $contacts = $stmt->fetchALl();
}
