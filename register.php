<?php

$conn = mysqli_connect("127.0.0.1", "melvin", "engerydrinks.se", "webbshop");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    $query = "INSERT INTO users (email, username, password) VALUES ('$email', '$username', '$password')";
    $conn->query($query);
}

?>

<div id="registerContainer">
    <form method="POST">
        <input type="email" name="email" id="emailInput" placeholder="Email">
        <input type="text" name="username" id="usernameInput" placeholder="Username">
        <input type="password" name="password" id="PasswordInput" placeholder="Password">
        <button type="submit">submit</button>
    </form>
    <a href="?page=login">logga in här</a>
</div>