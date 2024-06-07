


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href = "../boottutorial/bootstrap-5.2.0-dist/css/bootstrap.css">
    <title>Recover your password</title>

 
</head>
<body>
  
<div class="container" >
    <div class="row">
    <div class="col-md-3 my-2">
        <form action="forgot_password" method="post">
            <h3 text-center> Please enter your login email </h3>
            <p>
                Please enter your email address you used to sign up in this site 
                and we will assist you in recovering your password.
            </p>
            
<div class = "mb-3">
            <label for="email" class ="form-group" > Email:</label>
            <input type="email"  name ="email" class="form-control" required >
</div>

 

            <div class = "mb-3">
            <label for="password" class ="form-group" >Password:</label>
            <input type="password" name ="password" class = "form-control"  required>
</div>

<div class = "form-group">
<button type="Submit" name="forgot password" class = "btn btn-primary text-white" >
    <div><a href="reset_password.php"></a></div>Recover your password
</button>




</div>
 
 
</form>
    </div>
</div>

<script src="../boottutorial/bootstrap-5.2.0-dist/js/bootstrap.bundle.js"></script>

</body>
</html>

