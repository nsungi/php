<?php
include 'db_connection.php';

// Check if enrollment ID is set and valid
if(isset($_GET["enrollmentID"]) && !empty(trim($_GET["enrollmentID"]))){
    // Delete enrollment record from the database
    $stmt = $pdo->prepare("DELETE FROM enrollments WHERE enrollmentID = ?");
    $stmt->execute([$_GET["enrollmentID"]]);
    echo "Student unenrolled successfully!";
} else {
    // Redirect to error page if enrollment ID parameter is missing
    header("location: error.php");
    exit();
}
?>
