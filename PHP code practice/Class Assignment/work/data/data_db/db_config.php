<?php
// Establish a database connection
    $servername = "localhost";
    $username = "admin";
    $password = "admin123";
    $dbname = "agro_business";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    ?>


