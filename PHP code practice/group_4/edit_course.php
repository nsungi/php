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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process form data when form is submitted
    $courseName = $_POST['courseName'];
    $credits = $_POST['credits'];

    // Update course information in the database
    $stmt = $pdo->prepare("UPDATE courses SET courseName = ?, credits = ? WHERE courseID = ?");
    $stmt->execute([$courseName, $credits, $_GET["courseID"]]);
    echo "Course information updated successfully!";
}
?>


<main class="d-flex justify-content-center align-items-center vh-100">
  <div class="container mt-5">
    <div class="card">
      <div class="card-body">
        <h2 class="card-title text-center">Edit Course Information</h2>
        <form action="edit_course.php?courseID=<?php echo $_GET["courseID"]; ?>" method="POST">
          <div class="mb-3">
            <label for="courseName" class="form-label">Course Name</label>
            <input type="text" class="form-control" id="courseName" name="courseName" value="<?php echo $course['courseName']; ?>" required>
          </div>
          <div class="mb-3">
            <label for="credits" class="form-label">Credits</label>
            <input type="number" class="form-control" id="credits" name="credits" value="<?php echo $course['credits']; ?>" required>
          </div>
          <button type="submit" class="btn btn-primary">Update Course</button>
        </form>
      </div>
    </div>
  </div>
</main>

<?php include 'footer.php'; ?>
