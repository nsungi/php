
<?php
// Retrieve products from the database
function getProducts() {
    // Replace this with your own logic to retrieve products from the database
    $products = array(
        array('id' => 1, 'name' => 'Product 1', 'price' => 10),
        array('id' => 2, 'name' => 'Product 2', 'price' => 15),
        array('id' => 3, 'name' => 'Product 3', 'price' => 20),
    );

    return $products;
}

// Example usage to display products
$products = getProducts();
foreach ($products as $product) {
    echo $product['name'] . ' - $' . $product['price'] . "<br>";
}
?>
