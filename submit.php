<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $response = "Thanks for submitting your name, $name!";

    // Check if the user wants to become an admin
    if (strpos($_COOKIE["user"], "admin") !== false) {
        setcookie("user", "admin", time() + 3600); // Set "user" cookie to "admin" for 1 hour
    }

    echo $response;
}
?>

