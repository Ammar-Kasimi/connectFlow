<?php require_once 'config.php' ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ConnectSys</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #74ebd5 0%, #ACB6E5 100%);
            min-height: 100vh;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary bg-gradient shadow mb-5">
        <div class="container">
            <a class="navbar-brand fw-bold" href="index.php">ConnectSys</a>
            <div class="navbar-nav ms-auto">
                <a class="nav-link text-white" href="login.php">Connexion</a>
                <a class="nav-link text-white" href="register.php">S'inscrire</a>
                <a class="nav-link text-white" href="profile.php">Profil</a>
                <a class="nav-link text-white" href="contacts.php">Contacts</a>
            </div>
        </div>
    </nav>
    
    <div class="container">