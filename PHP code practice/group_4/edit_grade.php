<?php include 'base.php'; ?>
<?php include 'db_connection.php';

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
        <h2 class="card-title text-center">Edit Grade Information</h2>
        <form action="edit_grade_process.php" method="POST">
          <input type="hidden" name="gradeID" value="<?php echo $grade['gradeID']; ?>">
          <div class="mb-3">
            <label for="studentID" class="form-label">Student ID</label>
            <input type="number" class="form-control" id="studentID" name="studentID" value="<?php echo $grade['studentID']; ?>" required>
          </div>
          <div class="mb-3">
            <label for="courseID" class="form-label">Course ID</label>
            <input type="number" class="form-control" id="courseID" name="courseID" value="<?php echo $grade['courseID']; ?>" required>
          </div>
          <div class="mb-3">
            <label for="grade" class="form-label">Grade</label>
            <input type="text" class="form-control" id="grade" name="grade" value="<?php echo $grade['grade']; ?>" required>
          </div>
          <button type="submit" class="btn btn-primary">Update Grade</button>
        </form>
      </div>
    </div>
  </div>
</main>

<?php include 'footer.php'; ?>
