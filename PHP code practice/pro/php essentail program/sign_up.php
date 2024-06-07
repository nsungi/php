<?php 


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href = "boottutorial/bootstrap-5.2.0-dist/css/bootstrap.css">
    <title>Signup</title>
</head>
<body>
  <div>
    <?php
  
  ?>
  </div>
<div class="container" >
    <div class="row">
    <div class="col-md-3 my-2">
        <form action="config.php" method="post">
            <h4 text-center> Please enter the valid detail </h4>
            
<div class = "mb-3">
            <label for="firstname" class ="form-group" ></label>FirstName:</label>
            <input type="text" name ="firstname" id="firstname" class = "form-control"  required="required" pattern="[A-Za-z]+$">
</div>
<div class = "mb-3">
            <label for="lastname" class ="form-group" >LastName:</label>
            <input type="text" name ="lastname" id="lastname" class = "form-control"  required>
</div>



            <div class = "mb-4">
            <label for="email" class ="form-group" >Email:</label>
            <input type="text" name ="email" class = "form-control" id="email" required = "email">
</div>

<div class="mb-4">
    <label for="phonenumber" class="form-group">Phone number:</label>
    <input type="text" name="phonenumber" class="form-control" id="phone number" >

</div>

            <div class = "mb-3">
            <label for="psdw" class ="form-group" >Password:</label>
            <input type="password" class="form-control" id="pswd" placeholder="Enter password" name="pswd" required>
            
            </div>

<div class = "mb-3">
            <label for="gender" class ="form-group" >Gender:</label>
<div>
            <label for="male" class="radio-inline"><input type="radio" name="gender" id="male">Male</label>
            <label for="female" class="radio-inline"><input type="radio" name="gender" id="female">Female</label>
            <label for="others" class="radio-inline"><input type="radio" name="gender" id="others">others</label>

 </div>
           

<button type="submit" class = "btn btn-primary text-white">Submit</button>
<button type="reset" class = "btn btn-secondary text-white">Reset</button>
</div class="col-sm-4 mx-3 mt-2">

    </div>
 
    </div>
    </form>
  </body>
</html>