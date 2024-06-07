<?php
include 'db_connection.php';

// Check if department ID is set and valid
if(isset($_GET["departmentID"]) && !empty(trim($_GET["departmentID"]))){
    // Delete department record from the database
    $stmt = $pdo->prepare("DELETE FROM departments WHERE departmentID = ?");
    $stmt->execute([$_GET["departmentID"]]);
    echo "Department deleted successfully!";
} else {
    // Redirect to error page if department ID parameter is missing
    header("location: error.php");
    exit();
}
?>
