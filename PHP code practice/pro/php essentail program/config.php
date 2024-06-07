<?php
    
if(isset($_POST['submit'])){
 
    $firstname    =$_POST['firstname'];
    $lastname     =$_POST['lastname'];
    $email        =$_POST['email'];
    $phonenumber  =$_POST['phonenumber'];
    $password     =sha1($_POST['password']);
    $gender       =$_POST['gender'];
     


//database connection
 
$db_host = "localhost";
$db_user = "mzumbe";
$db_pass = "12345";
$db_name   ="Changarawe";

// Create connection
$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{

  $stmt = $conn->prepare("insert into applicants(firstname, lastname, email, phonenumber, password, gender) 
  values(?, ?, ?, ?, ?, ?)");

  $stmt-> bind_param("ssssss", $firstname, $lastname, $email, $phonenumber, $password, $gender);
  $stmt-> execute();

  
    echo "registration successfully.............";
  

  $stmt->close();
  $conn->close();

}
}
?>