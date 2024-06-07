

<?php
    include ('header.php');
    include '../data_db/db_config.php';
    



 
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

</head>
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
</body>
</html>

<?php

include ('footer.php');

?>
