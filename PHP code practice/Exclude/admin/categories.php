
<?php
 
require '../data config/db_connect.php';

// Retrieve categories from the database
function getCategories() {
    global $conn;

    $query = "SELECT * FROM categories";
    $result = mysqli_query($conn, $query);

    $categories =array();

    while ($row = mysqli_fetch_assoc($result)) {
        $categories[] = $row;
    }

    return $categories;
}

// Example usage to display categories
$categories = getCategories();
foreach ($categories as $category) {
    echo $category['name'] . "<br>";
}

 

// Handle form submission for adding/editing categories
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_POST['addCategory'])) {
    // Add category logic
    $categoryName = $_POST['categoryName'];
    // Perform necessary validation and database insertion
function addCategory($name) {
    global $conn;

    $query = "INSERT INTO categories (name) VALUES ('$name')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        return true; // Category added successfully
    } else {
        return false; // Failed to add category
    }
}


    // ...
  } elseif (isset($_POST['modifyCategory'])) {
    // Edit category logic
    $categoryId = $_POST['categoryId'];
    $categoryName = $_POST['categoryName'];
    // Perform necessary validation and database update
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'];
    
        if (addCategory($name)) {
            echo "Category added successfully.";
        } else {
            echo "Failed to add category.";
        }
    }
    // ...
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Category Management</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h1>Category Management</h1>

    <!-- Add Category Form -->
    <h2>Add Category</h2>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <div class="form-group">
        <label for="categoryName">Category Name:</label>
        <input type="text" name="categoryName" class="form-control" required>
      </div>
      <button type="submit" name="addCategory" class="btn btn-primary">Add Category</button>
    </form>

    <!-- Category List -->
    <h2>Categories</h2>
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($categories as $category) : ?>
        <tr>
          <td><?php echo $category['id']; ?></td>
          <td><?php echo $category['name']; ?></td>
          <td>
            <a href="modify_category.php" class="btn btn-primary">Modify</a>
            <a href="delete_category.php" class="btn btn-danger">Delete</a>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
