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
        ?>

    <div class="fom">
        <div class="fom-center">
            <form action="update-product.php" method = 'post' enctype='multiple/'>
                <h1 class = "text-center" >New Products</h1>
                <input type="text"  name='prodUpdat' placeholder="Enter name of the product" required ><br><br>

                <textarea name="desc" id="" cols="30" rows="10" placeholder ="Enter descriptions of the product" ></textarea><br><br>

                <input type="file"  name='files' ><br><br>

                <input type="submit" name ='update' value = 'update' style="background-color: rgb(88, 64, 110); color: white;" >

            </form>
            <button class ='btn'><a href="../admin.php">Home</a></button>

        </div>
    </div>
    
</body>
</html>