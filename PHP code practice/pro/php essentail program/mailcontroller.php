<?php
//function to filter user input

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
    $field = filter_var(trim($field), FILTER_SANITIZE_STRING);
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

    
    // Validate email address
    if(empty($_POST["email"])){
        $emailErr = "Please enter your email address.";     
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

// checks error message

if(empty($nameErr) && empty($emailErr) && empty($messageErr)){
        // Recipient email address
        $to = 'webmaster@example.com';
        
        // Check input errors before sending email
   
        $headers = 'From: '. $email . "\r\n" .
        'Reply-To: '. $email . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
        
        // Sending email
        if(mail($to, $subject, $message, $headers)){
            echo '<p class="success">Your message has been sent successfully!</p>';
        } else{
            echo '<p class="error">Unable to send email. Please try again!</p>';
        }
    }

}
?>


