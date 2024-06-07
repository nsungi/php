<?php
include 'base.php'; // Assuming you have a base.php file for the layout

// Check if error message is set in the URL
if(isset($_GET['error_message'])) {
    $errorMessage = $_GET['error_message'];
} else {
    $errorMessage = "An error occurred."; // Default error message
}
?>

<!-- Error Page Content -->
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-body text-center">
                    <h2 class="card-title mb-4">Error</h2>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $errorMessage; ?>
                    </div>
                    <a href="base.php" class="btn btn-primary">Go Back to Home</a>
                </div>
            </div>
        </div>
    </div>
</div>
