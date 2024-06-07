<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping</title>

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

    <link href="style.css" rel="stylesheet">

</head>
<body>
    <?php 
        session_start();
    ?>

    <section id="topbar" class="bod ">
        <div class="navbar naiva d-fixed" >
            
                <div class="icon" >
                    <h1><i>Shop~Center</i></h1>
                </div>

                <div class = "links">

                    <ul class="nav justify-content-center ">
                       
        <?php 
            $conn = mysqli_connect('localhost','root','','super_market');

            if (!$conn){
                echo " connection error";
            }
        ?>
      

