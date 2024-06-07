<?php include 'base.php'; ?>
<?php include 'db_connection.php';

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
        <h2 class="card-title text-center">Edit Department Information</h2>
        <form action="edit_department_process.php" method="POST">
          <input type="hidden" name="departmentID" value="<?php echo $department['departmentID']; ?>">
          <div class="mb-3">
            <label for="departmentName" class="form-label">Department Name</label>
            <input type="text" class="form-control" id="departmentName" name="departmentName" value="<?php echo $department['departmentName']; ?>" required>
          </div>
          <div class="mb-3">
            <label for="faculty" class="form-label">Faculty</label>
            <input type="text" class="form-control" id="faculty" name="faculty" value="<?php echo $department['faculty']; ?>" required>
          </div>
          <button type="submit" class="btn btn-primary">Update Department</button>
        </form>
      </div>
    </div>
  </div>
</main>

<?php include 'footer.php'; ?>
