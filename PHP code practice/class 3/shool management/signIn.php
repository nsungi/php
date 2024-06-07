
<?php
// Start session if not already started
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Include necessary files
include 'accountBase/base.php';

// Initialize variables
$email = $password = $pass = '';
$error = array('email' => '', 'password' => '');

// Handle form submission
if (isset($_POST['f5'])) {
    // Take the data from the form
    if (empty($_POST['email'])) {
        $error['email'] = 'Email is not filled <br />';
    } else {
        $email = $_POST['email'];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error['email'] = 'Email must be a valid email address <br />';
        }
    }

    if (empty($_POST['password'])) {
        $error['password'] = "You didn't fill the password";
    } else {
        $pass = $_POST['password'];
    }

    // Query the database
    $sql = "SELECT * FROM user WHERE email = '$email' AND PASSWORD ='$pass' LIMIT 1 ";
    $quer = mysqli_query($conn, $sql);

    if ($quer) {
        if (mysqli_num_rows($quer) > 0) {
            $d = mysqli_fetch_array($quer);

            // Set session variables
            $_SESSION['Uid'] = $d['userID'];
            $_SESSION['role'] = $d['role'];
            $_SESSION['Time'] = date('Y-m-d H:i:sa');

            // Redirect based on role
            $role = $_SESSION['role'];
            if ($role == 'STUDENT') {
                header('location: student/student-home.php');
                exit;
            } elseif ($role == 'ADMIN') {
                header('location: admin/admin.php');
                exit;
            } else {
                header('location: teacher/teacher-home.php');
                exit;
            }
        } else {
            $error['password'] = "Incorrect email or password";
        }
    } else {
        // Handle database query error
        $error['database'] = "Database query error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- Bootstrap CSS Online Link -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Inline Styles -->
    <style>
        /* Add your custom inline styles here */
        body {
            background-color: #f8f9fa; /* Light gray background */
        }
        .logo img {
            max-width: 100px; /* Adjust the logo size */
        }
        .card {
            border: 1px solid #ccc; /* Add border to the card */
            border-radius: 10px; /* Rounded corners */
        }
        /* Add more custom styles as needed */
    </style>
</head>
<body>

<main>
    <div class="container">
        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                        <div class="d-flex justify-content-center py-4 logo">
                            <a href="index.html" class="d-flex align-items-center w-auto">
                                <img src="assets/img/logo.png" alt="">
                                <span class="d-none d-lg-block">SCHOOL</span>
                            </a>
                        </div><!-- End Logo -->

                        <div class="card mb-3">

                            <div class="card-body">

                                <div class="pt-4 pb-2">
                                    <h5 class="card-title text-center pb-0 fs-4">Login an Account</h5>
                                    <p class="text-center small">Enter your personal details to login</p>
                                </div>

                                <form class="row g-3 needs-validation" novalidate action="signIn.php" method="post">

                                    <div class="col-md-12">
                                        <div class="form-floating">
                                        <label for="floatingName">Email</label>
                                            <input type="text" class="form-control" id="floatingName" placeholder="Email" name='email' required value="<?php echo $email ?>">
                                          
                                            <div style="color: red;"><?php echo $error['email'] ?></div><br>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-floating">
                                        <label for="floatingName">Create Password</label>
                                            <input type="password" class="form-control" id="inputPassword4" placeholder="Create Password" name="password" required>
                                            
                                            <div style="color: red;"><?php echo $error['password'] ?></div><br>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <input class="btn btn-primary w-100" type="submit" name="f5" value="Login">
                                    </div>
                                    <div class="col-12">
                                        <p class="small mb-0">I don't have an account? <a href="Account/signUp.php">SignUp</a></p>
                                    </div>
                                </form>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

    </div>
</main><!-- End #main -->

<!-- Bootstrap JS Online Link (if needed) -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

<?php
include 'accountBase/footer.php';
?>
