
<?php
// Start a session
session_start();

// Check if the user is already authenticated and redirect them to the appointment page if so
if (isset($_SESSION['authenticated']) && $_SESSION['authenticated'] === true) {
    header("Location: appointment.php");
    exit;
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Perform user authentication 
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate username and password 
    if ($username === 'admin' && $password === 'password') {
        $_SESSION['authenticated'] = true;
        header("Location: appointment.php");
        exit;
    } else {
        $error = "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <?php if

 (isset($error)) echo "<p>$error</p>"; ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br>

        <input type="submit" value="Login">
    </form>
</body>
</html>
