

<?php

include 'header.php';


// Functions to filter user inputs
function filterName($field){
    // Sanitize user name
    $field = filter_var(trim($field));
    
    // Validate user name
    if(filter_var($field, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        return $field;
    } else{
        return FALSE;
    }
}    
function filterEmail($field){
    // Sanitize e-mail address
    $field = filter_var(trim($field), FILTER_SANITIZE_EMAIL);
    
    // Validate e-mail address 
    if(filter_var($field, FILTER_VALIDATE_EMAIL)){
        return $field;
    } else{
        return FALSE;
    }
}
function filterString($field){
    // Sanitize string
    $field = filter_var(trim($field));
    if(!empty($field)){
        return $field;
    } else{
        return FALSE;
    }
}
 
// Define variables and initialize with empty values
$nameErr = $emailErr = $messageErr = "";
$name = $email = $subject = $message = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate user name
    if(empty($_POST["name"])){
        $nameErr = "Please enter your name.";
    } else{
        $name = filterName($_POST["name"]);
        if($name == FALSE){
            $nameErr = "Please enter a valid name.";
        }
    }
    
    // Validate email address
    if(empty($_POST["email"])){
        $emailErr = " ";     
    } else{
        $email = filterEmail($_POST["email"]);
        if($email == FALSE){
            $emailErr = "Please enter a valid email address.";
        }
    }
    
    // Validate message subject
    if(empty($_POST["subject"])){
        $subject = "";
    } else{
        $subject = filterString($_POST["subject"]);
    }
    
    // Validate user comment
    if(empty($_POST["message"])){
        $messageErr = "Please enter your comment.";     
    } else{
        $message = filterString($_POST["message"]);
        if($message == FALSE){
            $messageErr = "Please enter a valid comment.";
        }
    }
    
    // Check input errors before sending email
    if(empty($nameErr) && empty($emailErr) && empty($messageErr)){
        // Recipient email address
        $to = 'agrobusiness@info.com';
        
        // Create email headers
        $headers = 'From: '. $email . "\r\n" .
        'Reply-To: '. $email . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
        
        // Sending email
    }
        else{ ini_get(mail($to, $subject, $message, $headers));

            echo "success message";

        }
     
        
    
}


?>
 
 

    <section class="p-3">
    <div class="container">
        <div class="row text-center">
            <div class="col-md">
                <div class="bg-wheat text-dark">
<div class="card-body text-center">
    <div class="h1 mb-3">
        <em class="bi bi-laptop"></em>
    </div>
    <h3 class="card-title mb-3">
Contact details
    </h3>
    <p>	18 MZUMBE,<br/> MALENDA 93727, TANZANIA
			<br/><br/>
            Contact no : 88666 00555<br>
            Email: agrobusiness@info.com<br>
			﻿Tel 123-456-6780<br/>
			Fax 123-456-5679<br/>
			web:agrobusiness.com
</div>
</div>
  </div>

<div class="col-md">
    <div class="bg-white text-dark">
        <div class="card-body text-center">
            <div class="h1 mb-3">
                <em class="bi bi-person-square"></em>
            </div>
            <h3 class="card-title mb-3">
        Opening Hours
            </h3>
			<h5> Monday - Friday</h5>
			<p>09:00am - 09:00pm<br/><br/></p>
			<h5>Saturday</h5>
			<p>09:00am - 07:00pm<br/><br/></p>
			<h5>Sunday</h5>
			<p>12:30pm - 06:00pm<br/><br/></p>
        
        </div>
          </div>
</div>

 


<div class="col-md">
    <div class="bg-white text-dark">
        <div class="card-body text-center">
            <div class="h1 mb-3">
                <em class="bi bi-people"></em>
            </div>
            <h3 class="card-title mb-3">Email us  </h3>
            
            <form action="contact.php" method="post">
        <p>
            <label for="inputName">Username:<sup>*</sup></label>
            <input type="text" name="name" id="inputName" value=" ">
            <span class="error"><?php    ?></span>
        </p>
        <p>
            <label for="inputEmail">Email:<sup>*</sup></label>
            <input type="text" name="email" id="inputEmail" value="<?php echo $email; ?>">
            <span class="error"><?php echo $emailErr; ?></span>
        </p>
        <p>
            <label for="inputSubject">Subject:</label>
            <input type="text" name="subject" id="inputSubject" value="<?php echo $subject; ?>">
        </p>
        <p>
            <label for="inputComment">Message:<sup>*</sup></label>
            <textarea name="message" id="inputComment" rows="5" cols="30"><?php echo $message; ?></textarea>
            <span class="error"><?php echo $messageErr; ?></span>
        </p>

        <button class="btn btn-success">
         send
        </button>
        
        <button class="btn btn-info">  Reset</button>
        
    </form>
        
        </div>
          </div>
</div>

    </div>

</section>






    
    
      

    <?php
    
    include ('footer.php');
    
    ?>