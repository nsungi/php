<?php
include 'base.php'; // Include the base file
include 'db_connection.php'; // Include the database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process form data when form is submitted
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $sex = $_POST['sex'];
    $programOfStudy = $_POST['programOfStudy'];

    // Insert new student into the database
    $stmt = $pdo->prepare("INSERT INTO students (firstName, lastName, sex, programOfStudy) VALUES (?, ?, ?, ?)");
    $stmt->execute([$firstName, $lastName, $sex, $programOfStudy]);
    echo "Student added successfully!";
}
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2 class="text-center mb-4">Add New Student</h2>
            <form action="student_detail.php" method="POST">
                <div class="mb-3">
                    <label for="firstName" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="firstName" name="firstName" required>
                </div>
                <div class="mb-3">
                    <label for="lastName" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="lastName" name="lastName" required>
                </div>
                <div class="mb-3">
                    <label for="sex" class="form-label">Sex</label>
                    <select class="form-select" id="sex" name="sex" required>
                        <option value="M">Male</option>
                        <option value="F">Female</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="programOfStudy" class="form-label">Program of Study</label>
                    <input type="text" class="form-control" id="programOfStudy" name="programOfStudy" required>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>


<?php include 'footer.php'; ?>
