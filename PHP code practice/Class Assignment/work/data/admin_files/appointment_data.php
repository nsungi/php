



<?php
  
// Function to generate the appointments  
function generateAppointments($date)
{
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

    // Fetch the appointments for the given date from the database
    $sql = "SELECT * FROM tb_appointments WHERE date = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $date);
    $stmt->execute();
    $result = $stmt->get_result();
 
   
    $html = "<h1>Appointments for $date</h1>";

    if ($result->num_rows > 0) {
        $html .= "<table>";
        $html .= "<tr><th> Time</th></tr>";
        while ($row = $result->fetch_assoc()) {
            $Time = $row['time'];
            $html .= "<tr><td>$Time</td></tr>";
        }
        $html .= "</table>";
    } else {
        $html .= "<p>No appointments available for this date.</p>";
    }
 
    // Close the database connection
    $stmt->close();
    $conn->close();
}
 
// Check if a date is provided in the URL parameter
if (!isset($_GET['date'])) {
    echo "Invalid date.";
    exit;
}

$date = $_GET['date'];

// Call the function to generate the appointments date
generateAppointments($date);
?>
