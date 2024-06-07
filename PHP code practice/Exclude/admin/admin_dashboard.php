

<!DOCTYPE html>
<html>
<head>
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/admin.css">
  <style>
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-info bg-light">
    <a class="navbar-brand" href="#">Open</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

        <a class="nav-link" href="staff_registration.php">Staff Registration</a>

        <a class="nav-link" href="staff_categories.php">Staff Categories</a>

          <a class="nav-link" href="categories.php">Categories</a>
         

          <a class="nav-link" href="product_registration.php">Product</a>

          <a class="nav-link" href="units.php">Units</a>
         
          <a class="nav-link" href="stock.php">Stock</a>
          
          <a class="nav-link" href="stock_update.php">Stock Update</a>
        
    </div>

    <div id="main">
  <span style="font-size:20px;cursor:pointer" onclick="openNav()">&#9776; Admin  dashboard</span>
  
     <a class="mx-5 p-8 ">welcome admin</a>
     <a href="" class="mx-4 ">Logout</a>
    
  
</div>
  </nav>

  <div class="container">
    <!-- Dashboard content goes here -->
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="../assets/js/admin.js"></script>
</body>
</html>