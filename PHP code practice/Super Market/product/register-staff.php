<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registar Staff</title>
</head>
<body>
    

<?php 
  
  $conn = mysqli_connect('localhost','root','','super_market');

  $username = $fname = $lname = $email = $sex = $pass1 = $pass2 =  $position = $passpot= '';
  $error = array('username'=>'', 'fname'=>'', 'lname'=>'', 'email'=>'', 'sex'=>'', 'pass1'=>'', 'pass2'=>'', 'position'=>'', 'passpot'=>'');


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

      
      if (empty($_POST['passpot'])){
        $error['passpot'] = 'Passpot not filled <br />';
     }else{
        $passpot = $_POST['passpot'];
    }

    if (empty($_POST['position'])){
        $error['position'] = 'Position not filled <br />';
     }else{
        $position = $_POST['position'];
    }
      
      
      if ($pass1 != $pass2){
          $error['pass2'] = 'Password doesnt match';
      }

      //Query assignment
      if (array_filter($error)){

      }else{
          $sql = "INSERT INTO user(userName,fName,lName,email,PASSWORD,sex, category, passport ) VALUES ('S.$username ','$fname','$lname','$email','$pass1','$sex','$position ','$passpot ')";
      
          $quer = mysqli_query($conn,$sql);
          
          if ($quer){
            $error['position']  = 'Succecfull register Staff';
          }
          else{ 
            $error['position']  = ' Staff Not  registered';
          }
     
      }
      
  }
?>

<style>
    .fom{
        border-style: solid;
        background-color: aliceblue;
        width: 400px;
        border-radius: 10px;
        margin:110px;
        margin-left: 440px;
    }
    .fom-center{
        padding-left: 40px;
    }

    .fom-center input{
        width: 300px;
        margin-bottom: 20px;
        border-top: none;
        border-left:  none;
        border-right: none;
        border-radius: 3px;
        background-color: transparent;
    }

    .fom-center h1{
        margin-left: 95px;
    }
    .btn{
        margin-left: 250px;
        margin-bottom: 5px;
        background-color: rgb(88, 64, 110);
        width:80px;
        height:30px;
        border-radius: 15px;
    }

    .btn a{
      color: white;
      text-decoration: none;
    }

    .btn : hover{
      background-color: white;
    }



</style>
                     


<section class="fom ">
  <div class="fom-center" >
      <form action="register-staff.php" method="post">

          <h1 class="text-center"> Register Staff</h1>
          
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

          <label class="count">Position</label>  
            <select name = "position">
<?php

    $selectql = "SELECT * FROM position ";

    $quel =mysqli_query($conn,$selectql);

    if($quel){
        if(mysqli_num_rows($quel) > 0){
            $count = 0;

            while($d = mysqli_fetch_array($quel)){
                $count++;  
                ?>
                    <option value=""> --select position --- </option>
                    <option value="<?php echo $d['id']; ?>"> <?php echo $d['p_name']; ?> </option>
              
                <?php
            }
        }

        else{
            echo 'data not found';
        }
    }
    
?>
      </select><br><br>

          <label for="">Passport size</label><br>
          <input type="file" name = "passpot" ><br><br>
          <div style =" color: red;"><?php echo $error['position']  ?></div><br>

          <input type="submit" value="Register" name="f5" style ='margin-bottom: 10px; background-color: rgb(45, 46, 48); color: azure;'>
      </form>
      <button class ='btn'><a href="../admin.php">Home</a></button>

  </div>

</section>

</body>
</html>

