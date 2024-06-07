<!-- 
<?php
// define variables and set to empty values
$Message = $ErrorUname = $ErrorPass = $ErrorEmail = $ErrorName = "";
$username = $password = $email = $fullname = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["username"])) {
    $ErrorUname = "Userame is required";
  } else {
    $username = check_input($_POST["username"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z0-9_]*$/",$username)) {
      $ErrorUname = "Space and special characters not allowed but you can use underscore(_)."; 
    }
	else{
		$fusername=$username;
	}
  }
  
  if (empty($_POST["password"])) {
    $ErrorPass = "Password is required";
  } else {
    $fpassword = check_input($_POST["password"]);
  }
  
  if (empty($_POST["email"])) {
    $ErrorEmail = "Email is required";
  } else {
    $email = check_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $ErrorEmail = "Invalid email format"; 
    }
	else{
		$femail=$email;
	}
  }
    
 if (empty($_POST["fullname"])) {
    $ErrorName = "Full name is required";
  } else {
    $fullname = check_input($_POST["fullname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$fullname)) {
      $ErrorName = "Only letters and white space allowed"; 
    }
	else{
		$ffullname=$fullname;
	}
  }
  
  if ($ErrorUname!="" OR $ErrorPass!="" OR $ErrorEmail!="" OR $ErrorName!=""){
	$Message = "Registration failed! Errors found";
  }
  else{
  include('conn.php');
  mysqli_query($conn,"insert into `user` (username,password,email_add,fullname) values ('$fusername','$fpassword','$femail','$ffullname')");
  $Message = "Registration Successful!";
  }
}

function check_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>


//
<?php 
    include 'templets/base.php';

    $username = $password ='';
    $error = array('username'=> '','password'=>'');

    if(isset($_POST['f5'])){

        //assign OR take the data from User
        if (empty($_POST['username'])){
            $error['username'] = "you didn't fill here";
        }else{
            $username = $_POST['username'];
            //if (!preg_match('/^[a-zA-Z\s]+$/', $username)){
               // $error['username'] = 'username should containe latter and space';
           // }
        }

       if (empty($_POST['password'])){
        $error['password'] = "you didn't fill the password ";
       }else{
        $pass = $_POST['password'];
       
    
            //query 
            
            $query_select="SELECT * FROM user WHERE userName='$username' AND password='$pass'";
            $query_check=mysqli_query($conn,$query_select);
            if ($query_check==true) {
                // code...
             if (mysqli_num_rows($query_check)) {
                 $row=mysqli_fetch_array($query_check);
                 $_SESSION['id']=$row['id'];
                        $_SESSION['role']=$row['category'];
                        $_SESSION['fname']=$row['fName'];
                        if ($_SESSION['role']==='Admin') {
                            // code...
                            header("location:admin.php");
                        }
                        
                        else if ($_SESSION['role']==='Manager') {
        
                            header("location:manager.php");
        
                        }
                        else if ($_SESSION['role']==='StoreKeeper') {
                            // code..
                            header("location:storekeeper.php");
                        }
                        } 
                      }
            
                  else{
                        $_SESSION['invalidMSG']=$invalidMSG;
                        echo"<script>window.location='index.php'</script>";
                      
                        }
                    }
                }
?> -->
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">  <i class="bi bi-house-fill"></i>Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Feedback</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Comments</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Questions</a>
                        </li>
                    </ul>
                    
                </div>
            <hr>
        </div>

    </section>

<section class="cont ">
    <div class="fom" >
        <form action="login.php" method="post">

            <h1 class="text-center"> Login </h1>
            
            <input type="text" name="username" placeholder="Enter Username" requred value="<?php echo $username; ?>"><i class="bi bi-person-fill"></i>
            <div style =" color: red;"><?php echo $error['username']; ?></div><br>

            <input type="text" name="password" placeholder="Enter Password" requred > <i class="bi bi-unlock"></i>
            <div style =" color: red;"><?php echo $error['password']; ?></div><br>

            <input type="submit" value="Login" name="f5" style ='margin-bottom: 10px; background-color: rgb(45, 46, 48);color: white;'>

            <h2 class="text-center">Dont have accounts</h2>
           
            <button class="btn bg-secondary"" style ='margin-bottom: 10px;'> <a href="signup.php">forget password</a></button>
            <button class="btn bg-secondary" style ='margin-bottom: 10px;'> <a href="signup.php">signUp</a></button>
            
        </form>
    </div>

    <div class="contentIn">
       
        <h1>Efficent. <br>Delivery Fast.  <br> On Time</h1>
        <p>If you need anything we are anything. <br> remember your password</p>

    </div>
</section>

<?php 
    //include the bottom part
    include 'templets/footer.php';
?>