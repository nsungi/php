<?php
include 'db_connection.php';

// Check if grade ID is set and valid
if(isset($_GET["gradeID"]) && !empty(trim($_GET["gradeID"]))){
    // Delete grade record from the database
    $stmt = $pdo->prepare("DELETE FROM grades WHERE gradeID = ?");
    $stmt->execute([$_GET["gradeID"]]);
    echo "Grade deleted successfully!";
} else {
    // Redirect to error page if grade ID parameter is missing
    header("location: error.php");
    exit();
}
?>
