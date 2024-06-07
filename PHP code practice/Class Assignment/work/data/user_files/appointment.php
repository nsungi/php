
<?php
 include 'header.php' ;

?>


<div class="container-fluid">
  <h1></h1>
  <p></p>
  <p></p>
  <div class="row">



    <div class="col-sm-7 mb-4" style="background-color: wheat;"> 

    <p>Feel free to ask any question relating to Agro business issues
    </p>

    <p>if you have any question and you likely to ask us, please have you to fill the appointment
        book page so as our manager may schedule for your appointment.</p>
        
    <p>In addition if you have a quick and immediate issues about our company, you may contact us 
        via <a href="contact.php">contact us</a>
    </p>
  
 

  </div>

  <div class="col-sm-5" style="background-color:white";>

  
<div>
    <h4 style="color:darkgray;">Book now for your appointment</h4>


    <!DOCTYPE html>
<html>
<head>
 
  <link rel="stylesheet" type="text/css" href="../assets/css/appointment.css">
</head>
<body>
   
  
  <form id="appointmentForm">
    <label for="name">username:</label>
    <input type="text" id="name" name="name" required>

    <label for="email">Email:</label> 
    <input type="email" id="email" name="email" required> 

    <label for="time">Time:</label> 
    <input type="time" id="time" name="time" required> 

    <label for="message">Enter your description message:</label> 
    <textarea id="message" name="message"></textarea> 

    <input type="submit" value="Book Appointment"> 
  </form>

  <script src="../assets/js/script.js"></script>
</body>
</html>

  

</div>





</div>





  </div>




<?php
 
 include 'footer.php';
 
 ?>
 
 