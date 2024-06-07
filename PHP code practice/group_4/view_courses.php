<?php include 'base.php'; ?>

<main class="d-flex justify-content-center align-items-center vh-100">
  <div class="container mt-5">
    <h2 class="text-center">List of Courses</h2>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Course ID</th>
          <th scope="col">Course Name</th>
          <th scope="col">Credits</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php
        include 'db_connection.php';
        $stmt = $pdo->query("SELECT * FROM courses");
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
          echo "<tr>";
          echo "<td>" . $row['courseID'] . "</td>";
          echo "<td>" . $row['courseName'] . "</td>";
          echo "<td>" . $row['credits'] . "</td>";
          echo "<td><a href='edit_course.php?courseID=" . $row['courseID'] . "' class='btn btn-primary'>Edit</a> <a href='delete_course.php?courseID=" . $row['courseID'] . "' class='btn btn-danger'>Delete</a></td>";
          echo "</tr>";
        }
        ?>
      </tbody>
    </table>
  </div>
</main>

<?php include 'footer.php'; ?>
