<?php include 'base.php'; ?>

<main class="d-flex justify-content-center align-items-center vh-100">
  <div class="container mt-5">
    <h2 class="text-center">List of Departments</h2>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Department ID</th>
          <th scope="col">Department Name</th>
          <th scope="col">Faculty</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php
        include 'db_connection.php';
        $stmt = $pdo->query("SELECT * FROM departments");
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
          echo "<tr>";
          echo "<td>" . $row['departmentID'] . "</td>";
          echo "<td>" . $row['departmentName'] . "</td>";
          echo "<td>" . $row['faculty'] . "</td>";
          echo "<td><a href='delete_department.php?departmentID=" . $row['departmentID'] . "' class='btn btn-danger'>Delete</a></td>";
          echo "</tr>";
        }
        ?>
      </tbody>
    </table>
  </div>
</main>

<?php include 'footer.php'; ?>
