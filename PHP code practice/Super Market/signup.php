<?php 
    include 'templets/base.php';

    $username = $fname = $lname = $email = $sex = $pass1 = $pass2 ='';
    $error = array('username'=>'', 'fname'=>'', 'lname'=>'', 'email'=>'', 'sex'=>'', 'pass1'=>'', 'pass2'=>'');


    if (isset($_POST['f5'])){

        //Assign to php variables
        if (empty($_POST['username'])){
            $error['username'] = 'username is empty <br />';
        }else{
            $username = $_POST['username'];
                if (!preg_match('/^[a-zA-Z\s]+$/', $username)){
                    $error['username'] = 'username should contain latter and Space <br />';
                }
                
                if (!$username > 4 && !$username < 20){
                    $error['username'] = 'username should range (5-20 character)';
                }
            
        }

        if (empty($_POST['fname'])){
            $error['fname'] = 'First name is empty <br />';
        }else{
            $fname = $_POST['fname'];
                if(!preg_match('/^[a-zA-Z\s]+$/',$fname)){
                    $error['fname'] = 'First name  should contain letter <br /> ';
                }
        }

        if (empty($_POST['lname'])){
            $error['lname'] = 'last name is empty <br />';
        }else{
            $lname = $_POST['lname'];
                if(!preg_match('/^[a-zA-Z\s]+$/', $lname)){
                    $error['lname'] = 'last name should contain letter <br />';
                }
        }

        if (empty($_POST['email'])){
            $error['email'] = 'Email is not fill <br />';
        }else{
            $email = $_POST['email'];
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    $error['email'] = 'Email must be valid email address <br />';
                }
        }
      
        if (empty($_POST['sex'])){
            $error['sex'] = 'You have not fill the Sex option <br />';
        }else{
            $sex = $_POST['sex'];
        }

        if (empty($_POST['pass1'])){
            $error['pass1'] = 'Password not created <br /> ';
        }else{
            $pass1 = $_POST['pass1'];
        }

        if (empty($_POST['pass2'])){
            $error['pass2'] = 'Password not confirmed <br />';
        }else{
            $pass2 = $_POST['pass2'];
        }
        
        if ($pass1 != $pass2){
            $error['pass2'] = 'Password doesnt match';
        }else{
            $pass_hash = password_hash($pass1,  PASSWORD_DEFAULT);
        }

        //Query assignment
        if (array_filter($error)){

        }else{
            $sql = "INSERT INTO user(userName,fName,lName,email,PASSWORD,sex, category, passport ) VALUES ('$username ','$fname','$lname','$email','$pass1','$sex','Normal','Null')";
            
            $quer = mysqli_query($conn,$sql);
            
            if ($quer){
                header ('location: login.php');
            }
            else{ 
                echo "fail";
            }
       
        }
        
    }
?>
                        <li class="nav-item">
                            <a class="nav-link" href="signup.php">Feedback</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="signup.php">Comments</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="signup.php">Questions</a>
                        </li>
                    </ul>
                    
                </div>
            <hr>
        </div>

    </section>


<section class="cont ">
    <div class="fom" >
        <form action="signup.php" method="post">

            <h1 class="text-center"> Register</h1>
            
            <input type="text" name="username" placeholder="Create a Username" requred value ="<?php echo $username?>">
            <div style =" color: red;"><?php echo $error['username'] ?></div><br>

            <input type="text" name="fname" placeholder="Enter First Name" requred value ="<?php echo $fname?>">
            <div style =" color: red;"><?php echo $error['fname'] ?></div><br>

            <input type="text" name="lname" placeholder="Enter Last Name" requred value ="<?php echo $lname?>">
            <div style =" color: red;"><?php echo $error['lname'] ?></div><br>

        
            <input type="text" name="email" placeholder="Enter Email" requred value ="<?php echo $email?>">
            <div style =" color: red;"><?php echo $error['email'] ?></div><br>

            <input type="text" name="pass1" placeholder="Create a Password" requred value ="<?php echo $pass1?>" >
            <div style =" color: red;"><?php echo $error['pass1'] ?></div><br>

            <input type="text" name="pass2" placeholder="Confirm Password" requred ">
            <div style =" color: red;"><?php echo $error['pass2'] ?></div><br>

            <select name="sex" id="">
                <option value="">sex type</option>
                <option value="M">Male</option>
                <option value="F">Female</option>
            </select>
            <div style =" color: red;"><?php echo $error['sex'] ?></div><br>
            
            <input type="submit" value="Register" name="f5" style ='margin-bottom: 10px; background-color: rgb(45, 46, 48); color: azure;'>
        </form>
    </div>

    <div class="contentUp">
       
        <h1>Join. <br> Shopping~center. <br>Delivery Free</h1>
        <!-- <img class=" w-100" src="img/sup2.jpg" alt="male clise" class= "rounded img-fluid"> -->
        <p>If you need anything we are anything. <br> remember your password</p>

    </div>
</section>
<?php 
 

        //including the footer parts 
    include 'templets/footer.php';
?>