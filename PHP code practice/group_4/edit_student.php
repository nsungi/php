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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process form data when form is submitted
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $sex = $_POST['sex'];
    $programOfStudy = $_POST['programOfStudy'];

    // Update student information in the database
    $stmt = $pdo->prepare("UPDATE students SET firstName = ?, lastName = ?, sex = ?, programOfStudy = ? WHERE studentID = ?");
    $stmt->execute([$firstName, $lastName, $sex, $programOfStudy, $_GET["studentID"]]);
    echo "Student information updated successfully!";
    exit(); // Exit after echoing message to prevent further execution
}
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2 class="text-center mb-4">Edit Student Information</h2>
            <form action="edit_student.php?studentID=<?php echo $_GET["studentID"]; ?>" method="POST"> <!-- Adjust form action -->
                <div class="mb-3">
                    <label for="firstName" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="firstName" name="firstName" value="<?php echo htmlspecialchars($student['firstName']); ?>" required> <!-- Populate input value -->
                </div>
                <div class="mb-3">
                    <label for="lastName" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="lastName" name="lastName" value="<?php echo htmlspecialchars($student['lastName']); ?>" required> <!-- Populate input value -->
                </div>
                <div class="mb-3">
                    <label for="sex" class="form-label">Sex</label>
                    <select class="form-select" id="sex" name="sex" required>
                        <option value="M" <?php if($student['sex'] === 'M') echo 'selected'; ?>>Male</option> <!-- Select option if male -->
                        <option value="F" <?php if($student['sex'] === 'F') echo 'selected'; ?>>Female</option> <!-- Select option if female -->
                    </select>
                </div>
                <div class="mb-3">
                    <label for="programOfStudy" class="form-label">Program of Study</label>
                    <input type="text" class="form-control" id="programOfStudy" name="programOfStudy" value="<?php echo htmlspecialchars($student['programOfStudy']); ?>" required> <!-- Populate input value -->
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
