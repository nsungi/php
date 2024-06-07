
<?php
// Add the necessary PHP code to handle product registration

// Retrieve product categories from the database
$categories = []; // Placeholder, replace with actual retrieval code

// Handle form submission for product registration
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_POST['registerProduct'])) {
    // Product registration logic
    $name = $_POST['name'];
    $category = $_POST['category'];
    $stock = $_POST['stock'];
    $unit = $_POST['unit'];
    // Perform necessary validation and database insertion
    // ...
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Product Registration</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
     

    <!-- Product Registration Form -->
    <h2>Register Product</h2>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <div class

="form-group">
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
        <label for="stock">Stock:</label>
        <input type="number" name="stock" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="unit">Unit:</label>
        <input type="text" name="unit" class="form-control" required>
      </div>
      <button type="submit" name="registerProduct" class="btn btn-primary">Register Product</button>
    </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>