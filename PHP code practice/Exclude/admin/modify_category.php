
<?php
require 'db_connect.php';

// Update an existing category in the database
function updateCategory($categoryId, $name) {
    global $conn;

    $query = "UPDATE categories SET name='$name' WHERE id=$categoryId";
    $result = mysqli_query($conn, $query);

    if ($result) {
        return true; // Category updated successfully
    } else {
        return false; // Failed to update category
    }
}

// Example usage to update a category
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $categoryId = $_POST['category_id'];
    $name = $_POST['name'];

    if (updateCategory($categoryId, $name)) {
        echo "Category updated successfully.";
    } else {
        echo "Failed to update category.";
    }
}
?>

<!-- HTML form to update a category -->
<form method="post" action="">
    <input type="hidden" name="category_id" value="1">
    <input type="text" name="name" placeholder="Category Name">
    <input type="submit" value="Update Category">
</form>
