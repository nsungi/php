

<?php


// connect to database

$conn = mysqli_connect ('localhost', 'hanson', 'hanson123', 'mzb_pizza');

// checking connection
if (!$conn){
    echo 'Connection error:' . mysqli_connect_error();
}

?>