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
            if (!preg_match('/^[a-zA-Z\s]+$/', $username)){
                $error['username'] = 'username should containe latter and space';
                }
        }

        if (empty($_POST['password'])){
        $error['password'] = "you didn't fill the password ";
        }
        else{
        $pass = $_POST['password'];
        
    }
        

            //query 
            
            $user = "SELECT * FROM user WHERE userName = '$username' AND password = '$pass'";

            $uquer = mysqli_query($conn,$user);


            if ($uquer){
                if (mysqli_num_rows($uquer) > 0){

                    $role = mysqli_fetch_array($uquer);

                    //creation of session
                    $_SESSION["uid"] =  $role['id'];
                    $_SESSION["role"] =  $role['category'];
                
                      //condition for the divid user according with they are roles
                    if ($_SESSION["uid"] == 1){ 

                        header ('location: admin.php');
                    }

                    else if ( $_SESSION["role"] == 1){ 

                        header ("location: manager.php");
                    }

                    else if ( $_SESSION["role"]==2 ){

                        header ('location: aid.php');
                        
                    }

                    else if ( $_SESSION["role"]==3 ){
                        
                        header ('location: store.php');
                        
                    }

                    else if ( $_SESSION["role"] ==4){
                        
                        header ('location: cashier.php');
                        
                    }  else {

                        header ('location: home.php');
                        
                    }
                }
                else {

                    $error['password'] = "Incorrect username OR Password ";
    
                }
        
            }

        }
    
?>
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
           
            <button class="btn bg-secondary" style ='margin-bottom: 10px;'> <a href="signup.php">forget password</a></button>
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