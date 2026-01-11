<?php
session_start();

// Only errors
$errors = $_SESSION['errors'] ?? [];
unset($_SESSION['errors']);
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
</head>
<body>

<h2>User Registration Form</h2>

<?php
if (!empty($errors)) {
    foreach ($errors as $e) {
        echo "<p style='color:red;'>$e</p>";
    }
}
?>

<form method="post" action="register_validation.php">

    Name:<br>
    <input type="text" name="name"><br><br>

    Email:<br>
    <input type="text" name="email"><br><br>

    Number:<br>
    <input type="number" name="number"><br><br>

    Password:<br>
    <input type="password" name="password"><br><br>

    Confirm Password:<br>
    <input type="password" name="confirm_password"><br><br>

    Gender:<br>
    <input type="radio" name="gender" value="Male"> Male<br>
    <input type="radio" name="gender" value="Female"> Female<br>
    <input type="radio" name="gender" value="Other"> Other<br><br>

    <input type="submit" value="Register">
</form>

</body>
</html>
