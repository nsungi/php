<?php include 'base.php'; ?>

<main class="d-flex justify-content-center align-items-center vh-100">
  <div class="container mt-5 col-md-6"> <!-- Reduced container size by using col-md-6 -->
    <h2 class="text-center mb-4">Add New Grade</h2>
    <form action="add_grade_process.php" method="POST">
      <div class="mb-3">
        <label for="studentID" class="form-label">Student ID</label>
        <input type="number" class="form-control" id="studentID" name="studentID" required>
      </div>
      <div class="mb-3">
        <label for="courseID" class="form-label">Course ID</label>
        <input type="number" class="form-control" id="courseID" name="courseID" required>
      </div>
      <div class="mb-3">
        <label for="grade" class="form-label">Grade</label>
        <input type="text" class="form-control" id="grade" name="grade" required>
      </div>
      <button type="submit" class="btn btn-primary">Add Grade</button>
    </form>
  </div>
</main>

<?php include 'footer.php'; ?>
