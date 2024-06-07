<?php include 'base.php'; ?>

<main class="vh-100 d-flex justify-content-center align-items-center">
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-lg-6"> <!-- Adjusted column size -->
        <h2 class="text-center mb-4">Add New Department</h2>
        <form action="add_department_process.php" method="POST">
          <div class="mb-3">
            <label for="departmentName" class="form-label">Department Name</label>
            <input type="text" class="form-control" id="departmentName" name="departmentName" required>
          </div>
          <div class="mb-3">
            <label for="faculty" class="form-label">Faculty</label>
            <input type="text" class="form-control" id="faculty" name="faculty" required>
          </div>
          <button type="submit" class="btn btn-primary">Add Department</button>
        </form>
      </div>
    </div>
  </div>
</main>

<?php include 'footer.php'; ?>
