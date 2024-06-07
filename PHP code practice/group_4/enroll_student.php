<?php include 'base.php'; ?>

<main class="d-flex justify-content-center align-items-center vh-100">
  <div class="container mt-5 col-md-6"> <!-- Reduced form size by using col-md-6 -->
    <div class="card">
      <div class="card-body">
        <h2 class="card-title text-center">Enroll Student in Course</h2>
        <form action="enroll_student_process.php" method="POST">
          <div class="mb-3">
            <label for="studentID" class="form-label">Student ID</label>
            <input type="number" class="form-control" id="studentID" name="studentID" required>
          </div>
          <div class="mb-3">
            <label for="courseID" class="form-label">Course ID</label>
            <input type="number" class="form-control" id="courseID" name="courseID" required>
          </div>
          <button type="submit" class="btn btn-primary">Enroll Student</button>
        </form>
      </div>
    </div>
  </div>
</main>

<?php include 'footer.php'; ?>
