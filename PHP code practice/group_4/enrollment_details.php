<?php
include 'base.php';
include 'db_connection.php';

// Check if enrollment ID is set and valid
if(isset($_GET["enrollmentID"]) && !empty(trim($_GET["enrollmentID"]))){
    // Get enrollment details from the database
    $stmt = $pdo->prepare("SELECT * FROM enrollments WHERE enrollmentID = ?");
    $stmt->execute([$_GET["enrollmentID"]]);
    $enrollment = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if(!$enrollment){
        // Redirect to error page if enrollment not found
        header("location: error.php");
        exit();
    }
} else {
    // Redirect to error page if enrollment ID parameter is missing
    header("location: error.php");
    exit();
}
?>

<main class="d-flex justify-content-center align-items-center vh-100">
  <div class="container mt-5 col-md-6"> <!-- Reduced container size by using col-md-6 -->
    <div class="card">
      <div class="card-body">
        <h2 class="card-title text-center">Enrollment Details</h2>
        <p class="card-text"><strong>Enrollment ID:</strong> <?php echo $enrollment['enrollmentID']; ?></p>
        <p class="card-text"><strong>Student ID:</strong> <?php echo $enrollment['studentID']; ?></p>
        <p class="card-text"><strong>Course ID:</strong> <?php echo $enrollment['courseID']; ?></p>
      </div>
    </div>
  </div>
</main>

<?php include 'footer.php'; ?>
