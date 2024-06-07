<?php
include 'base.php'; // Include the base file
include 'db_connection.php'; // Include the database connection file

// Check if student ID is set and valid
if(isset($_GET["studentID"]) && !empty(trim($_GET["studentID"]))){
    // Delete student from the database
    $stmt = $pdo->prepare("DELETE FROM students WHERE studentID = ?");
    $stmt->execute([$_GET["studentID"]]);
    echo "Student deleted successfully!";
} else {
    // Redirect to error page if student ID parameter is missing
    header("location: error.php");
    exit();
}
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title text-center">Delete Student Record</h2>
                    <p class="card-text">Are you sure you want to delete the student record for John Doe?</p>
                    <form action="delete_student_process.php" method="POST">
                        <div class="d-grid">
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include 'footer.php'; ?>