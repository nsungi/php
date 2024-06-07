<?php
include 'base.php';
include 'db_connection.php';

// Check if attendance ID is set and valid
if(isset($_GET["attendanceID"]) && !empty(trim($_GET["attendanceID"]))){
    // Get attendance details from the database
    $stmt = $pdo->prepare("SELECT * FROM attendance WHERE attendanceID = ?");
    $stmt->execute([$_GET["attendanceID"]]);
    $attendance = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if(!$attendance){
        // Redirect to error page if attendance not found
        header("location: error.php");
        exit();
    }
} else {
    // Redirect to error page if attendance ID parameter is missing
    header("location: error.php");
    exit();
}
?>

<main class="d-flex justify-content-center align-items-center vh-100">
  <div class="container mt-5 ms-3"> <!-- Added ms-3 class for left margin -->
    <h2 class="text-center">Attendance Details</h2>
    <div class="card">
      <div class="card-body">
        <p><strong>Attendance ID:</strong> <?php echo $attendance['attendanceID']; ?></p>
        <p><strong>Student ID:</strong> <?php echo $attendance['studentID']; ?></p>
        <p><strong>Course ID:</strong> <?php echo $attendance['courseID']; ?></p>
        <p><strong>Date:</strong> <?php echo $attendance['attendanceDate']; ?></p>
        <p><strong>Status:</strong> <?php echo $attendance['status']; ?></p>
      </div>
    </div>
  </div>
</main>

<?php include 'footer.php'; ?>
