
<?php

include ('header.php');
 

require '../data_db/db_config.php';
if(isset($_POST["submit"])) {
    $username = $_POST(["username"]);
    $email =  $_POST(["email"]);
    $password = $_POST(["password"]);
    $confirmpassword = $_POST(["confirmpassword"]);
    $duplicate = mysqli_query($conn, "SELECT 8 FROM tb_user WHEREusername = '$username' OR email = '$email'");
    if(mysqli_num_rows($duplicate) > 0) {
        echo 
        "<script> alert('username or email has already taken'); </script>";
    }
    else {
        if ($password == $confirmpassword) {
            $query = "INSERT INTO tb_user VALUES ('', '$username', '$email', '$password');";
            mysqli_query($conn, $query);
            echo 
            "<script> alert('Registration successful'); </script>";
        }
        else {
            echo 
            "<script> alert('password does not match'); </script>";
        }
    }
    
}
	 
?>

<body>

 
<div class="col-sm-4 m-5" >
 
 <form action="login.php" method="post">
                         
                           <div class="form-group">Username or email
                               <input type="text" class="form-control" placeholder="Enter Username or email" required="required">
                           </div>
                           <div class="form-group">Password
                               <input type="password" class="form-control" placeholder="Enter your Password" required="required">
                           </div>
                          <button class="btn btn-success ">Login</button>
                           <div class="text-center mt-2">
                               <a href="#">Forgot Your password?</a>
                           </div>
                         
                       </form>
 </div>
 </div>

<?php

include ('footer.php');

?>