<?php
include 'base.php'; // Include the base file
include 'db_connection.php'; // Include the database connection file

// Check if student ID is set and valid
if(isset($_GET["studentID"]) && !empty(trim($_GET["studentID"]))){
    // Get student details from the database
    $stmt = $pdo->prepare("SELECT * FROM students WHERE studentID = ?");
    $stmt->execute([$_GET["studentID"]]);
    $student = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if(!$student){
        // Redirect to error page if student not found
        header("location: error.php");
        exit();
    }
} else {
    // Redirect to error page if student ID parameter is missing
    header("location: error.php");
    exit();
}
?>
<main class="d-flex justify-content-center align-items-center vh-100">
  <div class="container mt-5">
    <h2 class="text-center">Student Details</h2>
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">John Doe</h5>
        <p class="card-text">Student ID: 1</p>
        <p class="card-text">Sex: Male</p>
        <p class="card-text">Program of Study: Computer Science</p>
      </div>
    </div>
  </div>
</main>

<?php include 'footer.php'; ?>