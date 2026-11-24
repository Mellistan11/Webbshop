<?php

session_start();



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EneryDrinks.se</title>
    <link rel="icon" type="image/png" href="Images/LogoSquare.png">
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body id="body">
    <script src="script.js" defer></script>

    <?php include "header.php"; ?>
    <div id="container">
        <?php include "sidebar.php"; ?>
        <?php
            $page = $_GET['page'] ?? 'home';
            if($page == "home") include "index.php";
            if($page == "login") include "login.php";
        ?>
    </div>
</body>
</html>
