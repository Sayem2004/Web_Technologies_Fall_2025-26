<?php
session_start();

$errors = [];

$name = trim($_POST['name'] ?? "");
$email = trim($_POST['email'] ?? "");
$password = $_POST['password'] ?? "";
$confirm = $_POST['confirm_password'] ?? "";
$gender = $_POST['gender'] ?? "";

// Validation
if ($name=="" || $email=="" || $password=="" || $confirm=="" || $gender=="") {
    $errors[] = "All fields are required.";
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Invalid email format.";
}

if ($password !== $confirm) {
    $errors[] = "Passwords do not match.";
}

// If error → back
if (!empty($errors)) {
    $_SESSION['errors'] = $errors;
    header("Location: register.php");
    exit;
}

// Success
$name = htmlspecialchars($name);
$email = htmlspecialchars($email);
$gender = htmlspecialchars($gender);

echo "<h2 style='color:green;'>Registration Successful</h2>";
echo "<p>Name: $name</p>";
echo "<p>Email: $email</p>";
echo "<p>Gender: $gender</p>";
?>
