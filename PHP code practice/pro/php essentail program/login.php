
<?php 

 


if(isset($_POST['username'])){

    $username = $_POST['email'];
    $password = $_POST['password'];

    $sql="SELECT * FROM applicants WHERE username='[".$email."' AND password='".$password."
	limit 1";
$result=mysql_querry($sql);

if(mysql_num_rows($result)==1){
    echo "you successfully logged in";
    exit();
}

else{
    echo "you entered invalid details!";
    exit();
}
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href = "../boottutorial/bootstrap-5.2.0-dist/css/bootstrap.css">
    <title>Login</title>
    
</head>
<body>
  
<div class="container" >
    <div class="row">
    <div class="col-md-3 my-2">
        <form action="login.php" method="post">
            <h4 text-center> Please enter your login detail </h4>
            
            
<div class = "mb-3">
            <label for="email" class ="form-group" >Username or Email:</label>
            <input type="@gmail.com" name ="email" class="form-control" required >
            <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
</div>

 

            <div class = "mb-3">
            <label for="password" class ="form-group" >Password:</label>
           <input type="password" class="form-control" id="password" placeholder="password" name="password" required>
           <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
</div>



<div class="form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox"> Remember me
    </label>
  </div>



<div class = "mb-3">
<button type="Submit" class = "btn btn-primary text-white">Login</button>
</div class="col-sm-4 my-2">

 
<p>Not yet a member? <a href="sign_up.php">Sign up</a></p>
<div><a href="forgot_password.php">Forgot password</a>
</div>


    </div>
</div>

<script src="../boottutorial/bootstrap-5.2.0-dist/js/bootstrap.bundle.js"></script>
</form>
</body>
</html>

