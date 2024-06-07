
<?php 
        include '../accountBase/base.php';

    $fname = $lname = $email = $sex = $pass1 = $pass2 ='';
    $error = array( 'fname'=>'', 'lname'=>'', 'email'=>'', 'sex'=>'', 'pass1'=>'', 'pass2'=>'');

    // Function to check if email exists
    function emailExists($email, $conn) {
        $sql = "SELECT COUNT(*) as count FROM user WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        return $row['count'] > 0;
            } // end of the functions

    if (isset($_POST['f5'])){

        //Assign to user validations variables

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
        }
        

        // Check if email exists
        if (emailExists($email, $conn)) {
            $error['email'] = "Email already exists, please choose another one.";
        } else {
            //Query assignment
            if (array_filter($error)){

            }else{
                $sql = "INSERT INTO user(firstName,lastName,email,password,sex,role) VALUES ('$fname','$lname','$email','$pass1','$sex','STUDENT')";
            
                $quer = mysqli_query($conn,$sql);
                
                if ($quer){
                    header ('location: ../signin.php');
                }
                else{ 
                    echo "fail";
                }
            
            }
        }
        
    }
?>

<main>
    <div class="container">
    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">

        <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

            <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                <img src="assets/img/logo.png" alt="">
                <span class="d-none d-lg-block">ICTB</span>
                </a>
            </div><!-- End Logo -->

            <div class="card mb-3">

                <div class="card-body">

                    <div class="pt-4 pb-2">
                        <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                        <p class="text-center small">Enter your personal details to create account</p>
                    </div>

                    <form class="row g-3 needs-validation" novalidate action="signUp.php" method = "post">

                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingName" placeholder="First Name" name = 'fname' require value ="<?php echo $fname?>">
                                <label for="floatingName">First Name</label>
                                <div style =" color: red;"><?php echo $error['fname'] ?></div><br>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingName" placeholder="Last Name" name = 'lname' requred value ="<?php echo $lname?>">
                                <label for="floatingName">Last Name</label>
                                <div style =" color: red;"><?php echo $error['lname'] ?></div><br>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingName" placeholder="Email" name='email' require value ="<?php echo $email?>">
                                <label for="floatingName">Email</label>
                                <div style =" color: red;"><?php echo $error['email'] ?></div><br>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type="password" class="form-control"  id="inputPassword4" placeholder="Create Password" name ="pass1" require value ="<?php echo $pass1?>">
                                <label for="floatingName">Create Password</label>
                                <div style =" color: red;"><?php echo $error['pass1'] ?></div><br>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type="password" class="form-control"  id="inputPassword4" placeholder="Confirm Password" name="pass2">
                                <label for="floatingName">Confirm Password</label>
                                <div style =" color: red;"><?php echo $error['pass1'] ?></div><br>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-floating mb-3">
                            <select class="form-select" id="floatingSelect" aria-label="State" name="sex" require>
                                <option selected>Click to select</option>
                                <option value="M">Male</option>
                                <option value="F">Female</option>
                            </select>
                            <label for="floatingSelect">Sex</label>
                            <div style =" color: red;"><?php echo $error['sex'] ?></div><br>
                            </div>
                        </div>
                        
                        <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                            <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">terms and conditions</a></label>
                            <div class="invalid-feedback">You must agree before submitting.</div>
                        </div>
                        </div>
                        <div class="col-12">
                            <input class="btn btn-primary w-100" type="submit" name="f5" value ="Create Account">
                        </div>
                        <div class="col-12">
                        <p class="small mb-0">Already have an account? <a href="../signIn.php">Login</a></p>
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
<?php
    include '../accountBase/footer.php'
    ?>




