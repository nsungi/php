<?php include 'base.php'; ?>

<main>
  <div class="container mt-5">
    <h2 class="text-center">View Attendance Records</h2>
    <div class="row justify-content-center">
      <div class="col-md-8">
        <table class="table ms-3"> <!-- Added ms-3 class for left margin -->
          <thead>
            <tr>
              <th scope="col">Student ID</th>
              <th scope="col">Course ID</th>
              <th scope="col">Date</th>
              <th scope="col">Status</th>
            </tr>
          </thead>
          <tbody>
            <?php
            include 'db_connection.php';
            $stmt = $pdo->query("SELECT * FROM attendance");
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
              echo "<tr>";
              echo "<td>" . $row['studentID'] . "</td>";
              echo "<td>" . $row['courseID'] . "</td>";
              echo "<td>" . $row['attendanceDate'] . "</td>";
              echo "<td>" . $row['status'] . "</td>";
              echo "</tr>";
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</main>

<?php include 'footer.php'; ?>
