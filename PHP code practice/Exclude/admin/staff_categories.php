
<?php
// Add the necessary PHP code to handle staff categories management

// Retrieve staff categories from the database
$categories = []; // Placeholder, replace with actual retrieval code

// Handle form submission for staff category management
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_POST['addCategory'])) {
    // Add category logic
    $categoryName = $_POST['categoryName'];
    // Perform necessary validation and database insertion
    // ...
  } elseif (isset($_POST['deleteCategory'])) {
    // Delete category logic
    $categoryId = $_POST['categoryId'];
    // Perform necessary validation and database deletion
    // ...
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Staff Categories Management</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
   

    <!-- Add Category Form -->
    <h2>Add Category</h2>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <div class="form-group">
        <label for="categoryName">Category Name:</label>
        <input type="text" name="categoryName" class="form-control" required>
      </div>
      <button type="submit" name="addCategory" class="btn btn-primary">Add Category</button>
    </form>

    <!-- Categories List -->
    <h2>Categories List</h2>
    <ul>
      <?php foreach ($categories as $category) : ?>
      <li>
        <?php echo $category['name']; ?>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" style

="display: inline;">
          <input type="hidden" name="categoryId" value="<?php echo $category['id']; ?>">
          <button type="submit" name="deleteCategory" class="btn btn-danger btn-sm">Delete</button>
        </form>
      </li>
      <?php endforeach; ?>
    </ul>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>