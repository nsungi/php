
<?php
require 'db_connect.php';

// Delete a category from the database
function deleteCategory($categoryId) {
    global $conn;

    $query = "DELETE FROM categories WHERE id=$categoryId";
    $result = mysqli_query($conn, $query);

    if ($result) {
        return true; // Category deleted successfully
    } else {
        return false; // Failed to delete category
    }
}

// Example usage to delete a category
$categoryId = 1;

if (deleteCategory($categoryId)) {
    echo "Category deleted successfully.";
} else {
    echo "Failed to delete category.";
}
?>
