<?php
session_start();

// Dummy credentials for now
$admin_username = "admin";
$admin_password = "password123";
$error = "";

// Handle login submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = trim($_POST["username"] ?? "");
    $password = trim($_POST["password"] ?? "");

    if ($username === $admin_username && $password === $admin_password) {
        $_SESSION["admin_logged_in"] = true;
        header("Location: admin.php");
        exit;
    } else {
        $error = "Invalid username or password.";
    }
}

// If already logged in, redirect to dashboard
if (isset($_SESSION["admin_logged_in"]) && $_SESSION["admin_logged_in"] === true) {
    header("Location: admin.php");
    exit;
}
?>