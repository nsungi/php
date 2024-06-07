
<?php
// Add the necessary PHP code to handle staff registration

// Retrieve staff categories from the database
$categories = []; // Placeholder, replace with actual retrieval code

// Handle form submission for staff registration
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_POST['registerStaff'])) {
    // Staff registration logic
    $name = $_POST['name'];
    $category = $_POST['category'];
    $photo = $_FILES['photo']['name'];
    // Perform necessary validation, file upload, and database insertion
    // ...
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Staff Registration</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
  <div class="container">

    <!-- Staff Registration Form -->
    <h2>Register Staff</h2>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" name="name" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="category">Category:</label>
        <select name="category" class="form-control" required>
          <option value="">Select a category</option>
          <?php foreach ($categories as $category) : ?>
            <option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
          <?php endforeach; ?>
        </select>
      </div>
      <div class="form-group">
        <label for="photo">Photo:</label>
        <input type="file" name="photo" class="form-control-file" required>
      </div>
      <button type="submit" name="registerStaff" class="btn btn-primary">Register Staff</button>
    </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>