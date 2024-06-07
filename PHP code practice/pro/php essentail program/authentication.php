










// if the user clicks on the sign up button
if(isset($_POST['signup-btn'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordConf = $_POST['passwordConf'];

    // Validation
    if(empty($username)){
        $errors['username'] = "username required";

    } 
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors['email'] = "Email address iis invalid";

    }

    if(empty($email)){
        $errors['email'] = "Email required";

    }

} if(empty($password)){
        $errors['password'] = "password required";

}

if(password != $passwordConf){
    $errors['password'] = "the password do not match";
}












<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>


// Create a message
$message = (new swift_message('verify your email address'))
->setFrom(Email)
->setTo($userEmail)
->setBody($body, 'text/html');

// Send the message
$result = $mailer->send($message);








//if the user clicks on the forgot password
if(isset($_POST['forgot-password'])){
    $email = $_POST['email']

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors['email'] = "Email address is invalid";

    }

if(empty($email)){
    $errors['Email'] = "Email required";
}

if(count($errors)==0){
    $sql = "SELECT * FROM users WHERE email = '$email' LIMIT 1";
    $result = mysqli_querry($conn, $sql);
    $user = mysqli_fetch_assoc($result);
    $token = $user['token'];
    sendPasswordResetLink($email, $token);
    header('location: password_message.php');
    exit(0);
 }

}

function resetPassword($token){
    global $conn;
    $sql = "SELECT * FROM users WHERE token = '$token' LIMIT 1";
    $result = mysqli_querry($conn, $sql);
    $user = mysqli_fetch_assoc($result);
    $_SESSION['email'] = $user['email'];
    header('location: reset_password.php');
    exit(0); 
}







