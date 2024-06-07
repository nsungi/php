<?php
include 'base.php';
include 'db_connection.php';

// Check if course ID is set and valid
if(isset($_GET["courseID"]) && !empty(trim($_GET["courseID"]))){
    // Get course details from the database
    $stmt = $pdo->prepare("SELECT * FROM courses WHERE courseID = ?");
    $stmt->execute([$_GET["courseID"]]);
    $course = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if(!$course){
        // Redirect to error page if course not found
        header("location: error.php");
        exit();
    }
} else {
    // Redirect to error page if course ID parameter is missing
    header("location: error.php");
    exit();
}
?>

<main class="d-flex justify-content-center align-items-center vh-100">
  <div class="container mt-5">
    <div class="card">
      <div class="card-body">
        <h2 class="card-title text-center">Course Details</h2>
        <p><strong>Course ID:</strong> <?php echo $course['courseID']; ?></p>
        <p><strong>Course Name:</strong> <?php echo $course['courseName']; ?></p>
        <p><strong>Credits:</strong> <?php echo $course['credits']; ?></p>
      </div>
    </div>
  </div>
</main>
<?php include 'footer.php'; ?>
