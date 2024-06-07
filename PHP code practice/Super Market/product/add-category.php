<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upload product</title>
</head>
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

    .fom-center textarea{
        width: 300px;
        margin-bottom: 20px;
        border-top: none;
        border-left:  none;
        border-right: none;
        border-radius: 3px;
        background-color: transparent;
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
<body>
    
<?php 
            $conn = mysqli_connect('localhost','root','','super_market');

            if (!$conn){
                echo " connection error";
            }


            $c_name ='';
            $error = array('c_name'=>'');
          
          
            if (isset($_POST['category'])){
          
                //Assign to php variables
                if (empty($_POST['c_name'])){
                    $error['c_name'] = 'username is empty <br />';
                }else{
                    $c_name = $_POST['c_name'];
                        if (!preg_match('/^[a-zA-Z\s]+$/', $c_name)){
                            $error['c_name'] = 'category should contain latter and Space <br />';
                        }
                        
                }
             
                //Query assignment
                if (array_filter($error)){
          
                }else{
                    $sql = "INSERT INTO category(c_name) VALUES ('$c_name ')";
                
                    $quer = mysqli_query($conn,$sql);
                    
                    if ($quer){
                      $error['c_name'] = 'Succesfull adding';
                    }
                    else{ 
                      $error['c_name'] = 'Category where not added';
                    }
               
                }
                
            }
          ?>
        

    <div class="fom">
        <div class="fom-center">
            <form action="add-category.php" method = 'post' enctype='multiple/'>
                <h1 class = "text-center" >Update Products</h1>
                <input type="text"  name='c_name' placeholder="Enter New Category" required ><br><br>
                <div style =" color: red;"><?php echo $error['c_name'] ?></div><br>

                <input type="submit" name ='category' value = 'Add Category' style="background-color: rgb(88, 64, 110); color: white;" >

            </form>
            <button class ='btn'><a href="../admin.php">Home</a></button>
        </div>
    </div>

    
</body>
</html>