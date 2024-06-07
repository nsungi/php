<?php
include 'base.php';
include 'db_connection.php';

// Check if department ID is set and valid
if(isset($_GET["departmentID"]) && !empty(trim($_GET["departmentID"]))){
    // Get department details from the database
    $stmt = $pdo->prepare("SELECT * FROM departments WHERE departmentID = ?");
    $stmt->execute([$_GET["departmentID"]]);
    $department = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if(!$department){
        // Redirect to error page if department not found
        header("location: error.php");
        exit();
    }
} else {
    // Redirect to error page if department ID parameter is missing
    header("location: error.php");
    exit();
}
?>


<main class="d-flex justify-content-center align-items-center vh-100">
  <div class="container mt-5">
    <div class="card">
      <div class="card-body">
        <h2 class="card-title text-center">Department Details</h2>
        <p><strong>Department ID:</strong> <?php echo $department['departmentID']; ?></p>
        <p><strong>Department Name:</strong> <?php echo $department['departmentName']; ?></p>
        <p><strong>Faculty:</strong> <?php echo $department['faculty']; ?></p>
      </div>
    </div>
  </div>
</main>


<?php include 'footer.php'; ?>
