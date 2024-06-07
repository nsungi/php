<?php include 'base.php'; ?>

<style>
  .container {
    margin-top: 100px; /* Adjust the top margin as needed */
    margin-bottom: 100px; /* Adjust the bottom margin as needed */
    display: flex;
    justify-content: center;
    align-items: center;
  }
</style>

<main>
  <div class="container">
    <div class="col-md-6">
      <h2 class="text-center mb-4">Add New Course</h2>
      <form action="add_course_process.php" method="POST">
        <div class="mb-3">
          <label for="courseName" class="form-label">Course Name</label>
          <input type="text" class="form-control" id="courseName" name="courseName" required>
        </div>
        <div class="mb-3">
          <label for="credits" class="form-label">Credits</label>
          <input type="number" class="form-control" id="credits" name="credits" required>
        </div>
        <div class="d-grid">
          <button type="submit" class="btn btn-primary">Add Course</button>
        </div>
      </form>
    </div>
  </div>
</main>

<?php include 'footer.php'; ?>
