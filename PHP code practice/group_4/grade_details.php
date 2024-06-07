<?php
include 'base.php';
include 'db_connection.php';

// Check if grade ID is set and valid
if(isset($_GET["gradeID"]) && !empty(trim($_GET["gradeID"]))){
    // Get grade details from the database
    $stmt = $pdo->prepare("SELECT * FROM grades WHERE gradeID = ?");
    $stmt->execute([$_GET["gradeID"]]);
    $grade = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if(!$grade){
        // Redirect to error page if grade not found
        header("location: error.php");
        exit();
    }
} else {
    // Redirect to error page if grade ID parameter is missing
    header("location: error.php");
    exit();
}
?>

<main class="d-flex justify-content-center align-items-center vh-100">
  <div class="container mt-5">
    <div class="card">
      <div class="card-body">
        <h2 class="card-title text-center">Grade Details</h2>
        <p class="card-text"><strong>Grade ID:</strong> <?php echo $grade['gradeID']; ?></p>
        <p class="card-text"><strong>Student ID:</strong> <?php echo $grade['studentID']; ?></p>
        <p class="card-text"><strong>Course ID:</strong> <?php echo $grade['courseID']; ?></p>
        <p class="card-text"><strong>Grade:</strong> <?php echo $grade['grade']; ?></p>
      </div>
    </div>
  </div>
</main>

<?php include 'footer.php'; ?>
