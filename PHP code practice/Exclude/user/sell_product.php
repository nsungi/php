

<?php
session_start();

// Check if the user is authorized to sell products (manager or cashier)
function isAuthorizedToSell() {
    // Replace this with your own logic to check user authorization
    $authorizedRoles = array('manager', 'cashier');
    $userRole = $_SESSION['user_role'];

    return in_array($userRole, $authorizedRoles);
}

// Check if the user is authorized to sell
if (!isAuthorizedToSell()) {
    echo "You are not authorized to sell products.";
    exit();
}

// Add product to cart
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $productId = $_POST['product_id'];
    $quantity = $_POST['quantity'];


    // Function to retrieve product details from the database
    function getProductDetails($productId) {
        // Replace 'your_db_host', 'your_db_user', 'your_db_password', and 'your_db_name' with your actual database credentials
        $conn = mysqli_connect('your_db_host', 'your_db_user', 'your_db_password', 'your_db_name');
    
        if (!$conn) {
            die('Database connection error: ' . mysqli_connect_error());
        }
    
        // Query to retrieve product details based on the product ID
        $query = "SELECT * FROM products WHERE id = $productId";
        $result = mysqli_query($conn, $query);
    
        if (!$result) {
            die('Database query error: ' . mysqli_error($conn));
        }
    
        // Fetch the product details
        $product = mysqli_fetch_assoc($result);
    
        // Close the database connection
        mysqli_close($conn);
    
        return $product;
    }
    
    // to retrieve and display product details
    $productId = 1;
    $product = getProductDetails($productId);
    
    echo 'Product ID: ' . $product['id'] . "<br>";
    echo 'Product Name: ' . $product['name'] . "<br>";
    echo 'Product Price: $' . $product['price'] . "<br>";

    


    //  to retrieve product details
    $productDetails = array('id' => $productId, 'name' => 'Product', 'price' => 10);

    // Add product to cart with quantity and price
    $_SESSION['cart'][] = array(
        'id' => $productDetails['id'],
        'name' => $productDetails['name'],
        'quantity' => $quantity,
        'price' => $productDetails['price']
    );

    echo "Product added to cart.";
}

// Calculate the total price and grand total
function calculateTotal() {
    $cart = $_SESSION['cart'];
    $total = 0;

    foreach ($cart as $item) {
        $total += $item['price'] * $item['quantity'];
    }

    return $total;
}

//   grand total
$totalPrice = calculateTotal();
echo "Total Price: $" . $totalPrice . "<br>";
?>
