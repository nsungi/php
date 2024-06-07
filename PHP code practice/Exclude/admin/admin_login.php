
<?php
// Add the necessary PHP code to handle admin login
session_start();

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the submitted username and password
    if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Perform the admin login verification
    if (verifyAdminLogin($username, $password)) {
        // Admin login successful
        $_SESSION['admin_logged_in'] = true;
        header('Location: admin_dashboard.php'); // Redirect to the admin dashboard
        exit();
    } else {
        // Admin login failed
        $error = "Invalid username or password";
    }
}

// Function to verify admin login credentials
function verifyAdminLogin($username, $password) {
    // Replace this with your own logic to verify the admin login
    $adminUsername = "admin1";
    $adminPassword = "admin123";

    if ($username === $adminUsername && $password === $adminPassword) {
        return true; // Admin login verified
    } else {
        return false; // Admin login failed
    }
}

}


?>

<!DOCTYPE html>
<html>
<head>
  <title>Admin Login</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h1>Admin Login</h1>

    <!-- Admin Login Form -->
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" name="username" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" name="password" class="form-control" required>
      </div>
      <button type="submit" name="login" class="btn btn-primary">Login</button>
    </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>