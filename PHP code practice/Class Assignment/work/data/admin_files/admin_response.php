



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

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $feedbackId = $_POST['feedback_id'];
    $response = $_POST['response'];

    // Prepare and execute the SQL statement to update the feedback with the response
    $sql = "UPDATE feedback SET response = ? WHERE id = ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $response, $feedbackId);

    if ($stmt->execute()) {
        echo "Response submitted successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the database connection
    $stmt->close();
    $conn->close();
    exit;
}

// Retrieve the feedback ID from the URL parameter
if (!isset($_GET['id'])) {
    echo "Invalid feedback ID.";
    exit;
}

$feedbackId = $_GET['id'];

// Retrieve the feedback details from the database
$sql = "SELECT * FROM feedback WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $feedbackId);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $row = $result->fetch_assoc();
    $name = $row['name'];
    $email = $row['email'];
    $message = $row['message'];

    // Display  the feedback details and the response form

    echo "<h2>Response to Feedback</h2>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Message:</strong> $message</p>";

    echo "<form action='response.php' method='POST'>";
    echo "<input type='hidden' name='feedback_id' value='$feedbackId'>";
    echo "<label for='response'>Response:</label><br>";
    echo "<textarea name='response' id='response' rows='5' cols='30' required></textarea><br>";
    echo "<input type='submit' value='Submit Response'>";
    echo "</form>";
} else {
    echo "Feedback does not found, please try again later!";
}

// Close the database connection
$stmt->close();
$conn->close();
?>
