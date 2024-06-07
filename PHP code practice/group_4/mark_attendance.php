<?php include 'base.php'; ?>

<main>
  <div class="container mt-5" style="max-width: 600px;">
    <div class="card">
      <div class="card-body">
        <h2 class="card-title text-center">Mark Attendance</h2>
        <form action="mark_attendance_process.php" method="POST" style="margin: 0 auto; padding: 0 20px;">
          <div class="mb-3">
            <label for="studentID" class="form-label">Student ID</label>
            <input type="text" class="form-control" id="studentID" name="studentID" required>
          </div>
          <div class="mb-3">
            <label for="courseID" class="form-label">Course ID</label>
            <input type="text" class="form-control" id="courseID" name="courseID" required>
          </div>
          <div class="mb-3">
            <label for="attendanceDate" class="form-label">Date</label>
            <input type="date" class="form-control" id="attendanceDate" name="attendanceDate" required>
          </div>
          <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select class="form-select" id="status" name="status" required>
              <option value="Present">Present</option>
              <option value="Absent">Absent</option>
            </select>
          </div>
          <button type="submit" class="btn btn-primary">Submit Attendance</button>
        </form>
      </div>
    </div>
  </div>
</main>

<?php include 'footer.php'; ?>
