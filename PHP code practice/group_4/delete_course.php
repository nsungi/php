<?php
include 'db_connection.php';

// Check if course ID is set and valid
if(isset($_GET["courseID"]) && !empty(trim($_GET["courseID"]))){
    // Delete course record from the database
    $stmt = $pdo->prepare("DELETE FROM courses WHERE courseID = ?");
    $stmt->execute([$_GET["courseID"]]);
    echo "Course deleted successfully!";
} else {
    // Redirect to error page if course ID parameter is missing
    header("location: error.php");
    exit();
}
?>
