<?php include 'base.php'; ?>

<main class="d-flex justify-content-center align-items-center vh-100">
  <div class="container mt-5">
    <h2 class="text-center">List of Student Enrollments</h2>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Enrollment ID</th>
          <th scope="col">Student ID</th>
          <th scope="col">Course ID</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php
        include 'db_connection.php';
        $stmt = $pdo->query("SELECT * FROM enrollments");
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
          echo "<tr>";
          echo "<td>" . $row['enrollmentID'] . "</td>";
          echo "<td>" . $row['studentID'] . "</td>";
          echo "<td>" . $row['courseID'] . "</td>";
          echo "<td><a href='unenroll_student.php?enrollmentID=" . $row['enrollmentID'] . "' class='btn btn-danger'>Unenroll</a></td>";
          echo "</tr>";
        }
        ?>
      </tbody>
    </table>
  </div>
</main>

<?php include 'footer.php'; ?>
